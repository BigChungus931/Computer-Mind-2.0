<h1>MySQL/PostgreSQL Administration</h1>
<p>Once your database is built, you must manage and protect it. Database Administration (DBA) involves managing user accounts, setting permissions, and Ensuring data can be recovered if something goes wrong.</p>

<h2>The Principle of Least Privilege</h2>
<p>One of the most important rules in security is: <strong>Never use the "root" or "admin" account for your web application.</strong> If your application is hacked, the attacker would have full control over the entire database server. Instead, create a specific user with only the permissions they need (e.g., SELECT, INSERT, UPDATE on a specific database).</p>

<h3>Creating a Secure User</h3>
<pre><code class="language-sql">-- 1. Create the user
CREATE USER 'web_app_user'@'localhost' IDENTIFIED BY 'StrongPassword123!';

-- 2. Grant specific CRUD permissions on one database
GRANT SELECT, INSERT, UPDATE, DELETE ON blog_database.* TO 'web_app_user'@'localhost';

-- 3. Apply changes
FLUSH PRIVILEGES;</code></pre>

<h2>Backups: The Insurance Policy</h2>
<p>Hardware fails, and humans make mistakes. Without a backup, a single <code>DROP TABLE</code> command could destroy years of work.</p>

<h3>Logical Backups (SQL Dumps)</h3>
<p>A "dump" is a file containing all the SQL commands needed to recreate your database from scratch. For MySQL, we use the <code>mysqldump</code> utility.</p>

<pre><code class="language-bash"># Run this in your terminal, not in SQL
mysqldump -u root -p my_database > backup_feb_2024.sql</code></pre>

<h3>Restoring Data</h3>
<pre><code class="language-bash"># Restoring the database from a backup file
mysql -u root -p my_database < backup_feb_2024.sql</code></pre>

<h2>Monitoring and Maintenance</h2>
<p>Over time, databases can become "cluttered". Periodic maintenance helps keep them fast.</p>
<ul>
    <li><strong>OPTIMIZE TABLE:</strong> Reorganizes the physical storage of table data and indexes.</li>
    <li><strong>Slow Query Logs:</strong> A feature you can enable to record any queries that take longer than a few seconds, helping you find where you need to add indexes.</li>
</ul>

<div class="alert alert-warning">
    <strong>Security Warning:</strong> Regularly audit your database users. Delete any accounts that are no longer in use, and rotate your passwords every few months.
</div>

<div class="alert alert-info">
    <strong>Tools:</strong> While you can use the command line, many developers use GUI tools like <strong>phpMyAdmin</strong>, <strong>DBeaver</strong>, or <strong>TablePlus</strong> to visualize and manage their administration tasks.
</div>
