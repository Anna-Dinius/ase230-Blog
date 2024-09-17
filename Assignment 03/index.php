<?php
include_once('functions.php');
include_once('data.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Blog</title>

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
    <?php
    /*
      This is a for loop that displays the titles of all blog posts. Once clicked, the user is sent to the details page with
      an appropriate query string.
    */
    for ($i = 0; $i < count($posts); $i++) {
      ?>
      <div class="col-md-6">
        <a href='detail.php?index=<?= $i ?>'>
          <div class="post row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
            <div class="col p-4 d-flex flex-column position-static">
              <h3>
                <?= $posts[$i]['title'] ?>
              </h3>
            </div>
          </div>
        </a>
      </div>
      <?php
    }
    ?>
  </main>
</body>

</html>