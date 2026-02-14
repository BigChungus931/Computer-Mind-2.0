<h1 id="ternary">Ternary Operator in JavaScript</h1>

<h2>What is the Ternary Operator?</h2>
<p>The ternary operator is a shorthand way to write simple if-else statements. It's also called the conditional operator.</p>

<h2>Basic Syntax</h2>

<img src="courses/js/control%20structures/img/scr_6_ternary_syntax.png" width="900px" alt="Ternary Syntax">

<pre><code class="language-javascript">
condition ? valueIfTrue : valueIfFalse
            </code></pre>

<p><strong>Parts:</strong></p>
<ul>
    <li><code>condition</code> - expression that evaluates to true or false</li>
    <li><code>?</code> - separates condition from true case</li>
    <li><code>valueIfTrue</code> - returned if condition is true</li>
    <li><code>:</code> - separates true case from false case</li>
    <li><code>valueIfFalse</code> - returned if condition is false</li>
</ul>

<h2>Simple Example</h2>

<img src="courses/js/control%20structures/img/scr_6_simple.png" width="900px" alt="Simple Ternary Example">

<pre><code class="language-javascript">
// Using if-else
let age = 20;
let status;

if (age >= 18) {
    status = "adult";
} else {
    status = "minor";
}

console.log(status);  // "adult"


// Same thing with ternary
let age = 20;
let status = age >= 18 ? "adult" : "minor";

console.log(status);  // "adult"
            </code></pre>

<h2>More Examples</h2>

<img src="courses/js/control%20structures/img/scr_6_examples.png" width="900px" alt="Ternary Examples">

<pre><code class="language-javascript">
// Example 1: Check pass/fail
let score = 85;
let result = score >= 60 ? "Pass" : "Fail";
console.log(result);  // "Pass"


// Example 2: Determine pricing
let isMember = true;
let price = isMember ? 10 : 15;
console.log(`Price: $${price}`);  // "Price: $10"


// Example 3: Display message
let hasNotifications = true;
let message = hasNotifications ? "You have messages" : "No messages";
console.log(message);  // "You have messages"


// Example 4: Simple calculations
let items = 5;
let totalPrice = items > 0 ? items * 10 : 0;
console.log(totalPrice);  // 50
            </code></pre>

<h2>Assigning to Variables</h2>

<pre><code class="language-javascript">
// Very common pattern - assign result to variable
let userAge = 25;
let canVote = userAge >= 18 ? true : false;

// Even simpler
let canVote = userAge >= 18;  // No ternary needed!

// But useful when values are different
let userType = userAge >= 65 ? "Senior" : userAge >= 18 ? "Adult" : "Minor";
console.log(userType);  // "Adult"
            </code></pre>

<h2>Ternary in Function Calls</h2>

<img src="courses/js/control%20structures/img/scr_6_function.png" width="900px" alt="Ternary in Functions">

<pre><code class="language-javascript">
let age = 20;

// Direct in function call
console.log(age >= 18 ? "Adult" : "Minor");  // "Adult"

// Setting object properties
let user = {
    name: "John",
    status: age >= 18 ? "active" : "pending"
};

console.log(user.status);  // "active"

// In array elements
let messages = ["Welcome", age >= 21 ? "Can drink" : "Too young"];
console.log(messages[1]);  // "Too young"
            </code></pre>

<h2>Nested Ternary Operators</h2>
<p>You can nest ternary operators, but use sparingly - it gets hard to read quickly!</p>

<img src="courses/js/control%20structures/img/scr_6_nested.png" width="900px" alt="Nested Ternary">

<pre><code class="language-javascript">
// Checking multiple conditions
let score = 85;

// Using if-else (clearer)
let grade;
if (score >= 90) {
    grade = "A";
} else if (score >= 80) {
    grade = "B";
} else if (score >= 70) {
    grade = "C";
} else {
    grade = "F";
}


// Using nested ternary (harder to read)
let grade = score >= 90 ? "A" : 
            score >= 80 ? "B" : 
            score >= 70 ? "C" : "F";

console.log(grade);  // "B"
            </code></pre>

<p><strong>Important:</strong> Nested ternaries can be hard to read. Consider using if-else for complex logic instead.</p>

<h2>When to Use Ternary vs If-Else</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>Use Case</th>
        <th>Recommendation</th>
    </tr>
    <tr>
        <td>Simple assignments</td>
        <td>Ternary is perfect</td>
    </tr>
    <tr>
        <td>Two simple options</td>
        <td>Ternary is good</td>
    </tr>
    <tr>
        <td>Complex logic</td>
        <td>Use if-else for clarity</td>
    </tr>
    <tr>
        <td>Nested conditions</td>
        <td>Use if-else (unless very simple)</td>
    </tr>
    <tr>
        <td>Multiple statements</td>
        <td>Must use if-else</td>
    </tr>
</table>

<h2>Good vs Bad Examples</h2>

<pre><code class="language-javascript">
// ✓ GOOD - Simple and clear
let age = 25;
let canDrive = age >= 16 ? true : false;

// ✓ GOOD - Assigning different values
let status = isActive ? "Online" : "Offline";

// ✓ GOOD - Inline in function call
console.log(temperature > 25 ? "Hot" : "Cold");


// ✗ BAD - Multiple nested ternaries
let result = score >= 90 ? "A" : score >= 80 ? "B" : score >= 70 ? "C" : 
             score >= 60 ? "D" : "F";  // Hard to read!

// Do this instead:
let result;
if (score >= 90) result = "A";
else if (score >= 80) result = "B";
else if (score >= 70) result = "C";
else if (score >= 60) result = "D";
else result = "F";

// ✗ BAD - Complex logic in ternary
let message = score >= 75 && !isCheating && studentAttended ? 
              `Great job ${name}!` : `Try again ${name}`;
// Use if-else instead!
            </code></pre>

<h2>Best Practices</h2>
<ul>
    <li>Use ternary for simple, two-option decisions</li>
    <li>Keep ternary expressions on one line when possible</li>
    <li>Use if-else for complex logic</li>
    <li>Avoid nesting ternaries more than one level deep</li>
    <li>Use parentheses to make complex ternaries clearer: <code>(x > 5) ? "yes" : "no"</code></li>
    <li>Don't use if the condition is confusing - readability matters!</li>
</ul>

<div class="navigation">
    <a href="05_truthy_falsy.php">← Back to Truthy and Falsy</a>
    <a href="07_switch.php">Continue to Switch Statements →</a>
</div>