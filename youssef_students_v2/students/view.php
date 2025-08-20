<?php
include '../includes/header.php';
include '../config/db.php';
$user_id = $_SESSION['user_id'];

$sql = "SELECT s.*, u.username AS added_by_user
        FROM student_records s
        LEFT JOIN users u ON s.added_by = u.id";
$result = $conn->query($sql);
?>

  <a href="add.php" class="btn btn-success">➕ إضافة طالب</a>


  <h3 class="mb-4 text-center">📋 قائمة الطلاب</h3>
  
<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>الاسم الأول</th>
      <th>الاسم الثاني</th>
      <th>الهاتف</th>
      <th>السن</th>
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
        <td><?= $row['age'] ?></td>
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
