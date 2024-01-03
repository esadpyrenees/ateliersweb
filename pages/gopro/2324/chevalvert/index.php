<?php
    // config
    $title = "Auto-défense économique – 2023–2024 — Stéphane Buellet & Chevalvert";
    $description = "Ressources d’auto-défense économique pour graphistes en temps de crise.";
    $section="gopro";
    $subsection="2324";
    $date = "28/09/2023";
    $mdfile = "./index.md";
    $nav = "/web/snippets/gopro.php"; // specific subnav
    
    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtraPlugin.php';
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
            $pad = file_get_contents( "https://semestriel.framapad.org/p/esad_gopro_chevalvert/export/markdown" );
            $parsed_pad = $Parsedown->text( $pad );
            echo $parsed_pad;
        ?>
        </div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
