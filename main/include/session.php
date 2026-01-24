<?php
define("BASE_URL", "/Computer%20Mind/Computer-Mind-2.0/main/");
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

$id = $_SESSION['user_id'];
$user_id = $conn->prepare("SELECT * FROM users WHERE ID = ?");
$user_id->bind_param("i", $id);
$user_id->execute();
$result = $user_id->get_result();
$auth_user = $result->fetch_assoc();
