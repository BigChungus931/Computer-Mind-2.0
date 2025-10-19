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
    <?php
    // $role = $conn->prepare("SELECT * FROM `users` WHERE `Email` = ?")
    // ->bind_param("s", $_SESSION['email'])     
    // ->execute()
    // ->get_result();
    // $role = $result->fetch_assoc()["Role"];
    // echo "<h1>".$role."</h1>";
    ?>
    <button class="toggle-btn hide-sm" type="button" onclick="changeTheme()">
        Switch Theme
    </button>
</nav>