<h1>Modules and Packages</h1>
<p>One of Python's greatest strengths is its modularity. You don't have to write everything from scratch—you can import code from other files (modules) or from external libraries (packages).</p>

<h2>Importing Modules</h2>
<p>You can import an entire module, or just specific parts of it.</p>

<pre><code class="language-python"># 1. Importing everything
import math
print(math.sqrt(16))

# 2. Importing specific parts
from math import pi, sin
print(pi)

# 3. Importing with an alias
import datetime as dt
print(dt.datetime.now())</code></pre>

<h2>Creating Your Own Module</h2>
<p>Any <code>.py</code> file you create is a module. If you have a file named <code>utils.py</code>, you can import it in another file in the same directory using <code>import utils</code> or <code>from utils import my_function</code>.</p>

<h2>Managing Packages with PIP</h2>
<p><strong>PIP</strong> is the package installer for Python. It allows you to download and install libraries from the Python Package Index (PyPI).</p>

<pre><code class="language-bash"># Run these in your terminal, not in Python code
pip install pandas     # Install a package
pip list               # List all installed packages
pip uninstall pandas   # Remove a package</code></pre>

<div class="alert alert-info">
    <strong>Standard Library:</strong> Python comes with 200+ built-in modules including <code>os</code> (file paths), <code>sys</code> (system info), <code>random</code>, and <code>json</code>. This is why Python is called "batteries included."
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Always put your imports at the very top of your file. This makes it clear which dependencies your script has.
</div>
