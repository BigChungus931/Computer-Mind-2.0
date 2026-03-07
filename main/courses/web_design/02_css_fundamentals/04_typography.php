<h1>Professional Typography & Optical Alignment</h1>
<p>Typography is the soul of a design. It doesn't just convey information—it dictates how the user feels and how quickly they can absorb your message. A great web designer treats text as a living graphic element.</p>

<h2>1. The Font Loading Strategy (Avoid the "Flash")</h2>
<p>When you use Google Fonts, the browser has to download the file. If it takes too long, your text might disappear (FOIT) or jump styles (FOUT). Use <code>font-display</code> to control this.</p>

<pre><code class="language-css">@font-face {
    font-family: 'MyCustomFont';
    src: url('font.woff2') format('woff2');
    /* 'swap' shows a fallback font until the custom one is ready */
    font-display: swap;
}</code></pre>

<h3>Font Formats</h3>
<ul>
    <li><strong>WOFF2:</strong> The industry standard. Tiny file sizes, excellent compression.</li>
    <li><strong>SVG/TTF/EOT:</strong> Legacy formats. Only include them if you need to support very old versions of Internet Explorer.</li>
</ul>

<h2>2. Fluid Typography with clamp()</h2>
<p>Instead of manually changing font sizes for mobile, tablet, and desktop with media queries, use <code>clamp()</code> to make text resize smoothly.</p>

<pre><code class="language-css">h1 {
    /* Minimum: 2rem, Maximum: 5rem, Preferred: 8vw */
    font-size: clamp(2rem, 8vw, 5rem);
}</code></pre>

<h2>3. Mastering HSL Color Logic</h2>
<p>Professional design systems use HSL (Hue, Saturation, Lightness) because it's programmatically logical. You can create a full color palette from a single hue.</p>

<pre><code class="language-css">:root {
    --h: 210; /* Blue */
    --s: 80%;
    
    --primary: hsl(var(--h), var(--s), 50%);
    --primary-light: hsl(var(--h), var(--s), 90%);
    --primary-dark: hsl(var(--h), var(--s), 20%);
    --primary-accent: hsl(var(--h), var(--s), 60%, 0.5); /* with transparency */
}</code></pre>

<h2>4. Text Rendering & Anti-Aliasing</h2>
<p>Some browsers can make text look "blurry" on certain screens. You can force sharp rendering with non-standard properties.</p>

<pre><code class="language-css">body {
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    text-rendering: optimizeLegibility;
}</code></pre>

<h2>5. Advanced Type Scales</h2>
<p>Establish a "Type Scale" to ensure visual harmony. A common scale is the <strong>Major Second (1.125)</strong>.</p>
<ul>
    <li>Body: 1rem (16px)</li>
    <li>H3: 1rem * 1.125 = 1.125rem</li>
    <li>H2: 1.125rem * 1.125 = 1.266rem</li>
    <li>H1: 1.266rem * 1.125 = 1.424rem</li>
</ul>

<h2>6. Readability Best Practices</h2>
<ol>
    <li><strong>Line Length:</strong> Keep lines between 45 and 75 characters. Too long, and the eye gets tired. Too short, and the rhythm is broken.</li>
    <li><strong>Line Height (Leading):</strong> For body text, use <code>1.5</code> or <code>1.6</code>. For headings, use <code>1.2</code>.</li>
    <li><strong>Contrast:</strong> Use white text on dark backgrounds only for highlights. Dark text on a light (but not pure #FFF) background is the most readable.</li>
</ol>

<div class="alert alert-info">
    <strong>UX Secret:</strong> "Optical Kerning" can be simulated in CSS using <code>letter-spacing: -0.02em;</code> for very large headings. It makes them look tighter and more professional.
</div>

<p>By treating typography as a technical system rather than just a choice of font, you ensure your designs are inclusive, high-performing, and beautiful on every device.</p>
