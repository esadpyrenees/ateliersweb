<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "Projets: Pecha Kucha";
  $section="projets";
  $subsection="pechakucha";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>
    <style type="text/css">


        .pechakucha {
            position: relative;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            font: normal 1em "Times New Roman", serif;
            overflow-x: hidden;
        }

        .pechakucha section {
            width: 33.33%;
            padding: 1em;
            overflow-x: hidden;
        }

        .pechakucha article {
            font-size: calc(.5em + 1.5vw);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            grid-auto-flow: dense
        }
        .pechakucha a{
            word-break: break-all
        }
        .pechakucha article p {
            padding: 1rem;
            margin: .5em 0;
            transform-origin: 0 0;

        }
        .pechakucha h2 {
            font-size: 4vw;
            font-weight: normal;
            margin: 0;
            transform-origin: 0 0;
            font-family: sans-serif
        }

        .pechakucha h1 {
            padding-top: 0;
            width: 100%;
            font-size: 12vw;
            font-weight: bold;
            transform-origin: 0 0;
            margin: 0 0 .05em 0;
            line-height: .9;
            font-family: sans-serif;

        }
        .pechakucha h1 span{
            transform-origin: 0 0;
            transform: scaleX(2);
            display: block;
        }
        .pechakucha h1 span + span{
            transform-origin: 100% 0;
            text-align: right
        }

        .pechakucha section p {
            font-size: calc(.5em + 1.5vw);
            margin: 0;
            transform-origin: 0 0;

        }

        @media (max-width:1000px) {
            .pechakucha section {
                width: 50%
            }
            .pechakucha article {
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width:800px) {
            .pechakucha h2 {
                font-size: 8vw;
            }
            .pechakucha article {
                grid-template-columns: 1fr;
            }
            .pechakucha body {
                flex-direction: column
            }

            .pechakucha section {
                width: 100%
            }
        }
    </style>
<main class="pane active" id="content">
<div class="pechakucha">


    <h1><span>pecha</span> <span>kucha</span></h1>

    <article>
        <p>
            Chaque semaine, en début de cours de webdesign (jeudi de semaine impaire ou jeudi et vendredi de semaines paires), aura lieu un temps de présentation de sites web*, sur le mode Pechakucha.
        </p>
        <p>
            [ <i>Le Pechakucha est un format de présentation orale associée à la projection de 20 diapositives se succédant toutes les 20 secondes, de préférence sans effets d’animations. Cette contrainte impose à l’orateur de l’éloquence et un sens de la narration, du rythme, de la concision, mais aussi de l’expression graphique. <a href="https://fr.wikipedia.org/wiki/Pecha_Kucha">— wikipedia</a></i>  ]
        </p>
        <p>
            Les présentations devront permettre de comprendre l’intérêt que vous avez eu pour ce site, en analysant les détails graphiques, typographiques, techniques, l’interface ou l’expérience utilisateur, en n’hésitant pas à montrer les adaptations responsive et à mentionner leurs auteurs, développeurs et designers.
        </p>
        <p>
            L’intégration de slides vidéos courtes et muettes (réalisés via quicktime ou tout autre outil de capture vidéo d’écran) sera appréciée pour signaler les principes d’animation, de comportements dynamiques de navigation, etc.
        </p>
        <p>
            Les présentations seront réalisées au format web et peuvent se baser sur <a href="https://github.com/esapyrenees/pechakucha">github.com/esapyrenees/pechakucha</a>
        </p>
        <p>
            * Sources possibles :<br>
            - <a href="https://hoverstat.es">https://hoverstat.es</a><br>
            - <a href="https://siteinspire.com">https://siteinspire.com</a><br>
            - <a href="http://brutalistwebsites.com">http://brutalistwebsites.com</a>
        </p>

    </article>
    
    <!-- <div id="pk"></div> -->
    <!-- <script src="script.js"></script> -->

    <section><h2 style="transform: scaleX(1.75129); margin-left: -3.06702px;" id="15-10">15/10</h2><p>Malea L., Salome R.</p></section><section><h2 style="transform: scaleX(2.01086); margin-left: -4.04355px;" id="16-10">16/10</h2><p>Maud E., Cecile B.</p></section><section><h2 style="transform: scaleX(2.5509); margin-left: -6.50711px;" id="22-10">22/10</h2><p>Marie A., Elisa M.</p></section><section><h2 style="transform: scaleX(2.25003); margin-left: -5.06264px;" id="5-11">5/11</h2><p>Hugo H., Wenting Z.</p></section><section><h2 style="transform: scaleX(1.89519); margin-left: -3.59175px;" id="12-11">12/11</h2><p>Adeline S., Ambrosia D.</p></section><section><h2 style="transform: scaleX(1.02097); margin-left: -1.04238px;" id="13-11">13/11</h2><p>Irma B., Agathe C.</p></section><section><h2 style="transform: scaleX(0.861564); margin-left: -0.742293px;" id="19-11">19/11</h2><p>Ophelie S., Matthew C.</p></section><section><h2 style="transform: scaleX(1.52853); margin-left: -2.3364px;" id="26-11">26/11</h2><p>Orso D., Carla R.</p></section><section><h2 style="transform: scaleX(1.95018); margin-left: -3.80321px;" id="27-11">27/11</h2><p>Oceane F., Chloé G.</p></section><section><h2 style="transform: scaleX(2.11699); margin-left: -4.48166px;" id="3-12">3/12</h2><p>Thibault J., Soulyne C.</p></section><section><h2 style="transform: scaleX(0.609093); margin-left: -0.370995px;" id="10-12">10/12</h2><p>Jiajing W., Anastasia V.</p></section><section><h2 style="transform: scaleX(1.80096); margin-left: -3.24345px;" id="11-12">11/12</h2><p>Manon G., Paul L.</p></section>

    <article>
        <p>Le code source javascript pour la répartition des groupes et des étudiant·e·s est <a href="script.js">accessible ici</a></p>
    </article>

</div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    <script src="script.js"></script>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
