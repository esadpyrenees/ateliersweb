<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "ÉSAD·Pyrénées — Ateliers web — Projets";
  $section="projets";
  $subsection="zones";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>

<main class="pane active" id="content">
    <h1>Zones</h1>

    <p>
    <a href="https://www.editions-zones.fr/">Zones</a> est une collection de livres de science humaines et cultural studies créée en 2007, et dirigée depuis par Grégoire Chamayou pour les Éditions de la Découverte. Le design des couvertures et de la collection est assuré par le studio De Valence. La plupart des livres sont publiés sur le principe du Lyber, créé par les <a href="http://www.lyber-eclat.net/lyber/lybertxt.html">Éditions de l’éclat</a> et sont pleinement lisibles en ligne.
    </p>
    <ol>
        <li>Choisir un livre *</li>
        <li>Choisir un ou quelques chapitres</li>
        <li>Déterminer une iconographie / modalité d’illustration</li>
        <li>Les mettre en page sous une forme web</li>
        <li>Penser à une “couverture”, à la navigation…</li>
        <li>Produire une feuille de style pour impression domestique</li>
    </ol>

    <p>
        * Les livres :
    </p>
    <ul>
        <li><a href="https://www.editions-zones.fr/livres/jouir/">Jouir, en quête de l’orgasme féminin</a>, de Sarah Barmak</li>
        <li><a href="https://www.editions-zones.fr/livres/sorcieres/">Sorcières, la puissance invaincue des femmes</a>, de Mona Chollet</li>
        <li><a href="https://www.editions-zones.fr/livres/propaganda/">Propaganda, Comment manipuler l'opinion en démocratie</a>, d’Edward Bernays (1928)</li>
    </ul>
    <p>
        Le projet est de comprendre et d’appliquer les principes de mise en page du web contemporain, et d’appréhender la “fluidité” du texte dans son rapport à différents médias.
    </p>    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
