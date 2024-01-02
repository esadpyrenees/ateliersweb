<?php 
  // chargement de la librairie Parsedown, qui transforme le markdown en html
  include_once '_inc/Parsedown.php';
  include_once '_inc/ParsedownExtra.php';
  // initialisation de la librairie
  $Parsedown = new ParsedownExtra();

  // la variable $content_id détermine à la fois…
  // – le nom du fichier markdown
  // – la class du body (permettant d’ajuster la mise en forme en fonction de la section active) 
  $content_id = 'intro';

  // un chapitre est-il sélectionné ?
  if (isset($_GET['chapter'])) {
    // si oui, on crée le nom de fichier basé sur ce chapitre
    $content_id = 'part-' . $_GET['chapter'];    
  } 
  // on stocke le contenu du fichier md dans la variable $markdown
  $markdown = file_get_contents( $content_id . '.md');
  // grâce à Parsedown, on le transforme en HTML
  $html =  $Parsedown->text( $markdown );
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Mémoire</title>
</head>
<body class="<?= $content_id ?>">

  <header>
    <a class="logo" href="index.php">☻</a>
    <nav>
      <a <?= $content_id=="intro" ? "class='active'" : "" ?> href="index.php">Intro</a>
      <a <?= $content_id=="part-1" ? "class='active'" : "" ?> href="index.php?chapter=1">Partie 1</a>
      <a <?= $content_id=="part-2" ? "class='active'" : "" ?> href="index.php?chapter=2">Partie 2</a>
      <a <?= $content_id=="part-3" ? "class='active'" : "" ?> href="index.php?chapter=3">Partie 3</a>
      <a <?= $content_id=="part-3" ? "class='active'" : "" ?> href="index.php?chapter=about">À propos</a>
    </nav>
  </header>
  
  <main>ici :
    <?= $html ?>
  </main>
</body>
</html>