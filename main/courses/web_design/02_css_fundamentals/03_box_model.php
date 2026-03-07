<h1>Advanced Box Model & Space Management</h1>
<p>In CSS, everything is a box. But these boxes don't always behave as you'd expect. Understanding the interplay between width, padding, borders, and margins—especially "Margin Collapsing"—is critical for preventing layout bugs.</p>

<h2>1. The Standard vs. Alternate Box Model</h2>
<p>By default, CSS adds padding and borders <em>outside</em> the width you specify. This makes math extremely difficult.</p>

<pre><code class="language-css">.standard-box {
    width: 300px;
    padding: 20px;
    border: 5px solid black;
    /* TOTAL WIDTH: 350px (300 + 20+20 + 5+5) */
}

.border-box {
    box-sizing: border-box;
    width: 300px;
    padding: 20px;
    border: 5px solid black;
    /* TOTAL WIDTH: 300px (The content area shrinks to fit) */
}</code></pre>

<div class="alert alert-tip">
    <strong>Best Practice:</strong> Always set <code>box-sizing: border-box</code> globally. It makes all your layout math intuitive.
</div>

<h2>2. The Invisible Trap: Margin Collapsing</h2>
<p>Top and bottom margins don't always add up—sometimes they overlap. If two elements have a <code>20px</code> margin, and they sit on top of each other, the total space between them is <code>20px</code>, not <code>40px</code>!</p>

<h3>When does it happen?</h3>
<ul>
    <li>Adjacent vertical siblings.</li>
    <li>Parents and their first/last children.</li>
    <li>Empty elements.</li>
</ul>

<h3>How to "De-collapse" margins?</h3>
<p>If you need to prevent margins from merging, you can:</p>
<ul>
    <li>Add a <code>border</code> or <code>padding</code> (even 1px) to the parent.</li>
    <li>Change the <code>display</code> to <code>inline-block</code> or <code>flex</code>.</li>
    <li>Add <code>overflow: hidden</code> to the parent.</li>
</ul>

<h2>3. Content Sizing (min-content vs. max-content)</h2>
<p>Modern CSS allows elements to size themselves based on their contents rather than just fixed pixels.</p>

<pre><code class="language-css">.box {
    /* Tightens the box around the longest word */
    width: min-content;

    /* Makes the box as wide as the longest line of text */
    width: max-content;

    /* A middle ground: tries to be max-content but respects parent width */
    width: fit-content;
}</code></pre>

<h2>4. The Inset Property (Shorthand for Positioning)</h2>
<p>When using <code>position: absolute</code> or <code>fixed</code>, you can use the <code>inset</code> property instead of writing top, right, bottom, and left separately.</p>

<pre><code class="language-css">.overlay {
    position: absolute;
    /* top, right, bottom, left are all 0 */
    inset: 0;
    
    /* top/bottom: 10px, left/right: 20px */
    inset: 10px 20px;
}</code></pre>

<h2>5. Aspect Ratio Mastery</h2>
<p>In the past, keeping a div "square" or "16:9" required weird padding hacks. Now, we have an easy property.</p>

<pre><code class="language-css">.video-player {
    width: 100%;
    aspect-ratio: 16 / 9;
    object-fit: cover; /* Ensures video fills the box without stretching */
}</code></pre>

<div class="alert alert-important">
    <strong>Accessibility Note:</strong> Never use <code>width: 100vw</code> for full-width elements if you have vertical scrolling. In many browsers, <code>100vw</code> includes the scrollbar width, which will cause horizontal scrolling! Use <code>width: 100%</code> instead.
</div>

<p>By understanding exactly how boxes are sized and how they interact with their neighbors, you can build complex, fluid layouts that never "break" when the content changes.</p>
