<h1>SQL Queries (The CRUD Lifecycle)</h1>
<p>Most of your time as a developer will be spent performing <strong>CRUD</strong> operations: Create, Read, Update, and Delete. These four operations allow you to manage the entire lifecycle of data.</p>

<h2>1. SELECT (Read)</h2>
<p>The <code>SELECT</code> statement is used to fetch data. It is the most powerful and complex SQL command.</p>

<pre><code class="language-sql">-- Get name and email for users in London
SELECT name, email 
FROM Users 
WHERE city = 'London' 
ORDER BY name ASC;

-- The '*' wildcard gets EVERYTHING (use sparingly)
SELECT * FROM Products WHERE stock_quantity > 0;</code></pre>

<h2>2. INSERT INTO (Create)</h2>
<p>Used to add new records to a table. You must match the column names with the values.</p>

<pre><code class="language-sql">INSERT INTO Users (name, email, city)
VALUES ('Jane Smith', 'jane@example.com', 'Paris');</code></pre>

<h2>3. UPDATE (Update)</h2>
<p>Used to modify existing records. <strong>Crucial:</strong> If you forget the <code>WHERE</code> clause, the database will update <strong>every single row</strong> in the table!</p>

<pre><code class="language-sql">UPDATE Users
SET email = 'jane.new@example.com'
WHERE id = 5; -- ALWAYS use a WHERE clause</code></pre>

<h2>4. DELETE (Delete)</h2>
<p>Used to remove records. Just like <code>UPDATE</code>, the <code>WHERE</code> clause is mandatory unless you want to wipe the entire table clean.</p>

<pre><code class="language-sql">DELETE FROM Users WHERE id = 5;</code></pre>

<h2>Filtering and Sorting</h2>
<p>To narrow down your results, SQL provides several operators:</p>
<ul>
    <li><code>WHERE</code>: Filter by conditions (<code>=</code>, <code>&lt;&gt;</code>, <code>&gt;</code>, <code>&lt;</code>).</li>
    <li><code>LIKE</code>: Search for patterns (<code>LIKE 'A%'</code> finds names starting with A).</li>
    <li><code>BETWEEN</code>: Search for a range (<code>BETWEEN 10 AND 20</code>).</li>
    <li><code>ORDER BY</code>: Sort your results (<code>ASC</code> for Ascending, <code>DESC</code> for Descending).</li>
    <li><code>LIMIT</code>: Restrict the number of rows returned (perfect for pagination).</li>
</ul>

<pre><code class="language-sql">-- Find the 3 most expensive products
SELECT name, price 
FROM Products 
ORDER BY price DESC 
LIMIT 3;</code></pre>

<div class="alert alert-warning">
    <strong>Security Reminder:</strong> In the next modules, we will see how to execute these queries safely from PHP. Never put a user's input directly into a <code>WHERE</code> clause using a string—this is how <strong>SQL Injection</strong> happens.
</div>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Standardize your SQL keywords to be UPPERCASE (<code>SELECT</code>, <code>FROM</code>) and your table/column names to be lowercase. This makes your queries much easier to read.
</div>
