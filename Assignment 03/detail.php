<?php
include_once('functions.php');
include_once('data.php');

$index = $_GET['index'];
$post = getPost($posts, $index);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= $post['title'] ?></title>
  </head>
  <body>
    <h1><?= $post['title'] ?></h1>
    <p><strong>Author</strong>:</p> <?= $post['author'] ?></p>
    <p><strong>Date:</strong></p> <?= $post['date'] ?></p>
    <p><?= $post['content'] ?></p>
  </body>
</html>
