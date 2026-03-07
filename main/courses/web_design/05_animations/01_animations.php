<h1>Cinematic CSS: Animations & 3D High Performance</h1>
<p>Animations provide "Life" to your interface. They guide the user's eye, provide feedback, and make a site feel premium. But poorly written animations can cause "Jank" (slow, stuttering movement). This lesson covers the physics and performance of professional web motion.</p>

<h2>1. The Performance Golden Rule: "High-Performance CSS"</h2>
<p>Browsers have a very limited amount of time (16ms) to render a frame. To keep animations smooth (60fps), you must only animate properties that use <strong>GPU Acceleration</strong>.</p>

<ul>
    <li><strong>Safe to Animate:</strong> <code>transform</code> (translate, scale, rotate) and <code>opacity</code>.</li>
    <li><strong>Avoid Animating:</strong> <code>width</code>, <code>height</code>, <code>margin</code>, <code>top</code>, <code>left</code>, <code>box-shadow</code>. These trigger a "Layout" or "Paint" cycle, which is slow.</li>
</ul>

<pre><code class="language-css">/* BAD: Triggers layout recalculation */
button:hover { margin-left: 10px; }

/* GOOD: Uses GPU transform */
button:hover { transform: translateX(10px); }</code></pre>

<h2>2. Mastering Bezier Curves (The Feel of Motion)</h2>
<p>Linear motion looks robotic. Real objects have weight and momentum. Use <code>cubic-bezier</code> to customize the "swing" or "bounce" of an animation.</p>

<pre><code class="language-css">.modal {
    /* Custom 'Overshoot' bounce effect */
    transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}</code></pre>

<h2>3. 3D Space & The Perspective Layer</h2>
<p>To move things in 3D, you need <code>perspective</code>. This determines how "far" the viewer is from the Z-axis.</p>

<pre><code class="language-css">.card-container {
    perspective: 1200px;
}

.card {
    transition: transform 0.8s;
    transform-style: preserve-3d; /* Required for kids to live in 3D */
}

.card:hover {
    transform: rotateY(180deg) translateZ(50px);
}</code></pre>

<h2>4. Staggered Animations (The "Waterfall" Effect)</h2>
<p>Animating a list of items all at once looks overwhelming. Delaying each one slightly creates a professional "flow."</p>

<pre><code class="language-css">@keyframes slideUp {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.list-item {
    animation: slideUp 0.5s forwards;
}

/* Add delays to children */
.list-item:nth-child(1) { animation-delay: 0.1s; }
.list-item:nth-child(2) { animation-delay: 0.2s; }
.list-item:nth-child(3) { animation-delay: 0.3s; }</code></pre>

<h2>5. Animation Events and Loops</h2>
<p>You can create infinite background effects or pulsing notifications using <code>alternate</code> and <code>infinite</code>.</p>

<pre><code class="language-css">@keyframes pulse {
    0% { transform: scale(1); }
    100% { transform: scale(1.1); box-shadow: 0 0 20px rgba(0,0,0,0.2); }
}

.cta-button {
    /* Pulses back and forth forever */
    animation: pulse 1.5s ease-in-out infinite alternate;
}</code></pre>

<h2>6. Respecting Motion Preferences</h2>
<p>For some, moving elements cause nausea. Always include this snippet in EVERY project.</p>
<pre><code class="language-css">@media (prefers-reduced-motion: reduce) {
    *, ::before, ::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
    }
}</code></pre>

<div class="alert alert-important">
    <strong>Developer Fact:</strong> Using <code>will-change: transform;</code> tells the browser to move the element to its own "layer" on the GPU. But use it sparingly—creating too many layers will actually crash the browser's memory!
</div>

<p>By understanding the physics of easing and the hardware limitations of mobile browsers, you can create interfaces that feel alive, responsive, and incredibly polished.</p>
