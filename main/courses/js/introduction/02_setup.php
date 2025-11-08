<h1>Setting Up Your Development Environment</h1>
<h2>Option 1: Browser Console (Quickest Start)</h2>
<ul>
    <li>Open any web browser (Chrome, Firefox, Safari, Edge)</li>
    <li>Press `F12` or right-click and select "Inspect Element"</li>
    <li>Navigate to the "Console" tab</li>
    <li>Start typing JavaScript code directly</li>
</ul>
<h2>Option 2: HTML File Method</h2>
<ul>
    <li>Create a new file called `index.html`</li>
    <li>Add the basic HTML structure with a `script` tag</li>
    <li>Open the file in your browser</li>
</ul>

<div class="vscode-container">
    <div class="title-bar">
        <span>JavaScript in HTML</span>
        <div class="window-controls">
            <div class="control minimize"></div>
            <div class="control maximize"></div>
            <div class="control close"></div>
        </div>
    </div>

    <div class="tab-bar">
        <div class="tabs-left">
            <button class="tab active">
                <div class="file-icon"></div>
                index.html
            </button>
        </div>
        <button class="run-button" onclick="runCode()">
            ▶ Run Code
        </button>
    </div>

    <div class="editor-container">
        <div class="line-numbers" id="lineNumbers">1</div>
        <textarea class="code-editor" id="codeEditor" placeholder="// Start writing your JavaScript code here...
// Try: console.log('Hello, World!');">
<!DOCTYPE html>
<html>
<head>
    <title>JavaScript Practice</title>
</head>
<body>
    <h1>JavaScript Tutorial</h1>
    <script>
      // Your JavaScript code goes here
      console.log("Hello, JavaScript!");
    </script>
</body>
</html>
    </textarea>
    </div>

    <div class="output-panel" id="outputPanel">
        <div class="output-header">OUTPUT</div>
        <div class="output-content" id="outputContent"></div>
    </div>

    <div class="status-bar">
        <span>JavaScript</span>
        <span>Ln 1, Col 1</span>
    </div>
</div>

<h2>Option 3: Code Editor Setup</h2>
<h2>Recommended editors:</h2>
<ul>
    <li>Visual Studio Code (free, most popular)</li>
    <li>Sublime Text</li>
    <li>Atom</li>
    <li>WebStorm (paid, full-featured)</li>
</ul>

<h2>Useful VS Code extensions:</h2>
<ul>
    <li>JavaScript (ES6) code snippets</li>
    <li>Bracket Pair Colorizer</li>
    <li>Live Server</li>
    <li>Prettier (code formatter)</li>
</ul>