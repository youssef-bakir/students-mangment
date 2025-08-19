<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($row = $result->fetch_assoc()) {
        if ($password === $row['password']) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: /youssef_students_v2/home.php");
            exit();
        }
    }
    $error = "بيانات الدخول غير صحيحة.";
}
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>تسجيل الدخول</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
  <h2 class="mb-4">تسجيل الدخول</h2>
  <?php if (isset($error)): ?>
    <div class="alert alert-danger"><?= $error ?></div>
  <?php endif; ?>
  <form method="POST" class="card p-4 shadow-sm">
    <div class="mb-3">
      <label class="form-label">اسم المستخدم</label>
      <input type="text" name="username" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">كلمة المرور</label>
      <input type="password" name="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">دخول</button>
    <a href="register.php" class="btn btn-link">مستخدم جديد؟ سجل هنا</a>
  </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>