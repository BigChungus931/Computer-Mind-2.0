<?php
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $country = $_POST["country"];
    $lastname = $_POST["lname"];
    $password = $_POST["pwd"];
    $cpassword = $_POST["cpwd"];
    $role = $_POST["role"];

    $errors = [];

    if (empty($firstname)) {
        $errors[] = "Firstname is required";
    }

    if (empty($lastname)) {
        $errors[] = "Lastname is required";
    }

    if (empty($email)) {
        $errors[] = "Email is required";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }

    if ($age <= 0) {
        $errors[] = "Valid age is required";
    }

    if (!empty($password)) {
        if ($password !== $cpassword) {
            $errors[] = "Passwords do not match";
        }

        if (strlen($password) < 8) {
            $errors[] = "Password must be at least 8 characters";
        }
    }

    if (empty($errors)) {
        if (!empty($password)) {
            $hashed_pwd = md5($password);
            $sql = "
            UPDATE users SET
            Firstname='$firstname',
            Lastname='$lastname',
            Email='$email',
            Age=$age,
            Country='$country',
            Role='$role',
            Password='$hashed_pwd'
            WHERE ID=$id
            ";
        } else {
            $sql = "
            UPDATE users SET
            Firstname='$firstname',
            Lastname='$lastname',
            Email='$email',
            Age=$age,
            Country='$country',
            Role='$role'
            WHERE ID=$id
            ";
        }

        if (mysqli_query($conn, $sql)) {
            $_SESSION["Success"] == "User Updated Successfully";
            header("Location:../Panel/edit.php?id=" . $id);
            exit();
        } else {
            $_SESSION["Error"] == "User Updated Unsuccessfully" . mysqli_error($conn);
            header("Location:../Panel/edit.php?id=" . $id);
            exit();
        }
    }
}
