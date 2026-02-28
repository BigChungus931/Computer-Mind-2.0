<h1>Exception Handling</h1>
<p>
    An <strong>Exception</strong> is a problem that arises during the physical execution of a program (at runtime). Exceptions provide a way to react to exceptional circumstances in your code by transferring control of the program to special functions called handlers, preventing your entire application from crashing and burning.
</p>
<p>
    When an error occurs—such if your program tries to open a file that doesn't exist, divides a number by zero, or runs out of RAM—C++ will normally stop the program and generate an ugly red error message. We can intercept this using Exception Handling.
</p>

<h2>The <code class="language-cpp">try</code>, <code class="language-cpp">throw</code>, and <code class="language-cpp">catch</code> Block</h2>
<p>Exception handling in C++ consists of three core keywords:</p>
<ul>
    <li><code class="language-cpp">try</code>: A block of code in which an exception might realistically occur. A try block is always followed by at least one catch block.</li>
    <li><code class="language-cpp">throw</code>: When your code detects a big problem, you use <code class="language-cpp">throw</code> to manually launch an exception. You can throw an integer (like an error code #404), a string, or an entire custom object!</li>
    <li><code class="language-cpp">catch</code>: A block of code that catches the thrown exception and executes a safe "backup plan" instead of letting the application crash.</li>
</ul>

<pre><code class="language-cpp">try {
  // Block of code that might fail
  throw some_value; // Uh oh! Something went wrong! Throw an exception!
}
catch (DataType variableName) {
  // We caught the thrown value! Execute safety protocol...
}</code></pre>

<h2>Example: The Age Checker</h2>
<p>
    In this example, we have a system that checks an age to see if a user is old enough to enter a nightclub. If the user is underage, we consider it an "exceptional" situation and we throw an error code.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
  try {
    int age = 15;
    
    // Everything is fine, let them in!
    if (age &gt;= 18) {
      cout &lt;&lt; "Access granted - you are old enough.";
    } 
    // Wait, the age is too low. Throw an alert!
    else {
      throw 505; // We decided '505' represents an underage error code
    }
  }
  // The catch block sees that an integer was just thrown out of the try block!
  catch (int errorCode) { 
    cout &lt;&lt; "CRITICAL ERROR: Access denied! User is underage.\n";
    cout &lt;&lt; "System Error Code Flagged: " &lt;&lt; errorCode &lt;&lt; "\n";
  }
  
  // The program continues running normally down here! It didn't crash!
  cout &lt;&lt; "Nightclub server is still online..." &lt;&lt; endl;
  
  return 0;
}</code></pre>

<h2>Catch Any Exception (The "Catch-All")</h2>
<p>
    If you do not know the exact numerical value or data type of the exception that will be thrown (perhaps you are calling a function written by someone else, and you aren't sure what errors it throws), you can use the syntax <code class="language-cpp">catch (...)</code>. 
    The three dots tell C++ to catch absolutely <em>anything</em> that gets thrown out of the <code class="language-cpp">try</code> block.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
  try {
    int age = 15;
    if (age &gt;= 18) {
      cout &lt;&lt; "Access granted.";
    } else {
      // Throw a C-String error description instead of a number
      throw "The age requirement was violated!"; 
    }
  }
  // This catch block will catch the string, an integer, a double... literally anything.
  catch (...) {
    cout &lt;&lt; "Access denied! An unknown exception was caught safely.\n";
  }
  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Built-in Exceptions (<code class="language-cpp">&lt;stdexcept&gt;</code>):</strong> C++ has a huge library of standard pre-built exceptions (like <code class="language-cpp">out_of_range</code>, <code class="language-cpp">invalid_argument</code>, and <code class="language-cpp">bad_alloc</code>) that are automatically thrown by standard library features. You can catch these specific errors and use the <code class="language-cpp">.what()</code> method to find out exactly what failed!
</div>
