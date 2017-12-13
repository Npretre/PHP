<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <?php
    if (!empty($age)){ // Si l'age est noté
      echo  $_GET['prenom'] . ' ' . $_GET['nom'];
    }else {
      echo 'Il faut remplir l\'age';
    }
    ?>
  </body>
</html>
