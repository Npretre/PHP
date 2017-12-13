<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exercice7</title>
  </head>
  <body>
    <?php
    if(isset($_POST['name'])&&(isset($_POST['surname']))){
      $civility=$_POST['Civility'];
      $name=$_POST['name'];
      $surname=$_POST['surname'];
      echo $civility.' '.$name.' '.$surname.' ';
    }
    else{
      ?>
      <form action='index.php' method='post' enctype="multipart/form-data">
      <select name='Civility'>
        <option value='Mr'>Mr</option>
        <option value='Mme'>Mme</option>
      </select>
      <input type='text' name='name'>
      <input type='text' name='surname'>
      <input type="file" name="monfichier">
      <input type='submit' name='Valider' value='Valider!'>
    </form>
<?php
  }
    if(!empty($_POST['name'])&&(!empty($_POST['surname']))&&(isset($_FILES['monfichier']))&&($_FILES['monfichier'])){
      $civility=htmlspecialchars($_POST['Civility']);
      $name=htmlspecialchars($_POST['name']);
      $surname=htmlspecialchars($_POST['surname']);
      $infosfichier = pathinfo($_FILES['monfichier']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('pdf');
      if (in_array($extension_upload, $extensions_autorisees))
        {
          echo $_FILES['monfichier']['name'];
        } else {
          echo "Veuillez envoyer un PDF";
        }
    }
     ?>
  </body>
</html>
