<h1>Database Design and Normalization</h1>
<p>Designing a database is like building the foundation of a skyscraper. If the design is poor, the entire application will become slow, buggy, and impossible to update as it grows. <strong>Normalization</strong> is the set of rules we use to ensure the design is solid.</p>

<h2>The Goals of Good Design</h2>
<ul>
    <li><strong>No Redundancy:</strong> Don't store the same data in two different places. If a user changes their name, you should only have to update it in <em>one</em> row.</li>
    <li><strong>Data Integrity:</strong> Ensure that the data makes sense (e.g., an Order cannot exist for a User that doesn't exist).</li>
    <li><strong>Performance:</strong> Ensure the database can find data quickly using proper structure and indexes.</li>
</ul>

<h2>Normalization: The "Normal Forms"</h2>
<p>Normalization is usually broken down into levels called "Normal Forms".</p>

<h3>1. First Normal Form (1NF)</h3>
<p>Each column must contain only <strong>atomic</strong> (indivisible) values. You shouldn't store multiple phone numbers in a single "phone" column separated by commas.</p>

<h3>2. Second Normal Form (2NF)</h3>
<p>The table must be in 1NF, and all non-key columns must depend on the <strong>entire</strong> Primary Key. This usually means splitting data into separate tables (e.g., splitting Customers and Orders).</p>

<h3>3. Third Normal Form (3NF)</h3>
<p>The table must be in 2NF, and all columns must depend <strong>only</strong> on the Primary Key, not on other regular columns. 3NF is the "standard" for most web applications.</p>

<div class="alert alert-info">
    <strong>The Mantra:</strong> "Every column must depend on the key, the whole key, and nothing but the key, so help me Codd." (Edgar F. Codd was the inventor of the relational model).
</div>

<h2>Mapping Relationships</h2>
<p>In a relational database, we link tables using <strong>Foreign Keys</strong>.</p>

<ul>
    <li><strong>One-to-Many:</strong> The most common. One <code>User</code> can have many <code>Orders</code>. We put the <code>user_id</code> inside the <code>Orders</code> table.</li>
    <li><strong>Many-to-Many:</strong> One <code>Student</code> can take many <code>Courses</code>, and one <code>Course</code> has many <code>Students</code>. This requires a third table called a <strong>Junction Table</strong> (e.g., <code>CourseEnrollments</code>).</li>
</ul>

<pre><code class="language-sql">-- Junction Table for Students and Courses
CREATE TABLE CourseEnrollments (
    student_id INT,
    course_id INT,
    enrollment_date DATE,
    PRIMARY KEY (student_id, course_id),
    FOREIGN KEY (student_id) REFERENCES Students(id),
    FOREIGN KEY (course_id) REFERENCES Courses(id)
);</code></pre>

<div class="alert alert-warning">
    <strong>Design Warning:</strong> Avoid "De-normalization" (breaking these rules for speed) unless you are an expert managing a massive system. For 99% of apps, a normalized design is faster and safer.
</div>
