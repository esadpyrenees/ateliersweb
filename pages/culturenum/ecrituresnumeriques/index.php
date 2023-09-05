<?php
    // config
    $title = "Cultures numériques → Écritures numériques";
    $section="culturenum";
    $subsection="ecrituresnumeriques";
    $mdfile = "./ecrituresnumeriques.md";
    $description = "";
    $date = "26/09/2022";

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
