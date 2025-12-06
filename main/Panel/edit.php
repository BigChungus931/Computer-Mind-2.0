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
  <link rel="stylesheet" href="<?php echo BASE_URL ?>css/form.css" />
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
   <div class="container">
  <form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?php echo $user['ID']; ?>">
    
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="firstname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="firstname" name="fname" value="<?php echo htmlspecialchars($user['Firstname']); ?>">
      </div>
      <div class="col-md-6 mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lname" value="<?php echo htmlspecialchars($user['Lastname']); ?>">
      </div>
    </div>
    
    <div class="row">
      <div class="col-md-6 mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['Email']); ?>">
      </div>
      <div class="col-md-6 mb-3">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" id="age" name="age" value="<?php echo $user['Age']; ?>">
      </div>
    </div>
    
    <div class="mb-3">
      <label for="country" class="form-label">Country</label>
      <input type="text" class="form-control" id="country" name="country" value="<?php echo htmlspecialchars($user['Country']); ?>">
    </div>
    
    <button type="submit" class="btn btn-primary">Update User</button>
  </form>
</div>
  </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>