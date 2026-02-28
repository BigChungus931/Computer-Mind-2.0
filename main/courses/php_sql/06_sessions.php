<h1>Session Management and Cookies</h1>
<p>Since the HTTP protocol is <strong>stateless</strong>, the server has no memory of a user from one page request to the next. Sessions and Cookies are the two mechanisms PHP uses to "remember" users, allowing for logins, shopping carts, and personalization.</p>

<h2>What is a PHP Session?</h2>
<p>A session creates a temporary file in a directory on the server where all session variables and their values are stored. This data is available to all pages in one website visit. Because the data stays on the server, it is more secure than cookies.</p>

<h3>Starting a Session</h3>
<p>The <code>session_start()</code> function must be called at the very top of your PHP file, before <strong>any</strong> HTML tags or whitespace.</p>

<pre><code class="language-php">&lt;?php
  session_start();
  
  // Storing data
  $_SESSION["username"] = "dev_achilles";
  $_SESSION["login_time"] = time();
  
  echo "Session has been started and variables are set.";
?&gt;</code></pre>

<h3>Accessing and Destroying Sessions</h3>
<pre><code class="language-php">&lt;?php
  session_start();
  
  // Use data
  echo "Welcome back, " . $_SESSION["username"];

  // Remove specific variable
  unset($_SESSION["login_time"]);

  // Destroy the entire session (log out)
  session_destroy(); 
?&gt;</code></pre>

<h2>PHP Cookies</h2>
<p>A cookie is a small piece of data stored on the <strong>user's computer</strong>. It persists even after the browser is closed (depending on its expiration date).</p>

<h3>Setting a Cookie</h3>
<pre><code class="language-php">&lt;?php
  $name = "site_theme";
  $value = "dark_mode";
  $expiry = time() + (86400 * 30); // 30 days from now
  
  setcookie($name, $value, $expiry, "/"); // "/" means available sitewide
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Key Difference:</strong> Think of a <strong>Cookie</strong> like a membership card you carry in your wallet. Think of a <strong>Session</strong> like a locker at the gym where you keep your things, and you only carry the key (the Session ID).
</div>

<h2>Security Best Practices</h2>
<ul>
    <li><strong>Regenerate ID:</strong> Use <code>session_regenerate_id(true)</code> after a user logs in to prevent Session Hijacking.</li>
    <li><strong>HTTP Only:</strong> Always set your cookies to "HttpOnly" so they cannot be accessed by JavaScript (preventing XSS cookie theft).</li>
    <li><strong>Sensitive Data:</strong> Never store passwords, credit card numbers, or personally identifiable information (PII) in a cookie.</li>
</ul>

<div class="alert alert-warning">
    <strong>Warning:</strong> Cookies have a size limit (usually 4KB). If you need to store large amounts of data, use a database and store only the ID in a session.
</div>
