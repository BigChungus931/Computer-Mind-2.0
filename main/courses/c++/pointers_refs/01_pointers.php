<h1>Pointers and References</h1>
<p>
    Pointers and references are some of the most powerful and feared concepts in C++. They allow you to manipulate your computer's memory directly. Once mastered, they give you the immense control that makes C++ a high-performance systems language.
</p>

<h2>Memory Addresses</h2>
<p>
    When a variable is created in C++, a chunk of memory is allocated to store the value of that variable. 
    That chunk of memory has a physical address, exactly like a house has a street address so mail can be delivered to it.
    You can find out what address the computer gave your variable by using the <strong>address-of operator</strong> <code class="language-cpp">&amp;</code>.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

int main() {
    string food = "Pizza";

    cout &lt;&lt; "Value: " &lt;&lt; food &lt;&lt; "\n"; 
    
    // Outputs the memory address of the food variable (e.g., 0x6dfed4)
    cout &lt;&lt; "Address: " &lt;&lt; &amp;food &lt;&lt; "\n"; 
    
    return 0;
}</code></pre>
<p>The memory address is output in hexadecimal format (e.g., <code class="language-cpp">0x6dfed4</code>). This differs between computers and runs.</p>

<h2>Creating Pointers</h2>
<p>
    A <strong>pointer</strong> is simply a variable that <em>stores a memory address</em> as its value.
    To create a pointer variable, use the asterisk sign <code class="language-cpp">*</code> alongside the data type, and assign it the memory address of an existing variable.
</p>

<pre><code class="language-cpp">int myAge = 43;      // A standard integer variable
int* ptr = &amp;myAge;   // A pointer variable that explicitly holds the address of myAge

// Output the value of myAge (43)
cout &lt;&lt; myAge &lt;&lt; "\n";

// Output the value of ptr (The memory address: 0x6dfed4)
cout &lt;&lt; ptr &lt;&lt; "\n";</code></pre>

<h2>Dereferencing a Pointer</h2>
<p>
    When a pointer holds a memory address, we might want to actually look at the data stored inside that address or change it. 
    This is called <strong>dereferencing</strong>. 
    We use the asterisk sign <code class="language-cpp">*</code> again, but this time placed directly in front of an existing pointer variable. This tells the computer: <em>"Go to the address stored inside this pointer, and give me the actual data sitting there."</em>
</p>

<pre><code class="language-cpp">string food = "Pizza";  // Variable declaration
string* ptr = &amp;food;    // Pointer declaration

// Reference: Output the memory address of food 
cout &lt;&lt; ptr &lt;&lt; "\n"; 

// Dereference: Output the value of food using the pointer (Outputs: "Pizza")
cout &lt;&lt; *ptr &lt;&lt; "\n";

// We can also change the original data through the pointer!
*ptr = "Hamburger";

// Output the new value of the original variable (Outputs: "Hamburger")
cout &lt;&lt; food &lt;&lt; "\n";</code></pre>

<div class="alert alert-warning">
    <strong>Beware of Uninitialized Pointers:</strong> Declaring a pointer without assigning it an address (e.g., <code class="language-cpp">int* ptr;</code>) points it at a random address in memory. If you dereference it and write data there, you might overwrite critical application data or instantly crash your program! Always initialize pointers to <code class="language-cpp">nullptr</code> if you aren't pointing them at something yet.
</div>

<h2>What is a Reference?</h2>
<p>
    A reference variable is a "reference" to an existing variable. It acts as an <em>alias</em> or an alternate name for that variable. It is created with the <code class="language-cpp">&amp;</code> operator (which serves a dual purpose in C++).
</p>

<pre><code class="language-cpp">string food = "Pizza";
string &amp;meal = food; // "meal" is now an exact alias for "food"

meal = "Sushi"; // Modifying meal automatically modifies food

cout &lt;&lt; food &lt;&lt; "\n";  // Outputs: Sushi
cout &lt;&lt; meal &lt;&lt; "\n";  // Outputs: Sushi</code></pre>

<div class="alert alert-info">
    <strong>Pointers vs. References:</strong> A reference is permanently bound to the variable it was attached to at creation. It cannot be reassigned to point at something else. A pointer can be reassigned to point at different memory addresses throughout the program. Furthermore, a pointer can point to <code class="language-cpp">nullptr</code>, while a reference must always point to valid data.
</div>
