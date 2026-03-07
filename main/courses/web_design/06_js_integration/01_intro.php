<h1>JavaScript & The Live Document (DOM Mastery)</h1>
<p>JavaScript is where your page stops being a document and starts being an application. By using the DOM (Document Object Model) API, your code can "see" the HTML structure, respond to user actions, and modify the page without a refresh.</p>

<h2>1. The DOM Tree Architecture</h2>
<p>When the browser parses HTML, it creates a tree of objects. Every tag is a "Node." In JS, you can navigate this tree.</p>
<ul>
    <li><code>parentElement</code>: Get the node above.</li>
    <li><code>children</code>: Get the nodes below.</li>
    <li><code>nextElementSibling</code>: Get the neighbor.</li>
</ul>

<h2>2. Selecting Elements (The Modern Way)</h2>
<p>Forget the old <code>getElementById</code>. Use the powerful CSS selector engine within JS.</p>

<pre><code class="language-javascript">// Select one item (the first match)
const mainTitle = document.querySelector('.title-section h1');

// Select all items (returns a NodeList)
const buttons = document.querySelectorAll('.nav-btn');

// IMPORTANT: Convert NodeList to Array to use .map() or .filter()
const btnArray = [...buttons];</code></pre>

<h2>3. Event Propagation: Bubbling & Capture</h2>
<p>When you click a button inside a div, you are actually clicking both. Events "Bubble up" from the child to the parent.</p>

<pre><code class="language-javascript">document.querySelector('.parent').addEventListener('click', () => {
    console.log('Parent Clicked');
});

document.querySelector('.child').addEventListener('click', (event) => {
    // Stops the event from reaching the parent!
    event.stopPropagation();
    console.log('Child Clicked');
});</code></pre>

<h2>4. Event Delegation (Performance Win)</h2>
<p>If you have 1000 list items, don't add 1000 event listeners. Add ONE to the parent and check which child was clicked.</p>

<pre><code class="language-javascript">const list = document.querySelector('ul');

list.addEventListener('click', (e) => {
    // Only trigger if a list item was clicked
    if (e.target.tagName === 'LI') {
        e.target.classList.toggle('completed');
    }
});</code></pre>

<h2>5. Creating & Injecting Elements</h2>
<pre><code class="language-javascript">function addNewItem(text) {
    const li = document.createElement('li');
    li.textContent = text;
    li.className = 'new-item';
    
    // Inject into the page
    document.querySelector('#my-list').appendChild(li);
}</code></pre>

<h2>6. Fetching Data (AJAX & APIs)</h2>
<p>Modern apps use <code>async/await</code> to load data in the background.</p>

<pre><code class="language-javascript">async function getLivePrices() {
    const response = await fetch('https://api.example.com/prices');
    if (response.ok) {
        const data = await response.json();
        updateUI(data);
    }
}</code></pre>

<h2>7. Local Storage (Saving User State)</h2>
<p>JS can save small bits of data on the user's computer that persist even after a refresh.</p>

<pre><code class="language-javascript">// Save data
localStorage.setItem('theme', 'dark');

// Load data
const currentTheme = localStorage.getItem('theme');</code></pre>

<div class="alert alert-tip">
    <strong>Dev Secret:</strong> Use <code>defer</code> in your script tag: <code>&lt;script src="..." defer&gt;&lt;/script&gt;</code>. This downloads the script in parallel but waits until the HTML is fully parsed before running it, preventing "Undefined" errors.
</div>

<p>By mastering the DOM and Events, you move from "static design" to "dynamic interaction." You can build search filters, drag-and-drop interfaces, and real-time chat with these fundamental patterns.</p>
