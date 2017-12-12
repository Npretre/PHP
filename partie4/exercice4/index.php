<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
       concatChar(7, 20);
       function concatChar($number1,$number2){
         if ($number1 > $number2) {
           echo "Le premier nombre est plus grand";
         }
         if ($number1 < $number2) {
           echo "Le premier nombre est plus petit";
         }
         if ($number1 == $number2) {
           echo "Les deux nombres sont identiques";
         }
       }
       ?>
  </body>
</html>
