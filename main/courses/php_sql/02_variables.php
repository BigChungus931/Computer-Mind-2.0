<h1>Variables, Data Types, and Operators</h1>
<p>In PHP, variables are the cornerstone of dynamic data handling. Think of a variable as a labeled box stored in the server's memory that holds a specific piece of information.</p>

<h2>Variable Declaration</h2>
<p>Unlike languages like C++, PHP variables are <strong>loosely typed</strong>. This means you don't have to declare if a variable is a number or a string before using it; PHP figures it out automatically based on the value you assign.</p>

<pre><code class="language-php">&lt;?php
  $user_age = 25;       // Integer
  $user_name = "Alice"; // String
  $is_active = true;    // Boolean
?&gt;</code></pre>

<h3>Naming Rules</h3>
<ul>
    <li>A variable must start with the <code>$</code> sign.</li>
    <li>It must start with a letter or an underscore (<code>_</code>), never a number.</li>
    <li>It can only contain alpha-numeric characters and underscores (A-z, 0-9, and _).</li>
    <li>Variable names are <strong>case-sensitive</strong> (<code>$age</code> and <code>$AGE</code> are different).</li>
</ul>

<h2>Data Types in Depth</h2>
<p>PHP handles several data types behind the scenes to ensure your data behaves correctly during calculations and display.</p>

<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th>Example</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>String</td>
            <td>Textual data wrapped in quotes.</td>
            <td><code>"Hello"</code></td>
        </tr>
        <tr>
            <td>Integer</td>
            <td>Whole numbers (no decimals).</td>
            <td><code>123</code></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>Numbers with a decimal point.</td>
            <td><code>19.99</code></td>
        </tr>
        <tr>
            <td>Boolean</td>
            <td>Logical <code>true</code> or <code>false</code>.</td>
            <td><code>true</code></td>
        </tr>
        <tr>
            <td>Array</td>
            <td>A list of multiple values.</td>
            <td><code>array(1, 2)</code></td>
        </tr>
        <tr>
            <td>NULL</td>
            <td>Represents an empty variable.</td>
            <td><code>null</code></td>
        </tr>
    </tbody>
</table>

<h2>Operators</h2>
<p>Operators allow you to perform logic and math on your variables.</p>

<h3>Arithmetic Operators</h3>
<pre><code class="language-php">&lt;?php
  echo 10 + 5;  // 15
  echo 10 ** 2; // 100 (Exponentiation)
  echo 10 % 3;  // 1 (Modulus/Remainder)
?&gt;</code></pre>

<h3>Comparison Operators (The Identity Check)</h3>
<p>This is where many beginners make mistakes. PHP has two ways to check for equality:</p>

<pre><code class="language-php">&lt;?php
  $x = 5;
  $y = "5";

  var_dump($x == $y);  // true (Loose: values are the same)
  var_dump($x === $y); // false (Strict: value is 5, but one is int and one is string)
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Security Warning:</strong> Always use <code>===</code> and <code>!==</code> when comparing data from users. Using <code>==</code> can sometimes lead to unexpected "type juggling" bugs that attackers can exploit.
</div>

<h2>Constants</h2>
<p>If you have a value that should never change (like a Database Name or API Key), use a <strong>Constant</strong>. Constants are global and do not start with a <code>$</code>.</p>

<pre><code class="language-php">&lt;?php
  define("SITE_URL", "https://computermind.com");
  echo SITE_URL;
?&gt;</code></pre>
