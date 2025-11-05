<?php
include 'db.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
  if ($conn->query($sql)) {
    header("Location: index.php");
    exit; // stop further execution
  } else {
    echo "Error: " . $conn->error;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Add User</title>
</head>
<body>
  <h1>Add User</h1>
  <form method="POST">
    Name: <input type="text" name="name" required><br>
    Email: <input type="email" name="email" required><br>
    <button type="submit" name="submit">Save</button>
  </form>
</body>
</html>
