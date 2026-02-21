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
</head>

<body>
  <?php
  include "include/navbar.php";
  include "include/sidebar.php";
  ?>
  <div class="main-content">
    <div class="background">
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
              <img class="d-block w-100" src="img/bg.jpg" alt="General programming" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img class="d-block w-100" src="img/bg1.jpg" alt="General programming" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img class="d-block w-100" src="img/bg2.png" alt="General programming" />
            </div>
            <div class="carousel-item" data-bs-interval="5000">
              <img class="d-block w-100" src="img/webdesign.jpg" alt="web development" />
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
      <h1 class="section-title">About website</h1>
      <p class="section-par">
        Computer Mind is an educational platform dedicated to providing high-quality programming courses and resources for learners of all levels. Our mission is to empower individuals with the knowledge and skills needed to succeed in the ever-evolving world of technology. We offer a wide range of courses covering various programming languages, frameworks, and development tools, all designed to help you achieve your learning goals and advance your career in tech.
      </p>
    </section>

    <div class="row container mx-auto">
      <?php
      $sql = "SELECT name, icon, link, description, img FROM courses WHERE id!=1";
      $result = $conn->query($sql);
      foreach ($result as $course) {
        echo '
      <div class="col-lg-4">
        <div class="card" style="width: 100%;">
          <img class="card-img-top" src="' . $course['img'] . '" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">' . $course['name'] . '</h5>
            <p class="card-text">' . $course['description'] . '</p>
            <a href="' . $course['link'] . '" class="btn btn-primary">Go to course</a>
          </div>
        </div>
      </div> ';
      }
      ?>
    </div>
  </div>
</body>

</html>
<script src="js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>