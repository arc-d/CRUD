<?php 

require('database_handler.php');

table('posts')->delete($_GET['id']);

header('location: list.php');