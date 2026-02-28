<h1>Lists, Tuples, Sets, and Dictionaries</h1>
<p>Python provides four built-in data types used to store collections. Each has different properties, making it suitable for different tasks.</p>

<h2>1. Lists (Ordered and Mutable)</h2>
<p>A list is like a dynamic array. You can add, remove, and change items after the list is created.</p>

<pre><code class="language-python"># Creating a list
fruits = ["Apple", "Banana", "Cherry"]

# Accessing by index (Starts at 0!)
print(fruits[0]) # Output: Apple

# Modifying items
fruits.append("Durian") # Add to the end
fruits[1] = "Blueberry" # Change index 1</code></pre>

<h2>2. Tuples (Ordered and Immutable)</h2>
<p>Tuples are used to store multiple items in a single variable, but their content <strong>cannot be changed</strong> (it is immutable). This makes them faster and safer for data that should stay constant.</p>

<pre><code class="language-python"># Creating a tuple using parentheses
points = (10, 20, 30)

# TypeError: points[0] = 5 - This will throw an error!</code></pre>

<h2>3. Sets (Unordered and Unique)</h2>
<p>A set is a collection which is unordered, unindexed, and <strong>contains no duplicates</strong>. Useful for mathematical operations like union and intersection.</p>

<pre><code class="language-python">tags = {"AI", "Python", "Dev", "AI"}
print(tags) # Output: {'AI', 'Python', 'Dev'} - Notice no duplicates!</code></pre>

<h2>4. Dictionaries (Key-Value Pairs)</h2>
<p>Dictionaries are used to store data as key:value pairs. They are ordered (since 3.7+), changeable, and do not allow duplicates.</p>

<pre><code class="language-python"># Defining a dictionary
user = {
    "name": "Achilles",
    "role": "Programmer",
    "level": 99
}

print(user["name"]) # Output: Achilles
user["level"] = 100 # Updating value</code></pre>

<div class="alert alert-info">
    <strong>Selection Guide:</strong>
    <ul>
        <li>Use <strong>Lists</strong> for a simple ordered sequence of data.</li>
        <li>Use <strong>Tuples</strong> for fixed data (e.g., geographic coordinates).</li>
        <li>Use <strong>Sets</strong> to remove duplicates or perform math operations.</li>
        <li>Use <strong>Dictionaries</strong> to represent objects with properties.</li>
    </ul>
</div>

<div class="alert alert-warning">
    <strong>Warning:</strong> Accessing a dictionary key that doesn't exist (e.g., <code>user["age"]</code>) will throw a <code>KeyError</code>. Use <code>user.get("age")</code> to return <code>None</code> instead of crashing!
</div>
