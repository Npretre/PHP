<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $name = htmlspecialchars($_POST['name']);
      $surname = htmlspecialchars($_POST['surname']);
      echo $name.' '.$surname;
     ?>
  </body>
</html>
