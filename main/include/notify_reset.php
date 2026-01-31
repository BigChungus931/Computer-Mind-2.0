<?php
include "session.php";

$id = $_GET["id"];
if ($id) {
    $id = intval($id);
    $update = "UPDATE notifications SET seen='yes' WHERE user_id=$id";
    $conn->query($update);

    header("Location:../Panel/view_notification.php");
    exit();
}
