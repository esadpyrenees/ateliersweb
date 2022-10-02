<?php
    // config
    $title = "Références HTML CSS";
    $section = "references";
    $subsection = "htmlcss";
    $mdfile = "./references.md";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // markdown!
    $Parsedown = new ParsedownExtra();

?>
  <main class="pane active" id="content">
      <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
      <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
  </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>