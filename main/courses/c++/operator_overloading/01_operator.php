<h1>Operator Overloading</h1>
<p>
    In C++, operators like <code class="language-cpp">+</code>, <code class="language-cpp">-</code>, <code class="language-cpp">*</code>, <code class="language-cpp">==</code>, and <code class="language-cpp">&lt;&lt;</code> already know exactly how to behave with fundamental types like <code class="language-cpp">int</code> and <code class="language-cpp">double</code>. You can easily add 5 and 6 together to get 11.
</p>
<p>
    But what happens if you try to take two custom <code class="language-cpp">Vector2D</code> objects that you created and try to add them together using the <code class="language-cpp">+</code> sign? The compiler will throw an error because it has no idea how to mathematically combine two distinct objects!
</p>
<p>
    <strong>Operator Overloading</strong> allows you to redefine exactly how these operators work when they are applied to your custom classes and structs.
</p>

<h2>Syntax of Operator Overloading</h2>
<p>
    To overload an operator, we write a special function using the <code class="language-cpp">operator</code> keyword followed by the symbol we want to redefine.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

class Vector2D {
  public:
    double x, y;

    // A standard Constructor
    Vector2D(double ex, double why) {
        x = ex; 
        y = why;
    }

    // Overloading the '+' operator!
    // When compiler sees Vector2D + Vector2D, it secretly calls this function.
    Vector2D operator + (const Vector2D&amp; rightSide) {
         // Create a temporary new Vector to hold the result
         Vector2D result(0, 0);
         
         // Mathematical rules for adding two physical vectors together
         result.x = this-&gt;x + rightSide.x;
         result.y = this-&gt;y + rightSide.y;
         
         return result; // Return the brand new combined object
    }
    
    void print() { cout &lt;&lt; "Vector: (" &lt;&lt; x &lt;&lt; ", " &lt;&lt; y &lt;&lt; ")" &lt;&lt; '\n'; }
};

int main() {
    Vector2D v1(10, 5);
    Vector2D v2(2, 4);
    
    // An elegant, readable addition between two complex custom objects!
    Vector2D v3 = v1 + v2;  
    
    v3.print(); // Output: Vector: (12, 9)
    return 0;
}</code></pre>

<h2>Overloading the Output Stream (<code class="language-cpp">&lt;&lt;</code>)</h2>
<p>
    Have you ever noticed that you can do <code class="language-cpp">cout &lt;&lt; 5</code> and <code class="language-cpp">cout &lt;&lt; "Hello"</code> but if you try `cout &lt;&lt; v1`, it crashes? You can actually overload the <code class="language-cpp">&lt;&lt;</code> operator to instantly grab a string representation of your object!
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

class Character {
    public:
        string name;
        int level;
        
        Character(string n, int l) { name = n; level = l; }

        // We overload &lt;&lt; as a "friend" function so it can interact with cout's class cleanly
        friend ostream&amp; operator &lt;&lt; (ostream&amp; os, const Character&amp; c);
};

// Defining the overload outside the class
ostream&amp; operator &lt;&lt; (ostream&amp; os, const Character&amp; c) {
    os &lt;&lt; "[" &lt;&lt; c.name &lt;&lt; " - Lvl " &lt;&lt; c.level &lt;&lt; "]";
    return os;
}

int main() {
    Character hero("Aragorn", 99);
    
    // Thanks to the overload, we can print the custom object directly!
    cout &lt;&lt; "Spawning: " &lt;&lt; hero &lt;&lt; endl; // Outputs: Spawning: [Aragorn - Lvl 99]
    return 0;
}</code></pre>

<h2>Operators that CANNOT be overloaded</h2>
<p>While C++ lets you redefine nearly everything, there are a few syntax-critical exceptions to protect the integrity of the language:</p>
<ul>
    <li><code class="language-cpp">.</code> (Member Access or Dot operator)</li>
    <li><code class="language-cpp">.*</code> (Pointer-to-member operator)</li>
    <li><code class="language-cpp">::</code> (Scope resolution operator)</li>
    <li><code class="language-cpp">?:</code> (Ternary conditional operator)</li>
    <li><code class="language-cpp">sizeof</code> (Sizeof operator)</li>
</ul>
