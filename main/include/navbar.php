<nav class="navbar" role="banner">
    <img
        id="theme-image"
        class="logo"
        src="imgs/Computer-logo.PNG"
        alt="Computer mind logo" />  
    <button class="hamburger" aria-controls="sidebar" aria-expanded="false" onclick="hamburgerf()">≣</button>

    <div class="nav-right">
        <i class="fa-solid fa-user-circle user-icon" aria-hidden="true"></i>
        <span class="welcome-text">Welcome <?php echo $_SESSION['firstname']; ?></span>
        <button class="theme-toggle" type="button" aria-label="Switch theme" onclick="changeTheme()">
            <i class="fa-solid fa-moon"></i>
        </button>
        <div class="dropdown">
            <button class="account-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="?action=logout" class="dropdown-item">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>