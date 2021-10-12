<?php include("snippets/header.php") ?>
<?php include('snippets/nav.php'); ?>

<main>
  <h2>Ceci est l’index</h2>
  <pre><?php 
      $contenu = file_get_contents('https://mensuel.framapad.org/p/skldhwn3h5-9pzm/export/txt');
      echo($contenu);
    ?>
  </pre>
</main>

<?php include("snippets/footer.php") ?>
