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
    .acc-header {
      background: linear-gradient(to right,
          rgb(121, 186, 255),
          rgb(153, 202, 254));
    }

    .acc-header:hover {
      background-color: rgb(44, 44, 211);
    }
  </style>
  
  <!-- Highlight.js for VSCode style syntax highlighting -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/vs2015.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/cpp.min.js"></script>
  <script>hljs.highlightAll();</script>
</head>

<body>
  <?php
  include "include/navbar.php";
  include "include/sidebar.php";
  ?>
  <div class="main-content">
    <div class="background-cplus">
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
                src="img/c++.png"
                alt="C++" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/C++/c++1.png"
                alt="SQL" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/newc++.png"
                alt="PHP" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img
                class="d-block w-100"
                style="height: 800px; object-fit: cover"
                src="img/C++/c++2.png"
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
      <h1 class="section-title">C++</h1>
      <p class="section-par">
        C++ is a powerful and versatile programming language known for its
        performance and control. Built upon the foundations of C, it adds
        object-oriented programming features like classes and inheritance,
        allowing developers to create complex and reusable software. C++ is
        frequently used for developing operating systems, game engines,
        high-performance applications, and systems programming. Its
        close-to-the-hardware nature and extensive standard library make it a
        popular choice for projects demanding efficiency and precise control,
        though it can have a steeper learning curve compared to some other
        languages.
      </p>
    </section>
    <section class="video-section">
      <button
        type="button"
        class="btn btn-lg"
        style="background-color: rgb(121, 186, 255)"
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
              width="730"
              height="415"
              src="https://www.youtube.com/embed/MNeX4EGtR5Y?si=wuM-ofnWltvuS_Ia"
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
            Introduction to C++ and development environment
          </button>
          <div class="acc-content">
            <?php include "courses/c++/introduction/01_intro.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Basic syntax and structure</button>
          <div class="acc-content">
            <?php include "courses/c++/basic_syntax/01_syntax.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Variables, constants, and data types
          </button>
          <div class="acc-content">
            <?php include "courses/c++/variables_data_types/01_variables.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Operators and expressions</button>
            <div class="acc-content">
              <?php include "courses/c++/operators/01_operators.php"; ?>
            </div>
          </div>

        <div class="acc-item">
          <button class="acc-header">Input/output with cin/cout</button>
          <div class="acc-content">
            <?php include "courses/c++/io/01_io.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Control structures (if/else, loops, switch)
          </button>
          <div class="acc-content">
            <?php include "courses/c++/control_structs/01_control.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Functions and function overloading
          </button>
          <div class="acc-content">
            <?php include "courses/c++/functions/01_functions.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Arrays and strings</button>
          <div class="acc-content">
            <?php include "courses/c++/arrays_strings/01_arrays.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Pointers and references</button>
          <div class="acc-content">
            <?php include "courses/c++/pointers_refs/01_pointers.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Dynamic memory allocation</button>
          <div class="acc-content">
            <?php include "courses/c++/dynamic_memory/01_dynamic.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Structures and unions</button>
          <div class="acc-content">
            <?php include "courses/c++/structs_unions/01_structs.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Classes and objects</button>
          <div class="acc-content">
            <?php include "courses/c++/classes_objects/01_classes.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Constructors and destructors</button>
          <div class="acc-content">
            <?php include "courses/c++/constructors_destructors/01_constructors.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Inheritance and polymorphism</button>
          <div class="acc-content">
            <?php include "courses/c++/inheritance_polymorphism/01_inheritance.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Virtual functions and abstract classes
          </button>
          <div class="acc-content">
            <?php include "courses/c++/virtual_functions/01_virtual.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Operator overloading</button>
          <div class="acc-content">
            <?php include "courses/c++/operator_overloading/01_operator.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Templates and generic programming
          </button>
          <div class="acc-content">
            <?php include "courses/c++/templates/01_templates.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">
            Standard Template Library (STL)
          </button>
          <div class="acc-content">
            <?php include "courses/c++/stl/01_stl.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">File handling</button>
          <div class="acc-content">
            <?php include "courses/c++/file_handling/01_file.php"; ?>
          </div>
        </div>

        <div class="acc-item">
          <button class="acc-header">Exception handling</button>
          <div class="acc-content">
            <?php include "courses/c++/exception_handling/01_exception.php"; ?>
          </div>
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