<?php
    // config
    $title = "Ressources → SVG";
    $description = "L’incommensurable pouvoir de SVG, entre code et dessin";
    $section="ressources";
    $subsection="svg";
    $subsubsection="svg";
    $nav = "/web/snippets/ressources/svg.php"; // specific subnav
    $mdfile = "./svg.md";
    // $custom_css = "custom.css"; // relative or absolute file URL
    // $custom_js = "custom.js"; // relative or absolute file URL
    $date = "14/04/2023";

    // includes
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtraPlugin.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtraPlugin();
    $Parsedown->figuresEnabled = true;

?>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>