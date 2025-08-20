<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "DELETE FROM teachers WHERE id = $id";
$conn->query($sql);
header("Location: view.php");
?>
