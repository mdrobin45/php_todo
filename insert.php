<?php 
// Database connection for retrieve items
include('./database.php');

// Insert items to database
if(isset($_POST['addList'])){
    if($_POST['todo'] !== ""){
        $list = $_POST['todo'];
        
        $sql = "INSERT INTO todo(items) VALUE('$list')";
        mysqli_query($conn, $sql) or die("Database query error!"); 
    }
}

// Redirect to home page
header("Location: http://localhost/todo/index.php");
?>