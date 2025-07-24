<?php
session_start();
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname = $_POST['username'];
    $pwd = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username='$uname' AND password='$pwd'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['admin'] = $uname;
        header("Location: dashboard.php");
    } else {
        echo "Invalid credentials.";
    }
}
?>
<?php include 'navbar.php'; ?>
<div class="container mt-5">
  <div class="card shadow-lg">
    <div class="card-header bg-primary text-white">
      <h4><i class="fa fa-sign-in-alt"></i> Admin Login</h4>
    </div>
    <div class="card-body">
      <form method="POST">
        <div class="mb-3">
          <label>Username</label>
          <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100"><i class="fa fa-sign-in-alt"></i> Login</button>
      </form>
    </div>
  </div>
