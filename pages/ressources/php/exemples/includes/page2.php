<?php include("snippets/header.php") ?>
<?php include('snippets/nav.php'); ?>

<main>
  <h2>Ceci est la page 2</h2>
  <?php 
    $pigeon = file_get_contents('pigeon.svg'); 
    echo($pigeon);
  ?>
  <p>
    Le pigeon est inclus en tant que code svg, ce qui rend ses attributs de couleur ou de contour manipulables en CSS. 
  </p>
</main>

<?php include("snippets/footer.php") ?>