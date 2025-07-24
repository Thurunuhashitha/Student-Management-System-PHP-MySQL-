<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: index.php");
    exit;
}
?>
<?php include 'navbar.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5 text-center">
  <h2 class="mb-4">Welcome to Student Management System</h2>
  <p class="lead">Use the navigation bar above to manage student records.</p>
  <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" width="150">

   <div class="container mt-5">
    <div class="card shadow">
      <div class="card-header bg-primary text-white">
        <h4><i class="fa fa-info-circle"></i> System Information</h4>
      </div>
      <div class="card-body">
        <p>This system allows you to register, search, update, and delete student records efficiently.</p>
        <p>Developed by: Thurunu Hashitha</p>
        <p>Version: 1.0</p>
      </div>
    </div>
</div>
