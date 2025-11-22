<?php
include "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Users</title>
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
    <section class="about-section mb-5">
      <h1 class="section-title">View Users</h1>
    </section>
    <table class="table table-hover container">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email</th>
          <th scope="col">Age</th>
          <th scope="col">Country</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $c = 1;
        $users = "SELECT Firstname, Lastname, Email, Age, Country FROM users WHERE Role='user'";
        $user_result = $conn->query($users);
        foreach ($user_result as $user) {
          echo '
      <tr>
          <th scope="row">' . $c . '</th>
          <td>' . $user["Firstname"] . '</td>
          <td>' . $user["Lastname"] . '</td>
          <td>' . $user["Email"] . '</td>
          <td>' . $user["Age"] . '</td>
          <td>' . $user["Country"] . '</td>
          <td>
          <a href="" class="btn btn-info">Edit</a>
          <a href="" class="btn btn-danger">Delete</a>
          </td>
        </tr>
      ';
          //C++ Reference
          $c++;
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>