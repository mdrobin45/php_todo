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
    <?php
    // Database connection for retrieve items
        include('./database.php');
    ?>

    <div class="main">
        <div class="container">
            <form action = "./insert.php" method="post" class="addTodoForm">
                <input name="todo" type="text" placeholder="Write todo">
                <input type="submit" value="Add to list" name="addList">
            </form>

            <!-- Retrieve dynamic todo list from database start -->
            <?php
            $sql = "SELECT * FROM todo";
            $retrieveList = mysqli_query($conn, $sql) or die("Database query error!");

            while($list = mysqli_fetch_assoc($retrieveList)){?>
                <div class="items">
                <div class="content">
                    <div class="content-left d-flex">
                        <p class="itemList"><?php echo $list["items"];?></p>
                    </div>
                    <div class="content-right">
                        <a href="./delete.php?id=<?php echo $list['id'];?>">
                            <img src="./images/delete.svg" alt="delete">
                        </a>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- Retrieve dynamic todo list from database end -->
        </div>
    </div>

    <!-- Script -->
    <script src="./events.js"></script>
</body>
</html>