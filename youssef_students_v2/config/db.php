<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "youssef_students_v2";

$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}
?>