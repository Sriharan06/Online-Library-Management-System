<?php
$conn = mysqli_connect("localhost", "root", "", "librarydb");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
