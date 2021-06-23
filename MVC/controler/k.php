<!DOCTYPE html>
<html>
  <head>
    <!-- // -->
    <!-- <link rel="stylesheet" href="<?php //echo BASE_URL; ?>" /> -->
  </head>
  <body>
    <!-- // -->
    <?php
        $path = '../public/css.php';
        //echo realpath($path);
       header("Location:".$path);
     ?>
  </body>
</html>