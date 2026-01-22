<?php
include "../includes/db.php";
include "../includes/auth.php";
requireAdmin();

$data = mysqli_query($conn,
  "SELECT entries.*, users.username
   FROM entries JOIN users ON entries.user_id = users.id"
);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>

<div class="nav">
  <div class="nav-inner">
    <strong>Admin</strong>
    <a href="../index.php" class="small">Home</a>
  </div>
</div>

<div class="container">
  <div class="card">
    <h2>All Entries</h2><br>
    <table>
      <tr><th>User</th><th>Name</th><th>Phone</th><th>Email</th></tr>
      <?php while ($r = mysqli_fetch_assoc($data)): ?>
        <tr>
          <td><?= $r['username'] ?></td>
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
