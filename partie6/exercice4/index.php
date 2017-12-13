<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <?php
    if (isset($_GET['langage']) && isset($_GET['serveur'])){ // On a le nom et le prénom
      echo  $_GET['langage'] . ' ' . $_GET['serveur'];
    }else {
      echo 'Il faut renseigner les paramètres';
    }
    ?>
  </body>
</html>
