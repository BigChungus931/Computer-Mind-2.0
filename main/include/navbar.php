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
                    <li><a href="' . BASE_URL . 'Panel/viewadmin.php" class="dropdown-item">View Admins</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewuser.php" class="dropdown-item">View Users</a></li>
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewsuperadmin.php" class="dropdown-item">view Superadmins</a></li>
                    ';
                } else if ($auth_user["Role"] == "superadmin") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/superadmin.php" class="dropdown-item superadmin">Superadmin Panel</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewadmin.php" class="dropdown-item">View Admins</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewuser.php" class="dropdown-item">View Users</a></li>
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewsuperadmin.php" class="dropdown-item">View Superadmins</a></li>
                    ';
                } else if ($auth_user["Role"] == "user") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    ';
                } else if ($auth_user["Role"] == "root") {
                    echo '
                    <li><a href="' . BASE_URL . 'Panel/root.php" class="dropdown-item root">Root Panel</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewadmin.php" class="dropdown-item">View Admins</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewuser.php" class="dropdown-item">View Users</a></li>
                    <li><a href="' . BASE_URL . 'Panel/profile.php" class="dropdown-item">My Profile</a></li>
                    <li><a href="' . BASE_URL . 'Panel/viewsuperadmin.php" class="dropdown-item">View Superadmins</a></li>
                    ';
                }
                ?>
                <li><a href="<?php echo BASE_URL ?>?action=logout" class="dropdown-item">Logout</a></li>
            </ul>
        </div>

        <button class="theme-toggle" type="button" aria-label="Switch theme" onclick="changeTheme()">
            <i class="fa-solid fa-moon"></i>
        </button>
        <?php
        $noti = "SELECT COUNT(*) AS count FROM notifications WHERE user_id=?";
        $noti_stmt = $conn->prepare($noti);
        $noti_stmt->bind_param("i", $id);
        $noti_stmt->execute();
        $noti_result = $noti_stmt->get_result();
        $noti_row = $noti_result->fetch_assoc();
        ?>

        <button class="theme-toggle" type="button">
            <i class="fa-solid fa-bell"></i>
            <?php
            if ($noti_row["count"] > 0) {
                echo ' <span class="badgen">' . $noti_row["count"] . '</span>';
            }
            ?>
        </button>

        <button class="hamburger" aria-controls="sidebar" aria-expanded="false" onclick="hamburgerf()">≣</button>

    </div>
</nav>