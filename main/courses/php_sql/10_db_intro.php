<h1>Introduction to Databases and SQL</h1>
<p>Modern web applications are <strong>data-driven</strong>. Whether it's a social media feed, a list of orders, or a user profile, that information is stored and managed in a database. SQL (Structured Query Language) is the "universal language" used to talk to these databases.</p>

<h2>Why Not Use Plain Files?</h2>
<p>While we can store data in <code>.txt</code> or <code>.csv</code> files, databases offer several critical advantages:</p>
<ul>
    <li><strong>Scale:</strong> Databases can handle millions of rows while maintaining high performance.</li>
    <li><strong>Concurrency:</strong> Multiple users can read and write data at the exact same time without corruption.</li>
    <li><strong>Relationships:</strong> You can easily link data across different tables (e.g., matching a "User" to their "Posts").</li>
    <li><strong>Security:</strong> Granular control over who can see or modify specific parts of the data.</li>
</ul>

<h2>The Relational Model</h2>
<p>Most popular databases (MySQL, PostgreSQL, etc.) are <strong>Relational</strong>. They organize data into <strong>Tables</strong>. Think of a table like an Excel spreadsheet with a strict set of rules.</p>

<table>
    <thead>
        <tr>
            <th>Concept</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><strong>Table</strong></td>
            <td>The container for a specific category of data (e.g., <code>Users</code>).</td>
        </tr>
        <tr>
            <td><strong>Row (Record)</strong></td>
            <td>A single entry representing one item (e.g., one specific User).</td>
        </tr>
        <tr>
            <td><strong>Column (Field)</strong></td>
            <td>A specific attribute defined for all rows (e.g., <code>email</code> or <code>created_at</code>).</td>
        </tr>
        <tr>
            <td><strong>Primary Key</strong></td>
            <td>A unique ID for every row (usually a number like 1, 2, 3). No two rows can have the same Primary Key.</td>
        </tr>
    </tbody>
</table>

<h2>Basic SQL Syntax</h2>
<p>SQL is designed to read like English. A typical query follows a logical structure: "Find [Something] from [Table] where [Condition]".</p>

<pre><code class="language-sql">-- Creating your very first table
CREATE TABLE Products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    price DECIMAL(10, 2) DEFAULT 0.00,
    category VARCHAR(50)
);</code></pre>

<div class="alert alert-info">
    <strong>Did you know?</strong> SQL is a <strong>declarative</strong> language. You tell the database <em>what</em> you want, and the database engine works out the most efficient way to get it for you.
</div>

<h2>Common Database Engines</h2>
<ul>
    <li><strong>MySQL:</strong> The world's most popular open-source database. Used by Facebook, Twitter, and WordPress.</li>
    <li><strong>PostgreSQL:</strong> Known for its reliability and advanced features. Great for complex scientific or financial data.</li>
    <li><strong>SQLite:</strong> A "lite" database that lives inside a single file. Used in almost every smartphone on Earth.</li>
</ul>
