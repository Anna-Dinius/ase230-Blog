<?php
include_once('functions.php');
include_once('data.php');

$index = $_GET['post_id'];
$post = getPost($posts, $index);

updateView($index);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $post['title'] ?></title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="blog.css" rel="stylesheet">
</head>

<body>
  <header class="lh-1 py-3 mb-4">
    <a class="text-decoration-none" href="index.php">
      <h1 class="container blog-header-logo">Blog</h1>
    </a>
  </header>

  <main class="container">
    <header>
      <h3 class="display-6 mb-1"><?= $post['title'] ?></h3 class="display-5 link-body-emphasis mb-1">
    </header>

    <article>
      <p class="blog-post-meta"><?= $post['date'] ?> by <?= $post['author'] ?></p>
      <p><?= $post['content'] ?></p>
    </article>
  </main>
</body>

</html>