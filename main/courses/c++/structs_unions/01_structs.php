<h1>Structures and Unions</h1>
<p>
    In C++, arrays allow you to store multiple values of the <em>same</em> data type. What if you want to store multiple values of <em>different</em> data types under a single name? This is where <strong>Structures</strong> (and later, Classes) come into play.
</p>

<h2>Structures (<code class="language-cpp">struct</code>)</h2>
<p>
    A structure is a user-defined data type that groups related variables of different data types into a single unit. Think of a structure like a blueprint for a record. For example, a "Car" record might contain a string for the brand, a string for the model, and an integer for the year.
</p>

<h3>Creating a Structure</h3>
<p>
    To create a structure, use the <code class="language-cpp">struct</code> keyword followed by the structure's name. Inside its curly braces, you declare the variables (called "members" or "fields") that make up the structure.
</p>
<pre><code class="language-cpp">struct Car {       // Structure declaration
  string brand;    // Member (string)
  string model;    // Member (string)
  int year;        // Member (integer)
}; // &lt;-- Don't forget the semicolon at the end!</code></pre>

<h3>Accessing Structure Members</h3>
<p>
    Once a structure is defined, you can create variables (instances) of that structure type. To access or modify the members of a structure instance, you use the dot syntax (<code class="language-cpp">.</code>).
</p>
<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

// Define the blueprint
struct Car {
  string brand;
  string model;
  int year;
};

int main() {
  // Create a specific Car instance named myCar1
  Car myCar1;
  myCar1.brand = "BMW";
  myCar1.model = "X5";
  myCar1.year = 1999;

  // Create another Car instance named myCar2
  Car myCar2;
  myCar2.brand = "Ford";
  myCar2.model = "Mustang";
  myCar2.year = 1969;

  // Print details
  cout &lt;&lt; myCar1.brand &lt;&lt; " " &lt;&lt; myCar1.model &lt;&lt; " " &lt;&lt; myCar1.year &lt;&lt; "\n";
  cout &lt;&lt; myCar2.brand &lt;&lt; " " &lt;&lt; myCar2.model &lt;&lt; " " &lt;&lt; myCar2.year &lt;&lt; "\n";

  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Structs vs. Classes:</strong> In C++, the <em>only</em> difference between a <code class="language-cpp">struct</code> and a <code class="language-cpp">class</code> is that struct members are public by default, whereas class members are private by default. By convention, structs are used for simple data bundles without complex methods, while classes are used for full-fledged objects.
</div>

<h2>Unions (<code class="language-cpp">union</code>)</h2>
<p>
    A <code class="language-cpp">union</code> is a special user-defined type similar to a struct, except that all of its members share the <strong>exact same memory location</strong>.
    Because of this, a union can only hold the value of <em>one</em> of its members at any given time.
</p>

<h3>Why use a Union?</h3>
<p>
    Unions are rarely used in modern high-level C++ programming. They exist primarily for low-level memory optimization and interacting with hardware registers (e.g., in embedded systems) where you might need to interpret the exact same chunk of bytes as either an integer or an array of characters depending on the situation, saving precious RAM.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// A union that can hold either an int, a char, or a double. 
// It will only be as large as its largest member (double - 8 bytes).
union Data {
   int i;
   char c;
   double d;
};

int main() {
   Data data;
   
   // 1. Assign an integer
   data.i = 10;
   cout &lt;&lt; "data.i: " &lt;&lt; data.i &lt;&lt; endl; // Works fine
   
   // 2. Overwrite the memory with a float
   data.d = 220.5;
   cout &lt;&lt; "data.d: " &lt;&lt; data.d &lt;&lt; endl; // Works fine
   
   // 3. What happens to the integer now?
   cout &lt;&lt; "data.i: " &lt;&lt; data.i &lt;&lt; endl; // Outputs completely corrupted garbage data!
   
   // The 'd' value overwrote the memory space that 'i' was previously using.
   
   return 0;
}</code></pre>
