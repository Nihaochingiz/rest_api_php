<?php


require 'connect.php';

$posts = mysqli_query($connect, "SELECT * FROM `posts`");


$postList = [];

while ($post = mysql_fetch_assoc($posts)) {
    $postList =  $post;

}

print_r ($postList);