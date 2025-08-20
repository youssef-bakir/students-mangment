<?php
include '../includes/header.php';
include '../config/db.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    echo "<div class='alert alert-danger text-center mt-5'>🚫 غير مسموح لك بالدخول هنا</div>";
    exit;
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<h3 class="mb-4 text-center">📋 قائمة المستخدمين</h3>
<div class="table-responsive">
  <table class="table table-bordered table-hover align-middle text-center">
    <thead class="table-dark">
      <tr>
        <th>#</th> <!-- رقم تسلسلي -->
        <th>اسم المستخدم</th>
        <th>الدور</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        $i = 1; // العداد يبدأ من 1
        while($row = $result->fetch_assoc()): 
      ?>
        <tr>
          <td><?= $i++ ?></td> <!-- الرقم التسلسلي -->
          <td><?= $row['username'] ?></td>
          <td><?= $row['role'] ?></td>
        </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
