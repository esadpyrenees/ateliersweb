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
  <a href="index.php?dossier=butterflies">papillons</a>
  <a href="index.php?dossier=birds">oiseaux</a>
  <a href="index.php?dossier=bugs">coléoptères</a>
  
  <?php 
      if(isset($_GET['dossier'])){
        // crée un div class="gallery" uniquement si un dossier a été requis
        echo '<div class="gallery">';
          // ajoute un "/" au nom du dossier 
          $dossier = $_GET['dossier'] . "/"; 
          // détermine quels seront les fichiers à conserver
          $files = $dossier.'*.{jpg,JPG,jpeg,JPEG,png,PNG}';
          // utilise la fonction glob() pour lister les fichiers
          // plus de détails sur https://www.php.net/manual/fr/function.glob.php
          foreach(glob($files,GLOB_BRACE) as $file){
              echo "<img src='$file'>";
          }
        echo '</div>';
      }
  ?>
  
</body>
</html>