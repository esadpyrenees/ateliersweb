<?php
    // config
    $title = "Références — Professionnalisation";
    $description = "Ressources d’auto-défense économique pour graphistes en temps de crise.";
    $section="gopro";
    $subsection="2324";
    $date = "28/09/2023";
    $mdfile = "./index.md";

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
            // $pad = file_get_contents( "https://semestriel.framapad.org/p/esad_gopro_expectations/export/markdown" );
            // $parsed_pad = $Parsedown->text( $pad );
            // echo $parsed_pad;
        ?>
        </div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <!-- <script src="arpentage.js"></script> -->
    <script>
        const liste = [
        "Marjorie Biauné",
        "Solange Caillon",
        "Ryan Cracco",
        "Maëva Huber",
        "Morgane Lazarus",
        "Yuyuan Ma",
        "Mélina Maulet",
        "Émilie Roudaut",
        "Izis Saliba",
        "Kassandra Vanmansart",
        "Sarah Bonnemazou", 
        "Anita Brémond",
        "Maxime Carle",
        "Coralie Escaich",
        "Amandine Lavedan",
        "Coline Malaman",
        "Morganne Marion",
        "Emma Martin",
        "Alice Mourey",
        "Guilhem Pujol",
        "Aurore Tajan"
        ]

        document.onclick = () => {
            for (let i = liste.length - 1; i > 0; i--) {
                let j = Math.floor(Math.random() * (i + 1));
                [liste[i], liste[j]] = [liste[j], liste[i]];
            }

            let randomized = liste.reduce((liste, item, idx) => (liste[idx / 3 | 0] ??= []).push(item) && liste, []);

            console.log(JSON.stringify(randomized));
        }
    </script>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
