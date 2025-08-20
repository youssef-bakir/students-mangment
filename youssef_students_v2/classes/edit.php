<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM classes WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $level = $_POST['level'];

    $update = "UPDATE classes SET name='$name', level='$level' WHERE id=$id";
    $conn->query($update);
    header("Location: /youssef_students_v2/classes/view.php");
}
?>

<h3 class="mb-4">تعديل صف دراسي</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">اسم الصف</label>
    <input type="text" name="name" value="<?= $row['name'] ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">المرحلة</label>
    <input type="text" name="level" value="<?= $row['level'] ?>" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">💾 حفظ التعديل</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
