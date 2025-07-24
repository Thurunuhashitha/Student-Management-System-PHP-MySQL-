<?php
session_start();
session_destroy();
?>

<?php include 'navbar.php'; ?>

<div class="container mt-5 text-center">
  <div class="alert alert-info shadow">
    <h4><i class="fa fa-sign-out-alt"></i> You have been logged out successfully.</h4>
    <a href="index.php" class="btn btn-primary mt-3"><i class="fa fa-arrow-left"></i> Go to Login</a>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>