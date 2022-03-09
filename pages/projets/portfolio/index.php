<?php
    // config
    $title = "Projets → Portfolio avec Kirby";
    $description = "Les grands principes de l’utilisation de systèmes de gestion de contenus appliquées à la création d’un portfolio";
    $section="projets";
    $subsection="portfolio";
    $subsubsection="intro";
    $nav = "/web/snippets/projets/portfolio.php"; // specific subnav
    $mdfile = "./portfolio.md";
    $version = "1.0.3";

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
