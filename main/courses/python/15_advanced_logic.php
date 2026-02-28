<h1>Decorators and Generators</h1>
<p>Decorators and generators are advanced Python features that allow you to write more efficient and flexible code. They are part of what makes Python a truly "high-level" and powerful language.</p>

<h2>Python Decorators</h2>
<p>A decorator is a function that <strong>wraps</strong> another function to extend its behavior without modifying the original source code. This is perfect for logging, timing, or access control.</p>

<pre><code class="language-python"># Defining a simple decorator
def my_decorator(func):
    def wrapper():
        print("Something is happening before the function.")
        func()
        print("Something is happening after the function.")
    return wrapper

# Using the decorator with the @ symbol
@my_decorator
def say_hello():
    print("Hello, World!")

say_hello()</code></pre>

<h2>Python Generators</h2>
<p>A generator is a special type of function that returns an <strong>iterator</strong>. Unlike a regular function which returns a single value and then "dies", a generator <strong>yields</strong> values one at a time and maintains its state between each yield.</p>

<pre><code class="language-python"># A generator for infinite numbers
def count_to_three():
    yield 1
    yield 2
    yield 3

for num in count_to_three():
    print(num)</code></pre>

<div class="alert alert-info">
    <strong>Why use them?</strong> 
    <ul>
        <li><strong>Memory Efficiency:</strong> Generators don't store the entire sequence in memory—they generate items "on the fly". Perfect for processing 1GB log files.</li>
        <li><strong>Cleaner Code:</strong> Decorators allow you to separate your "main" logic from repetitive secondary tasks like logging.</li>
    </ul>
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Use generators (<code>yield</code>) whenever you are dealing with a large dataset. Loading 1,000,000 rows into a list will crash your computer; a generator will handle it smoothly.
</div>
