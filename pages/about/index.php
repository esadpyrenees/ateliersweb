<?php
    // config
    $title = "Ateliers web — À propos";
    $section="about";
    // $subsection="PAGE";
    // $nav = "/web/snippets/ressources/NAV.php"; // specific subnav
    $mdfile = "./about.md";
    $description = "Le site réunit des ressources et références liées aux enseignements en webdesign, cultures numériques et écritures numériques de Julien Bidoret à l’ÉSAD Pyrénées.";

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

<style type="text/css">
form {
    padding:1em;
    margin:1em 0;
    background:#eee
}form p {
    margin:0
}
input[type=text]{
    border:2px solid;
    width:100% !important;
    padding:.25em .75em;
    font-family:inherit;
    font-size:inherit;
    margin:0 0 1em
}
input[type=submit]{
    border:2px solid black;
    background:black;
    color:white;
    width:auto;
    padding:.25em .75em;
    font-family:inherit;
    font-size:inherit;
}
</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <form action="https://tinyletter.com/ateliersweb" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/ateliersweb', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true">         
            <p><label for="tlemail">Inscrivez-vous à la newsletter pour être tenu·e au courant des actualités du site</label></p>
            <p><input type="text" style="width:140px" name="email" id="tlemail" /></p>
            <input type="hidden" value="1" name="embed"/>
            <input type="submit" value="Subscribe" />
        </form>
         
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
