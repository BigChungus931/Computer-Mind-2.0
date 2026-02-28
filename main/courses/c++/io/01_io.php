<h1>Basic Input/Output (I/O)</h1>
<p>
    An interactive program needs to be able to communicate with the user. In C++, we achieve this using the standard stream objects <code class="language-cpp">cout</code> (for output) and <code class="language-cpp">cin</code> (for input). Both of these are bundled inside the <code class="language-cpp">&lt;iostream&gt;</code> library.
</p>

<h2>Standard Output: <code class="language-cpp">cout</code></h2>
<p>
    <code class="language-cpp">cout</code> is an object of class <code class="language-cpp">ostream</code> that represents the standard output stream oriented to narrow characters (of type char). It corresponds to the C stream <code class="language-cpp">stdout</code>. 
    You use it alongside the insertion operator <code class="language-cpp">&lt;&lt;</code> to push data onto the screen.
</p>
<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
    int age = 22;
    string name = "Alice";

    // You can cascade multiple insertion operators in a single line
    cout &lt;&lt; "Player Name: " &lt;&lt; name &lt;&lt; "\n";
    cout &lt;&lt; "Player Age: " &lt;&lt; age &lt;&lt; " years old." &lt;&lt; endl;

    return 0;
}</code></pre>
<div class="alert alert-info">
    <strong>endl vs \n : </strong> Both <code class="language-cpp">endl</code> and <code class="language-cpp">\n</code> create a new line. However, <code class="language-cpp">endl</code> also <em>flushes the output buffer</em>. This means it forces the system to immediately print whatever text is waiting in memory to the screen. Because flushing the buffer takes extra processing time, using <code class="language-cpp">\n</code> is slightly faster for performance-critical applications.
</div>

<h2>Standard Input: <code class="language-cpp">cin</code></h2>
<p>
    <code class="language-cpp">cin</code> (pronounced "see-in") is an object of the <code class="language-cpp">istream</code> class that represents the standard input stream (normally your keyboard). 
    We use it alongside the extraction operator <code class="language-cpp">&gt;&gt;</code>. 
    Think of the brackets acting as arrows showing the flow of data: Data flows <strong>out</strong> of the program to the screen with <code class="language-cpp">cout &lt;&lt; "text"</code>, and data flows <strong>in</strong> from the keyboard to a variable with <code class="language-cpp">cin &gt;&gt; variable</code>.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
    int age;
    string firstName;

    cout &lt;&lt; "Please type your first name: ";
    cin &gt;&gt; firstName; // Waits for the user to type a word and hit Enter

    cout &lt;&lt; "Please enter your age: ";
    cin &gt;&gt; age; // Waits for the user to type a number and hit Enter

    cout &lt;&lt; "\nWelcome, " &lt;&lt; firstName &lt;&lt; "! You are " &lt;&lt; age &lt;&lt; " years old!" &lt;&lt; endl;

    return 0;
}</code></pre>

<h2>The <code class="language-cpp">cin</code> String Gotcha</h2>
<p>
    The standard `cin >>` extraction operator considers whitespace (spaces, tabs, newlines) as terminating stops. This means if you ask a user for their full name:
</p>
<pre><code class="language-cpp">string fullName;
cout &lt;&lt; "Enter your full name: ";
cin &gt;&gt; fullName; // If the user types "John Doe"
cout &lt;&lt; fullName; // It will only print "John"!</code></pre>

<p>
    If you need to read an entire line of text including spaces, you must use the <code class="language-cpp">getline()</code> function instead of the extraction operator:
</p>
<pre><code class="language-cpp">string fullName;
cout &lt;&lt; "Enter your full name: ";
getline(cin, fullName); // Reads the whole line until the user hits Enter
cout &lt;&lt; fullName; // Will print "John Doe"</code></pre>
