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

<h2>If-Else If-Else Chain</h2>
<p>For multiple conditions, use <code>else if</code>:</p>

<img src="courses/js/control%20structures/img/scr_2_else_if.png" width="900px" alt="If-Else If Chain">

<p><strong>Important:</strong> Conditions are checked in order. Once one is true, the rest are skipped.</p>

<h2>Nested If Statements</h2>
<p>You can put if statements inside other if statements:</p>

<img src="courses/js/control%20structures/img/scr_2_nested.png" width="900px" alt="Nested If Statements">

<p><strong>Tip:</strong> Too much nesting makes code hard to read. Try to limit nesting to 2-3 levels.</p>

<h2>Best Practices</h2>
<ul>
    <li>Use meaningful variable names in conditions</li>
    <li>Keep conditions simple and easy to understand</li>
    <li>Limit nesting to 2-3 levels maximum</li>
    <li>Use consistent indentation for readability</li>
    <li>Add comments for complex logic</li>
</ul>