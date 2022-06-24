<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <div class="main">
        <div class="container">
            <form class="addTodoForm">
                <input type="text" placeholder="Write todo">
                <input type="submit" value="Add to list">
            </form>

            <!-- Retrieve dynamic todo list from database start -->
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'todo_list') or die("Database connection failed!");
                $sql = "SELECT * FROM todo";
                $retval = mysqli_query($conn, $sql) or die("Database query error!");

            while($list = mysqli_fetch_assoc($retval)){?>
                <div class="items">
                <div class="content">
                    <img src="./images/check.svg" alt="Check">
                    <img src="./images/uncheck.svg" alt="uncheck">
                    <p><?php echo $list["items"];?></p>
                    <img src="./images/delete.svg" alt="delete">
                </div>
            </div>
            <?php }?>
            <!-- Retrieve dynamic todo list from database end -->
        </div>
    </div>
</body>
</html>