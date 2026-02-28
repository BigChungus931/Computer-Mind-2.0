<h1>Inheritance and Polymorphism</h1>
<p>Inheritance and polymorphism are the two "superpowers" of Object-Oriented Programming. They allow you to build complex systems by reusing code and defining common behaviors across different objects.</p>

<h2>Class Inheritance</h2>
<p>Inheritance allows a <strong>Child Class</strong> to inherit all the attributes and methods of a <strong>Parent Class</strong>. This is perfect for defining a general type (like <code>Animal</code>) and creating specific versions (like <code>Dog</code> or <code>Cat</code>).</p>

<pre><code class="language-python">class Animal:
    def __init__(self, name):
        self.name = name

    def speak(self):
        pass # To be defined in child classes

class Dog(Animal):
    def speak(self):
        return f"{self.name} says Woof!"

class Cat(Animal):
    def speak(self):
        return f"{self.name} says Meow!"

# Creating instances
my_dog = Dog("Rex")
print(my_dog.speak())</code></pre>

<h2>The super() function</h2>
<p>If you want to add new attributes to a child class while keeping the parent's attributes, use the <code>super()</code> function. It calls the parent's <code>__init__</code> method.</p>

<pre><code class="language-python">class ElectricCar(Vehicle):
    def __init__(self, make, model, battery_size):
        # Call the parent constructor
        super().__init__(make, model)
        self.battery_size = battery_size</code></pre>

<h2>What is Polymorphism?</h2>
<p>Polymorphism (meaning "many forms") allows different classes to have methods with the <strong>same name</strong> but different behaviors. In the example above, <code>Dog</code> and <code>Cat</code> both have a <code>speak()</code> method. Python doesn't care which one is which—it just calls the correct one for that object.</p>

<div class="alert alert-info">
    <strong>Duck Typing:</strong> Python uses "Duck Typing" for polymorphism. <em>"If it walks like a duck and quacks like a duck, it's a duck."</em> If an object has a <code>speak()</code> method, Python will call it, regardless of the object's class.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Use inheritance to avoid repeating code (DRY principle), but don't over-nest your classes. A child class should be a "specialized version" of the parent.
</div>
