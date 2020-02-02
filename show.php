<?php
    require('database_handler.php');
    $post = table('posts')->select($_GET['id']);
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
    
        <link rel="stylesheet" href="css/bootstrap.min.css">


        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <a href="delete.php?id=<?= $post['id']?>">delet this title</a><br>
        <a href="list.php">Back to list </a><br>
        <a href="edit.php?id=<?= $post['id'] ?>">edit</a>
        <h1><?= $post['title'] ?></h1>
        <div class="container">
        
        <?= $post['body'] ?>
           
        </div>
    </body>
</html>