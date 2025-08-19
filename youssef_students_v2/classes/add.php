<?php
include '../includes/header.php';
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $level = $_POST['level'];
    $added_by = $_SESSION['user_id'];

    $sql = "INSERT INTO classes (name, level, added_by)
            VALUES ('$name', '$level', $added_by)";
    $conn->query($sql);
    header("Location: /youssef_students_v2/classes/view.php");
}
?>

<h3 class="mb-4">إضافة صف دراسي</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">اسم الصف</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">المرحلة</label>
    <input type="text" name="level" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">إضافة</button>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>