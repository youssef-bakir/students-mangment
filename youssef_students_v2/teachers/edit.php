<?php
include '../includes/header.php';
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM teachers WHERE id = $id ";
$result = $conn->query($sql);
$teacher = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];

    $update = "UPDATE teachers SET first_name='$first', last_name='$last', phone='$phone', subject='$subject' WHERE id = $id";
    $conn->query($update);
    header("Location: view.php");
}
?>

<h3 class="mb-4">تعديل بيانات المعلم</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">الاسم الأول</label>
    <input type="text" name="first_name" class="form-control" value="<?= $teacher['first_name'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">الاسم الثاني</label>
    <input type="text" name="last_name" class="form-control" value="<?= $teacher['last_name'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">رقم الهاتف</label>
    <input type="text" name="phone" class="form-control" value="<?= $teacher['phone'] ?>" required>
  </div>
  <div class="mb-3">
    <label class="form-label">المادة</label>
    <input type="text" name="subject" class="form-control" value="<?= $teacher['subject'] ?>" required>
  </div>
  <button type="submit" class="btn btn-success">💾 حفظ التعديل</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
