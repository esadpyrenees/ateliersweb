<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="html";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    // include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/html.php");
  ?>

  <main class="pane active" id="content">
    <h1>HTML</h1>
    <p>
        Le langage HTML sert à structurer le contenu d’un document pour le rendre accessible sur le web. Au delà du texte, il permet d’intégrer à une page web des médias : image, audio et vidéo.
    </p>

    <section class="section" id="introduction">
        <?= $Parsedown->text( file_get_contents('./1.introduction.md') ); ?>
    </section>

    <section class="section" id="online">
        <?= $Parsedown->text( file_get_contents('./4.online.md') ); ?>
    </section>

    <section class="section" id="browsers">
        <?= $Parsedown->text( file_get_contents('./2.browsers.md') ); ?>
    </section>

    



    </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
