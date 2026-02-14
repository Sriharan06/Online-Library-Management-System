<?php 
session_start();
if(!isset($_SESSION['user'])) { header("Location: index.php"); exit(); }
include "db.php"; 
?>

<h2>Add New Book</h2>

<form method="POST">
    <input type="text" name="title" placeholder="Book Title" required><br>
    <input type="text" name="author" placeholder="Author Name" required><br>
    <button type="submit" name="save">Save</button>
</form>

<?php
if(isset($_POST['save'])){
    $title = $_POST['title'];
    $author = $_POST['author'];

    mysqli_query($conn, "INSERT INTO books(title, author) VALUES('$title','$author')");

    echo "<script>alert('Book Added Successfully'); window.location='dashboard.php';</script>";
}
?>
