<?php
    // config
    $title = "Ressources → Python → Fichiers";
    $description="Lire, parcourir, créer et modifier les fichiers en Python";
    $section="ressources";
    $subsection="python";
    $subsubsection="files";
    $nav = "/web/snippets/ressources/python.php"; // specific subnav
    $mdfile = "./files.md";

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
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>


    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
