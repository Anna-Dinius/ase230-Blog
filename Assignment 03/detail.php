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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1><?= $post['title'] ?></h1>
  <p><strong>Author</strong>:</p> <?= $post['author'] ?></p>
  <p><strong>Date:</strong></p> <?= $post['date'] ?></p>
  <p><?= $post['content'] ?></p>
</body>

</html>