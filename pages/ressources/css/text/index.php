<?php

    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';

    $Parsedown = new ParsedownExtra();

    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="CSS";
    $subsubsection="text";

    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/css.php");
  ?>

  <main class="pane active" id="content">
      <?= $Parsedown->text( file_get_contents('./text.md') ); ?>
  </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
