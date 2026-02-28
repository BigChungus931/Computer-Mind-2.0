<h1>List Comprehensions</h1>
<p>List comprehensions offer a shorter syntax when you want to create a new list based on the values of an existing list. They are a hallmark of "Pythonic" code—making it concise and readable.</p>

<h2>The Basic Syntax</h2>
<p>The syntax is: <code>newlist = [expression for item in iterable if condition == True]</code>.</p>

<pre><code class="language-python"># Regular loop to find evens
evens = []
for x in range(10):
    if x % 2 == 0:
        evens.append(x)

# The same thing as a list comprehension
evens = [x for x in range(10) if x % 2 == 0]
print(evens) # [0, 2, 4, 6, 8]</code></pre>

<h2>More Examples</h2>
<pre><code class="language-python"># Converting all strings to upper case
fruits = ["apple", "banana", "cherry"]
upper_fruits = [f.upper() for f in fruits]

# Using an if-else inside the expression
status = ["Pass" if score >= 50 else "Fail" for score in [80, 40, 90]]</code></pre>

<div class="alert alert-info">
    <strong>Why use them?</strong> List comprehensions are generally faster than regular loops and more "Pythonic" because they express the intent of the programmer more clearly.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Don't make them too complex. If your list comprehension is more than one line long, or if it uses multiple nested loops, a regular <code>for</code> loop is usually better for readability.
</div>
