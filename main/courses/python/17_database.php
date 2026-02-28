<h1>Database Connectivity</h1>
<p>Python can connect to various databases using a consistent API. The most common choice for beginners and small projects is <strong>SQLite</strong>, which is built directly into Python (no installation required!). For professional web apps, Python often connects to <strong>PostgreSQL</strong> or <strong>MySQL</strong> using third-party libraries.</p>

<h2>Using SQLite (Built-in)</h2>
<p>The <code>sqlite3</code> module follows a simple pattern: <strong>Connect -> Cursor -> Execute -> Commit -> Close</strong>.</p>

<pre><code class="language-python">import sqlite3

# 1. Connect (Creates the file if missing)
conn = sqlite3.connect("my_app.db")

# 2. Create a cursor to navigate the DB
cursor = conn.cursor()

# 3. Execute SQL
cursor.execute("""
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY,
        name TEXT,
        email TEXT
    )
""")

# 4. Insert data safely (using ? placeholders)
cursor.execute("INSERT INTO users (name, email) VALUES (?, ?)", ("Daniel", "daniel@test.com"))

# 5. Save changes and close
conn.commit()
conn.close()</code></pre>

<h2>Fetching Data</h2>
<pre><code class="language-python">cursor.execute("SELECT * FROM users")
all_rows = cursor.fetchall()

for row in all_rows:
    print(f"ID: {row[0]}, Name: {row[1]}")</code></pre>

<div class="alert alert-info">
    <strong>ORM (Object-Relational Mapping):</strong> In modern Python (like in Django or FastAPI), we often use an ORM like <strong>SQLAlchemy</strong> or <strong>Peewee</strong>. These allow you to manage your database using Python classes instead of writing raw SQL strings.
</div>

<div class="alert alert-warning">
    <strong>Security Warning:</strong> Never use f-strings or string concatenation for your SQL queries (e.g., <code>"SELECT * FROM users WHERE id = " + user_id</code>). This makes you vulnerable to SQL Injection. Always use the <code>?</code> placeholders provided by the database driver!
</div>
