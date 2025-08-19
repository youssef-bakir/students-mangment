<?php
include '../includes/header.php';
include '../config/db.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT t.*, u.username FROM teachers t JOIN users u ON t.added_by = u.id WHERE t.added_by = $user_id";
$result = $conn->query($sql);
?>

<h3 class="mb-4">قائمة المعلمين</h3>
<a href="add.php" class="btn btn-primary mb-3">➕ إضافة معلم</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>الاسم الأول</th>
      <th>الاسم الثاني</th>
      <th>الهاتف</th>
      <th>المادة</th>
      <th>أضيف بواسطة</th>
      <th>التحكم</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['first_name'] ?></td>
      <td><?= $row['last_name'] ?></td>
      <td><?= $row['phone'] ?></td>
      <td><?= $row['subject'] ?></td>
      <td><?= $row['username'] ?></td>
      <td>
        <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">تعديل</a>
        <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">حذف</a>
      </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>