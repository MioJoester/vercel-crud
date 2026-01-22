<?php
include "../includes/db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $u = $_POST['username'];
  $p = $_POST['password'];

  $q = mysqli_query($conn,
    "SELECT * FROM users WHERE username='$u' AND role='admin'"
  );
  $admin = mysqli_fetch_assoc($q);

  if ($admin && $p === $admin['password']) {
    $_SESSION['user_id'] = $admin['id'];
    $_SESSION['role'] = 'admin';
    header("Location: dashboard.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="container" style="max-width:420px;">
  <div class="card">
    <h2>Admin Login</h2><br>
    <form method="POST">
      <input name="username" placeholder="Username"><br><br>
      <input type="password" name="password" placeholder="Password"><br><br>
      <button>Login</button>
    </form>
  </div>
</div>

</body>
</html>
