<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "DELETE FROM classes WHERE id = $id";
$conn->query($sql);
header("Location: /youssef_students_v2/classes/view.php");