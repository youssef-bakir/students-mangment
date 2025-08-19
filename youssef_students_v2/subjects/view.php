<?php
include '../includes/header.php';
include '../config/db.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT s.*, u.username FROM subjects s JOIN users u ON s.added_by = u.id WHERE s.added_by = $user_id";
$result = $conn->query($sql);
?>

<h3 class="mb-4">قائمة المواد الدراسية</h3>
<a href="add.php" class="btn btn-primary mb-3">➕ إضافة مادة</a>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>اسم المادة</th>
      <th>المرحلة</th>
      <th>أضيف بواسطة</th>
      <th>التحكم</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
      <td><?= $row['name'] ?></td>
      <td><?= $row['level'] ?></td>
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