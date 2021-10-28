<?php
    // config
    $title = "Cultures numériques – figures";
    $section="projets";
    $subsection="figures";
    $mdfile = "./index.md";
    // $date = "today";

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
        .pad{
            border: 1px dotted #000;
            padding: 1em;
            font-family: monospace;
        }
        .pad h1, .pad h2, .pad h3, .pad h4 {font-size: 1em; font-weight: bold;;}
    </style>
    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <div class="pad">
        <?php
            $pad = file_get_contents( "https://semestriel.framapad.org/p/esad_cultures_numeriques/export/txt" );
            $parsed_pad = $Parsedown->text( $pad );
            echo $parsed_pad;
        ?>
        </div>
        <?= $Parsedown->text( file_get_contents( "proposals.md" ) ); ?>
        <?= $Parsedown->text( file_get_contents( "tools.md" ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
