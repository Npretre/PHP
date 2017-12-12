<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $genre = "femme";
    $age = 23;

    if ($genre == "homme" && $age < 18) {
      echo "Vous êtes un homme et vous êtes mineur";
    }

    if ($genre == "homme" && $age > 18) {
      echo "Vous êtes un homme et vous êtes majeur";
    }
    if ($genre == "femme" && $age < 18) {
      echo "Vous êtes une femme et vous êtes mineur";
    }
    if ($genre == "femme" && $age > 18) {
      echo "Vous êtes une femme et vous êtes majeur";
    }
    ?>
  </body>
</html>
