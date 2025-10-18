<?php
include "action/database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Mind Signup</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
   
    
    <link href="css/style.css" rel="stylesheet">
<body>
    <div class="form">
        <div class="form-content">
        <form action="" method="POST">
            <img class="logo" src="imgs/Computer-logo.png" alt="Computer Mind logo">
            <input type="text" name="fname" placeholder="Enter Firstname" required>
            <input type="text" name="lname" placeholder="Enter Lastname" required>
            <input type="email" name="email" placeholder="Enter Email" required>
            <input type="number" name="age" placeholder="Enter Age" required>
            <?php
            include "include/countries.php";
            ?>
            <input type="password" name="pwd" placeholder="Enter Password" required>
            <input type="password" name="cpwd" placeholder="Confirm Password" required>
            <button type="submit" name="signup">Signup</button>
        </form>
        <p class="form-par">Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>
<?php
include "include/bootstrap_js.php";
?>