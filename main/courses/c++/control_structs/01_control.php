<h1>Control Structures</h1>
<p>
    By default, a program acts like a set of instructions being read straight down a page, line by line. 
    However, <strong>Control Structures</strong> allow you to dictate the <em>flow</em> of the program. 
    They let you skip over blocks of code, repeat blocks of code, or choose between different paths based on specific conditions.
</p>

<h2>Conditional Statements (if / else)</h2>
<p>
    The <code class="language-cpp">if</code> statement is the most fundamental control structure. It evaluates a mathematical or logical expression (a condition). 
    If the condition is <code class="language-cpp">true</code>, the block of code inside the <code class="language-cpp">if</code> curly braces is executed.
    If it is <code class="language-cpp">false</code>, the code is skipped entirely.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
    int time = 20;

    // Standard if-else statement
    if (time &lt; 12) {
        cout &lt;&lt; "Good morning!" &lt;&lt; endl;
    } 
    // You can chain conditions using else if
    else if (time &lt; 18) {
        cout &lt;&lt; "Good afternoon!" &lt;&lt; endl;
    } 
    // The else block catches everything else if all previous conditions were false
    else {
        cout &lt;&lt; "Good evening!" &lt;&lt; endl;
    }

    return 0;
}</code></pre>

<h2>The Switch Statement</h2>
<p>
    When you have many different specific cases to test against a single variable, a <code class="language-cpp">switch</code> statement is often cleaner and more efficient than a long chain of <code class="language-cpp">else if</code> statements.
</p>

<pre><code class="language-cpp">int day = 4;

switch (day) {
  case 1:
    cout &lt;&lt; "Monday" &lt;&lt; endl;
    break; // break tells the program to stop checking cases and exit the switch
  case 2:
    cout &lt;&lt; "Tuesday" &lt;&lt; endl;
    break;
  case 3:
    cout &lt;&lt; "Wednesday" &lt;&lt; endl;
    break;
  case 4:
    cout &lt;&lt; "Thursday" &lt;&lt; endl;
    break;
  case 5:
    cout &lt;&lt; "Friday" &lt;&lt; endl;
    break;
  default:
    // The default block runs if no cases matched the variable
    cout &lt;&lt; "Looking forward to the Weekend" &lt;&lt; endl;
}</code></pre>

<div class="alert alert-warning">
    <strong>Don't forget the break!</strong> If you forget to include a <code class="language-cpp">break;</code> statement at the end of a case, execution will "fall through" and automatically run the code in the next case below it, regardless of whether that case's condition is true or not!
</div>

<h2>Looping Structures</h2>
<p>
    Loops can execute a block of code as long as a specified condition is reached. Loops are handy because they save time, reduce errors, and make code much shorter.
</p>

<h3>The While Loop</h3>
<p>
    The <code class="language-cpp">while</code> loop iterates through a block of code <em>while</em> a specified condition evaluates to <code class="language-cpp">true</code>. 
    It is best used when you don't know exactly how many times you need to loop beforehand.
</p>

<pre><code class="language-cpp">int i = 0;

// The loop will run continuously as long as i is less than 5
while (i &lt; 5) {
  cout &lt;&lt; "The value of i is: " &lt;&lt; i &lt;&lt; "\n";
  i++; // CRITICAL: If you forget to update 'i', you will create an infinite loop!
}</code></pre>

<h3>The For Loop</h3>
<p>
    When you know exactly how many times you want to loop through a block of code, use the <code class="language-cpp">for</code> loop instead of a <code class="language-cpp">while</code> loop.
    It combines the initializer, the condition, and the incrementer all into one clean line.
</p>

<pre><code class="language-cpp">// Syntax: for (statement 1; statement 2; statement 3) { code block to be executed }
// Statement 1: executed once before the execution of the code block.
// Statement 2: defines the condition for executing the code block.
// Statement 3: executed every time AFTER the code block has been executed.

for (int i = 0; i &lt; 5; i++) {
  cout &lt;&lt; "Iteration " &lt;&lt; i &lt;&lt; "\n";
}</code></pre>

<p>You can also use <code class="language-cpp">break</code> inside a loop to jump out of it completely, or <code class="language-cpp">continue</code> to skip the current iteration and jump straight to the next one.</p>
