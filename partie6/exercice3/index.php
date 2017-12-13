<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>exercice1</title>
  </head>
  <body>
    <?php
    if (isset($_GET['dateDebut']) && isset($_GET['dateFin'])){ // On a le nom et le prénom
      echo  $_GET['dateDebut'] . ' ' . $_GET['dateFin'];
    }else {
      echo 'Il faut renseigner les paramètres';
    }
    ?>
  </body>
</html>
