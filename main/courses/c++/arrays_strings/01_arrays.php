<h1>Arrays and Strings</h1>
<p>
    An array is used to store multiple values in a single variable, rather than declaring separate variables for each value.
    Think of an array as a list of identically sized boxes kept right next to each other in memory, each holding a value of the same type.
</p>

<h2>Arrays</h2>
<p>
    To declare an array, you must define the variable type, specify the name of the array followed by square brackets <code class="language-cpp">[]</code>, and explicitly state how many elements it should store. You cannot change the maximum size of an array after it has been created.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
    // Declare an array of strings holding up to 4 elements
    string cars[4];

    // Initialize an array completely upon creation
    int myNumbers[5] = {10, 20, 30, 40, 50};

    // Arrays are always "Zero-Indexed" in C++. The first element is at index 0.
    cout &lt;&lt; "The first number is: " &lt;&lt; myNumbers[0] &lt;&lt; endl; // Outputs 10
    
    // We can access and change the value of elements using their index
    myNumbers[0] = 55;
    cout &lt;&lt; "The new first number is: " &lt;&lt; myNumbers[0] &lt;&lt; endl; // Outputs 55

    return 0;
}</code></pre>

<h3>Looping Through an Array</h3>
<p>
    You can easily loop through the array elements using a <code class="language-cpp">for</code> loop. 
    The most modern way to iterate through arrays in C++11 and later is using a "For-Each" loop.
</p>

<pre><code class="language-cpp">int myNumbers[5] = {10, 20, 30, 40, 50};

// Traditional For Loop
cout &lt;&lt; "Using Traditional For Loop:\n";
for (int i = 0; i &lt; 5; i++) {
  cout &lt;&lt; myNumbers[i] &lt;&lt; "\n";
}

// C++11 For-Each Loop (Much cleaner!)
cout &lt;&lt; "\nUsing For-Each Loop:\n";
for (int i : myNumbers) {
  cout &lt;&lt; i &lt;&lt; "\n";
}</code></pre>

<div class="alert alert-warning">
    <strong>Bounds Checking Danger:</strong> C++ is incredibly fast partly because it assumes you know what you are doing. If you have an array of 5 elements, and try to access <code class="language-cpp">myBox[99]</code>, C++ won't stop you at compile time. It will simply look exactly where the 99th element <em>would</em> be in memory, and either return random garbage data or crash your entire program (Segmentation Fault). Always ensure you do not read outside of your array's boundaries!
</div>

<h2>Strings</h2>
<p>
    We've already seen strings used briefly. Under the hood, a C++ <code class="language-cpp">std::string</code> is simply an object that behaves like a dynamic array of characters (<code class="language-cpp">char</code>).
    Because it is an object from the <code class="language-cpp">&lt;string&gt;</code> library, it comes packed with useful built-in functions.
</p>

<h3>String Concatenation (Joining)</h3>
<p>
    You can use the <code class="language-cpp">+</code> operator to combine two or more strings together into a new string.
</p>
<pre><code class="language-cpp">string firstName = "John ";
string lastName = "Doe";
string fullName = firstName + lastName;
cout &lt;&lt; fullName &lt;&lt; endl; // Outputs: John Doe

// You can also use the .append() function
string name1 = "Jane ";
string name2 = "Smith";
string result = name1.append(name2);
cout &lt;&lt; result &lt;&lt; endl;   // Outputs: Jane Smith</code></pre>

<h3>String Length and Access</h3>
<p>
    To find the length of a string, use the <code class="language-cpp">length()</code> function (or <code class="language-cpp">size()</code>, which does the exact same thing).
    Just like arrays, you can access the individual characters in a string by referring to its index number inside square brackets <code class="language-cpp">[]</code>.
</p>

<pre><code class="language-cpp">string txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
cout &lt;&lt; "The length of the txt string is: " &lt;&lt; txt.length() &lt;&lt; endl; // Outputs: 26

string myString = "Hello";
cout &lt;&lt; "The first character is: " &lt;&lt; myString[0] &lt;&lt; endl; // Outputs: H

// Changing a specific character
myString[0] = 'J'; 
cout &lt;&lt; "The new string is: " &lt;&lt; myString &lt;&lt; endl; // Outputs: Jello</code></pre>
