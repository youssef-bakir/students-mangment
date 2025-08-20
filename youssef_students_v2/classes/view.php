<?php
include '../includes/header.php';
include '../config/db.php';

$sql = "SELECT c.*, u.username AS added_by_user
        FROM classes c
        LEFT JOIN users u ON c.added_by = u.id";
$result = $conn->query($sql);
?>

  <a href="add.php" class="btn btn-success">➕ إضافة صف</a>
<h3 class="mb-4 text-center">📋 قائمة الفصول</h3>
<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>اسم الصف</th>
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
        <td><?= $row['added_by_user'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏️ تعديل</a>
          <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">🗑️ حذف</a>
        </td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
