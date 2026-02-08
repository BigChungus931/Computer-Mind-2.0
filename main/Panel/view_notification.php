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
      <?php
      $notify = $conn->prepare("SELECT * FROM notifications WHERE user_id = ?");
      $notify->bind_param("i", $id);
      $notify->execute();
      $notify_result = $notify->get_result();

      $sender = $conn->prepare("SELECT * FROM users WHERE ID = ?");
      while ($notification = $notify_result->fetch_assoc()) {
        $sender->bind_param("i", $notification["sender_id"]);
        $sender->execute();
        $sender_result = $sender->get_result();
        $sender_info = $sender_result->fetch_assoc();
        echo '
          <div class="notifycard">
        <div class="header">
          ';
        if ($sender_info["Gender"] == "male") {
          echo '<img src="' . BASE_URL . 'img/Genders/male-user.png" alt="Male Avatar">';
        } else if ($sender_info["Gender"] == "female") {
          echo '<img src="' . BASE_URL . 'img/Genders/female-user.png" alt="Female Avatar">';
        } else {
          echo '<img src="' . BASE_URL . 'img/Genders/other-user.png" alt="Other Avatar">';
        }
        $time_diff = time() - strtotime($notification["created_at"]);
        if ($time_diff < 60) {
          $time_ago = $time_diff . ' seconds ago';
          if ($time_ago == '1 seconds ago') {
            $time_ago = '1 second ago';
          }
        } elseif ($time_diff < 3600) {
          $time_ago = floor($time_diff / 60) . ' minutes ago';
          if ($time_ago == '1 minutes ago') {
            $time_ago = '1 minute ago';
          }
        } elseif ($time_diff < 86400) {
          $time_ago = floor($time_diff / 3600) . ' hours ago';
          if ($time_ago == '1 hours ago') {
            $time_ago = '1 hour ago';
          }
        } else {
          $time_ago = floor($time_diff / 86400) . ' days ago';
          if ($time_ago == '1 days ago') {
            $time_ago = '1 day ago';
          }
        }

        echo '
          <h5>
            ' . $sender_info["Firstname"] . ' ' . $sender_info["Lastname"] . ' <sup>(<span class = "' . $sender_info["Role"] . '">' . $sender_info["Role"] . '</span>)</sup>
          </h5>
        </div>
        <div class="sub-header">
          <p>
            ' . $notification["message"] . '
          </p>
          <span>' . $time_ago . '</span>
        </div>
        <div class="notify-action">
          <a href="' . BASE_URL . 'include/notify_delete.php?id=' . $notification["id"] . '" class="btn btn-danger btn-sm">&times;</a>
        </div>
      </div> ';
      }
      if ($notify_result->num_rows == 0) {
        echo '<div class="alert alert-info">No notifications found.</div>';
      }
      ?>
    </section>
  </div>
</body>

</html>
<script src="<?php echo BASE_URL ?>js/script.js"></script>
<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>