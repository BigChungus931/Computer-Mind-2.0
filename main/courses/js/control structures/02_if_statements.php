<h1 id="ifstmt">If Statements in JavaScript</h1>

<h2>What is an If Statement?</h2>
<p>The <code>if</code> statement is the most basic control structure. It executes code only when a specific condition is true.</p>

<h3>Basic If Statement</h3>
<p>Syntax breakdown:</p>
<ul>
    <li><code>if</code> - keyword that starts the conditional</li>
    <li><code>(condition)</code> - expression that evaluates to true or false</li>
    <li><code>{ }</code> - code block that runs if condition is true</li>
</ul>

<img src="courses/js/control%20structures/img/scr_2_if.png" width="900px" alt="Basic If Statement">

<h2>If-Else Statement</h2>
<p>Use <code>else</code> to specify code that runs when the condition is false:</p>

<img src="courses/js/control%20structures/img/scr_2_if_else.png" width="900px" alt="If-Else Statement">

<pre><code class="language-javascript">
let temperature = 15;

if (temperature > 25) {
    console.log("It's hot outside!");
} else {
    console.log("It's cool outside!");
}
            </code></pre>

<h2>If-Else If-Else Chain</h2>
<p>For multiple conditions, use <code>else if</code>:</p>

<img src="courses/js/control%20structures/img/scr_2_else_if.png" width="900px" alt="If-Else If Chain">

<pre><code class="language-javascript">
let score = 85;

if (score >= 90) {
    console.log("Grade: A");
} else if (score >= 80) {
    console.log("Grade: B");
} else if (score >= 70) {
    console.log("Grade: C");
} else if (score >= 60) {
    console.log("Grade: D");
} else {
    console.log("Grade: F");
}
            </code></pre>

<p><strong>Important:</strong> Conditions are checked in order. Once one is true, the rest are skipped.</p>

<h2>Nested If Statements</h2>
<p>You can put if statements inside other if statements:</p>

<img src="courses/js/control%20structures/img/scr_2_nested.png" width="900px" alt="Nested If Statements">

<pre><code class="language-javascript">
let age = 25;
let hasLicense = true;

if (age >= 18) {
    if (hasLicense) {
        console.log("You can drive!");
    } else {
        console.log("You need to get a license first.");
    }
} else {
    console.log("You're too young to drive.");
}
            </code></pre>

<p><strong>Tip:</strong> Too much nesting makes code hard to read. Try to limit nesting to 2-3 levels.</p>

<h2>Best Practices</h2>
<ul>
    <li>Use meaningful variable names in conditions</li>
    <li>Keep conditions simple and easy to understand</li>
    <li>Limit nesting to 2-3 levels maximum</li>
    <li>Use consistent indentation for readability</li>
    <li>Add comments for complex logic</li>
</ul>

<div class="navigation">
    <a href="intro_control.php">← Back to Introduction</a>
    <a href="03_comparison.php">Continue to Comparison Operators →</a>
</div>