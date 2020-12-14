<?php
    // config
    $title = "Projets: Code is law";
    $section="projets";
    $subsection="textedit";
    // $nav = "/web/snippets/ressources/NAV.php"; // specific subnav
    $mdfile = "./textedit.md";

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

<link rel="stylesheet" href="textedit.css"/>
<link rel="stylesheet" href="/web/assets/css/vendor/flickity.css"/>


    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<script src="/web/assets/js/vendor/flickity.pkgd.min.js"></script>
<script>
    // element argument can be a selector string
    //   for an individual element
    var flkty = new Flickity( '.scrollables', {
        pageDots: false,
        imagesLoaded: true,
        cellAlign: 'left',
        lazyLoading:true,
        cellSelector: 'figure'
    });
</script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
