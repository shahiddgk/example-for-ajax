<?php

require_once 'connect.php';

$id = $_GET['id'];
$status = $_GET['status'] == 1 ? 0 : 1;

$sql = "UPDATE users SET status = $status WHERE user_id = $id";
$result = $con->query($sql);
header("location: users.php");
?>