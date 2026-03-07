<h1>The Ultimate Flexbox Masterclass</h1>
<p>Flexbox (Flexible Box Layout) is the most powerful tool for 1-dimensional layouts (rows OR columns). While Grid is for the big page structure, Flexbox is the king of components—navbars, card internals, and dynamic lists.</p>

<h2>1. The Two Pillars of Flux</h2>
<p>Flexbox always works on two axes. Your <code>flex-direction</code> determines which is which.</p>
<ul>
    <li><strong>Main Axis:</strong> Items travel along this line. Manipulated by <code>justify-content</code>.</li>
    <li><strong>Cross Axis:</strong> Perpendicular to the main axis. Manipulated by <code>align-items</code>.</li>
</ul>

<pre><code class="language-css">.container {
    display: flex;
    flex-direction: row; /* Main = Horizontal */
    justify-content: center; /* Move items horizontally */
    align-items: center; /* Move items vertically */
}</code></pre>

<h2>2. Flex Grow, Shrink & Basis (The Golden Ratio)</h2>
<p>These three properties define how an item occupies space. Use the shorthand <code>flex: [grow] [shrink] [basis];</code></p>

<ul>
    <li><strong>flex-grow:</strong> How many "shares" of the extra space an item takes. (0 = no growth).</li>
    <li><strong>flex-shrink:</strong> How an item shrinks when space is too tight. (0 = never shrink).</li>
    <li><strong>flex-basis:</strong> The "ideal" size of an item before any growing or shrinking happens.</li>
</ul>

<pre><code class="language-css">.sidebar { flex: 0 0 250px; } /* Stays exactly 250px, never grows or shrinks */
.main    { flex: 1 1 auto; }  /* Takes up all remaining space */</code></pre>

<h2>3. Mastering "Space-Between" vs. "Space-Evenly"</h2>
<ol>
    <li><strong>space-between:</strong> No space at the ends. Items are flush against the edges.</li>
    <li><strong>space-around:</strong> Equal space on both sides of every item (results in double space between items).</li>
    <li><strong>space-evenly:</strong> Exactly equal space between every item and the edges.</li>
</ol>

<h2>4. Perfect Centering (The "Modern" Way)</h2>
<p>Forget the old margin-auto vertical hacks. Flexbox makes it one line.</p>
<pre><code class="language-css">.hero {
    display: flex;
    place-items: center; /* Shorthand for justify and align */
    min-height: 500px;
}</code></pre>

<h2>5. The "Auto Margin" Superpower</h2>
<p>In a flex container, <code>margin: auto</code> is magic. If you have a navbar and want one item to stay on the right while others are on the left:</p>

<pre><code class="language-css">.navbar { display: flex; }
.login-btn { margin-left: auto; } /* Pushes it and everything after it to the right */</code></pre>

<h2>6. Handling Wrapping</h2>
<p>Flexbox tries to keep everything on one line by default. Use <code>flex-wrap: wrap</code> to allow them to flow like text.</p>

<pre><code class="language-css">.chip-cloud {
    display: flex;
    flex-wrap: wrap;
    gap: 10px; /* Modern way to add space between flex items! */
}</code></pre>

<div class="alert alert-tip">
    <strong>Browser Hack:</strong> Use <code>flex-direction: column-reverse;</code> for message feeds or comment threads to keep the newest content at the bottom and push it up as more arrives.
</div>

<p>Mastering Flexbox means you never have to guess how an element will behave. You can build components that are fluid, responsive, and geometrically perfect on every screen size.</p>
