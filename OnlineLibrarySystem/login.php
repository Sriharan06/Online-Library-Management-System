<?php
session_start();
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

if (mysqli_num_rows($result) > 0) {
    $_SESSION['user'] = $username;
    header("Location: dashboard.php");
} else {
    echo "<script>alert('Invalid Login'); window.location='index.php';</script>";
}
?>
