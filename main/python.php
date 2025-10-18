<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Mind</title>
    <script src="js/load.js"></script>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <style>
      .acc-header {
        background: linear-gradient(
          to left,
          rgb(80, 157, 224),
          rgb(255, 219, 101)
        );
      }

      .acc-header:hover {
        background-color: rgb(44, 44, 211);
      }
    </style>
  </head>
  <body>
    <?php
    include "include/navbar.php";
    include "include/sidebar.php";
    ?>
    <div class="main-content">
      <div class="background-py">
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
                  src="img/bgpython.jpg"
                  alt="Python"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Python/python1.jpg"
                  alt="Python"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Python/python2.jpg"
                  alt="Python"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/Python/PythonAnimal.png"
                  alt="Python"
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
        <h1 class="section-title">Python</h1>
        <p class="section-par">
          Python is a high-level, versatile programming language known for its
          simplicity and readability, making it a popular choice for beginners
          and professionals alike. It supports multiple programming paradigms,
          including procedural, object-oriented, and functional programming.
          Python is widely used in various fields such as web development, data
          science, artificial intelligence, automation, and software
          engineering. Its large standard library and active community provide a
          wealth of tools and frameworks, such as Django for web development and
          TensorFlow for machine learning. Python's clear syntax and broad
          applicability make it one of the most widely adopted programming
          languages in the world.
        </p>
      </section>
      <section class="video-section">
        <button
          type="button"
          class="btn btn-lg"
          style="background-color: rgb(80, 157, 224)"
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
                src="https://www.youtube.com/embed/x7X9w_GIm1s?si=JjnlNsX3vGxCrolw"
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
              Introduction to Python and IDE setup
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Basic syntax and indentation</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Variables, data types, and input/output
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Operators and control flow</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Lists, tuples, sets, and dictionaries
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              String manipulation and formatting
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Functions and parameters</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Lambda functions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">List comprehensions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">File handling</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Modules and packages</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Exception handling</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Classes and objects</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Inheritance and polymorphism</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Decorators and generators</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Regular expressions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Database connectivity</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Web scraping basics</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Testing and debugging</button>
            <div class="acc-content"><p></p></div>
          </div>
        </div>
      </section>
    </div>
  </body>
</html>
<script src="js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
