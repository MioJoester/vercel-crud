<?php
include "includes/db.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $u = $_POST['username'];
  $p = $_POST['password'];

  $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$u'");
  $user = mysqli_fetch_assoc($q);

  if ($user && $p === $user['password']) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['role'] = $user['role'];

    header("Location: dashboard.php");
    exit;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container" style="max-width:420px;">
  <div class="card">
    <h2>User Login</h2>
    <br>

    <form method="POST">
      <input name="username" placeholder="Username" required>
      <br><br>
      <input type="password" name="password" placeholder="Password" required>
      <br><br>
      <button>Login</button>
    </form>
  </div>
</div>

</body>
</html>
