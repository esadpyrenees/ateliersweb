<?php
    // config
    $title = "Figures";
    $section="projets";
    $subsection="figures";
    $mdfile = "./index.md";
    // $date = "today";
    // $custom_js = "webring.js";
    $nav = "/web/snippets/projets/_projets.php";

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
        figure {
            margin: 0;
            aspect-ratio:16/9
        }
        figure img {
            width:100%; height: 100%; object-fit: cover
        }
        .pad{
            border: 1px dotted #000;
            padding: 1em;
            font-family: monospace;
        }
        .pad h1, .pad h2, .pad h3, .pad h4 {font-size: 1em; font-weight: bold;;}
    </style>
    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?= $Parsedown->text( file_get_contents( "proposals.md" ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
