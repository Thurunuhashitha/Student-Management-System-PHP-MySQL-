<?php include 'navbar.php'; ?>
<?php include 'db.php'; ?>

<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4><i class="fa fa-user-plus"></i> Register New Student</h4>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label>Name</label>
          <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>NIC</label>
          <input type="text" name="nic" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Gender</label>
          <select name="gender" class="form-select">
            <option>Male</option>
            <option>Female</option>
          </select>
        </div>
        <div class="mb-3">
          <label>Address</label>
          <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
          <label>Contact Number</label>
          <input type="text" name="contact_number" class="form-control">
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
        </div>
        <div class="mb-3">
          <label>Course</label>
          <select name="course" class="form-select">
            <option>IT</option>
            <option>Business</option>
            <option>Engineering</option>
          </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary w-100"><i class="fa fa-save"></i> Register</button>
      </form>
    </div>
  </div>
</div>

<?php
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO students VALUES (
        '{$_POST['nic']}', '{$_POST['name']}', '{$_POST['gender']}',
        '{$_POST['address']}', '{$_POST['contact_number']}',
        '{$_POST['email']}', '{$_POST['course']}')";

    if ($conn->query($sql)) {
        echo "<div class='alert alert-success text-center mt-3'>Student Registered Successfully</div>";
    } else {
        echo "<div class='alert alert-danger text-center mt-3'>Error: {$conn->error}</div>";
    }
}
?>
