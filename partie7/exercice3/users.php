<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = htmlspecialchars($_GET['name']);
      $surname = htmlspecialchars($_GET['surname']);
      echo $name.' '.$surname;
     ?>
  </body>
</html>
