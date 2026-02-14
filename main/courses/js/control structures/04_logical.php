<h1 id="logops">Logical Operators</h1>

<h2>What are Logical Operators?</h2>
<p>Logical operators allow you to combine multiple conditions together. They are essential for creating more complex decision logic.</p>

<h2>AND Operator (&&)</h2>
<p>The AND operator returns true only when <strong>both</strong> conditions are true.</p>

<img src="courses/js/control%20structures/img/scr_4_and.png" width="900px" alt="AND Operator">

<pre><code class="language-javascript">
let age = 25;
let hasTicket = true;

if (age >= 18 && hasTicket) {
    console.log("You can enter the concert");
}

// More examples
let isWeekend = true;
let isSunny = true;

if (isWeekend && isSunny) {
    console.log("Perfect day for a picnic!");
}

// Both conditions must be true
console.log(true && true);   // true
console.log(true && false);  // false
console.log(false && true);  // false
console.log(false && false); // false
            </code></pre>

<h2>OR Operator (||)</h2>
<p>The OR operator returns true when <strong>at least one</strong> condition is true.</p>

<img src="courses/js/control%20structures/img/scr_4_or.png" width="900px" alt="OR Operator">

<pre><code class="language-javascript">
let day = "Saturday";

if (day === "Saturday" || day === "Sunday") {
    console.log("It's the weekend!");
}

// Another example
let hasCard = false;
let hasCash = true;

if (hasCard || hasCash) {
    console.log("You can make a purchase");
}

// Truth table for OR
console.log(true || true);   // true
console.log(true || false);  // true
console.log(false || true);  // true
console.log(false || false); // false
            </code></pre>

<h2>NOT Operator (!)</h2>
<p>The NOT operator reverses a boolean value. True becomes false, and false becomes true.</p>

<img src="courses/js/control%20structures/img/scr_4_not.png" width="900px" alt="NOT Operator">

<pre><code class="language-javascript">
let isRaining = false;

if (!isRaining) {
    console.log("No umbrella needed!");
}

// More examples
let isLoggedIn = true;

if (!isLoggedIn) {
    console.log("Please log in");
} else {
    console.log("Welcome back!");
}

// NOT examples
console.log(!true);  // false
console.log(!false); // true
console.log(!5);     // false (5 is truthy)
console.log(!"");    // true (empty string is falsy)
            </code></pre>

<h2>Combining Logical Operators</h2>
<p>You can combine all three logical operators for complex conditions:</p>

<img src="courses/js/control%20structures/img/scr_4_combined.png" width="900px" alt="Combined Logical Operators">

<pre><code class="language-javascript">
let age = 25;
let hasID = true;
let isVIP = false;

// Complex condition with () for clarity
if ((age >= 21 && hasID) || isVIP) {
    console.log("Entry granted");
}

// Another example
let isMorning = true;
let hasCoffee = false;
let isWeekday = true;

if (isMorning && !hasCoffee && isWeekday) {
    console.log("Need coffee ASAP!");
}

// Example with multiple ORs
if (day === "Monday" || day === "Tuesday" || day === "Wednesday") {
    console.log("Early in the week");
}
            </code></pre>

<h2>Order of Operations</h2>
<p>Logical operators are evaluated in order:</p>
<ol>
    <li><code>!</code> (NOT) - evaluated first</li>
    <li><code>&&</code> (AND) - evaluated second</li>
    <li><code>||</code> (OR) - evaluated last</li>
</ol>

<p>Use parentheses <code>()</code> to make complex conditions clearer and ensure correct evaluation:</p>

<pre><code class="language-javascript">
let a = true;
let b = false;
let c = true;

// Without parentheses (confusing)
if (a || b && c) {  // evaluates as a || (b && c)
    console.log("This runs");
}

// With parentheses (clear)
if ((a || b) && c) {  // different meaning
    console.log("This might not run");
}
            </code></pre>

<h2>Truth Tables</h2>
<table border="1" cellpadding="10">
    <tr>
        <th colspan="2">AND (&&)</th>
        <th colspan="2">OR (||)</th>
        <th>NOT (!)</th>
    </tr>
    <tr>
        <td>A</td>
        <td>B</td>
        <td>A && B</td>
        <td>A || B</td>
        <td>!A</td>
    </tr>
    <tr>
        <td>T</td>
        <td>T</td>
        <td>T</td>
        <td>T</td>
        <td>F</td>
    </tr>
    <tr>
        <td>T</td>
        <td>F</td>
        <td>F</td>
        <td>T</td>
        <td>-</td>
    </tr>
    <tr>
        <td>F</td>
        <td>T</td>
        <td>F</td>
        <td>T</td>
        <td>T</td>
    </tr>
    <tr>
        <td>F</td>
        <td>F</td>
        <td>F</td>
        <td>F</td>
        <td>-</td>
    </tr>
</table>

<h2>Best Practices</h2>
<ul>
    <li>Use parentheses for clarity, especially with complex conditions</li>
    <li>Keep conditions readable - break up very long conditions across multiple lines</li>
    <li>Use meaningful variable names so conditions are self-documenting</li>
    <li>Avoid deeply nested logical operators</li>
</ul>