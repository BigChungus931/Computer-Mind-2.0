<?php
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $msg = $_POST["message"];
    $seen = "no";
    $date = date("Y-m-d H:i:s");
    $add_notify = $conn->prepare("INSERT INTO notifications (User_ID, Message, Seen, created_at) VALUES (?, ?, ?, ?)");
    $add_notify->bind_param("isss", $id, $msg, $seen, $date);
    $add_notify->execute();
    $add_notify->close();
    header("Location: " . BASE_URL . "Panel/viewuser.php");
}
