<?php
include '../includes/header.php';
include '../config/db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h3 class="mb-4 text-center">📋 قائمة المستخدمين</h3>
<table class="table table-bordered table-striped">
  <thead class="table-dark">
    <tr>
      <th>المعرف</th>
      <th>اسم المستخدم</th>
    </tr>
  </thead>
  <tbody>
    <?php while($row = $result->fetch_assoc()): ?>
      <tr>
        <td><?= $row['id'] ?></td>
        <td><?= $row['username'] ?></td>
      </tr>
    <?php endwhile; ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
