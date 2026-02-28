<h1>Object-Oriented PHP</h1>
<p>Modern PHP development is almost entirely Object-Oriented (OOP). While procedural PHP is great for small scripts, OOP is essential for building large, maintainable, and professional applications.</p>

<h2>The Core Concepts</h2>
<p>Imagine a "Car" as a class. A specific <strong>Tesla</strong> or <strong>Ford</strong> is an object of that class. The characteristics (Color, Model) are <strong>Properties</strong>, and the actions (Drive, Brake) are <strong>Methods</strong>.</p>

<h3>1. Classes and Objects</h3>
<p>A class is the blueprint; the object is the actual house built from that blueprint.</p>

<pre><code class="language-php">&lt;?php
class Vehicle {
    public $brand;
    
    // The Constructor: Runs automatically when object is created
    public function __construct($brand) {
        $this->brand = $brand;
    }

    public function hello() {
        return "I am a " . $this->brand;
    }
}

$myCar = new Vehicle("Tesla");
echo $myCar->hello();
?&gt;</code></pre>

<h3>2. Encapsulation (Access Modifiers)</h3>
<p>Encapsulation means hiding the internal state of an object and only showing what is necessary through a public interface.</p>
<ul>
    <li><code>public</code>: Accessible anywhere.</li>
    <li><code>private</code>: Accessible ONLY inside the class.</li>
    <li><code>protected</code>: Accessible inside the class and its children (inheritance).</li>
</ul>

<pre><code class="language-php">&lt;?php
class BankAccount {
    private $balance = 0;

    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function getBalance() {
        return "$" . $this->balance;
    }
}
?&gt;</code></pre>

<h3>3. Inheritance</h3>
<p>Child classes can inherit all properties and methods from a parent class using the <code>extends</code> keyword.</p>

<pre><code class="language-php">&lt;?php
class ElectricCar extends Vehicle {
    public $battery_life = "100%";
    
    public function showBattery() {
        return "Battery at " . $this->battery_life;
    }
}

$porsche = new ElectricCar("Taycan");
echo $porsche->hello(); // Inherited method
echo $porsche->showBattery(); // Child method
?&gt;</code></pre>

<h2>Static Methods and Properties</h2>
<p>Sometimes you need a method that belongs to the <strong>Class itself</strong> rather than a specific object. Use the <code>static</code> keyword for this.</p>

<pre><code class="language-php">&lt;?php
class MathUtils {
    public static $pi = 3.14159;
    
    public static function square($n) {
        return $n * $n;
    }
}

// Access without creating an object using "::"
echo MathUtils::$pi;
echo MathUtils::square(4);
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Use OOP to keep your code DRY (Don't Repeat Yourself). If you find yourself copying and pasting logic, it's a sign you should create a Class.
</div>
