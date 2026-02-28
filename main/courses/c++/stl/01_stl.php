<h1>Standard Template Library (STL)</h1>
<p>
    The Standard Template Library (STL) is arguably the most important feature of modern C++. It is a massive, heavily optimized library of C++ template classes that provide common programming data structures and functions such as vectors, lists, sets, and sorting algorithms.
</p>
<p>
    Instead of writing your own sorting algorithm or linked list from scratch, you use the STL. It is bug-free, blazing fast, and standard across all C++ compilers.
</p>

<h2>The 3 Pillars of the STL</h2>
<p>The STL is built upon three main interlocking concepts:</p>
<ol>
    <li>
        <strong>Containers:</strong> Objects that store data and organize it in a specific manner in memory (e.g., <code class="language-cpp">vector</code>, <code class="language-cpp">list</code>, <code class="language-cpp">map</code>, <code class="language-cpp">set</code>).
    </li>
    <li>
        <strong>Iterators:</strong> Objects that act remarkably like pointers, but safely. They are used to point at the memory addresses within a container, allowing you to walk through the data step-by-step.
    </li>
    <li>
        <strong>Algorithms:</strong> Standalone procedures that process data contained in containers (e.g., <code class="language-cpp">sort()</code>, <code class="language-cpp">find()</code>, <code class="language-cpp">reverse()</code>). They use iterators to do their work!
    </li>
</ol>

<h2>The Mighty Vector (Dynamic Array)</h2>
<p>
    A <code class="language-cpp">std::vector</code> is the most popular STL container. It is a dynamic array that automatically resizes itself when you add or remove elements. Because its elements are stored contiguously (next to each other) in memory, it is incredibly fast to read from (cache friendly).
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;vector&gt; // You must include the vector header
using namespace std;

int main() {
  // Create an empty vector of integers
  vector&lt;int&gt; scores;

  // Add elements dynamically to the back of the array
  scores.push_back(85);
  scores.push_back(92);
  scores.push_back(78);

  // Access elements using standard array syntax
  cout &lt;&lt; "First Score: " &lt;&lt; scores[0] &lt;&lt; endl; // Outputs: 85
  
  // Get the current dynamic size of the vector
  cout &lt;&lt; "Total Scores: " &lt;&lt; scores.size() &lt;&lt; "\n";
  
  // They are extremely easy to loop through using C++11 Range-based For Loops
  cout &lt;&lt; "All Scores: ";
  for (int score : scores) {
    cout &lt;&lt; score &lt;&lt; " ";
  }
  
  // Remove the LAST element
  scores.pop_back(); 
  
  return 0;
}</code></pre>

<h2>Iterators and Algorithms in Action</h2>
<p>
    Here is an example of combining an STL Container (Vector), Iterators (<code class="language-cpp">begin()</code> and <code class="language-cpp">end()</code>), and an STL Algorithm (<code class="language-cpp">sort()</code>) to sort an array in just one line of code!
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;vector&gt;
#include &lt;algorithm&gt; // Required for STL algorithms like sort()

using namespace std;

int main() {
    vector&lt;int&gt; numbers = {50, 20, 90, 10, 30};

    cout &lt;&lt; "Unsorted: ";
    for(int n : numbers) cout &lt;&lt; n &lt;&lt; " "; // Outputs: 50 20 90 10 30

    // Calling the STL Sorting Algorithm
    // We pass it an Iterator pointing to the start, and an Iterator pointing to the end!
    sort(numbers.begin(), numbers.end());

    cout &lt;&lt; "\nSorted: ";
    for(int n : numbers) cout &lt;&lt; n &lt;&lt; " "; // Outputs: 10 20 30 50 90

    return 0;
}</code></pre>

<h2>Other Crucial Containers to Know</h2>
<ul>
    <li><code class="language-cpp">std::map</code>: Stores data in Key-Value pairs (like a Python Dictionary). Essential for fast lookups.</li>
    <li><code class="language-cpp">std::set</code>: Stores unique elements. Automatically sorts them, and ignores duplicates.</li>
    <li><code class="language-cpp">std::stack</code>: A LIFO (Last-In-First-Out) data structure. Like a stack of plates.</li>
    <li><code class="language-cpp">std::queue</code>: A FIFO (First-In-First-Out) data structure. Like a line at the grocery store.</li>
</ul>
