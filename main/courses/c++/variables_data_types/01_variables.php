<h1>Variables and Data Types</h1>
<p>
    Think of variables as named storage containers in your computer's memory. When you create a variable, you are asking the computer to set aside a specific amount of space to hold a particular type of data, and you give that space a name so you can refer back to it later.
</p>

<h2>Basic Data Types in C++</h2>
<p>C++ requires you to explicitly declare what <em>type</em> of data a variable will hold. This is called static typing. Here are the core data types:</p>

<ul>
    <li><code class="language-cpp">int</code>: Stores whole numbers (integers), without decimals. Ex: <code class="language-cpp">10</code>, <code class="language-cpp">-55</code>.</li>
    <li><code class="language-cpp">double</code>: Stores floating-point numbers, with decimals. Ex: <code class="language-cpp">19.99</code>, <code class="language-cpp">-3.14159</code>.</li>
    <li><code class="language-cpp">char</code>: Stores a single character. Must be surrounded by single quotes. Ex: <code class="language-cpp">'a'</code>, <code class="language-cpp">'Z'</code>, <code class="language-cpp">'7'</code>.</li>
    <li><code class="language-cpp">string</code>: Stores text (a sequence of characters). Must be surrounded by double quotes. Ex: <code class="language-cpp">"Hello World"</code>. <em>(Note: Requires `#include &lt;string&gt;`)</em></li>
    <li><code class="language-cpp">bool</code>: Stores boolean values, which can only be one of two states: <code class="language-cpp">true</code> or <code class="language-cpp">false</code>.</li>
</ul>

<h2>Declaring and Initializing Variables</h2>
<p>
    To create a variable, you must specify the type and assign it a value.
</p>
<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
    // Syntax: type variableName = value;
    int myAge = 25;
    double bankBalance = 1500.50;
    char grade = 'A';
    string myName = "John Doe";
    bool isStudent = true;

    // You can also declare a variable without a value, and assign it later:
    int futureAge;
    futureAge = 35;

    cout &lt;&lt; "My name is " &lt;&lt; myName &lt;&lt; " and I am " &lt;&lt; myAge &lt;&lt; " years old." &lt;&lt; endl;
    return 0;
}</code></pre>

<h2>Variable Naming Rules (Identifiers)</h2>
<p>Variables must be identified with unique names, known as identifiers. There are strict rules for these names:</p>
<ol>
    <li>Names can contain letters, digits and underscores.</li>
    <li>Names must begin with a letter or an underscore (_). They <strong>cannot</strong> begin with a number.</li>
    <li>Names are case-sensitive (<code class="language-cpp">myVar</code> and <code class="language-cpp">myvar</code> are entirely different variables).</li>
    <li>Names cannot contain whitespace or special characters like !, #, %, etc.</li>
    <li>Reserved words (like C++ keywords, such as <code class="language-cpp">int</code>, <code class="language-cpp">return</code>, <code class="language-cpp">class</code>) cannot be used as names.</li>
</ol>

<h2>Constants</h2>
<p>
    Sometimes you want a variable to store a value that should <em>never</em> be changed throughout the life of the program. 
    You can use the <code class="language-cpp">const</code> keyword to declare a constant variable. This makes the variable read-only.
</p>
<pre><code class="language-cpp">int main() {
    const double PI = 3.14159;
    const int MINUTES_IN_HOUR = 60;

    // PI = 3.14; // ERROR: This will cause a compilation error! You cannot change a const.

    return 0;
}</code></pre>
<div class="alert alert-info">
    <strong>Best Practice:</strong> It is standard convention among C++ developers to write the names of constant variables in ALL_CAPS. This makes it instantly recognizable to other programmers reading your code that the value cannot be modified.
</div>
