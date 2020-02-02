<?php 

require('database_handler.php');

table('posts')->update([
    'title','body'
], $_GET['id']);

header('location: list.php');