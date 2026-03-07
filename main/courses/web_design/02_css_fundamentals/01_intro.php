<h1>CSS Foundations: The Cascade, Inheritance & Specificity</h1>
<p>CSS is often called "simple to learn, impossible to master." The reason is that it isn't just a list of styles—it's a complex logic engine that determines exactly how every visible part of your page should look. Understanding the underlying rules is the difference between a clean stylesheet and a "hacky" mess.</p>

<h2>1. The "Cascading" Order</h2>
<p>When multiple CSS rules target the same element, the browser follows a hierarchy to decide which one "wins":</p>
<ol>
    <li><strong>User Agent Styles:</strong> The browser's default CSS (e.g., why <code>h1</code> is big and bold by default).</li>
    <li><strong>User Styles:</strong> Custom CSS the user may have in their browser settings (e.g., larger font sizes for accessibility).</li>
    <li><strong>Author Styles:</strong> The CSS <strong>YOU</strong> write.</li>
    <li><strong>!important:</strong> An "override" that should be used as a last resort.</li>
</ol>

<h2>2. Mastering Specificity Scoring</h2>
<p>Specificity is a 4-part weight system. Think of it like a numeric score (0, 0, 0, 0):</p>
<ul>
    <li><strong>Inline:</strong> (1, 0, 0, 0) - Styles in the <code>style</code> attribute.</li>
    <li><strong>ID:</strong> (0, 1, 0, 0) - e.g., <code>#main-header</code>.</li>
    <li><strong>Class / Pseudo-class / Attribute:</strong> (0, 0, 1, 0) - e.g., <code>.btn</code>, <code>:hover</code>, <code>[type="text"]</code>.</li>
    <li><strong>Element / Pseudo-element:</strong> (0, 0, 0, 1) - e.g., <code>div</code>, <code>p</code>, <code>::before</code>.</li>
</ul>

<pre><code class="language-css">/* Score: 0, 0, 0, 1 */
p { color: grey; }

/* Score: 0, 0, 1, 1 */
article p { color: black; }

/* Score: 0, 1, 0, 0 */
#featured-p { color: gold; }

/* The ID wins, even if it comes first in the file! */</code></pre>

<div class="alert alert-warning">
    <strong>Warning:</strong> Refrain from using <code>!important</code> to win specificity battles. It's like bringing a tank to a knife fight—it solves the immediate problem but makes future changes much harder.
</div>

<h2>3. Inheritance: Which Styles "Drip Down"?</h2>
<p>In CSS, some properties are inherited by children automatically, while others are not.</p>
<ul>
    <li><strong>Inherited:</strong> <code>color</code>, <code>font-family</code>, <code>line-height</code>, <code>text-align</code>.</li>
    <li><strong>NOT Inherited:</strong> <code>border</code>, <code>margin</code>, <code>padding</code>, <code>width</code>, <code>height</code>, <code>background</code>.</li>
</ul>

<pre><code class="language-css">body {
    color: #333; /* Every paragraph and list item will be this color */
    border: 1px solid black; /* The border will NOT appear on child elements */
}</code></pre>

<h2>4. Advanced CSS Variables (Custom Properties)</h2>
<p>Modern CSS allows for dynamic variables that can respond to calculations and media queries.</p>

<pre><code class="language-css">:root {
    --brand-primary: #3a92ff;
    --brand-dark: #1a4d8a;
    --base-spacing: 1rem;
    --header-height: 80px;
}

.card {
    background-color: #fff;
    /* Using calc() with variables */
    padding: calc(var(--base-spacing) * 2);
    /* Fallback value: blue if variable is missing */
    border-top: 5px solid var(--non-existent, blue);
}

@media (prefers-color-scheme: dark) {
    :root {
        --brand-primary: #8bc3ff;
        --brand-dark: #000;
    }
}</code></pre>

<h2>5. The "Cascade Layers" (@layer)</h2>
<p>The newest feature in CSS allows you to group styles into layers. This gives you global control over specificity, regardless of when the styles appear in the file.</p>

<pre><code class="language-css">@layer reset, base, components, utilities;

@layer base {
    h1 { margin-bottom: 2rem; }
}

@layer reset {
    * { margin: 0; padding: 0; }
}
/* Reset layer will ALWAYS lose to Base layer because of the order at the top */</code></pre>

<p>By mastering these foundations, you stop "fighting" the browser and start using its natural logic to build more lightweight, logical, and maintainable systems.</p>
