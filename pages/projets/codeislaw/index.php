<?php
    // config
    $title = "Projets: Code is law";
    $section="projets";
    $subsection="codeislaw";
    // $nav = "/web/snippets/ressources/NAV.php"; // specific subnav
    $mdfile = "./codeislaw.md";

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
    @font-face {
        font-family: "Sprat";
        src: url("/web/assets/fonts/Sprat_Variable.woff2") format("woff2 supports variations"), 
            url("/web/assets/fonts/Sprat_Variable.woff2") format("woff2-variations");
        font-style: normal;
        font-weight: 100 200;
    }
    main h1, main h2, main h3 {
        text-align:center;
        font-family: "Sprat";
        margin: 0;
        font-weight: 100;
        font-variation-settings: 'wdth' 115;
        font-size: 2rem;
    }
    main h1 { font-size: calc(4vw + 1rem); font-variation-settings: 'wdth' 200; text-transform: uppercase;}
    main h2 { font-variation-settings: 'wdth' 150; font-size:1.5em }
    main h3 { font-variation-settings: 'wdth' 100; border:none; padding:0; margin-bottom:3em}
    p { 
    }
    header{
        margin-bottom: 1em;
    }
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    li a { text-decoration: none;}
</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
