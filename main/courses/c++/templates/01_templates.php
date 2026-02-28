<h1>Templates and Generic Programming</h1>
<p>
    Templates are one of the most powerful and defining features of C++. They allow you to write a single function or class that can operate with <em>generic types</em>. 
    This means the function or class can work seamlessly on many different data types (like an <code class="language-cpp">int</code>, <code class="language-cpp">double</code>, or even your custom <code class="language-cpp">Car</code> objects) without being rewritten for each one.
</p>
<p>
    <strong>Generic programming</strong> is an approach where generic types are used as parameters in algorithms so that they work for a massive variety of suitable data structures. It prevents severe code duplication.
</p>

<h2>Function Templates</h2>
<p>
    Imagine writing a function to find the maximum of two integers. Oh no, now you need one to find the maximum of two doubles. And now one for characters! Without templates, you would write three identical functions (Function Overloading). <strong>With templates, you write it once.</strong>
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// 1. Declare a template with a placeholder type called 'T' (for Type)
template &lt;typename T&gt;
T myMax(T x, T y) {
   // This generic code will compile out to handle whatever type 'T' turns out to be
   return (x &gt; y) ? x : y;
}

int main() {
  // 2. Call myMax and explicitly pass &lt;int&gt; as the template argument
  cout &lt;&lt; "Int Max: " &lt;&lt; myMax&lt;int&gt;(3, 7) &lt;&lt; endl;

  // 3. Call myMax for &lt;double&gt;
  cout &lt;&lt; "Double Max: " &lt;&lt; myMax&lt;double&gt;(3.14, 2.71) &lt;&lt; endl;

  // 4. Call myMax for &lt;char&gt;
  cout &lt;&lt; "Char Max: " &lt;&lt; myMax&lt;char&gt;('g', 'e') &lt;&lt; endl;

  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Type Inference:</strong> In modern C++, if the compiler can clearly guess what 'T' is based on the regular arguments you provide, you don't even need to write the angle brackets! For example, <code class="language-cpp">myMax(3, 7)</code> perfectly infers that 'T' is an <code class="language-cpp">int</code>.
</div>

<h2>Class Templates</h2>
<p>
    Like function templates, class templates are incredibly useful when a class defines something that is independent of the data type it holds. 
    This is best utilized for data structures like Linked Lists, Binary Trees, Stacks, Queues, and Arrays that should be capable of holding *any* type of object.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// We define a generic class that holds two elements of type T
template &lt;typename T&gt;
class Pair {
  private:
    T first;
    T second;
    
  public:
    // Constructor uses the generic type 'T'
    Pair(T a, T b) {
      first = a;
      second = b;
    }
    
    // Method returns the generic type 'T'
    T getMax() {
      return (first &gt; second) ? first : second;
    }
};

int main() {
  // A Pair object specifically tracking Integers
  Pair&lt;int&gt; myInts(100, 75);
  cout &lt;&lt; "Max Int: " &lt;&lt; myInts.getMax() &lt;&lt; endl;
  
  // A Pair object specifically tracking Doubles
  Pair&lt;double&gt; myDoubles(10.5, 99.9);
  cout &lt;&lt; "Max Double: " &lt;&lt; myDoubles.getMax() &lt;&lt; endl;
  
  return 0;
}</code></pre>

<h2>Why use <code class="language-cpp">typename</code> vs <code class="language-cpp">class</code>?</h2>
<p>
    In the context of <code class="language-cpp">template &lt;typename T&gt;</code>, the keywords <code class="language-cpp">typename</code> and <code class="language-cpp">class</code> mean exactly the same thing. You can write <code class="language-cpp">template &lt;class T&gt;</code> if you prefer. However, modern C++ style guides strongly prefer <code class="language-cpp">typename</code> because 'T' might be a primitive (like <code class="language-cpp">int</code>), meaning it's literally not a "class".
</p>
