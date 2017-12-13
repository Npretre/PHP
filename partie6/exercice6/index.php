<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <?php
    if (isset($_GET['batiment']) && isset($_GET['salle'])){ // On a le nom et le prénom
      echo  $_GET['batiment'] . ' ' . $_GET['salle'];
    }else {
      echo 'Il faut renseigner les paramètres';
    }
    ?>
  </body>
</html>
