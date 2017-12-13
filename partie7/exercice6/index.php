<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>

  </title>
</head>
<body>
  <?php
  if(isset($_POST['name'])&&(isset($_POST['surname']))){
    $civility=$_POST['Civility'];
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    echo $civility.' '.$name.' '.$surname;
  }
  else{
    ?>
    <form action='index.php' method='post'>
    <select name='Civility'>
      <option value='Mr'>Mr</option>
      <option value='Mme'>Mme</option>
    </select>
    <input type='text' name='name'>
    <input type='text' name='surname'>
    <input type='submit' name='Valider' value='Valider!'>
  </form>
<?php
  if(!empty($_POST['name'])&&(!empty($_POST['surname']))){
    $civility=htmlspecialchars($_POST['Civility']);
    $name=htmlspecialchars($_POST['name']);
    $surname=htmlspecialchars($_POST['surname']);
  }
    }
   ?>
</body>
</html>
