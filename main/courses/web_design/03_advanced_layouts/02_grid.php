<h1>Comprehensive CSS Grid Deep Dive</h1>
<p>CSS Grid is the ultimate layout engine. Unlike Flexbox, which is one-dimensional, Grid is two-dimensional. It owns the relationship between rows and columns, allowing you to build complex "Full Page" layouts that were previously impossible without massive amounts of hacky code.</p>

<h2>1. Defining the Matrix</h2>
<p>A grid starts with a container. You define your columns and rows using fixed units (px), relative units (%), or the flexible <code>fr</code> unit.</p>

<pre><code class="language-css">.dashboard {
    display: grid;
    /* 3 Columns: 1st is 250px, 2nd takes 2 shares of extra space, 3rd takes 1 share */
    grid-template-columns: 250px 2fr 1fr;
    /* Define rows if needed, or let them be 'auto' */
    grid-template-rows: auto 1fr auto;
    gap: 20px;
}</code></pre>

<h2>2. Naming Your Layout with Template Areas</h2>
<p>Template areas turn your CSS into a visual map. This is by far the most intuitive way to build a UI.</p>

<pre><code class="language-css">.page-layout {
    display: grid;
    grid-template-areas:
        "header header header"
        "sidebar main main"
        "sidebar extra extra"
        "footer footer footer";
    grid-template-columns: 200px 1fr 1fr;
    height: 100vh;
}

.header  { grid-area: header; }
.sidebar { grid-area: sidebar; }
.main    { grid-area: main; }
.footer  { grid-area: footer; }</code></pre>

<h2>3. Intelligent Sizing: minmax() and repeat()</h2>
<p>Grid can make complex decisions for you. <code>minmax(min, max)</code> ensures a column never shrinks below a point but grows as needed.</p>

<pre><code class="language-css">/* Creates 3 columns, each between 200px and 1fr */
grid-template-columns: repeat(3, minmax(200px, 1fr));

/* The Ultimate Responsive Layout (Zero Media Queries!) */
grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));</code></pre>

<h2>4. Explicit vs. Implicit Grids</h2>
<ul>
    <li><strong>Explicit Grid:</strong> Cells you manually defined with <code>grid-template-*</code>.</li>
    <li><strong>Implicit Grid:</strong> "Ghost" cells created when you have more items than defined spots. You can style these using <code>grid-auto-rows</code> or <code>grid-auto-columns</code>.</li>
</ul>

<h2>5. Alignment in 2D Space</h2>
<p>Grid has four alignment properties:</p>
<ol>
    <li><strong>justify-items:</strong> Aligns items inside their cell (Inline axis).</li>
    <li><strong>align-items:</strong> Aligns items inside their cell (Block axis).</li>
    <li><strong>justify-content:</strong> Aligns the <em>entire grid</em> inside the container.</li>
    <li><strong>align-content:</strong> Aligns the <em>entire grid</em> vertically.</li>
</ol>

<pre><code class="language-css">.center-all {
    display: grid;
    place-items: center; /* Instant centering of everything */
}</code></pre>

<h2>6. Spanning and Overlapping</h2>
<p>Grid allows items to occupy multiple cells and even overlap each other without <code>position: absolute</code>.</p>

<pre><code class="language-css">.featured-item {
    grid-column: 1 / span 2; /* Starts at line 1, spans 2 columns */
    grid-row: 2 / 4; /* Starts at line 2, ends at line 4 */
    z-index: 2; /* It can sit ON TOP of other items */
}</code></pre>

<div class="alert alert-important">
    <strong>Dev Secret:</strong> For the most performant layouts, always use <code>gap</code> instead of <code>margin</code> inside a grid. Browsers optimize <code>gap</code> much more effectively during the layout pass.
</div>

<p>By mastering CSS Grid, you move from "making things work" to "architecting a system." You can create magazine-style layouts, complex dashboards, and flexible galleries with a fraction of the code required by legacy systems.</p>
