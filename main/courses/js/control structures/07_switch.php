<h1 id="switchstmt">Switch Statements in JavaScript</h1>

<h2>What is a Switch Statement?</h2>
<p>A switch statement is useful when you have many possible values to check. It's cleaner than writing many if-else if statements.</p>

<h2>Basic Syntax</h2>

<img src="courses/js/control%20structures/img/scr_7_syntax.png" width="900px" alt="Switch Syntax">

<pre><code class="language-javascript">
switch (expression) {
    case value1:
        // code to execute if expression === value1
        break;
    case value2:
        // code to execute if expression === value2
        break;
    default:
        // code to execute if no cases match
}
            </code></pre>

<p><strong>Key points:</strong></p>
<ul>
    <li>Uses strict equality (<code>===</code>) for comparison</li>
    <li><code>break</code> prevents fall-through to next case</li>
    <li><code>default</code> is optional but recommended</li>
    <li>Multiple cases can share the same code block</li>
</ul>

<h2>Simple Switch Example</h2>

<img src="courses/js/control%20structures/img/scr_7_simple.png" width="900px" alt="Simple Switch Example">

<pre><code class="language-javascript">
let day = "Monday";

switch (day) {
    case "Monday":
        console.log("Start of the work week");
        break;
    case "Tuesday":
        console.log("Tuesday");
        break;
    case "Wednesday":
        console.log("Hump day");
        break;
    case "Thursday":
        console.log("Almost Friday!");
        break;
    case "Friday":
        console.log("TGIF!");
        break;
    case "Saturday":
    case "Sunday":
        console.log("Weekend!");
        break;
    default:
        console.log("Invalid day");
}
            </code></pre>

<h2>Multiple Cases with Same Code</h2>
<p>Group cases together when they should execute the same code:</p>

<img src="courses/js/control%20structures/img/scr_7_multiple.png" width="900px" alt="Multiple Cases">

<pre><code class="language-javascript">
let fruit = "apple";

switch (fruit) {
    case "apple":
    case "orange":
    case "banana":
        console.log("This is a fruit");
        break;
    case "carrot":
    case "broccoli":
        console.log("This is a vegetable");
        break;
    default:
        console.log("Unknown item");
}
            </code></pre>

<h2>Switch with Expressions</h2>
<p>You can use expressions in switch statements, though if-else is often clearer for ranges:</p>

<img src="courses/js/control%20structures/img/scr_7_expression.png" width="900px" alt="Switch with Expressions">

<pre><code class="language-javascript">
let grade = 85;
let letterGrade;

switch (true) {
    case grade >= 90:
        letterGrade = "A";
        break;
    case grade >= 80:
        letterGrade = "B";
        break;
    case grade >= 70:
        letterGrade = "C";
        break;
    case grade >= 60:
        letterGrade = "D";
        break;
    default:
        letterGrade = "F";
}

console.log(letterGrade);  // "B"
            </code></pre>

<h2>Switch with Fall-Through</h2>
<p>Omitting <code>break</code> causes fall-through to the next case (usually not desired):</p>

<img src="courses/js/control%20structures/img/scr_7_fallthrough.png" width="900px" alt="Switch Fall-Through">

<pre><code class="language-javascript">
let month = 2;
let days;

switch (month) {
    case 1:
    case 3:
    case 5:
    case 7:
    case 8:
    case 10:
    case 12:
        days = 31;
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        days = 30;
        break;
    case 2:
        days = 28;
        break;
    default:
        days = "Invalid month";
}

console.log(`This month has ${days} days`);  // "This month has 28 days"
            </code></pre>

<h2>Switch vs If-Else Comparison</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Feature</th>
        <th>Switch</th>
        <th>If-Else</th>
    </tr>
    <tr>
        <td>Exact matches</td>
        <td>Better</td>
        <td>Less clear</td>
    </tr>
    <tr>
        <td>Ranges/comparisons</td>
        <td>Awkward</td>
        <td>Better</td>
    </tr>
    <tr>
        <td>Multiple conditions per branch</td>
        <td>Not possible directly</td>
        <td>Easy</td>
    </tr>
    <tr>
        <td>Readability (many cases)</td>
        <td>Better</td>
        <td>Chain becomes long</td>
    </tr>
    <tr>
        <td>Type coercion</td>
        <td>Strict (===)</td>
        <td>Whatever you want</td>
    </tr>
</table>

<h2>When to Use Switch vs If-Else</h2>

<!-- Switch Example -->
<h3>Use Switch For:</h3>
<p>Many exact value matches</p>

<pre><code class="language-javascript">
// Better with switch
let command = "open";

switch (command) {
    case "open":
        console.log("Opening file");
        break;
    case "close":
        console.log("Closing file");
        break;
    case "save":
        console.log("Saving file");
        break;
    case "delete":
        console.log("Deleting file");
        break;
    default:
        console.log("Unknown command");
}
            </code></pre>

<!-- If-Else Example -->
<h3>Use If-Else For:</h3>
<p>Ranges and complex conditions</p>

<pre><code class="language-javascript">
// Better with if-else
let score = 85;

if (score >= 90) {
    console.log("A");
} else if (score >= 80) {
    console.log("B");
} else if (score >= 70) {
    console.log("C");
} else if (score >= 60) {
    console.log("D");
} else {
    console.log("F");
}
            </code></pre>

<h2>Common Mistakes</h2>

<h3>❌ Forgetting break</h3>
<p>Without <code>break</code>, execution continues to the next case:</p>

<pre><code class="language-javascript">
let day = "Monday";

switch (day) {
    case "Monday":
        console.log("It's Monday");
        // Missing break!
    case "Tuesday":
        console.log("It's Tuesday");
        break;
}
// Output: "It's Monday" AND "It's Tuesday"
            </code></pre>

<h3>✅ Correct with break</h3>
<pre><code class="language-javascript">
let day = "Monday";

switch (day) {
    case "Monday":
        console.log("It's Monday");
        break;  // Correct
    case "Tuesday":
        console.log("It's Tuesday");
        break;
}
// Output: Only "It's Monday"
            </code></pre>

<h3>❌ Type mismatch</h3>
<p>Remember: switch uses strict equality (===)</p>

<pre><code class="language-javascript">
let num = "5";

switch (num) {
    case 5:        // This won't match!
        console.log("Number 5");
        break;
    case "5":      // This will match
        console.log("String '5'");
        break;
}
// Output: "String '5'"
            </code></pre>

<h2>An Empty Default is Common</h2>

<pre><code class="language-javascript">
let action = "unknown";

switch (action) {
    case "add":
        console.log("Adding");
        break;
    case "delete":
        console.log("Deleting");
        break;
    case "edit":
        console.log("Editing");
        break;
    default:
        // Do nothing for unknown actions
        // This prevents switch from processing unknown values
}
            </code></pre>

<h2>Best Practices</h2>
<ul>
    <li><strong>Always include <code>break</code></strong> unless you specifically want fall-through</li>
    <li><strong>Always include <code>default</code></strong> to handle unexpected values</li>
    <li>Use switch for exact value matching, not ranges</li>
    <li>Group similar cases without code to reduce repetition</li>
    <li>Keep case code blocks short - move complex logic to functions</li>
    <li>Remember: switch uses strict equality (===)</li>
    <li>Use if-else when conditions are complex or involve ranges</li>
</ul>

<div class="navigation">
    <a href="06_ternary.php">← Back to Ternary Operator</a>
    <a href="intro_control.php">Back to Introduction</a>
</div>