<?php
include "../include/session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Admins</title>
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
      <h1 class="section-title">View Admins</h1>
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
          <?php
          if ($auth_user["Role"] == "root" || $auth_user["Role"] == "superadmin") {
            echo ' <th scope="col">Action</th>';
          }
          ?>
        </tr>
      </thead>
      <tbody>
        <?php
        $c = 1;
        $admins = "SELECT ID, Firstname, Lastname, Email, Age, Country FROM users WHERE Role='admin'";
        $admin_result = $conn->query($admins);
        foreach ($admin_result as $admin) {
          echo '
      <tr>
          <th scope="row">1</th>
          <td>' . $admin["Firstname"] . '</td>
          <td>' . $admin["Lastname"] . '</td>
          <td>' . $admin["Email"] . '</td>
          <td>' . $admin["Age"] . '</td>
          <td>' . $admin["Country"] . '</td>
           ';
          if ($auth_user["Role"] == "root" || $auth_user["Role"] == "superadmin") {
            echo '
          <td>
          <a href="edit.php?id=' . $admin["ID"] . '" class="btn btn-info">Edit</a>
          <a href="../include/delete.php?id=' . $admin["ID"] . '" class="btn btn-danger">Delete</a>
          </td>
          </tr>
          ';
          }
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