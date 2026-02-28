<h1>Control Structures and Functions</h1>
<p>Control structures allow your code to make decisions, repeat actions, and branch into different paths. Without these, programs would only be able to execute one line after another in a straight line.</p>

<h2>Conditional Logic</h2>
<p>Conditional statements check if something is true before running a block of code.</p>

<h3>If / Else / Elseif</h3>
<p>This is the "core" of decision making. Use <code>elseif</code> to check multiple conditions in sequence.</p>

<pre><code class="language-php">&lt;?php
  $hour = date("H");

  if ($hour &lt; 12) {
      echo "Good morning!";
  } elseif ($hour &lt; 18) {
      echo "Good afternoon!";
  } else {
      echo "Good evening!";
  }
?&gt;</code></pre>

<h3>The Switch Statement</h3>
<p>If you find yourself using many <code>elseif</code> statements against the same variable, a <code>switch</code> is much cleaner.</p>

<pre><code class="language-php">&lt;?php
$status = "processing";

switch ($status) {
    case "pending":
        echo "Your order is waiting.";
        break;
    case "processing":
        echo "We are preparing your order.";
        break;
    case "shipped":
        echo "Your order is on the way!";
        break;
    default:
        echo "Status unknown.";
}
?&gt;</code></pre>

<h2>Loops: Automating Repetition</h2>
<p>Loops are used to execute the same code block multiple times.</p>

<h3>While and Do-While</h3>
<p>A <code>while</code> loop runs <em>as long</em> as a condition is true. A <code>do-while</code> loop runs at least <em>once</em> before checking the condition.</p>

<h3>The For Loop</h3>
<p>Used when you know exactly how many times you want to loop.</p>

<pre><code class="language-php">&lt;?php
  for ($i = 1; $i &lt;= 5; $i++) {
      echo "Line number: " . $i . "&lt;br&gt;";
  }
?&gt;</code></pre>

<h2>Defining Custom Functions</h2>
<p>Functions are reusable blocks of code. They prevent code duplication and make your software much easier to debug.</p>

<pre><code class="language-php">&lt;?php
  // function [Name](Parameters)
  function calculate_total($price, $tax_rate = 0.05) {
      $tax = $price * $tax_rate;
      return $price + $tax;
  }

  echo "Total with default tax: $" . calculate_total(100);
  echo "Total with luxury tax: $" . calculate_total(100, 0.20);
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Always give your functions descriptive names like <code>validate_email()</code> rather than generic ones like <code>check1()</code>. Use <strong>Return</strong> values instead of <strong>Echo</strong> inside functions to make them more flexible.
</div>

<h2>Scope: Global vs Local</h2>
<p>Variables declared inside a function are <strong>Local</strong>—they don't exist outside that function. To use a global variable inside a function, you must use the <code>global</code> keyword or the <code>$GLOBALS</code> array (though this is often discouraged in favor of passing parameters).</p>
