<?php
include "session.php";

$id = $_GET["id"];
if ($id) {
    $id = intval($id);
    $delete = "DELETE FROM notifications WHERE id=$id";
    $conn->query($delete);

    header("Location:../Panel/view_notification.php");
    exit();
}
