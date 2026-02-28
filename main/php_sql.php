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
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="css/course_content.css" />
  <style>
    body {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .acc-header {
      background: radial-gradient(circle,
          rgb(225, 255, 184),
          rgb(200, 255, 122));
      color: black;
      margin-top: 0;
      border-radius: 0;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    .acc-item:first-child .acc-header {
      border-top-left-radius: 8px;
      border-top-right-radius: 8px;
    }

    .acc-item:last-child .acc-header {
      border-bottom-left-radius: 8px;
      border-bottom-right-radius: 8px;
      border-bottom: none;
    }

    .acc-header:hover {
      background: radial-gradient(circle,
          rgb(200, 255, 122),
          rgb(180, 240, 100));
      padding-left: 30px;
    }
  </style>

  <!-- Highlight.js for VSCode style syntax highlighting -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/vs2015.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/sql.min.js"></script>
  <script>hljs.highlightAll();</script>
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
              class="active"></button>
            <button
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide-to="1"></button>
            <button
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide-to="2"></button>
            <button
              type="button"
              data-bs-target="#myCarousel"
              data-bs-slide-to="3"></button>
          </div>

          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/PHP-SQL.png"
                alt="PHP SQL" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/PHP&SQL/SQL1.png"
                alt="SQL" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/PHP&SQL/PHP.jpg"
                alt="PHP" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/PHP&SQL/SQL2.jpg"
                alt="SQL" />
            </div>
          </div>

          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide="next">
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
        data-bs-target="#exampleModal">
        Click to watch video
      </button>
    </section>
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" style="max-width: 100%; width: 600px">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Watch video</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"></button>
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
              allowfullscreen></iframe>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal">
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
          <div class="acc-content">
            <?php include "courses/php_sql/01_syntax.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Variables, data types, and operators
          </button>
          <div class="acc-content">
            <?php include "courses/php_sql/02_variables.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Control structures and functions</button>
          <div class="acc-content">
            <?php include "courses/php_sql/03_control_functions.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Arrays and string manipulation</button>
          <div class="acc-content">
            <?php include "courses/php_sql/04_arrays_strings.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Working with Forms (GET & POST)</button>
          <div class="acc-content">
            <?php include "courses/php_sql/05_forms.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Session management and cookies</button>
          <div class="acc-content">
            <?php include "courses/php_sql/06_sessions.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">File operations and uploads</button>
          <div class="acc-content">
            <?php include "courses/php_sql/07_files.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Object-oriented PHP</button>
          <div class="acc-content">
            <?php include "courses/php_sql/08_oop.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Error handling and debugging</button>
          <div class="acc-content">
            <?php include "courses/php_sql/09_errors.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Introduction to databases and SQL
          </button>
          <div class="acc-content">
            <?php include "courses/php_sql/10_db_intro.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Database design and normalization
          </button>
          <div class="acc-content">
            <?php include "courses/php_sql/11_db_design.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            SQL queries (SELECT, INSERT, UPDATE, DELETE)
          </button>
          <div class="acc-content">
            <?php include "courses/php_sql/12_sql_queries.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Joins and relationships</button>
          <div class="acc-content">
            <?php include "courses/php_sql/13_joins.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">MySQL/PostgreSQL administration</button>
          <div class="acc-content">
            <?php include "courses/php_sql/14_admin.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Database platforms</button>
          <div class="acc-content">
            <?php include "courses/php_sql/15_platforms.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">PHP-MySQL integration</button>
          <div class="acc-content">
            <?php include "courses/php_sql/16_integration.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Prepared statements and security</button>
          <div class="acc-content">
            <?php include "courses/php_sql/17_prepared.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Database optimization and indexing
          </button>
          <div class="acc-content">
            <?php include "courses/php_sql/18_opt.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Web application security</button>
          <div class="acc-content">
            <?php include "courses/php_sql/19_security.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">MVC architecture patterns</button>
          <div class="acc-content">
            <?php include "courses/php_sql/20_mvc.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Popular PHP frameworks overview</button>
          <div class="acc-content">
            <?php include "courses/php_sql/21_frameworks.php"; ?>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>

</html>
<script src="js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>