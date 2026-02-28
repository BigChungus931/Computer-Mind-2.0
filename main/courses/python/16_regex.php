<h1>Regular Expressions (Regex)</h1>
<p>Regular Expressions (Regex) are a powerful domain-specific language used for pattern matching within strings. In Python, the <code>re</code> module provides all the tools you need to search, extract, and replace text based on complex patterns.</p>

<h2>Basic Regex Syntax</h2>
<p>Regex uses special characters to define patterns:</p>
<ul>
    <li><code>.</code>: Matches any character except newline.</li>
    <li><code>\d</code>: Matches any digit (0-9).</li>
    <li><code>\w</code>: Matches any alphanumeric character (A-Z, 0-9, _).</li>
    <li><code>+</code>: 1 or more occurrences.</li>
    <li><code>*</code>: 0 or more occurrences.</li>
    <li><code>?</code>: 0 or 1 occurrence.</li>
</ul>

<h2>Common Functions in Python</h2>
<pre><code class="language-python">import re

text = "My phone number is 123-456-7890"

# 1. Search for a pattern
match = re.search(r"\d{3}-\d{3}-\d{4}", text)
if match:
    print(f"Found: {match.group()}")

# 2. Extract all matches (e.g., all emails)
data = "Emails: test@abc.com, user@domain.org"
emails = re.findall(r"[\w.-]+@[\w.-]+", data)
print(emails)</code></pre>

<div class="alert alert-info">
    <strong>Raw Strings (r""):</strong> Always use a raw string for your regex patterns (e.g., <code>r"\d"</code>). This prevents Python from interpreting backslashes as escape characters.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Regex is powerful but can be hard to read. Use it for complex patterns (like emails or phone numbers), but for simple tasks like <code>"Hello" in text</code>, use standard string methods first.
</div>
