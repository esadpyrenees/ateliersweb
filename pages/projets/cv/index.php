<?php
    // config
    $title = "Curriculum vitæ";
    $section="projets";
    $subsection="cv";
    $mdfile = "./index.md";
    $description = "Approche du responsive web design et du web to print via la mise en forme d’un CV.";
    $date = "05/10/2023";
    $ogp_url = "ogp-cv.png";
    $nav = "/web/snippets/projets/_projets.php";

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

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
