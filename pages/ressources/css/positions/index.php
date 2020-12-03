<?php
    // config
    $title = "Ressources – CSS";
    $section="ressources";
    $subsection="css";
    $nav = "/web/snippets/ressources/css.php";
    $subsubsection="positions";
    $mdfile = "./positions.md";

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
        .fixed {
          position: fixed;
          bottom: 20px;
          right: 20px;
          width: 20px;
          height:20px;
          background:black;
        }
        .sticky {
          position: sticky;
          float: right;
          top: 0px;
          width: 20px;
          height:20px;
          background:YellowGreen;
        }
    </style>
    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    <div class="fixed"></div>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
