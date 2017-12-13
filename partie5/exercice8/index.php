<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
      $mois = array ('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
      for ($numero = 0; $numero < 12; $numero++)
{
    echo $mois[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
}
       ?>
  </body>
</html>
