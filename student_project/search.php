<?php include 'navbar.php'; ?>
<?php include 'db.php'; ?>

<div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-success text-white">
      <h4><i class="fa fa-search"></i> Search Student</h4>
    </div>
    <div class="card-body">
      <form method="GET">
        <div class="mb-3">
          <label>Enter NIC</label>
          <input type="text" name="nic" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100"><i class="fa fa-search"></i> Search</button>
      </form>

      <?php
      if (isset($_GET['nic'])) {
          $nic = $_GET['nic'];
          $sql = "SELECT * FROM students WHERE nic='$nic'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              $row = $result->fetch_assoc();
              echo "<hr><h5>Student Details</h5>";
              echo "<ul class='list-group'>";
              echo "<li class='list-group-item'>Name: {$row['name']}</li>";
              echo "<li class='list-group-item'>Gender: {$row['gender']}</li>";
              echo "<li class='list-group-item'>Address: {$row['address']}</li>";
              echo "<li class='list-group-item'>Contact: {$row['contact_number']}</li>";
              echo "<li class='list-group-item'>Email: {$row['email']}</li>";
              echo "<li class='list-group-item'>Course: {$row['course']}</li>";
              echo "</ul>";
          } else {
              echo "<div class='alert alert-danger mt-3'>No student found.</div>";
          }
      }
      ?>
    </div>
  </div>
</div>
