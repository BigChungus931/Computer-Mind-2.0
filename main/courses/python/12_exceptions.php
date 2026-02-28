<h1>Exception Handling</h1>
<p>In Python, errors are called <strong>Exceptions</strong>. Professional developers don't just hope their code won't fail—they <strong>anticipate</strong> failure and handle it gracefully using <code>try-except</code> blocks.</p>

<h2>Basic Try-Except Block</h2>
<pre><code class="language-python">try:
    # Code that might fail
    x = 10 / 0
except ZeroDivisionError:
    # Code that runs if the error happens
    print("Error: You cannot divide by zero!")
except Exception as e:
    # A 'catch-all' for any other errors
    print(f"An unexpected error occurred: {e}")</code></pre>

<h2>The Else and Finally Clauses</h2>
<ul>
    <li><code>else</code>: Runs only if <strong>no errors</strong> occurred in the <code>try</code> block.</li>
    <li><code>finally</code>: Runs <strong>no matter what</strong> (even if the script crashes!). Perfect for closing files or database connections.</li>
</ul>

<pre><code class="language-python">try:
    file = open("log.txt", "r")
except FileNotFoundError:
    print("File missing!")
else:
    print("File read successfully.")
finally:
    print("Cleaning up resources...")</code></pre>

<h2>Raising Your Own Exceptions</h2>
<p>You can force an error to happen using the <code>raise</code> keyword. This is useful for validating data inside your own functions.</p>

<pre><code class="language-python">def check_age(age):
    if age < 0:
        raise ValueError("Age cannot be negative!")
    return age</code></pre>

<div class="alert alert-info">
    <strong>EAFP vs LBYL:</strong> Python follows the <em>"Easier to Ask for Forgiveness than Permission"</em> (EAFP) philosophy. Instead of checking if a file exists before opening it (LBYL), it's more Pythonic to just try opening it and catch the error if it fails.
</div>

<div class="alert alert-warning">
    <strong>Warning:</strong> Avoid using a bare <code>except:</code> without specifying an error type. This can hide important bugs like <code>KeyboardInterrupt</code> or <code>SystemExit</code>.
</div>
