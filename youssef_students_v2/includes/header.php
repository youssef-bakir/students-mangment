<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: /youssef_students_v2/auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>لوحة التحكم</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  <div class="container-fluid">
    <a class="navbar-brand" href="/youssef_students_v2/home.php">نظام الإدارة</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/youssef_students_v2/students/view.php">الطلاب</a></li>
        <li class="nav-item"><a class="nav-link" href="/youssef_students_v2/classes/view.php">الصفوف</a></li>
        <li class="nav-item"><a class="nav-link" href="/youssef_students_v2/teachers/view.php">المعلمين</a></li>
        <li class="nav-item"><a class="nav-link" href="/youssef_students_v2/subjects/view.php">المواد الدراسية</a></li>
        <li class="nav-item"><a class="nav-link" href="/youssef_students_v2/users/view.php">المستخدمين</a></li>
      </ul>
      <span class="navbar-text text-white me-3">مرحبًا، <?= $_SESSION['username'] ?> 👋</span>
      <a class="btn btn-outline-light" href="/youssef_students_v2/auth/logout.php">تسجيل خروج</a>
    </div>
  </div>
</nav>

<div class="container">