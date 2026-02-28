<div class="sidebar" id="sidebar" role="navigation" aria-label="Section navigation">
  <?php
  $sql = "SELECT name, icon, link FROM courses";
  $result = $conn->query($sql);
  foreach ($result as $course) {
    echo '
      <a href="' . BASE_URL . $course["link"] . '">
      ' . $course["icon"] . '
      ' . $course["name"] . '
      </a>
      ';
  }
  ?>
  <a href="<?php echo BASE_URL ?>contact.php"><i class="fas fa-envelope"></i> Contact</a>
  <a href="<?php echo BASE_URL ?>about.php"><i class="fas fa-info-circle"></i> About</a>
  <a href="<?php echo BASE_URL ?>terms.php"><i class="fas fa-file-contract"></i> Terms of Use</a>
</div>