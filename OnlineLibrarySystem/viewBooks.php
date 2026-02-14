<?php 
session_start();
if(!isset($_SESSION['user'])) { header("Location: index.php"); exit(); }

include "db.php";
$result = mysqli_query($conn, "SELECT * FROM books");
?>

<h2>Available Books</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Author</th>
    <th>Status</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['title']; ?></td>
    <td><?php echo $row['author']; ?></td>
    <td><?php echo $row['status']; ?></td>
</tr>
<?php } ?>
</table>

<br>
<a href="dashboard.php">⬅ Back</a>
