<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Get</title>
</head>
<body>
  <a href="index.php?id=1">un</a>
  <a href="index.php?id=2">deux</a>
  <a href="index.php?id=3&color=red">trois</a>
  <?php 
      // L’ensemble de la requête d’URL sera accessible dans une variable nommé “$_GET”
      if(isset($_GET['id'])){
          $id = $_GET['id']; // pour plus de concision
          // affiche l’image "img/1.svg" ou "img/2.svg" ou "img/3.svg", selon la requête
          echo "<img src='img/$id.svg'>";
      }
      // si la variable color est transmise, on injecte une règle CSS
      if(isset($_GET['color'])){
        $color = $_GET['color'];
        echo "<style>body{background:$color}</style>"; // ne pas faire ça dans la vraie vie… les balises <style> doivent être déclarées dans le <head>
      }
  ?>
</body>
</html>