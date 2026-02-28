<h1>PHP Syntax & Basic Concepts</h1>
<p>PHP (Hypertext Preprocessor) is a powerful, server-side scripting language designed specifically for the web. Unlike JavaScript, which primarily runs in the user's browser (client-side), PHP code is executed on the <strong>server</strong> before the page is ever sent to the user.</p>

<h2>How PHP Works</h2>
<p>When you visit a <code>.php</code> page, the web server (like Apache or Nginx) sees the file extension and hands the file to the PHP engine. The engine executes the code and generates plain HTML, which is then sent to your browser. The user never sees the original PHP source code—only the result.</p>

<h2>The PHP Tag</h2>
<p>To tell the server where PHP code starts and ends, we use special tags. The standard method is the "canonical" PHP tag:</p>

<pre><code class="language-php">&lt;?php
// Your PHP code goes here
echo "Hello from the server!";
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Note:</strong> If a file contains only PHP code (no HTML), it is a best practice to omit the <code>?&gt;</code> closing tag. This prevents accidental whitespace from being sent to the browser, which can cause "headers already sent" errors.
</div>

<h2>Anatomy of a PHP Script</h2>
<p>Let's look at a basic script and break it down line-by-line:</p>

<pre><code class="language-php">&lt;?php
  $message = "Welcome to Computer Mind!";
  echo "&lt;h1&gt;" . $message . "&lt;/h1&gt;";
?&gt;</code></pre>

<ul>
    <li><code>&lt;?php</code>: Start of the PHP code block.</li>
    <li><code>$message = "..."</code>: Declares a variable named <code>message</code> and assigns a string to it.</li>
    <li><code>echo</code>: The command used to output text to the browser.</li>
    <li><code>.</code>: The concatenation operator, used to join strings together.</li>
    <li><code>;</code>: The semicolon. In PHP, every statement <strong>must</strong> end with a semicolon. Forgetting this is the #1 cause of "Parse Error: syntax error".</li>
</ul>

<h2>Comments in PHP</h2>
<p>Comments are vital for documentation and "turning off" sections of code during testing.</p>

<pre><code class="language-php">&lt;?php
// This is a single-line comment (C++ style)

# This is also a single-line comment (Shell style)

/*
  This is a multi-line comment.
  Use it for long explanations or for 
  temporarily disabling blocks of code.
*/
?&gt;</code></pre>

<h2>Case Sensitivity</h2>
<p>In PHP, keywords (like <code>if</code>, <code>else</code>, <code>while</code>, <code>echo</code>, etc.), classes, and functions are <strong>NOT</strong> case-sensitive. However, <strong>variable names are case-sensitive</strong>.</p>

<pre><code class="language-php">&lt;?php
ECHO "Hello"; // Works
echo "Hello"; // Works

$color = "red";
echo $Color; // ERROR: Undefined variable $Color
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Even though keywords are not case-sensitive, always use lowercase for consistency (e.g., use <code>echo</code>, not <code>ECHO</code>).
</div>
