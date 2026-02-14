<?php include "db.php"; ?>

<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Create Account</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <button name="register">Register</button>
</form>

</body>
</html>

<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO users (username, password) VALUES ('$username','$password')");
    echo "<script>alert('Registration Successful'); window.location='index.php';</script>";
}
?>
