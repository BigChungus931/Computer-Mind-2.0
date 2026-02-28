<h1>Virtual Functions and Abstract Classes</h1>
<p>
    We previously learned about polymorphism using Inheritance. However, standard object swapping has a fatal flaw in C++ known as <strong>Early Binding</strong>.
</p>
<p>
    If you have a Base class pointer (e.g., <code class="language-cpp">Animal*</code>) and you point it at a Derived class object (e.g., <code class="language-cpp">new Dog()</code>), and then you try to call an overridden method like <code class="language-cpp">animalSound()</code>, the compiler will look purely at the <em>pointer type</em> (Animal) and call the generic <code class="language-cpp">Animal::animalSound()</code> instead of the specific Dog's sound!
</p>

<h2>Virtual Functions (Late Binding)</h2>
<p>
    A <strong>Virtual Function</strong> is a member function defined in a Base class, which is overridden by a Derived class, AND you tell the compiler to wait until the program is physically running (Late Binding) to decide which version of the function to actually call.
</p>
<p>
    You make a function virtual by slapping the <code class="language-cpp">virtual</code> keyword in front of the Base class declaration.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

class Animal {
  public:
    // By marking this virtual, we tell the compiler: 
    // "Hey, if a child overrides this, USE THEIRS, not mine!"
    virtual void animalSound() {
      cout &lt;&lt; "The Generic Animal makes a sound \n";
    }
};

class Dog : public Animal {
  public:
    // Overriding the virtual method
    void animalSound() override {
      cout &lt;&lt; "The Dog says: Bark! Bark! \n";
    }
};

int main() {
  Animal* myPet;            // Base class Pointer
  Dog bingo;                // Derived Object
  myPet = &amp;bingo;           // Pointer aims at the child object

  // Because the base function is 'virtual', C++ asks: "What am I actually pointing at?"
  // It realizes it's pointing at a Dog, so it calls the Dog's sound!
  myPet-&gt;animalSound();     // Outputs: The Dog says: Bark! Bark!

  return 0;
}</code></pre>

<div class="alert alert-warning">
    <strong>Best Practice (The <code class="language-cpp">override</code> Keyword):</strong> Notice the <code class="language-cpp">override</code> keyword at the end of the Dog's method. While entirely optional, it is recommended in modern C++. It tells the compiler to double-check that you are actually spelling the base class function correctly and that it is truly virtual. If you misspell it, the compiler throws an error instead of failing silently.
</div>

<h2>Pure Virtual Functions &amp; Abstract Classes</h2>
<p>
    Sometimes, a Base class is so generic that it doesn't make sense for it to have its own implementation of a function. (E.g., What sound does a generic <code class="language-cpp">Shape</code> make? What exactly *is* an instance of a generic "Shape"?).
</p>
<p>
    A <strong>Pure Virtual Function</strong> is a virtual function in C++ for which we do not write an implementation. We simply declare it and assign it to <code class="language-cpp">= 0</code>.
</p>
<p>
    Any class containing at least one pure virtual function automatically becomes an <strong>Abstract Class</strong>.
</p>

<h3>Rules of Abstract Classes:</h3>
<ol>
    <li>You <strong>cannot</strong> create an object directly from an Abstract Class. (e.g., <code class="language-cpp">Shape s;</code> will cause a compiler error). They exist solely to act as blueprints for derived classes.</li>
    <li>If a Derived class inherits from an Abstract Class, it <strong>MUST</strong> provide an implementation for every pure virtual function, otherwise, the derived class will also become abstract!</li>
</ol>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

// This is an Abstract Class because it has a pure virtual function!
class Shape {
  public:
    // Pure Virtual Function
    virtual void draw() = 0; 
};

// Derived Class 1
class Circle : public Shape {
  public:
    // We MUST implement draw(), or Circle will also be Abstract!
    void draw() override {
        cout &lt;&lt; "Drawing a smooth Circle.\n";
    }
};

// Derived Class 2
class Rectangle : public Shape {
  public:
    void draw() override {
        cout &lt;&lt; "Drawing a sharp Rectangle.\n";
    }
};

int main() {
    // Shape myShape; // ERROR: Cannot instantiate an abstract class!

    Shape* shape1 = new Circle();
    Shape* shape2 = new Rectangle();

    shape1-&gt;draw(); // Outputs: Drawing a smooth Circle.
    shape2-&gt;draw(); // Outputs: Drawing a sharp Rectangle.

    delete shape1;
    delete shape2;
    return 0;
}</code></pre>
