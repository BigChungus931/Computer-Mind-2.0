<h1>Modern Responsive Design: Mobile-First & Beyond</h1>
<p>Responsive design is no longer just about "making it fit on a phone." It's about data efficiency, accessibility, and using modern browser APIs to create Truly Fluid interfaces. We are moving away from fixed "breakpoints" and toward "intrinsic web design."</p>

<h2>1. The Mobile-First Paradigm</h2>
<p>Always write your base CSS for mobile screens without any media queries. Then, use <code>min-width</code> queries to "layer on" complexity as the screen gets larger. This is faster for mobile users because they don't have to skip over 1000 lines of desktop code.</p>

<pre><code class="language-css">/* Default Mobile Styles */
.nav { flex-direction: column; }

/* Tablet and larger */
@media (min-width: 768px) {
    .nav { flex-direction: row; }
}</code></pre>

<h2>2. Viewport vs. Container Queries (The New Era)</h2>
<p>Standard media queries look at the <strong>browser window</strong>. But what if a component needs to change its look based on its <strong>parent container</strong> (e.g., a sidebar widget)?</p>

<pre><code class="language-css">.card-container {
    container-type: inline-size;
}

@container (min-width: 400px) {
    .card {
        display: flex; /* Switch to horizontal layout when the BOX is wide enough */
    }
}</code></pre>

<h2>3. Responsive Images: Data Mastery</h2>
<p>Don't send a 4K image to a small phone. Use the <code>srcset</code> attribute to let the browser choose the best size.</p>

<pre><code class="language-html">&lt;img src="small.jpg"
     srcset="small.jpg 400w, medium.jpg 800w, large.jpg 1200w"
     sizes="(max-width: 600px) 400px, 800px"
     alt="A beautiful sunset"&gt;</code></pre>

<p>For more control, use the <code>&lt;picture&gt;</code> tag to serve different formats like WebP or AVIF.</p>
<pre><code class="language-html">&lt;picture&gt;
    &lt;source srcset="image.avif" type="image/avif"&gt;
    &lt;source srcset="image.webp" type="image/webp"&gt;
    &lt;img src="image.jpg" alt="Description"&gt;
&lt;/picture&gt;</code></pre>

<h2>4. Fluidity with Logical Units</h2>
<p>Avoid <code>px</code> for layouts. Use units that respond to context:</p>
<ul>
    <li><strong>% and vw/vh:</strong> Physical space.</li>
    <li><strong>em/rem:</strong> Scales with font sizes (essential for accessibility).</li>
    <li><strong>aspect-ratio:</strong> Keeps boxes square or rectangular during resize.</li>
</ul>

<pre><code class="language-css">.hero {
    padding: clamp(1rem, 5vw, 4rem); /* Space scales perfectly */
    width: 90%;
    max-width: 1200px; /* Don't let it grow too wide on giant monitors */
    margin-inline: auto; /* Modern shorthand for margin-left and margin-right */
}</code></pre>

<h2>5. Advanced Media Features</h2>
<p>Responsive design isn't just about width. You can detect user preferences too:</p>
<ul>
    <li><code>(prefers-color-scheme: dark)</code>: Automatic dark mode.</li>
    <li><code>(prefers-reduced-motion: reduce)</code>: Stop animations for users who get dizzy.</li>
    <li><code>(orientation: landscape)</code>: specific styles for turned phones.</li>
</ul>

<div class="alert alert-important">
    <strong>Design Tip:</strong> "Touch targets" (buttons, links) must be at least 44x44px. Your mouse-using desktop users won't notice, but your mobile finger-using users will LOVE it.
</div>

<p>By moving to a Mobile-First, Container-Aware, and Preference-Respecting mindset, you build websites that feel like <strong>native apps</strong> on every device.</p>
