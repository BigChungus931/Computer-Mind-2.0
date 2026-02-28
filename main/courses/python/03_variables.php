<h1>Variables, Data Types, and IO</h1>
<p>Python is <strong>Dynamically Typed</strong>. This means you do not have to declare a variable's type (like <code>int</code> or <code>string</code>) before using it. Python figures out the type automatically when you assign a value.</p>

<h2>Naming Variables</h2>
<ul>
    <li>Names can contain letters, numbers, and underscores (<code>_</code>).</li>
    <li>Names cannot start with a number.</li>
    <li><strong>PascalCase:</strong> Used for Classes (e.g., <code>UserAccount</code>).</li>
    <li><strong>snake_case:</strong> Used for Variables and Functions (e.g., <code>first_name</code>).</li>
</ul>

<h2>Core Data Types</h2>
<table>
    <thead>
        <tr>
            <th>Type</th>
            <th>Description</th>
            <th>Example</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>int</strong></td>
            <td>Whole numbers.</td>
            <td><code>x = 5</code></td>
        </tr>
        <tr>
            <td><strong>float</strong></td>
            <td>Floating-point (decimal) numbers.</td>
            <td><code>y = 3.14</code></td>
        </tr>
        <tr>
            <td><strong>str</strong></td>
            <td>Text (strings).</td>
            <td><code>msg = "Hello"</code></td>
        </tr>
        <tr>
            <td><strong>bool</strong></td>
            <td>True or False.</td>
            <td><code>is_valid = True</code></td>
        </tr>
    </tbody>
</table>

<h2>Input and Output</h2>
<p>To interact with the user, use <code>input()</code> and <code>print()</code>.</p>

<pre><code class="language-python"># Output
print("Hello, user!")

# Input (always returns a string!)
name = input("Enter your name: ")
age = int(input("Enter your age: ")) # Convert string to integer</code></pre>

<div class="alert alert-warning">
    <strong>Type Casting:</strong> If you try to add a string and a number (e.g., <code>"Age is " + 25</code>), Python will throw a <code>TypeError</code>. Use <strong>Type Casting</strong> functions: <code>str(25)</code>, <code>int("10")</code>, or <code>float("3.5")</code>.
</div>

<div class="alert alert-info">
    <strong>Pythonic Tip:</strong> Use <strong>f-strings</strong> for easy output formatting: <code>print(f"Hello, {name}!")</code>. This is the modern, preferred way to print variables.
</div>
