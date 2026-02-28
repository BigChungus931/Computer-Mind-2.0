<h1>Joins and Relationships</h1>
<p>In a normalized database, your data is distributed across many tables. <strong>Joins</strong> are the mechanism we use to stitch that data back together into a single, comprehensive result. Mastering joins is the secret to unlocking the true power of SQL.</p>

<h2>The Four Main Joins</h2>
<p>Visualizing joins with Venn diagrams is the easiest way to understand how they filter data between two tables (Table A and Table B).</p>

<table>
    <thead>
        <tr>
            <th>Join Type</th>
            <th>What it does</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>INNER JOIN</strong></td>
            <td>Returns records that have <strong>matching values</strong> in both tables. This is by far the most common join.</td>
        </tr>
        <tr>
            <td><strong>LEFT JOIN</strong></td>
            <td>Returns all records from the <strong>left</strong> table, plus matching records from the right. If there's no match, the right side is <code>NULL</code>.</td>
        </tr>
        <tr>
            <td><strong>RIGHT JOIN</strong></td>
            <td>The opposite of a Left Join. Returns all records from the <strong>right</strong> table.</td>
        </tr>
        <tr>
            <td><strong>FULL JOIN</strong></td>
            <td>Returns all records when there is a match in <strong>either</strong> the left or right table.</td>
        </tr>
    </tbody>
</table>

<h2>Inner Join: The Workhorse</h2>
<p>Imagine you have a <code>users</code> table and an <code>orders</code> table. To see a list of users alongside their order totals, we "join" them on the <code>user_id</code>.</p>

<pre><code class="language-sql">SELECT users.name, orders.total, orders.order_date
FROM users
INNER JOIN orders ON users.id = orders.user_id;</code></pre>

<h2>Left Join: Finding "Empty" Records</h2>
<p>What if you want to find all users, including those who <strong>haven't</strong> made an order yet? Use a <code>LEFT JOIN</code>. If a user has no order, the <code>order_id</code> will simply be <code>NULL</code>.</p>

<pre><code class="language-sql">SELECT users.name, orders.order_id
FROM users
LEFT JOIN orders ON users.id = orders.user_id;</code></pre>

<div class="alert alert-info">
    <strong>Use Case:</strong> <code>LEFT JOIN</code> is perfect for finding things that <em>don't</em> exist. "Show me all products with NO sales" or "Show me all users who haven't logged in this week."
</div>

<h2>Handling Ambiguity with Aliases</h2>
<p>When you join two tables that have columns with the same name (like <code>id</code> or <code>name</code>), SQL might get confused. We use <strong>Aliases</strong> (using the <code>AS</code> keyword) to give tables and columns temporary short names.</p>

<pre><code class="language-sql">SELECT u.name AS customer_name, p.name AS product_name
FROM users AS u
INNER JOIN orders AS o ON u.id = o.user_id
INNER JOIN products AS p ON o.product_id = p.id;</code></pre>

<div class="alert alert-warning">
    <strong>Performance Tip:</strong> Always join tables on <strong>Indexed</strong> columns (usually the Primary and Foreign keys). Joining on non-indexed text columns like "name" or "city" can be 100x slower on large datasets.
</div>
