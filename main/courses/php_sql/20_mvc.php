<h1>MVC Architecture Patterns</h1>
<p>As applications grow from a single file to thousands, they become difficult to manage. Most modern web applications follow a pattern called <strong>MVC</strong> (Model-View-Controller) to organize their code and separate concerns.</p>

<h2>The Three Pillars</strong></h2>
<div class="alert alert-info">
    <strong>The Goal:</strong> Separate the data (Model) from the presentation (View) using a middle-man (Controller).
</div>

<h3>1. The Model (Data & Logic)</h3>
<p>The Model is the part of your app that talks to the database. It doesn't know anything about HTML or URLs—it only knows how to get, save, and validate data.</p>
<pre><code class="language-php">// A simple "User" Model
class User {
    public function get($id) {
        // Logic to fetch user from DB
    }
}</code></pre>

<h3>2. The View (The UI)</h3>
<p>The View is the template. It's the HTML/CSS that the user actually sees. It should contain as little PHP logic as possible—only what's needed to loop through and display data.</p>

<h3>3. The Controller (The Brain)</h3>
<p>The Controller acts as the "waiter." It receives the request from the user (e.g., browsing to <code>profile.php?id=1</code>), asks the Model for the data, and then hands that data to the View to be displayed.</p>

<pre><code class="language-php">// A simple "Profile" Controller
$user_id = $_GET['id'];
$model = new User();
$data = $model->get($user_id); // Get data from Model

// Load the View and pass the data
include 'views/profile_page.php'; </code></pre>

<h2>Why Does This Matter?</h2>
<ul>
    <li><strong>Maintainability:</strong> You can change your database structure (Model) without touching your HTML (View).</li>
    <li><strong>Scalability:</strong> Multiple developers can work on the same project (one on the UI, one on the Database) without stepping on each other's toes.</li>
    <li><strong>Testing:</strong> You can test your data logic (Model) independently of your user interface.</li>
</ul>

<div class="alert alert-warning">
    <strong>Key Rule:</strong> "Fat Models, Skinny Controllers." Keep your business logic in the Model and keep your Controller small and clean—it should just be a "director" of traffic.
</div>

<h2>The Router</h2>
<p>Modern MVC apps use a <strong>Router</strong>. Instead of having hundreds of <code>.php</code> files, all requests go to a single <code>index.php</code> file (The Front Controller), which decides which Controller to run based on the URL.</p>
<p>Example: <code>yoursite.com/user/edit/5</code> -> The Router tells the <code>UserController</code> to run the <code>edit</code> method for ID #5.</p>
