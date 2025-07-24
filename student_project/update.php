<?php include 'navbar.php'; ?>
<?php include 'db.php'; ?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
        <h4><i class="fa fa-edit"></i> Update Student Details</h4>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label>Enter NIC to Update</label>
          <input type="text" name="nic" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>New Address</label>
          <input type="text" name="address" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>New Contact Number</label>
          <input type="text" name="contact" class="form-control" required>
        </div>
        <button type="submit" name="update" class="btn btn-success w-100"><i class="fa fa-save"></i> Update</button>
      </form>

      <?php
      if (isset($_POST['update'])) {
          $sql = "UPDATE students SET address='{$_POST['address']}', contact_number='{$_POST['contact']}' 
                  WHERE nic='{$_POST['nic']}'";
          if ($conn->query($sql)) {
              echo "<div class='alert alert-success mt-3'>Details updated successfully.</div>";
          } else {
              echo "<div class='alert alert-danger mt-3'>Error: {$conn->error}</div>";
          }
      }
      ?>
