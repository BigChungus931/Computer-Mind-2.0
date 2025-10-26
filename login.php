<?php
include "action/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="main/img/favicon.png" rel="icon"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="form" style="margin-top: 14em;">
        <div class="form-content">
        <form action="" method="POST">
            <img class="logo" src="main/img/Computer-logo.png" alt="Computer Mind logo">
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="password" name="pwd" placeholder="Enter Password" required>
            <button type="submit" name="login">Login</button>
        </form>
        <p class="form-par">Don't have an account? <a href="signup.php">Signup</a></p>
        </div>
    </div>
</body>
</html>
<?php
include "include/bootstrap_js.php";
?>