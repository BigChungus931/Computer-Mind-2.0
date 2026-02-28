<h1>Lambda Functions</h1>
<p>Lambda functions are small, anonymous functions defined without a name. They are often called "one-liners" because they are restricted to a single expression.</p>

<h2>Syntax and Usage</h2>
<p>The syntax for a lambda function is: <code>lambda arguments : expression</code>.</p>

<pre><code class="language-python"># A regular function
def square(x):
    return x * x

# The same thing as a lambda function
square_lambda = lambda x : x * x

print(square_lambda(5)) # 25</code></pre>

<h2>Why Use Lambda?</h2>
<p>You use lambda functions when you need a simple function for a short period of time, often as an argument to <strong>Higher-Order Functions</strong> like <code>map()</code>, <code>filter()</code>, and <code>sorted()</code>.</p>

<pre><code class="language-python"># Filtering a list of numbers to find only the evens
nums = [1, 2, 3, 4, 5, 6]
evens = list(filter(lambda x : x % 2 == 0, nums))
print(evens) # [2, 4, 6]

# Sorting a list of dictionaries by a specific key
users = [{"name": "A", "age": 30}, {"name": "B", "age": 20}]
sorted_users = sorted(users, key=lambda u: u["age"])</code></pre>

<div class="alert alert-info">
    <strong>The Philosophy:</strong> Lambda functions are part of Python's **Functional Programming** support. They make your code more "declarative"—telling the computer <em>what</em> to do rather than exactly <em>how</em> to do it step-by-step.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Don't over-use lambda functions. If the logic is more than one simple expression, define a regular function instead to keep your code readable and maintainable.
</div>
