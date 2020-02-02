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
        <h1>Edit a title</h1>
        <div class="container">
            <form action="update.php?id=<?= $post['id'] ?>" method="post">
        
                Onvan: <br>
                <input type="text" name="title" value="<?= $post['title'] ?>">
                <br>
                
                Mohtava: <br>
                <input type="text" name="body" value="<?= $post['body'] ?>"><br>
                
                <button type="submit">Submit</button>


            </form>
           
        </div>
    </body>
</html>