<?php
include "include/session.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Mind</title>
    <script src="js/load.js"></script>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/vscode.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>
  <body>
    <?php
    include "include/navbar.php";
    include "include/sidebar.php";
    ?>
    <div class="main-content">
      <div class="background-js">
        <div>
          <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="0"
                class="active"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="1"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="2"
              ></button>
              <button
                type="button"
                data-bs-target="#myCarousel"
                data-bs-slide-to="3"
              ></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/js.jpg"
                  alt="js"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/JS/js1.jpg"
                  alt="js"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/JS/js2.png"
                  alt="js"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/JS/js3.jpg"
                  alt="js"
                />
              </div>
            </div>

            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon"></span>
            </button>
          </div>
        </div>
      </div>

      <section class="about-section">
        <h1 class="section-title">Javascript</h1>
        <p class="section-par">
          JavaScript is a high-level programming language which is primarily
          used to make websites dynamic and interactive. It executes in the web
          browser so developers can update multimedia, perform animations, and
          respond to user input without refreshing the web page. JavaScript is a
          core technology of the web along with HTML and CSS and it provides
          support for object-oriented, functional programming, and other
          numerous features. JavaScript is now one of the most popular
          programming languages used in modern application development with the
          emergence of client-side scripting frameworks like React, Angular, and
          server-side frameworks like Node.js.
        </p>
      </section>
      <section class="video-section">
        <button
          type="button"
          class="btn btn-lg"
          style="background-color: rgb(255, 228, 115)"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Click to watch video
        </button>
      </section>
      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog" style="max-width: 100%; width: 600px">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Watch video</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>

            <div class="modal-body">
              <iframe
                class="yt"
                width="730"
                height="415"
                src="https://www.youtube.com/embed/DHjqpvDnNGE?si=TkWpaFGFs3WExcdR"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin"
                allowfullscreen
              ></iframe>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
            </div>
          </div>
        </div>
      </div>

      <section class="acc-section">
        <div class="acc">
          <div class="acc-item">
            <button class="acc-header">
              Introduction to JavaScript and setup
            </button>
            <div class="acc-content">
              <h1>What is JavaScript?</h1>
              <p>
                JavaScript is a high-level, interpreted programming language
                that makes web pages interactive and dynamic. Originally created
                in 1995 by Brendan Eich at Netscape, JavaScript has evolved into
                one of the most popular programming languages in the world.
              </p>
              <h1>Key characteristics</h1>
              <ul>
                <li>Dynamic and flexible</li>
                <li>Interpreted (no compilation needed)</li>
                <li>Object-oriented and functional programming support</li>
                <li>Runs in browsers and servers (Node.js)</li>
                <li>Case-sensitive language</li>
              </ul>
              <h1>Why Learn Javascript?</h1>
              <p>
                JavaScript is essential for modern web development because it:
              </p>
              <ul>
                <li>Makes websites interactive and responsive</li>
                <li>Runs on virtually every device with a web browser</li>
                <li>Has a huge ecosystem of libraries and frameworks</li>
                <li>Offers excellent career opportunities</li>
                <li>
                  Can be used for frontend, backend, and mobile development
                </li>
                <li>Has an active and supportive community</li>
              </ul>
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
                  <button class="tab active">
                    <div class="file-icon"></div>
                    index.html
                  </button>
                </div>

                <div class="editor-container">
                  <div class="line-numbers" id="lineNumbers">1</div>
                  <textarea
                    class="code-editor"
                    id="codeEditor"
                    placeholder="// Start writing your JavaScript code here...
// Try: console.log('Hello, World!');"
                  >
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;JavaScript Practice&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;JavaScript Tutorial&lt;/h1&gt;
    &lt;script&gt;
        // Your JavaScript code goes here
        console.log(&quot;Hello, JavaScript!&quot;);
    &lt;/script&gt;
&lt;/body&gt;
&lt;/html&gt;
                </textarea
                  >
                </div>

                <button class="run-button" onclick="runCode()">
                  ▶ Run Code
                </button>

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
            </div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Variables, data types, and operators
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Control structures (if/else, loops, switch)
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Functions and scope</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Objects and arrays</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">String and array methods</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Error handling with try/catch</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              ES6+ features (arrow functions, destructuring, template literals)
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Asynchronous JavaScript (callbacks, promises, async/await)
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              DOM manipulation and element selection
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Event handling and listeners</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Form validation</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">AJAX and fetch API</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Object-oriented programming</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Modules and imports</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Local storage and session storage
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">JavaScript frameworks overview</button>
            <div class="acc-content"><p></p></div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
<script src="js/script.js"></script>
<script src="js/vscode.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
