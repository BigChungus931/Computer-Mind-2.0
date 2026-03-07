<h1>Selector Sorcery: Attribute, Logic & Pseudo-Selectors</h1>
<p>Selectors are how you find your targets. While classes and IDs cover 90% of your work, the remaining 10% is where professional developers shine. Powerful selectors allow you to write significantly less HTML by targeting elements based on their relationships and attributes.</p>

<h2>1. Attribute Selectors: Targeting by Metadata</h2>
<p>You can style elements based on their HTML attributes without adding any specific classes.</p>

<pre><code class="language-css">/* Targets any input with a 'disabled' attribute */
input[disabled] { opacity: 0.5; cursor: not-allowed; }

/* Targets links that point specifically to a PDF */
a[href$=".pdf"]::after { content: " (PDF File)"; }

/* Targets any element where the title starts with 'Icon' */
[title^="Icon"] { font-size: 24px; }

/* Targets any image where the ALT text contains 'Logo' */
img[alt*="Logo"] { border-radius: 50%; }</code></pre>

<h2>2. Modern Logic Selectors: :is(), :where(), and :has()</h2>
<p>These newer pseudo-classes simplify complex selectors and manage specificity.</p>

<h3>:is() and :where()</h3>
<p>Use these to group long lists of selectors. The difference? <code>:is()</code> takes the specificity of its most specific argument, while <code>:where()</code> always has <strong>zero</strong> specificity.</p>

<pre><code class="language-css">/* Old way */
header h1, main h1, footer h1 { font-size: 2rem; }

/* Modern way with :is() */
:is(header, main, footer) h1 { font-size: 2rem; }</code></pre>

<h3>The "Parent" Selector: :has()</h3>
<p>This is the "Holy Grail" of CSS. It allows you to style a parent element based on its children or their state.</p>
<pre><code class="language-css">/* Styles a card ONLY if it contains an image */
.card:has(img) { padding-top: 0; }

/* Changes the label color if the checkbox is checked */
.field:has(input:checked) label { color: green; }</code></pre>

<h2>3. Advanced Structural Pseudo-Classes</h2>
<p>Targeting items based on their position is essential for grids and lists.</p>

<ul>
    <li><strong>:nth-child(n):</strong> Target every <code>n</code>-th element.</li>
    <li><strong>:nth-of-type(n):</strong> Like nth-child, but ignores other types of elements.</li>
    <li><strong>:only-child:</strong> Styles an element if it's the only one in its parent.</li>
    <li><strong>:empty:</strong> Styles elements that have no children or text.</li>
</ul>

<pre><code class="language-css">/* Zebra striping for a table row */
tr:nth-child(even) { background: #f9f9f9; }

/* Targets all but the last item in a list */
li:not(:last-child) { margin-bottom: 20px; }

/* Target the first 3 items in a list */
li:nth-child(-n+3) { font-weight: bold; }</code></pre>

<h2>4. Pseudo-Element Mastery (::before & ::after)</h2>
<p>Pseudo-elements allow you to add design flair without polluting your HTML with "decorative" divs.</p>

<pre><code class="language-css">.quote::before {
    content: "“";
    font-size: 3rem;
    position: absolute;
    left: -20px;
    opacity: 0.3;
}

/* Tooltip implementation with zero JS */
[data-tooltip]::after {
    content: attr(data-tooltip); /* Pulls text from data-tooltip attribute */
    position: absolute;
    bottom: 100%;
    background: #333;
    color: #fff;
    padding: 5px;
    display: none;
}
[data-tooltip]:hover::after { display: block; }</code></pre>

<h2>5. State pseudo-classes</h2>
<p>Go beyond <code>:hover</code> and <code>:active</code>.</p>
<ul>
    <li><strong>:target:</strong> Styles an element when its ID matches the URL fragment (e.g., <code>yoursite.com/#section2</code>).</li>
    <li><strong>:placeholder-shown:</strong> Useful for creating floating label animations.</li>
    <li><strong>:focus-within:</strong> Styles an element if <em>any</em> child receives focus.</li>
</ul>

<div class="alert alert-important">
    <strong>Developer Tip:</strong> Use <code>:focus-visible</code> instead of <code>:focus</code> if you want the "blue ring" to only appear for keyboard users, not mouse clickers.
</div>

<p>Becoming an expert with selectors means your CSS stays small and powerful. You can create complex interactions (like tooltips or image highlights) using pure CSS, improving page speed and reliability.</p>
