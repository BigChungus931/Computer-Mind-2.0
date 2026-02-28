<h1>Operators in C++</h1>
<p>
    Operators are special symbols used to perform operations on variables and values. C++ provides a rich set of operators, categorized by their functionality. Let's explore the most common ones.
</p>

<h2>1. Arithmetic Operators</h2>
<p>Arithmetic operators are used to perform common mathematical operations.</p>
<ul>
    <li><code class="language-cpp">+</code> (Addition): Adds together two values. <code class="language-cpp">x + y</code></li>
    <li><code class="language-cpp">-</code> (Subtraction): Subtracts one value from another. <code class="language-cpp">x - y</code></li>
    <li><code class="language-cpp">*</code> (Multiplication): Multiplies two values. <code class="language-cpp">x * y</code></li>
    <li><code class="language-cpp">/</code> (Division): Divides one value by another. <code class="language-cpp">x / y</code></li>
    <li><code class="language-cpp">%</code> (Modulus): Returns the division remainder. <code class="language-cpp">x % y</code> (e.g., 5 % 2 returns 1)</li>
    <li><code class="language-cpp">++</code> (Increment): Increases the value of a variable by 1. <code class="language-cpp">++x</code> or <code class="language-cpp">x++</code></li>
    <li><code class="language-cpp">--</code> (Decrement): Decreases the value of a variable by 1. <code class="language-cpp">--x</code> or <code class="language-cpp">x--</code></li>
</ul>

<div class="alert alert-info">
    <strong>Prefix vs Postfix Increment:</strong> <code class="language-cpp">++x</code> (Prefix) increments the value immediately before using it in an expression. <code class="language-cpp">x++</code> (Postfix) uses the current value in the expression first, and then increments it afterward.
</div>

<h2>2. Assignment Operators</h2>
<p>Assignment operators are used to assign values to variables. The most common is the simple equal sign <code class="language-cpp">=</code>, but there are also compound assignment operators that combine arithmetic with assignment.</p>
<ul>
    <li><code class="language-cpp">=</code> : <code class="language-cpp">x = 5</code> is the same as <code class="language-cpp">x = 5</code></li>
    <li><code class="language-cpp">+=</code> : <code class="language-cpp">x += 3</code> means "take the current value of x, add 3, and save it back to x". Same as <code class="language-cpp">x = x + 3</code></li>
    <li><code class="language-cpp">-=</code> : <code class="language-cpp">x -= 3</code> is the same as <code class="language-cpp">x = x - 3</code></li>
    <li><code class="language-cpp">*=</code> : <code class="language-cpp">x *= 3</code> is the same as <code class="language-cpp">x = x * 3</code></li>
    <li><code class="language-cpp">/=</code> : <code class="language-cpp">x /= 3</code> is the same as <code class="language-cpp">x = x / 3</code></li>
    <li><code class="language-cpp">%=</code> : <code class="language-cpp">x %= 3</code> is the same as <code class="language-cpp">x = x % 3</code></li>
</ul>

<h2>3. Comparison Operators</h2>
<p>Comparison operators are used to compare two values (or variables). This is incredibly important for making decisions in your code (like in <code class="language-cpp">if</code> statements). The return value of a comparison is either <code class="language-cpp">true</code> (1) or <code class="language-cpp">false</code> (0).</p>
<ul>
    <li><code class="language-cpp">==</code> (Equal to): Returns true if both sides are exactly equal. <code class="language-cpp">x == y</code></li>
    <li><code class="language-cpp">!=</code> (Not equal to): Returns true if the sides are not equal. <code class="language-cpp">x != y</code></li>
    <li><code class="language-cpp">&gt;</code> (Greater than): <code class="language-cpp">x &gt; y</code></li>
    <li><code class="language-cpp">&lt;</code> (Less than): <code class="language-cpp">x &lt; y</code></li>
    <li><code class="language-cpp">&gt;=</code> (Greater than or equal to): <code class="language-cpp">x &gt;= y</code></li>
    <li><code class="language-cpp">&lt;=</code> (Less than or equal to): <code class="language-cpp">x &lt;= y</code></li>
</ul>

<h2>4. Logical Operators</h2>
<p>Logical operators are used to determine the logic between variables or values. They allow you to combine multiple conditions together.</p>
<ul>
    <li><code class="language-cpp">&amp;&amp;</code> (Logical AND): Returns true if <strong>both</strong> statements are true. <br>Ex: <code class="language-cpp">(x &gt; 5 &amp;&amp; x &lt; 10)</code></li>
    <li><code class="language-cpp">||</code> (Logical OR): Returns true if <strong>one</strong> or both of the statements is true. <br>Ex: <code class="language-cpp">(x &lt; 5 || y &lt; 5)</code></li>
    <li><code class="language-cpp">!</code> (Logical NOT): Reverses the result. Returns false if the result is true, and true if the result is false. <br>Ex: <code class="language-cpp">!(x == y)</code></li>
</ul>

<h2>Code Example</h2>
<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
    int ammo = 10;
    int health = 50;

    // Using compound assignment and decrement
    ammo -= 2; // Shot two bullets
    health++;  // Picked up a small health pack

    // Using comparison and logical operators
    if (health &gt; 0 &amp;&amp; ammo &gt; 0) {
        cout &lt;&lt; "You are alive and can shoot!" &lt;&lt; endl;
    } else if (health &gt; 0 &amp;&amp; ammo == 0) {
        cout &lt;&lt; "You are alive, but out of ammo!" &lt;&lt; endl;
    } else {
        cout &lt;&lt; "Game Over" &lt;&lt; endl;
    }

    return 0;
}</code></pre>
