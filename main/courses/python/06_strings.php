<h1>String Manipulation and Formatting</h1>
<p>In Python, strings are objects with dozens of built-in methods. Whether you need to clean user input or build complex messages, Python's string handling is world-class.</p>

<h2>Basic String Methods</h2>
<pre><code class="language-python">text = "   Python is Amazing!   "

print(text.strip())      # Removes whitespace: "Python is Amazing!"
print(text.lower())      # all lowercase
print(text.upper())      # ALL UPPERCASE
print(text.replace("Amazing", "Powerful")) # Swap words
print(text.split(" "))   # Splitting into a list</code></pre>

<h2>String Slicing</h2>
<p>Slicing allows you to extract specific parts of a string using <code>[start:stop:step]</code>.</p>

<pre><code class="language-python">s = "ComputerMind"

print(s[0:8])  # "Computer" (index 0 to 7)
print(s[8:])   # "Mind" (index 8 to the end)
print(s[::-1])  # "dniMretupmoC" (Reverses the string!)</code></pre>

<h2>The Power of f-strings</h2>
<p>Introduced in Python 3.6, <strong>Formatted String Literals</strong> (f-strings) are the fastest and most readable way to format text. Just prefix the string with <code>f</code> and use <code>{}</code> for variables or expressions.</p>

<pre><code class="language-python">name = "Daniel"
level = 10

print(f"User: {name.upper()} | Level: {level * 2}")
# Output: User: DANIEL | Level: 20</code></pre>

<div class="alert alert-info">
    <strong>Immutability:</strong> In Python, strings are <strong>immutable</strong>. This means you cannot change a character in place (e.g., <code>s[0] = 'K'</code> will error). You must always create a <em>new</em> string instead.
</div>

<div class="alert alert-warning">
    <strong>Warning:</strong> Be careful with string concatenation using <code>+</code>. In large loops, join a list of strings using <code>"".join(list)</code> instead—it is significantly more memory-efficient.
</div>
