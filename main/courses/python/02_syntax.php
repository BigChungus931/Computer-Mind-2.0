<h1>Basic Syntax and Indentation</h1>
<p>Python's most unique feature is that it uses <strong>Indentation</strong> (whitespace) to define the structure of the code. In other languages like C++ or PHP, you use curly braces <code>{}</code>. In Python, the "gap" matters.</p>

<h2>The Rule of Indentation</h2>
<p>A block of code (like a loop or a function) starts with a colon <code>:</code> and all the code inside that block must be indented by the same number of spaces (usually 4).</p>

<pre><code class="language-python">if True:
    print("This is correctly indented")
    print("This is also inside the block")
print("This is outside the block")</code></pre>

<div class="alert alert-warning">
    <strong>Error Warning:</strong> If you mix tabs and spaces, or if your indentation is inconsistent, Python will throw an <code>IndentationError</code>. Most modern editors (like VS Code) automatically convert tabs to spaces for you.
</div>

<h2>Python Comments</h2>
<p>Comments are for humans, not computers. Use them to explain *why* you wrote a piece of code, not what it does.</p>

<pre><code class="language-python"># This is a single-line comment

"""
This is a multi-line comment
or a docstring used for documentation.
"""
print("Comments are ignored!")</code></pre>

<h2>The Statement Separator</h2>
<p>In PHP or C++, every line ends with a semicolon <code>;</code>. In Python, the end of the line is the end of the statement. You *can* use semicolons, but it is considered "un-Pythonic" and should be avoided.</p>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Follow **PEP 8**, the official style guide for Python code. It recommends using 4 spaces per indentation level and keeping lines under 79 characters for readability.
</div>
