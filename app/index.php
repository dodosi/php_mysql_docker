<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>PHP MySQL CRUD</title>
</head>
<body>
  <h1>Users</h1>
  <a href="create.php">Add New</a>
  <table border="1" cellpadding="10">
    <tr><th>ID</th><th>Name</th><th>Email</th><th>Actions</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM users");
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['email']}</td>
        <td>
          <a href='update.php?id={$row['id']}'>Edit</a> |
          <a href='delete.php?id={$row['id']}'>Delete</a>
        </td>
      </tr>";
    }
    ?>
  </table>
</body>
</html>
