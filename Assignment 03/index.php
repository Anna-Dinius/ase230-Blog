<?php
include_once('functions.php');
include_once('data.php');


?>

<!DOCTYPE html>
<html lang="en"> 
  <head>
    <title></title>
  </head>

  <body>
    <?php 
      /*
        This is a for loop that displays the titles of all blog posts. Once clicked, the user is sent to the details page with
        an appropriate query string.
      */
      for($i = 0; $i < count($posts); $i++){
    ?>
      <div>
        <a href=<?= 'detail.php/?index=' . $i?>>
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