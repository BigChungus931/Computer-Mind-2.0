<h1>Error Handling and Debugging</h1>
<p>No code is perfect. Professional developers distinguish themselves by how they <strong>anticipate</strong> and <strong>handle</strong> errors before they crash the application for the user.</p>

<h2>Reporting Levels</h2>
<p>By default, PHP might hide errors or only show critical ones. During development, you should see <strong>everything</strong>.</p>

<pre><code class="language-php">&lt;?php
  // Put this at the top of your dev scripts
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Production Warning:</strong> Always set <code>display_errors</code> to <code>0</code> in production. You don't want an attacker to see your file paths or database structure when an error occurs. Log errors to a private file instead.
</div>

<h2>Exception Handling (The Try-Catch Block)</h2>
<p>Modern PHP uses <strong>Exceptions</strong> to handle errors gracefully. Instead of the script just "dying", you can "catch" the error and do something else (like show a nice error page or retry the operation).</p>

<pre><code class="language-php">&lt;?php
function processPayment($amount) {
    if ($amount <= 0) {
        throw new Exception("Invalid payment amount.");
    }
    return true;
}

try {
    processPayment(-10);
} catch (Exception $e) {
    echo "&lt;div class='alert alert-danger'&gt;Error: " . $e->getMessage() . "&lt;/div&gt;";
} finally {
    // This runs no matter what (even if an error happened)
    echo "Cleanup complete.";
}
?&gt;</code></pre>

<h2>Professional Debugging Tools</h2>
<p>While <code>echo</code> is a common way to debug, PHP offers better tools for inspecting complex data structures like arrays and objects.</p>

<ul>
    <li><strong>var_dump($var):</strong> Displays the type and value. Great for checking if something is <code>null</code> or <code>false</code>.</li>
    <li><strong>print_r($var):</strong> Displays a readable representation of an array.</li>
</ul>

<pre><code class="language-php">&lt;?php
  $user_data = ["id" => 1, "meta" => ["is_pro" => true]];
  
  echo "&lt;pre&gt;";
  print_r($user_data);
  echo "&lt;/pre&gt;";
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Pro Tip:</strong> Wrapping <code>print_r</code> in HTML <code>&lt;pre&gt;</code> tags makes the output much easier for humans to read by preserving the line breaks.
</div>

<h2>Custom Error Handlers</h2>
<p>You can create a custom function to handle every single error that happens in your app, allowing you to log them to a database or send an alert to your email.</p>

<pre><code class="language-php">&lt;?php
function myErrorHandler($errno, $errstr) {
  echo "&lt;b&gt;Error:&lt;/b&gt; [$errno] $errstr&lt;br&gt;";
}

set_error_handler("myErrorHandler");
?&gt;</code></pre>
