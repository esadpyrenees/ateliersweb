<?php
    // config
    $title = "Javascript";
    $section="ressources";
    $subsection="js";
    $subsubsection = "fork";
    $nav = "/web/snippets/ressources/js.php";
    $mdfile = "./fork.md";

    $ogp_url = "ressources/js/fork/ogp.png";
    $custom_css = "fork.css";

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


    <main class="pane active" id="content">
        <section>
            <div id="randomramdam" >FORK</div>                
        </section>
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="fork.js"></script>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  