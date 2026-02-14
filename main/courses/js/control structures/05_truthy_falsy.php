<h1 id="truthyfalsy">Truthy and Falsy Values in JavaScript</h1>

<h2>What are Truthy and Falsy Values?</h2>
<p>In JavaScript, values have an inherent boolean value when used in a condition. JavaScript considers some values as "falsy" (treated as false) and others as "truthy" (treated as true).</p>

<img src="courses/js/control%20structures/img/scr_5_truthy_falsy.png" width="900px" alt="Truthy and Falsy Overview">

<h2>Falsy Values</h2>
<p>These 6 values are considered <strong>falsy</strong> in JavaScript:</p>

<pre><code class="language-javascript">
// All falsy values:
false        // The boolean false
0            // The number zero
""           // Empty string
null         // null
undefined    // undefined
NaN          // Not a Number

// Examples in conditions
let falseValue = false;
let zero = 0;
let emptyString = "";
let nullValue = null;
let undefinedValue = undefined;
let notANumber = NaN;

if (falseValue) { }       // This block WON'T run
if (zero) { }             // This block WON'T run
if (emptyString) { }      // This block WON'T run
if (nullValue) { }        // This block WON'T run
if (undefinedValue) { }   // This block WON'T run
if (notANumber) { }       // This block WON'T run
            </code></pre>

<h2>Practical Falsy Example</h2>

<img src="courses/js/control%20structures/img/scr_5_falsy_example.png" width="900px" alt="Falsy Example">

<pre><code class="language-javascript">
let username = "";

if (username) {
    console.log(`Welcome, ${username}`);
} else {
    console.log("Please enter a username");
}
// Output: "Please enter a username"

// Practical example with numbers
let itemCount = 0;

if (itemCount) {
    console.log(`You have ${itemCount} items`);
} else {
    console.log("Your cart is empty");
}
// Output: "Your cart is empty"
            </code></pre>

<h2>Truthy Values</h2>
<p><strong>Everything else is truthy</strong> in JavaScript:</p>

<img src="courses/js/control%20structures/img/scr_5_truthy.png" width="900px" alt="Truthy Values">

<pre><code class="language-javascript">
// All truthy values (everything not falsy!):
true         // The boolean true
1            // Any non-zero number
"hello"      // Any non-empty string
[]           // Arrays (even empty!)
{}           // Objects (even empty!)
"0"          // String "0" is truthy!
" "          // String with space is truthy!

// Examples in conditions
let trueValue = true;
let number = 42;
let message = "hello";
let items = [];
let person = {};

if (trueValue) { }   // This block WILL run
if (number) { }      // This block WILL run
if (message) { }     // This block WILL run
if (items) { }       // This block WILL run (even if empty!)
if (person) { }      // This block WILL run (even if empty!)
            </code></pre>

<h2>Common Truthy/Falsy Gotchas</h2>

<img src="courses/js/control%20structures/img/scr_5_gotchas.png" width="900px" alt="Truthy/Falsy Gotchas">

<pre><code class="language-javascript">
// IMPORTANT: Be careful with these!

let arr = [];           // Empty array is TRUTHY!
if (arr) {
    console.log("This runs!");  // It runs!
}

// But to check if array is empty:
if (arr.length) {
    console.log("Array has items");
} else {
    console.log("Array is empty");  // This runs
}

// String "0" is truthy, not falsy!
let zeroString = "0";
if (zeroString) {
    console.log("This runs!");  // It runs!
}

// Regular zero is falsy
let zeroNumber = 0;
if (zeroNumber) {
    console.log("This won't run");
} else {
    console.log("Zero is falsy");  // This runs
}
            </code></pre>

<h2>Using Logical Operators with Truthy/Falsy</h2>

<pre><code class="language-javascript">
// Check if variable has a value
let user = null;

if (user) {
    console.log("User exists");
} else {
    console.log("No user found");  // This runs
}

// Use || to provide default values
let name = "";
let displayName = name || "Guest";
console.log(displayName);  // "Guest"

// Use && for conditional execution
let isLoggedIn = true;
let userRole = "admin";

if (isLoggedIn && userRole === "admin") {
    console.log("Show admin panel");  // This runs
}
            </code></pre>

<h2>Comparison: Explicit vs Implicit</h2>

<pre><code class="language-javascript">
let count = 5;

// Implicit (relying on truthy/falsy)
if (count) {
    console.log("Count exists");
}

// Explicit (more clear)
if (count > 0) {
    console.log("Count is greater than 0");
}
if (count !== 0) {
    console.log("Count is not zero");
}

// Both work, but explicit is often clearer!
            </code></pre>

<h2>Summary Table</h2>
<table border="1" cellpadding="10">
    <tr>
        <th>Value</th>
        <th>Type</th>
        <th>Truthy/Falsy</th>
    </tr>
    <tr>
        <td><code>true</code></td>
        <td>Boolean</td>
        <td>Truthy</td>
    </tr>
    <tr>
        <td><code>false</code></td>
        <td>Boolean</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>1, 42, -5, 3.14</code></td>
        <td>Number (non-zero)</td>
        <td>Truthy</td>
    </tr>
    <tr>
        <td><code>0</code></td>
        <td>Number</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>"hello", "0", " "</code></td>
        <td>String (non-empty)</td>
        <td>Truthy</td>
    </tr>
    <tr>
        <td><code>""</code></td>
        <td>String (empty)</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>null</code></td>
        <td>Null</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>undefined</code></td>
        <td>Undefined</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>NaN</code></td>
        <td>Number</td>
        <td>Falsy</td>
    </tr>
    <tr>
        <td><code>[], {}</code></td>
        <td>Array, Object</td>
        <td>Truthy (always!)</td>
    </tr>
</table>

<h2>Best Practices</h2>
<ul>
    <li>When in doubt, use explicit comparisons: <code>if (count > 0)</code> instead of <code>if (count)</code></li>
    <li>For checking existence, relying on truthy/falsy is fine: <code>if (user)</code></li>
    <li>Remember arrays and objects are always truthy, even when empty</li>
    <li>Be consistent - if some checks are explicit, make them all explicit</li>
    <li>Write comments if your truthy/falsy logic might be confusing</li>
</ul>

<div class="navigation">
    <a href="04_logical.php">← Back to Logical Operators</a>
    <a href="06_ternary.php">Continue to Ternary Operator →</a>
</div>