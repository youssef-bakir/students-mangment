<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM student_records WHERE id = $id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];

    $update = "UPDATE student_records SET 
               first_name='$first', last_name='$last', phone='$phone', age='$age' 
               WHERE id=$id";
    $conn->query($update);
    header("Location: /youssef_students_v2/students/view.php");
}
?>

<h3 class="mb-4">تعديل بيانات الطالب</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">الاسم الأول</label>
    <input type="text" name="first_name" value="<?= $row['first_name'] ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">الاسم الثاني</label>
    <input type="text" name="last_name" value="<?= $row['last_name'] ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">رقم الهاتف</label>
    <input type="text" name="phone" value="<?= $row['phone'] ?>" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">السن</label>
    <input type="text" name="age" value="<?= $row['age'] ?>" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">💾 حفظ التعديل</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>

</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
