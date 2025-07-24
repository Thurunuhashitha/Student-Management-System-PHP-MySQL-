<?php include 'navbar.php'; ?>
<?php include 'db.php'; ?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-danger text-white">
      <h4><i class="fa fa-trash"></i> Delete Student</h4>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label>Enter NIC to Delete</label>
          <input type="text" name="nic" class="form-control" required>
        </div>
        <button type="submit" name="delete" class="btn btn-danger w-100"><i class="fa fa-trash-alt"></i> Delete</button>
      </form>

      <?php
      if (isset($_POST['delete'])) {
          $nic = $_POST['nic'];
          $sql = "DELETE FROM students WHERE nic='$nic'";
          if ($conn->query($sql)) {
              echo "<div class='alert alert-success mt-3'>Student deleted successfully.</div>";
          } else {
              echo "<div class='alert alert-danger mt-3'>Error: {$conn->error}</div>";
          }
      }
      ?>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>