<?php 
session_start();
if(!isset($_SESSION['user'])) { header("Location: index.php"); exit(); }
?>

<h2>Welcome, <?php echo $_SESSION['user']; ?> 👋</h2>

<a href="addBook.php">➕ Add Book</a><br><br>
<a href="viewBooks.php">📚 View Books</a><br><br>
<a href="logout.php">🚪 Logout</a>
