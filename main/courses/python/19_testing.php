<h1>Testing and Debugging</h1>
<p>In professional development, writing code is only 50% of the job. The other 50% is ensuring that the code <strong>works</strong> and finding out why it doesn't when things go wrong. Python provides built-in tools for both of these critical tasks.</p>

<h2>Unit Testing with 'unittest'</h2>
<p>A <strong>Unit Test</strong> is a small script that tests a specific part of your code (like a single function). Python's <code>unittest</code> module is inspired by Java's JUnit.</p>

<pre><code class="language-python">import unittest

def add(a, b):
    return a + b

class TestMath(unittest.TestCase):
    def test_add(self):
        self.assertEqual(add(10, 5), 15)
        self.assertEqual(add(-1, 1), 0)

if __name__ == "__main__":
    unittest.main()</code></pre>

<h2>Debugging with 'pdb'</h2>
<p>If your code has a bug, don't just use <code>print()</code> statements. Use the Python Debugger (<code>pdb</code>). It allows you to pause your code and inspect variables in real-time.</p>

<pre><code class="language-python">import pdb

def calculate_complex_stuff(x):
    pdb.set_trace() # Code will pause here
    y = x * 2
    return y</code></pre>

<div class="alert alert-info">
    <strong>Modern Alternatives:</strong> While <code>unittest</code> is built-in, many professional teams prefer <strong>Pytest</strong> because it's simpler and more powerful. For debugging, modern IDEs like <strong>VS Code</strong> have a visual debugger that's much easier to use than <code>pdb</code>.
</div>

<div class="alert alert-warning">
    <strong>Best Practice:</strong> Don't wait until the end of your project to write tests. Write them as you go! This is called **Test-Driven Development** (TDD) and it will save you hundreds of hours of debugging in the long run.
</div>
