<h1>Prepared Statements and Security</h1>
<p>If you learn only one thing from this course, make it this: <strong>Never put raw user variables into an SQL string.</strong> Doing so creates a vulnerability called <strong>SQL Injection</strong>, allowing attackers to bypass logins, steal data, or delete your entire database.</p>

<h2>What is SQL Injection?</h2>
<p>Imagine a login query: <code>"SELECT * FROM users WHERE email = '$user_email'"</code>. If an attacker enters <code>' OR 1=1 --</code> as their email, the query becomes:</p>
<pre><code class="language-sql">SELECT * FROM users WHERE email = '' OR 1=1 --'</code></pre>
<p>Because <code>1=1</code> is always true, the database will return every single user, usually logging the attacker into the first account in the database (the Admin).</p>

<h2>The Solution: Prepared Statements</h2>
<p>Prepared statements separate the <strong>SQL command</strong> from the <strong>Data</strong>. The database receives the command template first, and then the data is sent separately. The database engine treats the data as plain text, never as part of the SQL command.</p>

<h3>How to use Prepared Statements (PDO)</h3>
<p>There are two types of placeholders you can use: <strong>Positional</strong> (<code>?</code>) and <strong>Named</strong> (<code>:name</code>). Named placeholders are recommended for readability.</p>

<pre><code class="language-php">&lt;?php
  // 1. Prepare the template (no user data yet!)
  $sql = "SELECT id, name FROM users WHERE email = :email AND status = :status";
  $stmt = $pdo->prepare($sql);

  // 2. Bind the data and Execute
  $stmt->execute([
      'email'  => $_POST['email'],
      'status' => 'active'
  ]);

  // 3. Fetch the result
  $user = $stmt->fetch();
?&gt;</code></pre>

<h2>Why This is 100% Secure</h2>
<p>In the example above, even if the user enters <code>' OR 1=1 --</code>, the database looks for a user whose email <strong>literally equals</strong> that entire string. It never executes the <code>OR 1=1</code> part.</p>

<div class="alert alert-info">
    <strong>Benefits:</strong>
    <ul>
        <li><strong>Security:</strong> Stops SQL Injection dead in its tracks.</li>
        <li><strong>Speed:</strong> If you run the same query many times with different data, the database only has to "parse" the command once.</li>
    </ul>
</div>

<h2>Security Checklist</h2>
<ul>
    <li>[ ] Are you using <code>prepare()</code> and <code>execute()</code> for every query with variables?</li>
    <li>[ ] Have you turned off <code>ATTR_EMULATE_PREPARES</code> in your PDO connection?</li>
    <li>[ ] Are you using strong passwords and limited user permissions?</li>
</ul>

<div class="alert alert-warning">
    <strong>Fatal Mistake:</strong> Do NOT do this: <code>$pdo->prepare("SELECT * FROM users WHERE id = " . $_GET['id']);</code>. Concatenating variables into the <code>prepare()</code> call defeats the entire purpose of the security measure!
</div>
