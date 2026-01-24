<?php
include "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Notification</title>
  <link href="<?php echo BASE_URL ?>img/favicon.png" rel="icon">
  <link rel="stylesheet" href="<?php echo BASE_URL ?>Bootstrap/bootstrap.css" />
  <script src="<?php echo BASE_URL ?>js/load.js"></script>
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/style.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
  <?php
  include "../include/navbar.php";
  include "../include/sidebar.php";
  ?>
  <div class="main-content">
    <section class="notify-section">
      <h1 class="section-title">Notification</h1>
      <div class="notifycard">
        <div class="header">
          <?php
          if ($auth_user["Gender"] == "male") {
            echo '<img src="https://static.vecteezy.com/system/resources/previews/019/896/008/original/male-user-avatar-icon-in-flat-design-style-person-signs-illustration-png.png" alt="">';
          } else if ($auth_user["Gender"] == "female") {
            echo '<img src="https://cdn1.iconfinder.com/data/icons/website-internet/48/website_-_female_user-1024.png" alt="">';
          } else {
            echo '<img src="https://tse1.mm.bing.net/th/id/OIP.xfzEU2lyX83UXOn6-bY0KQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="">';
          }
          ?>
          <h5>
            Dexter Schiller
          </h5>
        </div>
        <div class="sub-header">
          <p>
            This is a notification detail page.
          </p>
          <span>10 minutes ago</span>
        </div>
      </div>
      <?php
      ?>
    </section>
  </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>