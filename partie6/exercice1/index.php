<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <?php
    if (isset($_GET['prenom']) && isset($_GET['nom'])){ // On a le nom et le prénom
      echo  $_GET['prenom'] . ' ' . $_GET['nom'];
    }else {
      echo 'Il faut renseigner les paramètres';
    }
    ?>
  </body>
</html>
