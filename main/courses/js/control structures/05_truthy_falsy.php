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

<h2>Truthy Values</h2>
<p><strong>Everything else is truthy</strong> in JavaScript:</p>

<img src="courses/js/control%20structures/img/scr_5_truthy.png" width="900px" alt="Truthy Values">

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