<h1>Arrays and String Manipulation</h1>
<p>PHP is famous for its powerful string and array handling. Most web data begins as either a string (text) or an array (a collection), so mastering these is essential for any PHP developer.</p>

<h2>Advanced PHP Arrays</h2>
<p>In PHP, an array is more than just a list; it is actually an <strong>ordered map</strong>. A map is a type that associates values to keys.</p>

<h3>Associative Arrays: The Power of Keys</h3>
<p>Unlike indexed arrays (0, 1, 2...), associative arrays use named keys that you assign. This is perfect for representing complex data objects like a User or a Product.</p>

<pre><code class="language-php">&lt;?php
  $user = array(
      "name" => "John Doe",
      "email" => "john@example.com",
      "role" => "Administrator"
  );

  echo $user["name"] . " is an " . $user["role"];
?&gt;</code></pre>

<h3>Multidimensional Arrays</h3>
<p>An array inside another array. This is used for tables of data or complex nested structures.</p>

<pre><code class="language-php">&lt;?php
  $matrix = [
      [1, 2, 3],
      [4, 5, 6],
      [7, 8, 9]
  ];
  echo $matrix[1][2]; // Outputs 6 (row 1, column 2)
?&gt;</code></pre>

<h2>Mastering String Functions</h2>
<p>PHP has dozens of functions to transform, clean, and search text.</p>

<pre><code class="language-php">&lt;?php
  $str = "   Hello PHP Developers!   ";

  echo trim($str);                // Removes whitespace: "Hello PHP Developers!"
  echo strtoupper($str);          // ALL CAPS
  echo substr($str, 3, 5);        // Extracts 5 chars starting at index 3: "Hello"
  echo explode(" ", trim($str));   // Splits string into an array by " "
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Pro Tip:</strong> For modern applications, prefer using the <code>[]</code> short syntax for arrays instead of the older <code>array()</code> function. It makes your code cleaner and easier to read.
</div>

<h2>The Difference Between Single and Double Quotes</h2>
<p>This is a unique PHP feature:
<ul>
    <li><strong>Single Quotes (' '):</strong> Treats everything as literal text. Fast and simple.</li>
    <li><strong>Double Quotes (" "):</strong> Parses the string for variables (variable interpolation).</li>
</ul>

<pre><code class="language-php">&lt;?php
  $name = "Alice";
  echo 'Hello $name'; // Outputs: Hello $name
  echo "Hello $name"; // Outputs: Hello Alice
?&gt;</code></pre>

<div class="alert alert-warning">
    <strong>Warning:</strong> While double quotes are convenient, they are slightly slower because the server has to "search" the string for variables.
</div>
