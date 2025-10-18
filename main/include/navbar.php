<nav class="navbar">
    <img
        id="theme-image"
        class="logo"
        src="imgs/Computer-logo.PNG"
        alt="Computer mind logo" />  
    <button class="hamburger" onclick="hamburgerf()">≣</button>
    <h4 class="welcome">
        Welcome <?php
        echo $_SESSION['firstname'];
        ?>
    </h4>
    <button class="toggle-btn hide-sm" type="button" onclick="changeTheme()">
        Switch Theme
    </button>
</nav>