  <?php
    $title = "Bienvenue";
    $section="Bienvenue";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <section class="pane home" id="content">
    <article class="lastlinks">
      Points d’intérêts récents : 
      <a href="pages/references/visite">Visite du web</a>,
      <a href="pages/ressources/HTML/start">Bien démarrer avec HTML <span>2DGM</span></a>,
      <a href="pages/projets/micromedia">Micromédia </a> +
      <a href="pages/ressources/rwd">Responsive web design <span>3DGM</span></a>,
      <a href="pages/projets/memoirevive/">Mémoire vive <span>4DGM</span></a>
    </article>
    <article class="homelinks">
      
    </article>
  </section>


  <script src="/web/assets/js/home.js"></script>
  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
