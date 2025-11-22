<nav class="navbar" role="banner">
    <img
        id="theme-image"
        class="logo"
        src="<?php echo BASE_URL ?>img/Computer-logo.PNG"
        alt="Computer mind logo" />

    <div class="nav-right">
        <div class="dropdown">
            <button class="icon-btn user-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Account menu">
                <i class="fa-solid fa-user-circle user-icon" aria-hidden="true"></i>
                <span class="user-label"><span class="hide-sm">Welcome <?php echo $_SESSION['firstname']; ?></span></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <?php
                if ($auth_user["Role"] == "admin") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/admin.php" class="dropdown-item">Admin Panel</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewuser.php" class="dropdown-item">View Users</a></li>
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    ';
                } else if ($auth_user["Role"] == "superadmin") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/superadmin.php" class="dropdown-item superadmin">Superadmin Panel</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewadmin.php" class="dropdown-item">View Admin</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewuser.php" class="dropdown-item">View User</a></li>
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    ';
                } else if ($auth_user["Role"] == "user") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    ';
                }
                ?>
                <li><a href="<?php echo BASE_URL ?>?action=logout" class="dropdown-item">Logout</a></li>
            </ul>
        </div>

        <button class="theme-toggle" type="button" aria-label="Switch theme" onclick="changeTheme()">
            <i class="fa-solid fa-moon"></i>
        </button>

        <button class="theme-toggle" type="button">
            <i class="fa-solid fa-bell"></i>
        </button>

        <button class="hamburger" aria-controls="sidebar" aria-expanded="false" onclick="hamburgerf()">≣</button>

    </div>
</nav>