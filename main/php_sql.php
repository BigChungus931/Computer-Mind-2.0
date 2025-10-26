<?php
include "include/session.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Computer Mind</title>
    <link href="img/favicon.png" rel="icon"> 
    <script src="js/load.js"></script>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <style>
      .acc-header {
        background: radial-gradient(
          circle,
          rgb(225, 255, 184),
          rgb(200, 255, 122)
        );
        color: black;
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
      <div class="background-php-sql">
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
                  src="img/PHP-SQL.png"
                  alt="PHP SQL"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/PHP&SQL/SQL1.png"
                  alt="SQL"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/PHP&SQL/PHP.jpg"
                  alt="PHP"
                />
              </div>
              <div class="carousel-item" data-bs-interval="5000">
                <img
                  class="d-block w-100"
                  style="height: 800px; object-fit: cover"
                  src="img/PHP&SQL/SQL2.jpg"
                  alt="SQL"
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
        <h1 class="section-title">PHP/SQL</h1>
        <p class="section-par">
          PHP and SQL are a powerful combination often used together to build
          dynamic and interactive web applications. PHP, a server-side scripting
          language, handles the presentation logic, user interactions, and
          communication with the database. It takes requests from a user,
          processes them, and then interacts with SQL to retrieve or modify data
          stored in a database, typically a MySQL database. The SQL queries,
          written in the Structured Query Language, instruct the database on how
          to store, retrieve, update, and delete information. Together, PHP and
          SQL form the core of many websites and web applications, allowing for
          a seamless flow of data and a responsive user experience.
        </p>
      </section>
      <section class="video-section">
        <button
          type="button"
          class="btn btn-lg"
          style="background-color: rgb(200, 255, 122)"
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
                width="560"
                height="315"
                src="https://www.youtube.com/embed/zsjvFFKOm3c?si=Eow1WgaUXg8oxJQE"
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
              PHP syntax and basic programming concepts
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Variables, data types, and operators
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Control structures and functions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Arrays and string manipulation</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Control structures and functions</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Session management and cookies</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">File operations and uploads</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Object-oriented PHP</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Error handling and debugging</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Introduction to databases and SQL
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Database design and normalization
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              SQL queries (SELECT, INSERT, UPDATE, DELETE)
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Joins and relationships</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">MySQL/PostgreSQL administration</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Database platforms</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">PHP-MySQL integration</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Prepared statements and security</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">
              Database optimization and indexing
            </button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Web application security</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">MVC architecture patterns</button>
            <div class="acc-content"><p></p></div>
          </div>

          <div class="acc-item">
            <button class="acc-header">Popular PHP frameworks overview</button>
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
