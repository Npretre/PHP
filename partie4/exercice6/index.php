<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
       concat('Nicolas ', 23, ' Pretre ');
       function concat($firstname,$age,$lastname){
         echo $firstname . $lastname . $age . ' ans.' ;
       }
       ?>
  </body>
</html>
