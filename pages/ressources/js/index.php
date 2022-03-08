<?php
    // config
    $title = "Ressources → Javascript";
    $section="ressources";
    $subsection="js";
    $nav = "/web/snippets/ressources/js.php";
    $mdfile = "./index.md";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>
    <style>
        .bigbutton {margin-top:0.5em}
    </style>
    <main class="pane active" id="content">
        <section>
            <div id="randomramdam" >RANDOM/RAMDAM</div>                
        </section>
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  