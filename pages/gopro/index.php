<?php
    // config
    $title = "Professionnalisation";
    $description = "Ressources d’auto-défense économique pour graphistes en temps de crise.";
    $section="gopro";
    $subsection="gopro";
    $mdfile = "./gopro.md";
    $nav = "/web/snippets/gopro.php"; // specific subnav

    $custom_css = "assets/gopro.css"; // relative or absolute file URL
    $custom_js = "assets/gopro.js"; // relative or absolute file URL
    
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

    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
