<?php
include "includes/db.php";
include "includes/auth.php";
requireUser();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $n = $_POST['name'];
  $p = $_POST['phone'];
  $e = $_POST['email'];
  $uid = $_SESSION['user_id'];

  mysqli_query($conn,
    "INSERT INTO entries (user_id, name, phone, email)
     VALUES ('$uid','$n','$p','$e')"
  );
}

$data = mysqli_query($conn,
  "SELECT * FROM entries WHERE user_id='{$_SESSION['user_id']}'"
);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="nav">
  <div class="nav-inner">
    <strong>Dashboard</strong>
    <a href="about.php" class="small">About</a>
  </div>
</div>

<div class="container">

  <div class="card">
    <h2>New Entry</h2><br>
    <form method="POST">
      <input name="name" placeholder="Name"><br><br>
      <input name="phone" placeholder="Phone"><br><br>
      <input name="email" placeholder="Email"><br><br>
      <button>Submit</button>
    </form>
  </div>

  <br><br>

  <div class="card">
    <h2>Your Entries</h2><br>
    <table>
      <tr><th>Name</th><th>Phone</th><th>Email</th></tr>
      <?php while ($r = mysqli_fetch_assoc($data)): ?>
        <tr>
          <td><?= $r['name'] ?></td>
          <td><?= $r['phone'] ?></td>
          <td><?= $r['email'] ?></td>
        </tr>
      <?php endwhile; ?>
    </table>
  </div>

</div>

</body>
</html>
