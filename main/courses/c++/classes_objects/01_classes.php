<h1>Classes and Objects</h1>
<p>
    C++ is an Object-Oriented Programming (OOP) language. While Procedural programming is about writing procedures or functions that perform operations on data, OOP is about creating objects that contain both data and functions tightly bound together.
</p>

<h2>Classes vs Objects</h2>
<p>
    Everything in C++ is associated with classes and objects. For example: in real life, a <code class="language-cpp">Car</code> is an object. The car has attributes, such as weight and color, and methods, such as drive and brake.
</p>
<ul>
    <li><strong>Class:</strong> A template or blueprint for creating objects. (e.g., The engineering blueprint for a Toyota Corolla)</li>
    <li><strong>Object:</strong> Exists in reality based on the class. (e.g., The physical Toyota Corolla sitting in your driveway)</li>
    <li><strong>Attributes:</strong> The variables belonging to an object. (e.g., `string color = "Red";`)</li>
    <li><strong>Methods:</strong> The functions belonging to an object. (e.g., `void drive() { ... }`)</li>
</ul>

<h2>Creating a Class and Objects</h2>
<p>
    To create a class, use the <code class="language-cpp">class</code> keyword. To create an object, you simply declare a variable whose type is the name of your class.
</p>

<pre><code class="language-cpp">#include &lt;iostream&gt;
#include &lt;string&gt;
using namespace std;

// 1. Create a Car class with some attributes
class Car {
  public: // Access specifier (explained below)
    string brand;   // Attribute
    string model;   // Attribute
    int year;       // Attribute
    
    // An internal method that belongs specifically to Car objects
    void startEngine() {
        cout &lt;&lt; "Vroom! Engine started." &lt;&lt; endl;
    }
};

int main() {
  // 2. Create an exact Object based on the Car class blueprint
  Car myObj1;
  myObj1.brand = "BMW"; // Accessing attributes and setting values
  myObj1.model = "X5";
  myObj1.year = 1999;

  // 3. Create a second, entirely distinct Object based on the same blueprint
  Car myObj2;
  myObj2.brand = "Ford";
  myObj2.model = "Mustang";
  myObj2.year = 1969;

  // Print their values
  cout &lt;&lt; myObj1.brand &lt;&lt; " " &lt;&lt; myObj1.model &lt;&lt; " " &lt;&lt; myObj1.year &lt;&lt; "\n";
  
  // Call the object's method
  myObj2.startEngine(); // Outputs: Vroom! Engine started.
  
  return 0;
}</code></pre>

<h2>Access Specifiers (Encapsulation)</h2>
<p>
    Object-oriented programming strongly encourages <strong>Encapsulation</strong>: hiding sensitive data from users outside of the object. 
    To protect data, C++ uses Access Specifiers to define how the members (attributes and methods) of a class can be accessed.
</p>

<ul>
    <li><code class="language-cpp">public</code>: Members are accessible from completely outside the class.</li>
    <li><code class="language-cpp">private</code>: Members cannot be accessed (or viewed) from outside the class at all. This is the default setting for classes.</li>
    <li><code class="language-cpp">protected</code>: Members cannot be accessed from outside the class, however, they can be accessed in inherited classes (covered later).</li>
</ul>

<pre><code class="language-cpp">class Employee {
  private:
    // Salary is private. Nobody outside this class can look at or change it!
    int salary;

  public:
    // We provide public "Setter" and "Getter" methods to safely interact with the private data.
    void setSalary(int s) {
      if (s &gt; 0) { // We can add validation logic here! No negative salaries!
          salary = s;
      }
    }
    
    int getSalary() {
      return salary;
    }
};

int main() {
  Employee myObj;
  
  // myObj.salary = 50000; // ERROR! Cannot directly access a private member.
  
  myObj.setSalary(50000); // SUCCESS! Safely setting the value via a public method.
  cout &lt;&lt; myObj.getSalary(); // SUCCESS! Safely retrieving the value.
  
  return 0;
}</code></pre>

<div class="alert alert-info">
    <strong>Best Practice:</strong> It is considered good practice to declare your class attributes as <code class="language-cpp">private</code> (as often as you can) and provide <code class="language-cpp">public</code> get and set methods (getters and setters). This protects your data from being accidentally corrupted elsewhere in your program.
</div>
