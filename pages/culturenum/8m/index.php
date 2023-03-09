<?php
    // config

    $title = "Grève Internationale Trans★Féministe — Décroissance Numérique";
    $section="culturenum";
    $subsection="8m";
    $mdfile = "./8m.md";
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
    .main8m {
        width: calc(100vw - 3em);
    }
    iframe {
        height: calc(100vh - 6em);
        margin: 3em 0;
    }
    #sticker {
        position: fixed;
        bottom:3em;
        right:3em;
        transform:rotate(-9deg);
        width: 350px;
        max-width: 25vw;
    }
</style>

    <main class="pane active typeset main8m" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <img src="CLOUD-NO-THANKS.svg" id="sticker">

    <script src="8m.js"></script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
