<?php
    // config
    $title = "Cultures numériques → Keep it simple stupid";
    $section="culturenum";
    $subsection="kiss";
    $mdfile = "./index.md";
    $description = "De la simplicité dans le design";
    $date = "16/03/2023";
    $custom_js = "/web/assets/slideshowfromHTML/script.js";
    $custom_css = "/web/assets/slideshowfromHTML/style.css";

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
        <div class="pad">
        <?php
            $pad = file_get_contents( "https://semestriel.framapad.org/p/esad_cultures_numeriques_kiss/export/txt" );
            $parsed_pad = $Parsedown->text( $pad );
            echo $parsed_pad;
        ?>
        </div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
