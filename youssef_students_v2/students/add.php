<?php
include '../includes/header.php';
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $added_by = $_SESSION['user_id'];

    $sql = "INSERT INTO student_records (first_name, last_name, phone, age, added_by)
            VALUES ('$first', '$last', '$phone', '$age', $added_by)";
    $conn->query($sql);
    header("Location: /youssef_students_v2/students/view.php");
}
?>

<h3 class="mb-4">إضافة طالب جديد</h3>
<form method="POST" class="card p-4 shadow-sm">
  <div class="mb-3">
    <label class="form-label">الاسم الأول</label>
    <input type="text" name="first_name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">الاسم الثاني</label>
    <input type="text" name="last_name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">رقم الهاتف</label>
    <input type="text" name="phone" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">السن</label>
    <input type="text" name="age" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">➕ إضافة</button>
  <a href="view.php" class="btn btn-secondary">رجوع</a>
</form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>