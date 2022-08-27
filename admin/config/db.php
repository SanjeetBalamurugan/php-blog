<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'blog';

$conn = mysqli_connect($host, $user, $password, $database);

$sql = 'SELECT id, featuredImage, title, content, likes, context FROM posts';

$result = mysqli_query($conn, $sql);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
