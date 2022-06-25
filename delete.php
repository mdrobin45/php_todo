<?php 
// Database connection for retrieve items
include('./database.php');

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "DELETE FROM todo WHERE id = $id";
    mysqli_query($conn, $sql) or die("Database query error!");
}

// Redirect to home page
header("Location: http://localhost/todo/index.php");
?>