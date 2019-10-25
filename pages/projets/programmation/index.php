<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "ÉSAD·Pyrénées — Ateliers web — Projets";
  $section="projets";
  $subsection="programmation";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>

<main class="pane active" id="content">
    <h1>Programmation</h1>

    <p>
        Prenant comme point de départ la programmation d’un évènement ou d’un festival (musique, théâtre, arts de la rue), il s’agira de designer et développer un site web dont l’impression (⌘ + p, CTRL + p) produira une série d’affiches ou de flyers, aux moins un pour chacun des évènements. Le site doit donc être conçu comme une seule page (même si tous les éléments ne sont pas visibles en même temps), produisant plusieurs pages imprimées (A3, A4 ou A5).
    </p>
    <p>
        Le projet est d’appréhender la “fluidité” d’un contenu dans son rapport à différents médiums, mettant en œuvre une centralisation de la donnée pour des exploitations différenciées selon le support. Le design responsive sera aussi questionné dans les différents usages des interfaces : quelles informations sont prépondérantes pour quel usage.
    </p>
    <p>
        L’enjeu pour le print est de penser le design en série, de travailler à des principes de mise en page qui s’adaptent aux variations de contenus.
    </p>
    <p>
        Contrainte technique : Google Chrome. Malheureusement, Firefox n’offre pas –encore ?– un support suffisant des feuilles de style <i>print</i>
    </p>
    <p>
        Pourquoi pas <a href="http://atrdr.net/">À tant rêver du Roi</a> ?
        <a href="http://espacespluriels.fr/saison-15-16?id_groupe=3">Résonances</a>
        <a href="https://www.facebook.com/Rock-This-Town-festival-rock-cin%C3%A9ma-PAU-281640625323015/">Rock this town</a> ?
        <a href="https://festival.tangueando-pau.com/">Tangueando</a> ?
        <a href="http://unallerretourdanslenoir.com/">Un aller-retour dans le noir</a> ?
    </p>

Voir un exemple : <a href="http://nm.esapyrenees.fr/medias-mediations/">médias ~ médiations</a>

<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
