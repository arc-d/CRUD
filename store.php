<?php 

require('database_handler.php');

table('posts')->insert([
    'title','body'
]);

header('location: list.php');