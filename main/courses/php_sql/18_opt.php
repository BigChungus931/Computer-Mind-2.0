<h1>Database Optimization and Indexing</h1>
<p>As your application grows, you will eventually notice that some pages take seconds to load. Usually, the bottleneck is a slow database query. Optimization is the art of making your data retrieval as efficient as possible.</p>

<h2>The Power of Indexing</h2>
<p>An index is a separate data structure (usually a B-Tree) that the database keeps to find rows quickly. Without an index, the database has to scan every single row in the table (a <strong>Full Table Scan</strong>).</p>

<div class="alert alert-info">
    <strong>Analogy:</strong> Imagine searching for a specific topic in a 500-page textbook. Without an **Index**, you have to read every page from start to finish. With an **Index**, you flip to the back, find the page number, and go straight there.
</div>

<h3>Creating an Index</h3>
<pre><code class="language-sql">-- Index on the email column for fast logins
CREATE INDEX idx_user_email ON users(email);

-- Composite index for searching by city AND status
CREATE INDEX idx_city_status ON users(city, status);</code></pre>

<h2>Choosing What to Index</h2>
<p>You shouldn't index every column! Every index takes up disk space and slows down <code>INSERT</code> and <code>UPDATE</code> operations because the index must be updated too.</p>
<ul>
    <li><strong>DO Index:</strong> Columns used in <code>WHERE</code> clauses, <code>JOIN</code> conditions, and <code>ORDER BY</code> statements.</li>
    <li><strong>DON'T Index:</strong> Columns with very few unique values (like "Gender" or "Active/Inactive") or columns that are rarely searched.</li>
</ul>

<h2>Query Optimization Tips</h2>

<h3>1. Avoid SELECT *</h3>
<p>Always request specific columns. This reduces the amount of data sent over the network and can sometimes allow the database to answer the query using <em>only</em> the index without touching the actual table (a <strong>Covering Index</strong>).</p>

<h3>2. Use the EXPLAIN Statement</h3>
<p>If a query is slow, prefix it with <code>EXPLAIN</code>. The database will show you its "Execution Plan"—telling you if it's using an index or doing a slow full table scan.</p>

<pre><code class="language-sql">EXPLAIN SELECT name FROM users WHERE email = 'test@example.com';</code></pre>

<h3>3. Data Types Matter</h3>
<p>Use the smallest data type possible. Don't use <code>BIGINT</code> if a regular <code>INT</code> will suffice. Don't use <code>TEXT</code> if <code>VARCHAR(255)</code> is enough. Smaller data fits more easily into memory (RAM).</p>

<div class="alert alert-warning">
    <strong>Warning:</strong> Be careful with the <code>LIKE '%substring%'</code> wildcard. If the <code>%</code> is at the <strong>start</strong> of the string, the database cannot use an index. If possible, use <code>'substring%'</code> instead.
</div>
