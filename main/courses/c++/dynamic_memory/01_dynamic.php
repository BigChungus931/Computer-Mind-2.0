<h1>Dynamic Memory Allocation</h1>
<p>
    Up until now, we've only used variables whose size must be known perfectly at compile time. If you declare an array like <code class="language-cpp">int myArr[50]</code>, it will always take up exactly enough space for 50 integers on the "Stack"—a fast, but limited block of memory managed automatically by the system.
</p>
<p>
    However, what if you are writing a game and you don't know if the player will build 5 bases or 5,000 bases? You can't guess a fixed array size!
    <strong>Dynamic Memory Allocation</strong> allows your program to request blocks of memory from the operating system <em>while the program is running</em> (at runtime). This memory is pulled from a vast pool of free memory called the "Heap".
</p>

<h2>The <code class="language-cpp">new</code> Operator</h2>
<p>
    Dynamic memory is allocated using the <code class="language-cpp">new</code> operator. The <code class="language-cpp">new</code> operator finds an appropriately sized block of free memory on the Heap, claims it for your program, and then returns the <strong>memory address</strong> of that block. Because it returns an address, we must store the result inside a pointer.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
    // Dynamically allocate space for a single integer on the Heap
    // ptr now holds the address of that freshly minted memory.
    int* ptr = new int;

    // Dereference the pointer to store the value 50 into that memory block
    *ptr = 50;

    cout &lt;&lt; "The value stored at dynamically allocated address " &lt;&lt; ptr &lt;&lt; " is " &lt;&lt; *ptr &lt;&lt; endl;

    // VERY IMPORTANT: See below!
    delete ptr;

    return 0;
}</code></pre>

<h2>The <code class="language-cpp">delete</code> Operator (Memory Leaks)</h2>
<p>
    Variables created normally on the Stack are automatically destroyed when the function finishes.
    <strong>Variables created dynamically on the Heap with <code class="language-cpp">new</code> are NEVER destroyed automatically!</strong> 
</p>
<p>
    If you allocate memory dynamically and lose the pointer to it, that memory remains locked up permanently until the entire program terminates. This is called a <strong>Memory Leak</strong>. If a loop constantly leaks memory, your computer will eventually crash from running out of RAM!
</p>
<p>
    To prevent memory leaks, you must manually free the memory once you are done using it by utilizing the <code class="language-cpp">delete</code> operator.
</p>

<pre><code class="language-cpp">int* box = new int; // Request a box from the Heap
*box = 99;          // Put something in the box
cout &lt;&lt; *box;       // Look at what's in the box

delete box;         // Give the box back to the Operating System! The leak is prevented.
box = nullptr;      // Best practice: nullify the pointer so you don't accidentally try to look at an empty box later.</code></pre>

<h2>Dynamic Arrays</h2>
<p>
    Dynamic allocation shines when creating arrays whose sizes are determined by user input at runtime. 
    We use <code class="language-cpp">new type[size]</code> to allocate dynamic arrays, and <code class="language-cpp">delete[] ptr</code> to free them. 
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

int main() {
    int numStudents;
    cout &lt;&lt; "How many students are in the class? ";
    cin &gt;&gt; numStudents; // We only know this at runtime!

    // Create a dynamic array sized perfectly to the user's input
    int* grades = new int[numStudents];

    // Populate the array
    for (int i = 0; i &lt; numStudents; i++) {
        cout &lt;&lt; "Enter grade for student " &lt;&lt; (i + 1) &lt;&lt; ": ";
        cin &gt;&gt; grades[i];
    }

    // Free the entire array block of memory when finished
    // NOTE: You MUST use delete[] with the brackets to delete arrays! Let the system know it's a block.
    delete[] grades;
    grades = nullptr;

    return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Modern C++ Replacement:</strong> In modern C++ (C++11 and onwards), raw pointers and <code class="language-cpp">new</code>/<code class="language-cpp">delete</code> are highly discouraged because memory leaks are too easy to accidentally cause. Modern projects rely almost entirely on <strong>Smart Pointers</strong> (<code class="language-cpp">std::unique_ptr</code> and <code class="language-cpp">std::shared_ptr</code>) which automatically call <code class="language-cpp">delete</code> for you when the pointer goes out of scope!
</div>
