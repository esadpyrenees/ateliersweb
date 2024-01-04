<?php
    // config
    $title = "Projets";
    $description = "Projets pédagogiques de l’atelier web et du pôle Nouveaux médias.";
    $section="projets";
    $mdfile = "./index.md";
    // $nav = "/web/snippets/projets/_projets.php"; // specific subnav

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
      .gridlist {  font-size: clamp(1.5em,2vw,2.5em); line-height: 1; }
      .gridlist ul { grid-gap: 2rem; }
      .gridlist a { border-bottom: none; }
    </style>
    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
