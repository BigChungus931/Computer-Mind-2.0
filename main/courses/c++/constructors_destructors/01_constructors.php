<h1>Constructors and Destructors</h1>
<p>
    When you create an object from a class, you often need to set up its initial state right away—like ensuring a newly created BankAccount object starts with exactly $0 so that memory isn't filled with random garbage data.
    Conversely, when an object is destroyed, you might need to clean up resources it borrowed (like closing open files or returning memory to the Heap). This is where Constructors and Destructors come in.
</p>

<h2>Constructors</h2>
<p>
    A <strong>Constructor</strong> is a special method that is automatically called at the exact moment an object of a class is created. 
    It is generally used to initialize the data members of new objects.
</p>

<h3>Constructor Rules:</h3>
<ol>
    <li>The constructor has the exact same name as the class.</li>
    <li>It is always public (usually).</li>
    <li>It does not have any return type at all, not even <code class="language-cpp">void</code>.</li>
</ol>

<pre><code class="language-cpp">#include &lt;iostream&gt;
using namespace std;

class MyClass {
  public:
    int creationDate;
    
    // The Constructor
    MyClass() {
      creationDate = 2024;
      cout &lt;&lt; "A new MyClass object was just born!" &lt;&lt; "\n";
    }
};

int main() {
  // Creating an object automatically calls the constructor!
  MyClass myObj; // Instantly prints the message and sets creationDate to 2024
  
  cout &lt;&lt; "Date: " &lt;&lt; myObj.creationDate &lt;&lt; endl;
  
  return 0;
}</code></pre>

<h3>Constructor Parameters</h3>
<p>Constructors can take parameters (just like regular functions), which can be extremely useful for setting initial values for attributes dynamically when the object is instantiated.</p>

<pre><code class="language-cpp">class Car {        // The class
  public:          // Access specifier
    string brand;  // Attribute
    string model;  // Attribute
    int year;      // Attribute
    
    // Parameterized Constructor
    Car(string x, string y, int z) {
      brand = x;
      model = y;
      year = z;
    }
};

int main() {
  // We pass the parameters directly when we create the objects!
  Car carObj1("BMW", "X5", 1999);
  Car carObj2("Ford", "Mustang", 1969);

  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Default Constructor:</strong> If you do not define a constructor in your class, C++ will silently auto-generate an empty one for you to allow object creation. However, if you explicitly write a Constructor that demands parameters, C++ deletes the default one—meaning you can no longer create an object without passing those arguments!
</div>

<h2>Destructors</h2>
<p>
    A <strong>Destructor</strong> is another special member function that is automatically called right before an object is destroyed (such as when it goes out of scope, or when <code class="language-cpp">delete</code> is called on a pointer).
    Destructors are mainly used to clean up allocated memory.
</p>

<h3>Destructor Rules:</h3>
<ol>
    <li>The destructor is the exact name of the class, preceded by a tilde <code class="language-cpp">~</code>.</li>
    <li>It takes no parameters and has no return type.</li>
    <li>There can only be exactly ONE destructor per class. It cannot be overloaded.</li>
</ol>

<pre><code class="language-cpp">class DynamicBox {
  private:
    int* dataPointer; // A pointer to Heap memory

  public:
    // Constructor allocates memory on the Heap
    DynamicBox(int value) {
        dataPointer = new int(value);
        cout &lt;&lt; "Memory allocated inside constructor.\n";
    }

    // Destructor frees the Heap memory when the object dies
    ~DynamicBox() {
        delete dataPointer;
        cout &lt;&lt; "Memory freed inside destructor.\n";
    }
};

int main() {
    // A new pair of curly braces creates a local scope
    {
        // 1. Memory is allocated on the heap inside the constructor
        DynamicBox myBox(99); 
    } 
    // 2. The closing brace kills myBox! 
    // The destructor is invoked automatically, printing the "freed" message.
    
    return 0;
}</code></pre>
