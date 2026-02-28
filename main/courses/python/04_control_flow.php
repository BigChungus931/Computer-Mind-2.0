<h1>Operators and Control Flow</h1>
<p>Control flow allows your program to make decisions and repeat tasks. In Python, this is handled by <code>if-else</code> structures and <code>for/while</code> loops, all powered by comparison and logical operators.</p>

<h2>Python Comparison Operators</h2>
<ul>
    <li><code>==</code>: Equal to (Not to be confused with <code>=</code> which is for assignment!)</li>
    <li><code>!=</code>: Not equal to.</li>
    <li><code>&gt;</code>, <code>&lt;</code>, <code>&gt;=</code>, <code>&lt;=</code>: Standard comparisons.</li>
    <li><code>and</code>, <code>or</code>, <code>not</code>: Simple English-style logical operators.</li>
</ul>

<h2>Conditional Logic (if, elif, else)</h2>
<p>Python uses <code>elif</code> instead of <code>else if</code> to keep the code concise.</p>

<pre><code class="language-python"># A simple age checker
age = 20

if age < 18:
    print("Minor")
elif age >= 18 and age < 65:
    print("Adult")
else:
    print("Senior")</code></pre>

<h2>Looping Structures</h2>

<h3>The 'for' loop (Range and Collections)</h3>
<p>The <code>for</code> loop is used to iterate over a sequence (list, tuple, dictionary, or string).</p>

<pre><code class="language-python"># Repeating a task 5 times (0 to 4)
for i in range(5):
    print(f"Iteration number {i}")

# Iterating over a list
fruits = ["Apple", "Banana", "Cherry"]
for fruit in fruits:
    print(fruit)</code></pre>

<h3>The 'while' loop</h3>
<p>The <code>while</code> loop runs as long as a condition is <code>True</code>.</p>

<pre><code class="language-python">count = 0
while count < 3:
    print("Still counting...")
    count += 1</code></pre>

<div class="alert alert-info">
    <strong>The 'in' operator:</strong> Python has a super-handy <code>in</code> operator to check if an item exists within a collection: <code>if "Apple" in fruits: print("Found it!")</code>.
</div>

<div class="alert alert-warning">
    <strong>Pro Tip:</strong> Use <code>break</code> to exit a loop early and <code>continue</code> to skip the rest of the current iteration and move to the next one.
</div>
