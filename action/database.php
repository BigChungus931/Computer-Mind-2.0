<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "computer mind";
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: main/index.php");
    exit();
}

if (isset($_POST["signup"])) {
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection error");
    } else {
        $firstname = $_POST["fname"];
        $lastname = $_POST["lname"];
        $email = $_POST["email"];
        $age = (int)$_POST["age"];
        $country = $_POST["country"];
        $raw_password = $_POST["pwd"];
        $password = md5($_POST["pwd"]);
        $confirmpassword = md5($_POST["cpwd"]);

        if (strlen($raw_password) < 8 || strlen($raw_password) > 30) {
            include "errors/pwd_error.php";
        } else if ($password != $confirmpassword) {
            include "errors/unmatched.php";
        } else if ($age > 150) {
            include "errors/too_old.php";
        } else if ($age < 12) {
            include "errors/too_young.php";
        } else {
            $sql = "INSERT INTO `users`(`Firstname`, `Lastname`, `Email`, `Password`, `Age`, `Country`, `Joined`) VALUES('$firstname', '$lastname', '$email', '$password', '$age', '$country', '1')";

            if ($conn->query($sql) == TRUE) {
                session_start();
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['firstname'] = $firstname;
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
                header("Location: main/index.php");
                exit();
            } else {
                include "errors/invalid_info.php";
            }
            $conn->close();
        }
    }
}
if (isset($_POST["login"])) {
    $conn = new mysqli($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection error");
    } else {
        $email = $_POST["email"];
        $password = md5($_POST["pwd"]);

        $check = $conn->prepare("SELECT * FROM `users` WHERE `Email` = ?");
        $check->bind_param("s", $email);
        $check->execute();
        $result = $check->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if ($password == $user["Password"]) {
                session_start();
                $_SESSION['user_id'] = $user["ID"];
                $_SESSION['firstname'] = $user["Firstname"];
                $_SESSION['lastname'] = $user["Lastname"];
                $_SESSION['email'] = $email;
                $_SESSION['logged_in'] = true;
                header("Location: main/index.php");
                exit();
            } else {
                include "errors/invalid_user.php";
            }
        } else {
            include "errors/invalid_user.php";
        }
    }
}
