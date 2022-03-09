<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "Projets → Pecha Kucha";
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
    
    <section><h2 style="transform: scaleX(1.05686); margin-left: -1.11696px;" id="15-10">15/10</h2><p>Carla R.,Ambrosia D.</p></section><section><h2 style="transform: scaleX(0.77027); margin-left: -0.593315px;" id="16-10">16/10</h2><p>Marie A.,Malea L.</p></section><section><h2 style="transform: scaleX(0.622739); margin-left: -0.387803px;" id="22-10">22/10</h2><p>Adeline S.,Paul L.</p></section><section><h2 style="transform: scaleX(1.74684); margin-left: -3.05147px;" id="5-11">5/11</h2><p>Manon G.,Elisa M.</p></section><section><h2 style="transform: scaleX(1.69191); margin-left: -2.86255px;" id="12-11">12/11</h2><p>Anastasia V.,Cecile B.</p></section><section><h2 style="transform: scaleX(2.59234); margin-left: -6.72022px;" id="13-11">13/11</h2><p>Thibault J.,Hugo H.</p></section><section><h2 style="transform: scaleX(1.30965); margin-left: -1.71519px;" id="19-11">19/11</h2><p>Ophelie S.,Marion R.</p></section><section><h2 style="transform: scaleX(2.57666); margin-left: -6.63917px;" id="26-11">26/11</h2><p>Salome R.,Matthew C.</p></section><section><h2 style="transform: scaleX(1.15318); margin-left: -1.32983px;" id="27-11">27/11</h2><p>Wenting Z.,Jiajing W.</p></section><section><h2 style="transform: scaleX(0.931056); margin-left: -0.866866px;" id="3-12">3/12</h2><p>Irma B.,Maud E.</p></section><section><h2 style="transform: scaleX(2.45364); margin-left: -6.02033px;" id="10-12">10/12</h2><p>Soulyne C.,Orso D.</p></section><section><h2 style="transform: scaleX(1.2966); margin-left: -1.68117px;" id="11-12">11/12</h2><p>Chloé G.,Oceane F.</p></section>
    

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
