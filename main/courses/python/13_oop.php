<h1>Classes and Objects (OOP)</h1>
<p>Python is an Object-Oriented Programming (OOP) language at its core. In Python, <strong>everything</strong> is an object—from simple strings to complex data models. OOP allows you to structure your code into reusable blueprints called Classes.</p>

<h2>The Class Blueprint</h2>
<p>A class is the plan (like a recipe), and an object is the actual thing (like the cake). We use the <code>class</code> keyword to define our blueprint.</p>

<pre><code class="language-python">class Robot:
    # The Constructor: Sets up the object's initial data
    def __init__(self, name, model):
        self.name = name   # Attribute
        self.model = model # Attribute

    # A Method (Function inside a class)
    def say_hello(self):
        print(f"Hello, I am {self.name}, model {self.model}!")

# Creating an instance (Object)
r1 = Robot("R2-D2", "Astromech")
r1.say_hello()</code></pre>

<h2>The mysterious 'self'</h2>
<p>The first parameter of any class method <strong>must</strong> be <code>self</code>. It points to the specific object that is currently running the code. It's how Python distinguishes between <code>r1</code>'s name and <code>r2</code>'s name.</p>

<h2>Attributes vs. Methods</h2>
<ul>
    <li><strong>Attributes:</strong> Data stored inside the object (e.g., color, price, weight).</li>
    <li><strong>Methods:</strong> Actions the object can perform (e.g., start_engine, stop_engine).</li>
</ul>

<div class="alert alert-info">
    <strong>Dunder Methods:</strong> Methods that start and end with double underscores (like <code>__init__</code>) are called "Magic" or "Dunder" methods. They allow you to define how objects behave with operators like <code>+</code> or <code>len()</code>.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Use <strong>CamelCase</strong> for class names (e.g., <code>UserAccount</code>) to distinguish them from standard variables and functions.
</div>
