<h1>Inheritance and Polymorphism</h1>
<p>
    One of the core tenets of Object-Oriented Programming is <strong>Inheritance</strong>. It allows us to create new classes that reuse, extend, and modify behavior that is defined in other classes.
</p>
<p>
    The class whose members are inherited is called the <em>Base class</em> (or parent), and the class that inherits those members is called the <em>Derived class</em> (or child).
</p>

<h2>Inheritance</h2>
<p>
    To inherit from a class, use the colon symbol <code class="language-cpp">:</code> followed by an access specifier (like <code class="language-cpp">public</code>) and the name of the Base class.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

// Base class (Parent)
class Vehicle {
  public:
    string brand = "Ford";
    
    void honk() {
      cout &lt;&lt; "Tuut, tuut! \n";
    }
};

// Derived class (Child)
// The Car class automatically inherits brand and honk() from Vehicle!
class Car : public Vehicle {
  public:
    string model = "Mustang";
};

int main() {
  Car myCar;
  
  // Calling a method that was inherited from the Vehicle parent
  myCar.honk();
  
  // Accessing an inherited variable, plus the child's own variable
  cout &lt;&lt; myCar.brand + " " + myCar.model &lt;&lt; endl;
  
  return 0;
}</code></pre>

<h3>Why use Inheritance?</h3>
<ul>
    <li><strong>Code Reusability:</strong> You don't have to write the same <code class="language-cpp">honk()</code> code for Trucks, SUVs, and Motorcycles. They can all just inherit it from Vehicle.</li>
    <li><strong>Organization:</strong> It creates a logical hierarchy in your program (e.g., Animal &gt; Mammal &gt; Dog &gt; Poodle).</li>
</ul>

<div class="alert alert-info">
    <strong>Protected Access Specifier:</strong> We learned about <code class="language-cpp">public</code> and <code class="language-cpp">private</code> earlier. <code class="language-cpp">protected</code> is similar to private (in that nobody outside the class can touch it), but <strong>unlike</strong> private, <code class="language-cpp">protected</code> variables <em>can</em> be accessed by derived child classes!
</div>

<h2>Multilevel / Multiple Inheritance</h2>
<p>
    A class can jump multiple generations (<code class="language-cpp">Car</code> inherits from <code class="language-cpp">Vehicle</code>, which inherits from <code class="language-cpp">Machine</code>) known as Multilevel Inheritance. 
    A class can also inherit directly from more than one base class simultaneously (e.g., <code class="language-cpp">class Bat : public Mammal, public WingedAnimal</code>). This is called Multiple Inheritance, though it can get complex and lead to the infamous "Diamond Problem".
</p>

<h2>Polymorphism (Method Overriding)</h2>
<p>
    Polymorphism means "many forms". It occurs when we have many classes that are related to each other by inheritance.
    While Inheritance lets us inherit methods from a Base class, <strong>Polymorphism</strong> allows us to use those methods to perform different tasks.
</p>
<p>
    For example, imagine an <code class="language-cpp">Animal</code> base class with a method <code class="language-cpp">animalSound()</code>. Inherited classes like <code class="language-cpp">Pig</code> or <code class="language-cpp">Cat</code> would override that method to make it do something completely different.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

// Base class
class Animal {
  public:
    void animalSound() {
      cout &lt;&lt; "The animal makes a sound \n";
    }
};

// Derived class 1
class Pig : public Animal {
  public:
    // We OVERRIDE the parent method by writing our own version!
    void animalSound() {
      cout &lt;&lt; "The pig says: wee wee \n";
    }
};

// Derived class 2
class Dog : public Animal {
  public:
    // We OVERRIDE the parent method by writing our own version!
    void animalSound() {
      cout &lt;&lt; "The dog says: bow wow \n";
    }
};

int main() {
  Animal myAnimal;
  Pig myPig;
  Dog myDog;

  // Polymorphism in action: 
  // Calling the exact same method name produces entirely different results!
  myAnimal.animalSound();
  myPig.animalSound();
  myDog.animalSound();
  
  return 0;
}</code></pre>
<p>
    However, standard polymorphism alone is not enough if we are storing these objects using pointers to their Base class. To achieve true runtime polymorphism, C++ requires the use of <strong>Virtual Functions</strong>, which we will cover next!
</p>
