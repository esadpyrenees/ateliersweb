<?php
    // config
    $title = "Ressources";
    $description = "Ressources pédagogiques autour de HTML, CSS, FTP, Javascript, PHP, Python, Typographie, Audio & vidéo, Responsive, Canvas, CTRL Alt print, Kirby…";
    $section="ressources";
    $mdfile = "./index.md";
    $custom_css = "ressources.css"; // relative or absolute file URL
    // $nav = "/web/snippets/ressources/_resources.php"; // specific subnav

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
      
    </style>
    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
