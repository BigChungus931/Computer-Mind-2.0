<h1>File Handling in Python</h1>
<p>Python makes it incredibly easy to work with files on your computer. Whether you are reading a simple <code>.txt</code> log or processing a massive <code>.csv</code> data file, the process follows a simple "Open -> Action -> Close" pattern.</p>

<h2>The 'with' Statement (Context Manager)</h2>
<p>The <strong>gold standard</strong> for file handling in Python is the <code>with</code> statement. It automatically closes the file for you, even if an error occurs during processing. This prevents memory leaks and file corruption.</p>

<h3>Reading a File</h3>
<pre><code class="language-python"># Reading the entire file
with open("data.txt", "r") as file:
    content = file.read()
    print(content)

# Reading line by line (Efficient for large files)
with open("data.txt", "r") as file:
    for line in file:
        print(line.strip())</code></pre>

<h3>Writing and Appending</h3>
<ul>
    <li><code>"w"</code>: Write mode (overwrites everything).</li>
    <li><code>"a"</code>: Append mode (adds to the end).</li>
</ul>

<pre><code class="language-python">with open("new_file.txt", "w") as file:
    file.write("Hello from Computer Mind!\n")</code></pre>

<h2>Common File Modes</h2>
<table>
    <thead>
        <tr>
            <th>Mode</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>r</strong></td>
            <td>Read (Default). Errors if file doesn't exist.</td>
        </tr>
        <tr>
            <td><strong>w</strong></td>
            <td>Write. Creates file if missing, overwrites if exists.</td>
        </tr>
        <tr>
            <td><strong>a</strong></td>
            <td>Append. Adds to the end of the file.</td>
        </tr>
        <tr>
            <td><strong>x</strong></td>
            <td>Create. Errors if file already exists.</td>
        </tr>
        <tr>
            <td><strong>b</strong></td>
            <td>Binary. Used for images, PDFs, etc. (e.g., <code>"rb"</code>).</td>
        </tr>
    </tbody>
</table>

<div class="alert alert-info">
    <strong>Pythonic Tip:</strong> Use the <code>os</code> module to check if a file exists before trying to open it: <code>import os; os.path.exists("data.txt")</code>.
</div>

<div class="alert alert-warning">
    <strong>Warning:</strong> Always be careful with the <code>"w"</code> mode—it will delete your existing file content immediately without asking for confirmation!
</div>
