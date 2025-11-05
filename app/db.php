<?php
$servername = "mysql-db";
$username = "root";
$password = "root";
$database = "crud_db";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
