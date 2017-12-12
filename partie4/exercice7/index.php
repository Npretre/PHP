<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php
     genage(2,'femme');
     function genage($age,$genre){
       if ($age<18 && $genre == 'homme') {
         echo 'Vous êtes un homme et vous êtes mineur';
       }elseif ($age<18 && $genre == 'femme') {
         echo 'Vous êtes une femme et vous êtes mineur';
       }elseif ($age>=18 && $genre == 'femme') {
         echo 'Vous êtes une femme et vous êtes majeur';
       }elseif ($age>=18 && $genre == 'homme') {
         echo 'Vous êtes un homme et vous êtes majeur';
       }
     }
   ?>
  </body>
</html>
