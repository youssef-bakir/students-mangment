<?php include 'includes/header.php'; ?>
<div class="container mt-5"><div class="text-center mt-5">
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
  
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/erika-fletcher-MZxqc6n9qCw-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"></div>
    </div>
    <div class="carousel-item">
      <img src="images/cdc-GDokEYnOfnE-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"></div>
    </div>
    <div class="carousel-item">
      <img src="images/nathan-cima-Qw6wa96IvvQ-unsplash.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block"></div>
    </div>
  </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div></div>
<br>

<div class="container mt-5">
  <div class="row g-4">

    <div class="col-md-3">
      <div class="card h-100 shadow">
        <img src="https://img.icons8.com/fluency/300/student-male.png" class="card-img-top" alt="طلاب">
        <div class="card-body text-center">
          <h5 class="card-title">الطلاب</h5>
          <p class="card-text">إدارة بيانات الطلاب، متابعة حضورهم ودرجاتهم وتفاصيلهم الشخصية.</p>
          <a href="students/view.php" class="btn btn-primary">عرض الطلاب</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card h-100 shadow">
        <img src="https://img.icons8.com/fluency/300/teacher.png" class="card-img-top" alt="معلمين">
        <div class="card-body text-center">
          <h5 class="card-title">المعلمين</h5>
          <p class="card-text">إدارة بيانات المعلمين، المواد التي يدرسونها ومتابعة جداولهم.</p>
          <a href="teachers/view.php" class="btn btn-success">عرض المعلمين</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card h-100 shadow">
        <img src="https://img.icons8.com/fluency/300/classroom.png" class="card-img-top" alt="كلاسات">
        <div class="card-body text-center">
          <h5 class="card-title">الكلاسات</h5>
          <p class="card-text">متابعة وإدارة الفصول الدراسية، توزيع الطلاب والمعلمين على الكلاسات.</p>
          <a href="classes/view.php" class="btn btn-warning">عرض الكلاسات</a>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="card h-100 shadow">
        <img src="https://img.icons8.com/fluency/300/books.png" class="card-img-top" alt="مواد دراسية">
        <div class="card-body text-center">
          <h5 class="card-title">المواد الدراسية</h5>
          <p class="card-text">إدارة المواد الدراسية، متابعة المناهج والمحتوى الدراسي المقدم.</p>
          <a href="subjects/view.php" class="btn btn-danger">عرض المواد</a>
        </div>
      </div>
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
