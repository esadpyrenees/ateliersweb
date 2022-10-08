<?php
    // config
    $title = "Ressources → Typographie → Caractères spéciaux";
    $description="Une page pour rappeler quelques caractères typographiques utiles (espaces, ponctuation) et aider à leur saisie.";
    $section="ressources";
    $subsection="typo";
    $subsubsection="chars";
    $nav = "/web/snippets/ressources/type.php";
    $subsubsection="caracteres";
    $mdfile = "./caracteres.md";
    $custom_css="spaces.css";
    $custom_js="copy.js";

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
