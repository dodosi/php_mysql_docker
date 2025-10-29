<?php
include 'db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit User</title></head>
<body>
  <h1>Edit User</h1>
  <form method="POST">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br>
    <button type="submit" name="update">Update</button>
  </form>
</body>
</html>
