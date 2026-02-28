<h1>PHP-MySQL Integration</h1>
<p>Connecting your PHP code to your MySQL database is the most common integration task in web development. In modern PHP, there are two primary extensions to do this: <strong>MySQLi</strong> and <strong>PDO</strong>.</p>

<h2>PDO (PHP Data Objects): The Industry Standard</h2>
<p>While <code>mysqli</code> only works with MySQL, <strong>PDO</strong> works with 12 different database systems (including PostgreSQL and SQLite). This makes your code much more flexible and portable. Furthermore, PDO forces better security practices like exception handling.</p>

<h3>Step 1: The Connection String (DSN)</h3>
<p>To connect, we need a <strong>Data Source Name (DSN)</strong>, which identifies the host and database name.</p>

<pre><code class="language-php">&lt;?php
$host = '127.0.0.1';
$db   = 'user_database';
$user = 'db_user';
$pass = 'secret_password';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connection successful!";
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?&gt;</code></pre>

<h2>Running a Basic Query</h2>
<p>Once connected, you can use the <code>query()</code> method to fetch data. The <code>fetch()</code> method then turns the results into a readable PHP array.</p>

<pre><code class="language-php">&lt;?php
$stmt = $pdo->query('SELECT name FROM users');
while ($row = $stmt->fetch()) {
    echo $row['name'] . "&lt;br&gt;";
}
?&gt;</code></pre>

<div class="alert alert-info">
    <strong>Best Practice:</strong> Always use <code>PDO::FETCH_ASSOC</code>. This means your results are returned as an associative array (e.g., <code>$row['username']</code>), which is much more readable than numeric indexes (e.g., <code>$row[0]</code>).
</div>

<h2>Handling Database Errors</h2>
<p>By setting <code>PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION</code>, the database will throw a PHP Exception whenever an SQL error occurs (like a misspelled table name). This allows you to use <strong>Try-Catch</strong> blocks to handle errors gracefully.</p>

<div class="alert alert-warning">
    <strong>Warning:</strong> Never display the full <code>$e->getMessage()</code> to your users. It may contain your database username or internal server paths. Log the error to a file and show the user a generic "Something went wrong" message.
</div>
