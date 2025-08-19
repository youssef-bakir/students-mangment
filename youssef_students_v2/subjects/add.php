<?php
include '../includes/header.php';
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $level = $_POST['level'];
    $added_by = $_SESSION['user_id'];

    $sql = "INSERT INTO subjects (name, level, added_by)
            VALUES ('$name', '$level', $added_by)";
    $conn->query($sql);
    header("Location: view.php");
}
?>

<h3 class="mb-4">إضافة مادة دراسية</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">اسم المادة</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">المرحلة الدراسية</label>
    <input type="text" name="level" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">➕ إضافة</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>