<h1>Semantic Mastery & Structuring Complex Data</h1>
<p>Semantic HTML isn't just a list of "better div names." it's a structural contract between you and the user's software. It provides context that allows search engines, screen readers, and even web scrapers to understand the <em>intent</em> of your content.</p>

<h2>1. The Semantic Layout Hierarchy</h2>
<p>A well-structured document uses containers that describe their specific role in the page lifecycle.</p>

<pre><code class="language-html">&lt;body&gt;
    &lt;header&gt;
        &lt;nav aria-label="Main Navigation"&gt;
            &lt;!-- Main menu links here --&gt;
        &lt;/nav&gt;
    &lt;/header&gt;

    &lt;main&gt;
        &lt;!-- The core unique content of this specific page --&gt;
        &lt;article&gt;
            &lt;header&gt;
                &lt;h1&gt;The Future of Web Design&lt;/h1&gt;
                &lt;p&gt;Published on &lt;time datetime="2024-05-15"&gt;May 15th&lt;/time&gt;&lt;/p&gt;
            &lt;/header&gt;
            &lt;section&gt;
                &lt;h2&gt;Introduction&lt;/h2&gt;
                &lt;p&gt;Web design is evolving...&lt;/p&gt;
            &lt;/section&gt;
            &lt;footer&gt;
                &lt;p&gt;Written by John Doe&lt;/p&gt;
            &lt;/footer&gt;
        &lt;/article&gt;

        &lt;aside&gt;
            &lt;!-- Related info: Recent posts, author bio, or ads --&gt;
        &lt;/aside&gt;
    &lt;/main&gt;

    &lt;footer&gt;
        &lt;!-- Global site info, social links, copyright --&gt;
    &lt;/footer&gt;
&lt;/body&gt;</code></pre>

<h2>2. Essential Content Tags Deep Dive</h2>
<p>Choosing the right tag for the job reduces the need for ad-hoc CSS classes.</p>
<ul>
    <li><strong>&lt;figure&gt; & &lt;figcaption&gt;:</strong> For self-contained content with a caption. Perfect for images, diagrams, or code snippets.</li>
    <li><strong>&lt;blockquote&gt; vs &lt;q&gt;:</strong> Use <code>blockquote</code> for multiline citations and <code>q</code> for inline ones. Always use the <code>cite</code> attribute to link the source.</li>
    <li><strong>&lt;address&gt;:</strong> Specifically for contact information for the nearest <code>article</code> or <code>body</code> ancestor.</li>
    <li><strong>&lt;details&gt; & &lt;summary&gt;:</strong> Native, zero-JS interactive disclosure widgets (like an accordion).</li>
</ul>

<pre><code class="language-html">&lt;details&gt;
    &lt;summary&gt;Click to reveal advanced details&lt;/summary&gt;
    &lt;p&gt;This content is hidden by default and requires no JavaScript!&lt;/p&gt;
&lt;/details&gt;</code></pre>

<h2>3. Tabular Data: Beyond Simple Grids</h2>
<p>Tables are powerful but require strict semantic markup to be accessible. Never use them for layout—only for actual data.</p>

<pre><code class="language-html">&lt;table&gt;
    &lt;caption&gt;Employee Quarterly Performance&lt;/caption&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th scope="col"&gt;Name&lt;/th&gt;
            &lt;th scope="col" colspan="2"&gt;Quarterly Results&lt;/th&gt;
        &lt;/tr&gt;
        &lt;tr&gt;
            &lt;th&gt;&lt;/th&gt; &lt;!-- Empty corner --&gt;
            &lt;th scope="col"&gt;Q1&lt;/th&gt;
            &lt;th scope="col"&gt;Q2&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;Alice Smith&lt;/th&gt;
            &lt;td&gt;95%&lt;/td&gt;
            &lt;td&gt;98%&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
    &lt;tfoot&gt;
        &lt;tr&gt;
            &lt;th scope="row"&gt;Total Average&lt;/th&gt;
            &lt;td colspan="2"&gt;96.5%&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tfoot&gt;
&lt;/table&gt;</code></pre>

<h3>Table Accessibility Attributes</h3>
<ul>
    <li><strong>scope="col/row":</strong> Explicitly tells screen readers if a header belongs to a column or a row.</li>
    <li><strong>caption:</strong> Provides a title for the table (essential for a11y).</li>
    <li><strong>rowspan/colspan:</strong> Allows a cell to span across multiple units.</li>
</ul>

<div class="alert alert-tip">
    <strong>Pro Tip:</strong> Use the <code>&lt;mark&gt;</code> tag to highlight search results or relevant keywords in a text block. It gives a default yellow background that is semantically recognized.
</div>

<p>By using these semantic blocks, you create a "Lean" Document. Your CSS becomes easier to write because you can target tags directly (e.g., <code>main article p</code>) instead of creating endless custom classes.</p>
