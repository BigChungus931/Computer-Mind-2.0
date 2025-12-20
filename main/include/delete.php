<?php
include "session.php";

$id = $_GET["id"];
if ($id) {
    $id = intval($id);
    $delete = "DELETE FROM users WHERE ID=$id";
    $conn->query($delete);

    header("Location:../Panel/viewuser.php");
    exit();
}
