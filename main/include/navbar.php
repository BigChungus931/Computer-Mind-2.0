<nav class="navbar" role="banner">
    <img
        id="theme-image"
        class="logo"
        src="imgs/Computer-logo.PNG"
        alt="Computer mind logo" />  
    
    <div class="nav-right">
        
        <div class="dropdown">
            <button class="icon-btn user-toggle dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Account menu">
                <i class="fa-solid fa-user-circle user-icon" aria-hidden="true"></i>
                <span class="user-label"><span class="hide-sm">Welcome <?php echo $_SESSION['firstname']; ?></span></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a href="?action=logout" class="dropdown-item">Logout</a></li>
            </ul>
        </div>

        <button class="theme-toggle" type="button" aria-label="Switch theme" onclick="changeTheme()">
            <i class="fa-solid fa-moon"></i>
        </button>

        <button class="hamburger" aria-controls="sidebar" aria-expanded="false" onclick="hamburgerf()">≣</button>

    </div>
</nav>