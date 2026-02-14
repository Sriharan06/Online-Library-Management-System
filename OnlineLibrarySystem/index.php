<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Library Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h2>Online Library Management System</h2>

    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <input type="password" name="password" placeholder="Enter Password" required><br>
        <button type="submit">Login</button>
    </form>

    <p>Don't have an account? <a href="register.php">Register here</a></p>

</body>

</html>