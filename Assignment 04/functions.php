<?php
function getPost($posts, $index)
{
  return $posts[$index];
}

function updateView($target_id)
{
  if (file_exists('visitors.csv')) {
    $lines = file('visitors.csv');
    $updated_lines = [];
    $views = 0;

    for ($i = 0; $i < count($lines); $i++) {
      $line = explode(';', $lines[$i]);

      $id = trim($line[0]);

      $views = trim($line[1]);

      if ($id == $target_id) {
        $views++;
      }

      $updated_lines[] = $id . ';' . $views;
    }

    // writing to the file
    $fp = fopen('visitors.csv', 'w');

    foreach ($updated_lines as $line) {
      fputs($fp, $line . PHP_EOL);
    }

    fclose($fp);
  } else {
    echo "
      <script>
        alert('Error: Could not update view count')
      </script>
    ";
  }
}