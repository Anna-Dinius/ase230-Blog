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
</head>

<body>
  <?php
  /*
    This is a for loop that displays the titles of all blog posts. Once clicked, the user is sent to the details page with
    an appropriate query string.
  */
  for ($i = 0; $i < count($posts); $i++) {
    ?>
    <div>
      <a href='detail.php?index=<?= $i ?>'>
        <h1>
          <?= $posts[$i]['title'] ?>
        </h1>
      </a>
    </div>
  <?php
  }
  ?>
</body>

</html>