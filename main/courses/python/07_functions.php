<h1>Functions and Parameters</h1>
<p>Functions are blocks of reusable code that only run when called. They allow you to organize your logic into small, testable pieces. In Python, you define a function using the <code>def</code> keyword.</p>

<h2>Basic Function Anatomy</h2>
<pre><code class="language-python">def greet_user(name):
    # This is a docstring to document the function
    """Greets the user by name."""
    print(f"Hello, {name}!")

greet_user("Achilles") # Calling the function</code></pre>

<h2>Return Values</h2>
<p>A function can send data back to the caller using the <code>return</code> statement. If no return is specified, the function returns <code>None</code> by default.</p>

<pre><code class="language-python">def add_numbers(a, b):
    return a + b

result = add_numbers(10, 5)
print(result) # 15</code></pre>

<h2>Arguments and Parameters</h2>
<ul>
    <li><strong>Positional Arguments:</strong> Arguments must match the order of parameters.</li>
    <li><strong>Keyword Arguments:</strong> You can call functions using <code>key=value</code> to ignore the order.</li>
    <li><strong>Default Parameters:</strong> You can provide a default value if the caller omits one.</li>
</ul>

<pre><code class="language-python">def make_coffee(size="Medium", sugar=2):
    print(f"Making a {size} coffee with {sugar} sugar.")

make_coffee(sugar=0) # Uses "Medium" for size</code></pre>

<h2>Variable Scope</h2>
<p>Variables created inside a function are <strong>local</strong> to that function. They disappear after the function finishes. Variables created outside are <strong>global</strong>.</p>

<div class="alert alert-info">
    <strong>*args and **kwargs:</strong> 
    <ul>
        <li><code>*args</code> allows you to pass a variable number of positional arguments (as a tuple).</li>
        <li><code>**kwargs</code> allows you to pass a variable number of keyword arguments (as a dictionary).</li>
    </ul>
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Always include a docstring (the <code>"""..."""</code> part) in your functions. It helps other developers (and your future self) understand what the function does without reading the code.
</div>
