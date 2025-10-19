<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "computer mind";
$conn = new mysqli($server, $username, $password, $database);
    if ($conn->connect_error) {
        die("Connection error");
    }
session_start();
if (isset($_GET['action']) && $_GET['action'] == "logout") {
    session_unset();
    session_destroy();
    header("Location: ../login.php");
    exit();
} 

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: ../login.php");
    exit();
}
?>