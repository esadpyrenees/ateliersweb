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

    #pk {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-column: span 3;
            gap:1em;
            margin-bottom: 2em;

    }
        .pechakucha {
            position: relative;
            display: flex;
            flex-direction: column;
            font-size: 1em;
            font-family: "Times New Roman", Times, serif;
            
            line-height: 1.25;
        }

        
        .pechakucha article {
            font-size: calc(.5em + 1.5vw);
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            grid-auto-flow: dense;
            gap:1em;
            margin-bottom: 2em;
        }
        .pechakucha a{
            /* word-break: break-all */
        }
        .pechakucha article p {
            margin: 0;
            transform-origin: 0 0;

        }
        .pechakucha h2 {
            font-size: 3vw;
            font-weight: normal;
            margin: 0;
            transform-origin: 0 0;
            font-family: "Ecole", sans-serif
        }

        .pechakucha h1 {
            padding-top: 0;
            width: 100%;
            font-size: 12vw;
            font-weight: bold;
            transform-origin: 0 0;
            margin: 0 0 .25em 0;
            line-height: .9;
            font-family: "Ecole", sans-serif;

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


    <h1 class="nohash"><span>pecha</span> <span>kucha</span></h1>

    <article>
        <p>
            Si la rentrée est l’occasion de raconter ses vacances ou son été studieux, elle est également un moment propice pour formuler les hypothèses de travail pour le semestre (et l’année) à venir. Le format proposé permet en outre de ne pas répéter le même discours auprès de quatre enseignant⋅es différent⋅es.
        </p>
        <p>
            [ <i>Le Pechakucha est un format de présentation orale associée à la projection de 20 diapositives se succédant toutes les 20 secondes, de préférence sans effets d’animations. Cette contrainte impose à l’orateur de l’éloquence et un sens de la narration, du rythme, de la concision, mais aussi de l’expression graphique. — <a href="https://fr.wikipedia.org/wiki/Pecha_Kucha">wiki<wbr>pedia</a></i>  ]
        </p>
        <p>
            Les présentations devront permettre de rapidement présenter le point de départ de votre semestre : votre parcours, vos intérêts, le cœur de votre projet de DNA ou les expérimentations menées en 4<sup>e</sup> année. 
        </p>
        <p>
            En 5<sup>e</sup> année, quelques <i>slides</i> peuvent être consacrées à la synthèse de votre expérience de mobilité (stage ou Erasmus) en portant sur elle un regard critique et analytique.
        </p>
        <p>
            Le cœur de la présentation doit être dédié à signaler les enjeux auxquels vous souhaiter vous confronter durant ce semestre, tant du point de vue du contexte envisagé pour le projet, de ses assises théoriques que de ses perspectives formelles. 
        </p>
        <p>
            Le champ référentiel, tout comme les éventuels contacts que vous souhaitez engager au cours du semestre, peuvent être présentés pour appuyer votre propos.
        </p>
        <p>
            L’intégration de slides vidéos courtes et muettes (réalisés via quicktime ou tout autre outil de capture vidéo d’écran) peut-être appréciable pour témoigner d’images en mouvement.
        </p>
        <p>
            Les présentations seront préférentiellement réalisées au format web et gagneront à se baser sur <a href="https://github.com/esadpyrenees/pechakucha">github.com/<wbr>esadpyrenees/<wbr>pechakucha</a>
        </p>
       <p>
            Si la pratique du code est trop loin de vous (jetez quand même un œil à l’outil…), PowerPoint, Keynote, Libre Office, ou un bête pdf avec un chronomètre peuvent suffire.
       </p>

    </article>
    
    <div id="pk"></div>

  
    <article>
        <p><small>Le code source javascript pour la répartition des heures et des étudiant·es est <a href="script.js">accessible ici</a>. La page sera actualisée au début de la séance :)</small></p>
    </article>

</div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    <script src="script.js"></script>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
