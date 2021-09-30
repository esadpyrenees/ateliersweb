<?php
  include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
  include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
  $Parsedown = new Parsedown();
  $Parsedown = new ParsedownExtra();

  $title = "ÉSAD·Pyrénées — Ateliers web — Projets";
  $section="projets";
  $subsection="culturenum";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>
    <style type="text/css">

@font-face{
    font-family: "HappyTimes";
    font-weight: bold;
    font-style: normal;
    src:url("fonts/happy-times-NG_bold_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_bold_master_web.woff2") format('woff2');
}
@font-face{
    font-family: "HappyTimes";
    font-weight: normal;
    font-style: italic;
    src:url("fonts/happy-times-NG_italic_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_italic_master_web.woff2") format('woff2');
}
@font-face{
    font-family: "HappyTimes";
    font-weight: normal;
    font-style: normal;
    src:url("fonts/happy-times-NG_regular_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_regular_master_web.woff2") format('woff2');
}

        .culturenum {
            /* font-family: "HappyTimes"; */
        }

.culturenum h1 {
    font-size: 3em;
    margin-top: 0;
    line-height:1;
    padding-top:0
}

.culturenum h4 {
    margin-top: 0;
}


    </style>
<main class="pane active" id="content">
    <div class="culturenum">


        <h1><span>Cultures</span><br><span>numériques</span></h1>

        <article>

                <?php
                    $doc = file_get_contents( "index.md" );
                    $parsed_doc = $Parsedown->text( $doc );
                    echo $parsed_doc;
                ?>
                <h2>Pad (live)</h2>
                <?php
                    $pad = file_get_contents( "https://semestriel.framapad.org/p/cultures-numeriques-9jmv/export/markdown" );
                    $parsed_pad = $Parsedown->text( $pad );
                    echo $parsed_pad;
                ?>


        </article>
        <?php /*
        2DGM
        Culture numérique

        [pad](https: //semestriel.framapad.org/p/esad_cultures_numeriques)


        ## Dossier

        Écrire un édito + trois ou quatre courts articles de synthèse, issus des références données, ou d’autres sources pertinentes sur la thématique.
        Associer des liens web + médias (images, vidéo, captures…)
        - articuler, compiler du contenu et le structurer
        - sert de base au “script” de la présentation
        - html

        ## Présentation

        Présentation orale de 15 minutes + 5 minutes de questions
        Attention à :
        - Vidéo-projection
        - Rythme, dimension visuelle
        - Partage de la parole
        Introduction / conclusion (ouverture)

        ## Thématiques

        ### Hashtag
        https://semestriel.framapad.org/p/esad_hashtag
        MeeToo, BlackLivesMatter, …
        Bulles de filtres
        Google trends
        Influenceurs

        ### Typographie
        https://semestriel.framapad.org/p/esad_typographie
        v-fonts.com
        futurefonts.xyz
        Demo Festival
        Velvetyne

        ### Numérique et espace
        https://semestriel.framapad.org/p/esad_espace_numerique
        Lab212
        Joanie Lemercier
        Daily tous les jours
        JCDecaux Dynamic

        ### Post
        https://semestriel.framapad.org/p/esad_post
        Post digital print
        Post Internet
        Webdesign brutaliste
        Retrogaming & pixel art

        ### Design inclusif
        https://semestriel.framapad.org/p/esad_design_inclusif
        exclusive-design.vasilis.nl
        accessiweb.org
        gov.uk design award
        motherfucking website

        ### Histoire numérique
        https://semestriel.framapad.org/p/esad_histoire_numerique
        Ada Lovelace
        The Mother of All Demos
        The Whole Earth Catalog
        Tim Berners-Lee

        ### Médias
        https://semestriel.framapad.org/p/esad_medias
        Podcast
        Nichons-nous dans l’internet
        BingeAudio
        Thinkerview

        ### Libre & OpenSource
        https://semestriel.framapad.org/p/esad_libre_opensource
        Outil conviviaux
        Open Source Publishing
        Libre Graphics Meeting
        Richard Stallman

        ### Intelligence artificielle
        https://semestriel.framapad.org/p/esad_intelligence_artificielle
        Mario Klingemann
        Antonio Casili et le digital labor
        Reconnaissance faciale
        Deep fakes

        ### Politique
        https://semestriel.framapad.org/p/esad_politique
        Allo @Place_Beauvau
        Edward Snowden
        Design des politiques publiques
        Droit d’auteur et droits voisins



        ## Groupes

        #### Hashtag Tendance
        Océane - Chloé

        #### Typographie
        Louis, Thibault, Anastasia

        #### Numérique et espace
        Maud, Ophelia S.

        #### Post
        Ophélie.T , Wenting Zhang, Jiajing Wang

        #### Design inclusif
        Cécile, Orso, Carla

        #### Histoire numerique
        Alexandre, Elisa

        #### médias
        Randy, Marie,

        #### Libre et open source
        Salomé, Matthew, Hugo, Lucas

        #### Intelligence artificielle
        Marion, Irma

        #### Politique
        Ambrosia, Manon, Soulyne


        ## Calendrier

        Mercredi 6/11 + mercredi 20/11 =>  mercredi 4 décembre


        ## Outils

        Télécharger des vidéos :
        - Extension Friefox pour YT : https://addons.mozilla.org/fr/firefox/addon/1-click-downloader-video-photo/
        - Logiciel multiplateforme ( YouTube, Facebook, Vimeo…) https://www.4kdownload.com/

        Traduire :
        - Définition, subtilité, forum de traduction http://www.wordreference.com/
        - Deepl en ligne https://www.deepl.com/translator ou sous forme de logiciel à installer
        - Google translate (permet de traduire des pages entières en collant leurs URLs) https://translate.google.com/

        Captures d’écran :
        - Extension Awesome Screenshot Plus sur Firefox et Chrome (image et vidéo)

        Prise de note
        - Simplenote (notes textuelles) https://simplenote.com/
        - Evernote (notes complexes, texte, images, URLs, médias) https://evernote.com/
        - Turtl (alternative open source à Evernote) https://turtlapp.com/


        Bookmarks / marque-pages / favoris
        - Bookmarks sociaux en ligne : are.na (https://are.na/)

        Travailler collectivement
        - https://padlet.com/ (pads graphiques, propriétaire)
        - https://framapad.org/ (pads textuels, libre)
        - Slack (discussion, partage de fichiers et d’URLs, propriétaire)
        - Dropbox / Google Drive (partage de fichiers, propriétaire)


        Veille
        - Agrégateur RSS https://feedly.com
        - Twitter https://twitter.com/search





        */ ?>



    </div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
