<h1 id="compops">Comparison Operators</h1>

<h2>What are Comparison Operators?</h2>
<p>Comparison operators are used in conditions to compare values. They return a boolean value (true or false).</p>

<h2>Basic Comparison Operators</h2>

<img src="courses/js/control%20structures/img/scr_3_comparison.png" width="900px" alt="Comparison Operators Overview">

<h2>Strict vs Loose Equality</h2>
<p>This is one of the most important concepts in JavaScript:</p>

<img src="courses/js/control%20structures/img/scr_3_strict_loose.png" width="900px" alt="Strict vs Loose Equality">

<h2>Best Practice: Always Use === and !==</h2>
<p><strong>Important:</strong> Always use strict equality (<code class="language-javascript">===</code> and <code class="language-javascript">!==</code>) to avoid unexpected type coercion and bugs.</p>

<ul>
    <li>Strict equality is safer and more predictable</li>
    <li>It's clearer what you're comparing</li>
    <li>Loose equality can lead to hard-to-find bugs</li>
    <li>Most JavaScript style guides recommend strict equality</li>
</ul>

<h2>Summary Table</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Operator</th>
        <th>Name</th>
        <th>Example</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>===</td>
        <td>Strict Equality</td>
        <td>5 === "5"</td>
        <td>false</td>
    </tr>
    <tr>
        <td>!==</td>
        <td>Strict Inequality</td>
        <td>5 !== "5"</td>
        <td>true</td>
    </tr>
    <tr>
        <td>==</td>
        <td>Loose Equality</td>
        <td>5 == "5"</td>
        <td>true</td>
    </tr>
    <tr>
        <td>!=</td>
        <td>Loose Inequality</td>
        <td>5 != "5"</td>
        <td>false</td>
    </tr>
    <tr>
        <td>&gt;</td>
        <td>Greater Than</td>
        <td>10 > 5</td>
        <td>true</td>
    </tr>
    <tr>
        <td>&lt;</td>
        <td>Less Than</td>
        <td>10 < 5</td>
        <td>false</td>
    </tr>
    <tr>
        <td>&gt;=</td>
        <td>Greater or Equal</td>
        <td>10 >= 10</td>
        <td>true</td>
    </tr>
    <tr>
        <td>&lt;=</td>
        <td>Less or Equal</td>
        <td>10 <= 9</td>
        <td>false</td>
    </tr>
</table>
