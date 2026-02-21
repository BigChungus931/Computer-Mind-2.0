<div class="sidebar" id="sidebar" role="navigation" aria-label="Section navigation">
  <?php
  $sql = "SELECT name, icon, link FROM courses";
  $result = $conn->query($sql);
  foreach ($result as $course) {
    echo '
      <a href="' . $course["link"] . '">
      ' . $course["icon"] . '
      ' . $course["name"] . '
      </a>
      ';
  }
  ?>
  <a href=""><i class="fas fa-envelope"></i> Contact</a>
  <a href=""><i class="fas fa-info-circle"></i> About</a>
  <a href=""><i class="fas fa-file-contract"></i> Terms of Use</a>
</div>