<?php
include "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Edit</title>
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

  if (isset($_GET['id'])) {
    $user_id = (int)$_GET['id'];

    $person = $conn->prepare("SELECT * FROM users WHERE ID=?");
    $person->bind_param("i", $user_id);
    $person->execute();
    $result = $person->get_result();
    $user = $result->fetch_assoc();
  }
  ?>
  <div class="main-content">
    <section class="about-section mb-5">
      <h1 class="section-title">Edit <?php echo $user["Firstname"] . " " . $user["Lastname"] ?></h1>
    </section>
  </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>