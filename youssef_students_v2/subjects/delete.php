<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "DELETE FROM subjects WHERE id = $id AND added_by = {$_SESSION['user_id']}";
$conn->query($sql);
header("Location: view.php");
?>