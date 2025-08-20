<?php
include '../includes/header.php';
include '../config/db.php';

$sql = "SELECT t.*, u.username FROM teachers t JOIN users u ON t.added_by = u.id";
$result = $conn->query($sql);
?>

<h3 class="mb-4">قائمة المعلمين</h3>
<a href="add.php" class="btn btn-primary mb-3">➕ إضافة معلم</a>
<h3 class="mb-4 text-center">📋 قائمة المعلمين</h3>

<div class="table-responsive">
  <table class="table table-bordered table-hover align-middle text-center">
    <thead class="table-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">الاسم الأول</th>
        <th scope="col">الاسم الثاني</th>
        <th scope="col">الهاتف</th>
        <th scope="col">المادة</th>
        <th scope="col">أضيف بواسطة</th>
        <th scope="col">التحكم</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $i = 1;
      while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $i++ ?></td>
        <td><?= $row['first_name'] ?></td>
        <td><?= $row['last_name'] ?></td>
        <td><?= $row['phone'] ?></td>
        <td><?= $row['subject'] ?></td>
        <td><?= $row['username'] ?></td>
        <td>
          <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-warning">✏ تعديل</a>
          <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('هل أنت متأكد؟')">🗑 حذف</a>
        </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
