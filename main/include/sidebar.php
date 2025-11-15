<div class="sidebar" id="sidebar" role="navigation" aria-label="Section navigation">
  <?php
  $sql = "SELECT name, icon, link FROM courses";
  $result = $conn->query($sql);
  foreach ($result as $course) {
    echo '
      <a href="' . $dots . $course["link"] . '">
      ' . $course["icon"] . '
      ' . $course["name"] . '
      </a>
      ';
  }
  ?>
  <div class="dropdown">
    <button
      class="btn btn-secondary dropdown-toggle"
      style="margin-top: 50px; margin-left: 30px"
      type="button"
      data-bs-toggle="dropdown"
      aria-expanded="false">
      More
    </button>
    <ul class="dropdown-menu">
      <li><a href="#" class="dropdown-item">Help</a></li>
    </ul>
  </div>
  <button class="toggle-btn hide-lg" type="button" onclick="changeTheme()">
    Switch theme
  </button>
</div>