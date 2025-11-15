<?php
include "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>My Profile</title>
  <link href="../img/favicon.png" rel="icon">
  <script src="../js/load.js"></script>
  <link rel="stylesheet" href="../Bootstrap/bootstrap.css" />
  <link rel="stylesheet" href="../css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <?php
  $dots = "../";
  $panel = "";
  include "../include/navbar.php";
  include "../include/sidebar.php";
  ?>
  <div class="main-content">
    <section class="about-section">
      <h1 class="section-title">About website</h1>
      <p class="section-par">
        This website is about programming, it covers languages such as C++,
        Python, Javascript, PHP/SQL, and web design (HTML/CSS).
      </p>
    </section>
  </div>
</body>

</html>
<script src="../js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>