<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();
    $title = "ÉSAD·Pyrénées — Ateliers web — Références";
    $section="references";
    $subsection="htmlcss";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>

  <main class="pane active" id="content">

        <?= $Parsedown->text( file_get_contents('./md.md') ); ?>
    
  </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
