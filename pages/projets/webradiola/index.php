<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "ÉSAD·Pyrénées — Ateliers web — Projets";
  $section="projets";
  $subsection="webradiola";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>

<main class="pane active" id="content">
    <h1>Webradiola</h1>

    <h4>WebApp de diffusion musicale ou sonore</h4>

    <p>
        Le projet permettra d’aborder et de mettre en pratique les notions de design d’interface, d’expérience utilisateur, d’accessibilité, d’approfondir les questions liées au responsive webdesign et au design mobile first tout en travaillant en profondeur les relations entre design graphique et musique/son.
    </p>
    <p>
        Les questions du contenu, du contexte et des usages seront au centre de notre démarche de design. La conception de l’interface obéira au paradigme “<i>mobile first</i>”. Lire <a href="http://static.lukew.com/MobileFirst_LukeW.pdf">Luke Wroblewski, Mobile First, A Book Apart, Eyrolles, 2012</a>, à télécharger <a href="https://www.dropbox.com/s/33pxd2oicncwlox/Mobile_first_ed1_v1.pdf?dl=0">ici</a>.
    </p>
    <p>
        Nous évoquerons des exemples d’applications, de sites ou de plateformes musicales mais également des espaces sonores ou visuels produits par des artistes ou des designers.
    </p>
    <p>
        La sélection des sources sonores pourra s’effectuer <del>dans vos albums préférés ou</del> dans des ressources libres (par exemple : <a href="http://great78.archive.org/">great78.archive.org</a>), plus ou moins libres (<a href="http://www.ubu.com/sound/">ubu.com/sound</a>), se consacrer à un artiste, un label, une radio, à vos propres enregistrements de terrain ou aux contributions des visiteurs du site…
    </p>
    <ol>
        <li>maquettes papier</li>
        <li>maquettes statiques (inkscape, illustrator, sketch, figma, invision)</li>
        <li>prototype web responsive fonctionnel</li>
        <li>sélection de références commentées (focus sur l’expérience mobile)</li>
    </ol>
</main>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
