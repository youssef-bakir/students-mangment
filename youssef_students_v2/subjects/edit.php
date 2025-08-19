<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM subjects WHERE id = $id AND added_by = {$_SESSION['user_id']}";
$result = $conn->query($sql);
$subject = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $level = $_POST['level'];

    $update = "UPDATE subjects SET name='$name', level='$level' WHERE id = $id";
    $conn->query($update);
    header("Location: view.php");
}
?>

<h3 class="mb-4">تعديل المادة الدراسية</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">اسم المادة</label>
    <input type="text" name="name" class="form-control" value="<?= $subject['name'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">المرحلة الدراسية</label>
    <input type="text" name="level" class="form-control" value="<?= $subject['level'] ?>" required>
  </div>
  <button type="submit" class="btn btn-success">💾 حفظ التعديل</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>