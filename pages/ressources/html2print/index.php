  <?php
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="html2print";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <main class="pane active" id="content">
    <h1>html2print</h1>
    <p>
        Pourquoi et comment créer des documents imprimés avec les technologies du web
    </p>

    <section class="section">

    <h2>Exemples</h2>
    <p>
        Voir les exemples dans la <a href="/web/pages/exemples/#htmltoprint">section dédiée</a> du site des ateliers Web.
    </p>

    <h2>Collectifs et initiatives</h2>
    <ul>
      <li><a href="http://prepostprint.org/">PrePostPrint</a></li>
      <li><a href="http://osp.kitchen/">Open Source Publishing</a></li>
      <li><a href="https://latelier-des-chercheurs.fr/">L’Atelier des chercheurs</a></li>
      <li><a href="http://luuse.io/">Luuse</a></li>
      <li><a href="http://bonjourmonde.net/">Bonjour monde</a></li>
      <li><a href="http://pagedmedia.org/">PagedMedia</a></li>
      <li><a href="http://groupeccc.com/">Groupe CCC</a></li>
      <li><a href="http://figureslibres.cc/">Figures libres</a></li>
    </ul>

    <h2>Outils</h2>
    <ul>

      <li><a href="https://gitlab.pagedmedia.org/tools/pagedjs" title="https://gitlab.pagedmedia.org/tools/pagedjs">Paged.js</a> : Une librairie javascript pour mettre en page des livres imprimables avec <abbr title="HyperText Markup Language">HTML</abbr> et <abbr title="Cascading Style Sheets">CSS</abbr>. Voir aussi l’article tutoriel sur <a href="https://www.pagedmedia.org/pagedjs-sneak-peeks/" title="https://www.pagedmedia.org/pagedjs-sneak-peeks/">Paged.js – sneak peeks</a>
      </li>
      <li><a href="https://www.latelier-des-chercheurs.fr/outils/les-cahiers-du-studio" title="https://www.latelier-des-chercheurs.fr/outils/les-cahiers-du-studio"> Les cahiers du studio</a> : Un outil collaboratif de documentation chronologique pour une prise de notes multimédia lors d’une activité ou d’un événement.
      </li>
      <li><a href="http://osp.kitchen/tools/html2print/" title="http://osp.kitchen/tools/html2print/">OSP’s HTML2PRINT</a>: un outil pour faire des documents imprimés en utilisant <abbr title="HyperText Markup Language">HTML</abbr>, less/<abbr title="Cascading Style Sheets">CSS</abbr> et Javascript/Jquery. Il a été utilisé pour des <a href="https://github.com/HEAR/HTML_sauce-cocktail-workshop-OSP" title="https://github.com/HEAR/HTML_sauce-cocktail-workshop-OSP">workshops</a>, des <a href="https://github.com/Antoine-Gelgon/memoire-dnsep" title="https://github.com/Antoine-Gelgon/memoire-dnsep">thèses</a> et bien d'autres projets de publication (cf. <a href="https://medor.coop/fr/" title="https://medor.coop/fr/"> Médor</a> et showcase)
      </li>
      <li><a href="https://github.com/bachy/libriis" title="https://github.com/bachy/libriis">Libriis</a>: un outil cousin d'HTML2PRINT, permettant de faire de la mise en page html et css vers l'imprimé, avec une interface complète.
      </li>
      <li><a href="http://blog.lavillahermosa.com/brass-%E2%86%92-print-tool-v1/" title="http://blog.lavillahermosa.com/brass-%E2%86%92-print-tool-v1/">Brass Print Tool</a>: un article à propos du kit outils utilisé par Villa Hermosa’s pour générer des flyers et programmes à partir d'une base de donnée.
      </li>
      <li><a href="https://github.com/osp/PDFutils" title="https://github.com/osp/PDFutils"> PDFutils</a>: un répertoire de scripts permettant de manipuler et convertir des pdf rgb vers du CMJN, avec aperçu des plaques et noir forcé.
      </li>
      <li><a href="http://www.publishinglab.nl/the-sausage-machine/2016/01/14/hello-world/" title="http://www.publishinglab.nl/the-sausage-machine/2016/01/14/hello-world/"> The Sausage machine</a>: du texte au format ePub, icml ou html.
      </li>
      <li><a href="https://hpg.io/" title="https://hpg.io/">hybrid publishing Group</a>: plateforme de solutions modulables pour publications multi-format.
      </li>
      <li><a href="https://evanbrooks.info/bindery/" title="https://evanbrooks.info/bindery/">Bindery.js</a>: Une librairie javascript pour mettre en page des livres imprimables avec HTML&nbsp;et <abbr title="Cascading Style Sheets">CSS</abbr>.
      </li>

    </ul>

    <h2>Techniques</h2>

    <p>Intégrer une feuille de style dont les règles ne seront appliquées qu’à l’impression</p>
    <pre><code>&lt;link media=&quot;print&quot; href=&quot;print.css&quot;&gt;</code></pre>


    <p>Déterminer une taille de page</p>
    <pre><code>@page {
  size: A4 landscape;
}
/* ou pour une affiche */
@page {
  size: A3 portrait;
}
</code></pre>

    </section>

    <section class="section">
      <h1>Pourquoi ?</h1>
      <h2>Adobe</h2>
      <p>
        Si des alternatives existent ou émergent (Affinity), Adobe a écrasé l’écosystème de la création graphique, et pose de nombreux problèmes:
      </p>
      <ul>
        <li>formatage de l'expérience esthétique</li>
        <li>location de l'outil de travail</li>
        <li>dépendance au logiciel</li>
        <li>création et pratiques conditionnées</li>
        <li>Surconception</li>
        <li>Non adapté aux médias interactifs</li>
      </ul>



      <h2>4 libertés du logiciel libre (Richard Stallman)</h2>
      <ul>
        <li>liberté d’utiliser le logiciel, pour quelque usage que ce soit — liberté 0</li>
        <li>liberté d’étudier le fonctionnement du programme, et de l’adapter à vos propres besoins — liberté 1</li>
        <li>liberté de redistribuer des copies à tout le monde — liberté 2</li>
        <li>liberté d’améliorer le programme et de publier vos améliorations — liberté 3</li>
      </ul>
    </section>


        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
