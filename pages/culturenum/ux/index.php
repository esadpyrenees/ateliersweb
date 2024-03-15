<?php
    // config
    $title = "Cultures numériques → L’expérience et l’utilisateur";
    $description = "";
    $section="culturenum";
    $subsection="ux";
    $nav = "/web/snippets/culturenum/culturenum.php"; // specific subnav
    $mdfile = "./ux.md";
    $custom_css = "/web/assets/css/vendor/glightbox.css,/web/assets/slideshowfromHTML/style.css"; // relative or absolute file URL
    // $custom_js = "/web/assets/slideshowfromHTML/script.js";
    
    $date = "12/02/2024";

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

    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script type="module" src="lightbox.js"></script>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
