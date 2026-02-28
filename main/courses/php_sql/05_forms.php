<h1>Working with Forms (GET & POST)</h1>
<p>Forms are the primary way users interact with your web application—whether they are logging in, posting a comment, or searching for products. PHP makes it easy to process this data using its superglobal arrays.</p>

<h2>The Two Methods: GET vs POST</h2>
<p>When you define an HTML <code>&lt;form&gt;</code>, you must choose a <strong>method</strong>. This determines how the data is sent to the PHP script on the server.</p>

<table>
    <thead>
        <tr>
            <th>Method</th>
            <th>How it works</th>
            <th>Use Case</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>GET</strong></td>
            <td>Data is appended to the URL (e.g., <code>?q=search&id=5</code>).</td>
            <td>Search results, filters, bookmarks.</td>
        </tr>
        <tr>
            <td><strong>POST</strong></td>
            <td>Data is sent in the body of the HTTP request. Invisible in the URL.</td>
            <td>Passwords, credit cards, large files, database updates.</td>
        </tr>
    </tbody>
</table>

<h2>Handling POST Data</h2>
<p>The <code>$_POST</code> array contains key-value pairs where the "key" is the <strong>name</strong> attribute of your HTML input.</p>

<pre><code class="language-html">&lt;!-- simple_form.html --&gt;
&lt;form method="POST" action="process.php"&gt;
  &lt;label&gt;Username:&lt;/label&gt;
  &lt;input type="text" name="user_login"&gt;
  &lt;button type="submit"&gt;Join Now&lt;/button&gt;
&lt;/form&gt;</code></pre>

<pre><code class="language-php">&lt;?php
  // process.php
  $user = $_POST["user_login"];
  echo "Welcome, " . $user;
?&gt;</code></pre>

<h2>The Danger: Cross-Site Scripting (XSS)</h2>
<p>Never ever output user data directly to the screen. An attacker could enter <code>&lt;script&gt;alert('Hacked!');&lt;/script&gt;</code> into your form, which would execute in the browser of anyone who views the page.</p>

<h3>The Solution: Data Sanitization</h3>
<p>Always use <code>htmlspecialchars()</code> to convert special characters into HTML entities (e.g., <code>&lt;</code> becomes <code>&amp;lt;</code>).</p>

<pre><code class="language-php">&lt;?php
  // SAFE WAY
  $user = htmlspecialchars($_POST["user_login"]);
  echo "Welcome, " . $user;
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Security Mantra:</strong> "Filter Input, Escape Output." Always assume all data coming from a form is malicious until you've sanitized it.
</div>

<h2>Validating Data</h2>
<p>Besides sanitizing (cleaning), you must also <strong>validate</strong> that the data meets your requirements (e.g., is the email a real email?).</p>

<pre><code class="language-php">&lt;?php
  $email = $_POST["email"];
  
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Valid email address.";
  } else {
      echo "Invalid email address.";
  }
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Tip:</strong> Combining PHP validation with HTML5 attributes like <code>required</code> or <code>type="email"</code> provides the best user experience and double-layered security.
</div>
