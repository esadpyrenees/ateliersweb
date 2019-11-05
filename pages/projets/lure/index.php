<?php
    // config
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section = "projets";
    $subsection = "typo";
    // $nav = "/web/snippets/ressources/type.php"; // specific subnav
    $mdfile = "./lure.md";

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

    <style media="screen">
        .speaker-0 { background:#3fa535; color:#fff }
        .speaker-1 { background:#e6007e; color:#fff }
        .speaker-2 { background:#283583; color:#fff }
        .speaker-3 { background:#009fe3; color:#fff }
        .speaker-4 { background:#ffc900; color:#fff }
        .speaker-5 { background:#000000; color:#fff }
        #content{ padding:0; }
        .splash h1, .splash h2, .splash h3 { color:white}

        .splash {
            position:relative;
            background:black;
            color:#eee;
            min-height:100vh;
            height:100vh;
            padding: 2rem 2rem 6rem
        }

        .splash  ~ p {
            padding: 0 2rem 0
        }
        .splash  h1 {
            font-size: calc(3vw + 1rem);
            font-weight: normal;
            line-height: 1.1;
            margin: 0 0 1em;
            padding-left: 5rem;
            text-indent: -5rem;
        }
        .splash  h1 span {
            position: relative;
            left: -0.15em;
        }

        .splash  p {
            padding: 0 0 1em 5rem;
            font-size: calc(1.5vw + 1rem);
            margin: 0;
            font-weight: normal;
            line-height: 1.1;
        }
        .splash > span{
            position:absolute;
            bottom:0;
            left:7rem;
            border-left:1px solid white;
            display:block;
            height:3em;
        }
        #lure {
            padding:2em
        }
    </style>

    <main class="pane active" id="content">



        <div class="splash">
            <h1><strong>Instant T</strong> <br><span>Temps,</span> <br>tendances, <br>typographie</h1>
            <span></span>
        </div>

        <div class="splash">
            <p>
                Une proposition des étudiants de l’ÉSAD Pyrénées, aux rencontres de Lure en 2019.
            </p>
            <p>
                Léo Gaullier, Marjorie Bozonnet, Léa Poitte, Margot Laforge, Arthur Billaud, Thibault Maïo et Julien Bidoret.
            </p>
            <p>
                Références en images et en vidéos sur<br>
                <a style="display:block; padding-left:2em; border:none; text-decoration:underline" href="http://ateliers.esad-pyrenees.fr/lure/">ateliers.<br>esad-pyrenees.fr<br>/lure/</a>
            </p>
            <span></span>
        </div>

        <div id="lure">
            <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
            <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
        </div>

    </main>


    <script type="text/javascript">
        const e = ["Léo:", "Léa:", "Marjorie:", "Arthur:", "Thibault:", "Margot:"];
        let html = document.querySelector('#lure').innerHTML;
        document.querySelector('#lure').innerHTML = "";
        let output = "";
        for (var i = 0; i < e.length; i++) {
            let idx = i;
            let toReplace = e[i];
            let nw = e[i].split(':')[0] + "&nbsp;:"
            let newWord = `<span class="speaker-${idx}">${nw}</span>`;
            let regEx = new RegExp(toReplace,"g");
            output = html.replace(regEx, newWord);
            html = output;
        }
        document.querySelector('#lure').innerHTML = output;
    </script>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
