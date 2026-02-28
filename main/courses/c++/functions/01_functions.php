<h1>Functions in C++</h1>
<p>
    A function is a reusable block of code that only runs when it is called. 
    You can pass data, known as parameters, into a function. Functions are used to perform certain actions, and they are important for reusing code: define the code once, and use it many times.
</p>

<h2>Creating and Calling a Function</h2>
<p>
    C++ provides some pre-defined functions, such as <code class="language-cpp">main()</code>, which is used to execute code. But you can also create your own functions to perform specific actions. A function must be declared <em>above</em> the <code class="language-cpp">main()</code> function where you want to call it.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// Function Declaration
void myFunction() {
   // Function Definition
   cout &lt;&lt; "I just got executed!" &lt;&lt; endl;
}

int main() {
   // Calling the function
   myFunction();
   
   // A function can be called multiple times
   myFunction();
   myFunction();
   
   return 0;
}</code></pre>

<ul>
    <li><code class="language-cpp">void</code>: The return type of the function. "void" means that the function does not have a return value.</li>
    <li><code class="language-cpp">myFunction()</code>: The name of the function.</li>
</ul>

<h2>Function Parameters and Arguments</h2>
<p>
    Information can be passed to functions as a parameter. Parameters act as variables inside the function.
    They are specified after the function name, inside the parentheses. You can add as many parameters as you want, just separate them with a comma.
</p>
<pre><code class="language-cpp">// This function takes a string as a parameter
void greetFamily(string fname) {
   cout &lt;&lt; "Hello, " &lt;&lt; fname &lt;&lt; " Smith\n";
}

int main() {
   // We pass standard arguments directly into the function call
   greetFamily("Liam");
   greetFamily("Jenny");
   greetFamily("Anja");
   return 0;
}</code></pre>

<h2>Return Values</h2>
<p>
    The <code class="language-cpp">void</code> keyword, used in the previous examples, indicates that the function should not return a value. 
    If you want the function to return a value, you can use a data type (such as <code class="language-cpp">int</code>, <code class="language-cpp">string</code>, <code class="language-cpp">double</code>, etc.) instead of <code class="language-cpp">void</code>, and use the <code class="language-cpp">return</code> keyword inside the function.
</p>

<pre><code class="language-cpp">// This function expects an integer parameter, and will physically return an integer result back
int multiplyFive(int x) {
  return 5 * x;
}

int main() {
  cout &lt;&lt; "Result: " &lt;&lt; multiplyFive(3) &lt;&lt; endl; // Outputs: Result: 15
  
  // We can also store the result of a function inside a variable
  int myResult = multiplyFive(10);
  cout &lt;&lt; "Stored Result: " &lt;&lt; myResult &lt;&lt; endl; // Outputs: Stored Result: 50
  
  return 0;
}</code></pre>

<h2>Function Overloading</h2>
<p>
    With function overloading, multiple functions can have the exact same name as long as the parameter types or the number of parameters are different.
    This is extremely useful when you want to perform the same conceptual action on different data types.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// We have two distinct functions playing the "plus" role
int plusFunc(int x, int y) {
  return x + y;
}

// Same name, different parameter types
double plusFunc(double x, double y) {
  return x + y;
}

int main() {
  int myNum1 = plusFunc(8, 5);          // Automatically calls the 'int' version
  double myNum2 = plusFunc(4.3, 6.26);  // Automatically calls the 'double' version
  
  cout &lt;&lt; "Int: " &lt;&lt; myNum1 &lt;&lt; "\n";
  cout &lt;&lt; "Double: " &lt;&lt; myNum2 &lt;&lt; "\n";
  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Instead of defining two completely entirely different functions that should do the same thing (like <code class="language-cpp">multiplyInts()</code> and <code class="language-cpp">multiplyDoubles()</code>), you should always overload a single function name (like <code class="language-cpp">multiply()</code>) to keep your codebase clean.
</div>
