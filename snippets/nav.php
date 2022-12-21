<nav class="pane active" id="mainnav">
  <ul>
    <li class="<?php echo $section == 'ressources' ? 'opened' : '' ?>"><a href="/web/pages/ressources/">Ressources</a></li>
    <li class="<?php echo $section == 'exemples' ? 'opened' : '' ?>"><a href="/web/pages/exemples/">Exemples</a></li>
    <li class="<?php echo $section == 'references' ? 'opened' : '' ?>"><a href="/web/pages/references/">Références</a></li>
    <li class="<?php echo $section == 'outils' ? 'opened' : '' ?>"><a href="/web/pages/outils/">Outils</a></li>
    <li class="<?php echo $section == 'projets' ? 'opened' : '' ?>"><a href="/web/pages/projets/">Projets</a></li>
    <li class="<?php echo $section == 'culturenum' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/">Cultures numériques</a></li> 
    <li class="<?php echo $section == 'lectures' ? 'opened' : '' ?>"><a href="/web/pages/lectures/">Lectures</a></li>
    <li class="<?php echo $section == 'archives' ? 'opened' : '' ?>"><a href="/web/archives/">Archives</a></li>
  </ul>
  <span class="<?php echo $section == 'about' ? 'opened' : '' ?>">
      <a href="/web/pages/about">À propos</a>
  </span>
</nav>

<nav class="pane subnav <?php echo $section == 'ressources' ? 'active' : '' ?>"  id="ressources">
    <ul>
        <li class="<?php echo $subsection == 'html' ? 'opened' : '' ?>"><a href="/web/pages/ressources/html/">HTML</a></li>
        <li class="<?php echo $subsection == 'css' ? 'opened' : '' ?>"><a href="/web/pages/ressources/css/">CSS</a></li>
        <li class="<?php echo $subsection == 'ftp' ? 'opened' : '' ?>"><a href="/web/pages/ressources/ftp/">FTP</a></li>
        <li class="<?php echo $subsection == 'js' ? 'opened' : '' ?>"><a href="/web/pages/ressources/js/">Javascript</a></li>
        <li class="<?php echo $subsection == 'php' ? 'opened' : '' ?>"><a href="/web/pages/ressources/php/">PHP</a></li>
        <li class="<?php echo $subsection == 'python' ? 'opened' : '' ?>"><a href="/web/pages/ressources/python/">Python</a></li>
        <li class="<?php echo $subsection == 'typo' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/">Typographie</a></li>
        <li class="<?php echo $subsection == 'audiovideo' ? 'opened' : '' ?>"><a href="/web/pages/ressources/audiovideo/">Audio &amp; vidéo</a></li>
        <li class="<?php echo $subsection == 'rwd' ? 'opened' : '' ?>"><a href="/web/pages/ressources/rwd/">Responsive</a></li>
        <li class="<?php echo $subsection == 'canvas' ? 'opened' : '' ?>"><a href="/web/pages/ressources/canvas/">Canvas</a></li>
        <li class="<?php echo $subsection == 'ctrlaltprint' ? 'opened' : '' ?>"><a href="/web/pages/ressources/ctrl-alt-print/">CTRL Alt print</a></li>
        <li class="<?php echo $subsection == 'kirby' ? 'opened' : '' ?>"><a href="/web/pages/projets/portfolio/">Kirby</a></li>
        <li class="<?php echo $subsection == 'imagemagick' ? 'opened' : '' ?>"><a href="/web/pages/ressources/imagemagick/">ImageMagick</a></li>
    </ul>
</nav>

<nav class="pane subnav <?php echo $section == 'exemples' ? 'active' : '' ?>"  id="exemples">
    <ul>
        <li><button class="mixitup-control-active" href="#" data-filter="all">Tout</button></li>
        <li><button href="#" data-filter=".layout">Mise en page</button></li>
        <li><button href="#" data-filter=".random">Aléatoire</button></li>
        <li><button href="#" data-filter=".audio,.video">Audio/vidéo</button></li>
        <li><button href="#" data-filter=".flex">Flex</button></li>
        <li><button href="#" data-filter=".grid">Grid</button></li>
        <li><button href="#" data-filter=".js">Javascript</button></li>
        <li><button href="#" data-filter=".css">CSS</button></li>
        <li><button href="#" data-filter=".rwd">Responsive</button></li>
        <li><button href="#" data-filter=".typo">Typographie</button></li>
        <li><button href="#" data-filter=".interactive">Interactivité</button></li>
        <li><button href="#" data-filter=".variable">Variable fonts</button></li>
        <li><button href="#" data-filter=".webtoprint">WebToPrint</button></li>
        <li><button href="#" data-filter=".php">PHP</button></li>
    </ul>
</nav>

<nav class="pane subnav <?php echo $section == 'references' ? 'active' : '' ?>"  id="references">
    <ul>
        <li class="<?php echo $subsection == 'htmlcss' ? 'opened' : '' ?>"><a href="/web/pages/references/htmlcss/">HTML / CSS</a></li>
        <li class="<?php echo $subsection == 'typo' ? 'opened' : '' ?>"><a href="/web/pages/references/typo/">Typographie</a></li>
        <!-- <li class="<?php echo $subsection == 'foundries' ? 'opened' : '' ?>"><a href="/web/pages/references/foundries/">Fonderies</a></li> -->
        <li class="<?php echo $subsection == 'ecrituresnumeriques' ? 'opened' : '' ?>"><a href="/web/pages/references/ecrituresnumeriques/">Écritures numériques</a></li>
        <!-- <li class="<?php echo $subsection == 'webdocumentaire' ? 'opened' : '' ?>"><a href="/web/pages/references/webdocumentaire/">Webdoc</a></li> -->
        <li class="<?php echo $subsection == 'visite' ? 'opened' : '' ?>"><a href="/web/pages/references/visite/">Visite</a></li>        
        <li class="<?php echo $subsection == 'histoire' ? 'opened' : '' ?>"><a href="/web/pages/references/histoire/">Histoire</a></li>
        <li class="<?php echo $subsection == 'gopro' ? 'opened' : '' ?>"><a href="/web/pages/references/gopro/">Go pro !</a></li>
    </ul>
</nav>

<nav class="pane subnav <?php echo $section == 'projets' ? 'active' : '' ?>"  id="projets">
    <ul>
        <li class="<?php echo $subsection == 'htsh' ? 'opened' : '' ?>"><a href="/web/pages/projets/htsh/">Hypertext superhero</a></li>
        <li class="<?php echo $subsection == 'pechakucha' ? 'opened' : '' ?>"><a href="/web/pages/projets/pechakucha/">Pecha Kucha</a></li>
        <li class="<?php echo $subsection == 'webradiola' ? 'opened' : '' ?>"><a href="/web/pages/projets/webradiola/">Webradiola</a></li>
        <li class="<?php echo $subsection == 'zones' ? 'opened' : '' ?>"><a href="/web/pages/projets/zones/">Zones</a></li>
        <li class="<?php echo $subsection == 'programmation' ? 'opened' : '' ?>"><a href="/web/pages/projets/programmation/">Programmation</a></li>
        <li class="<?php echo $subsection == 'storytellers' ? 'opened' : '' ?>"><a href="/web/pages/projets/storytellers/">Storytellers</a></li>
        <li class="<?php echo $subsection == 'portfolio' ? 'opened' : '' ?>"><a href="/web/pages/projets/portfolio/">Portfolio</a></li>
        <li class="<?php echo $subsection == 'textedit' ? 'opened' : '' ?>"><a href="/web/pages/projets/textedit/">Textedit</a></li>
        <li class="<?php echo $subsection == 'perfuction' ? 'opened' : '' ?>"><a href="/web/pages/projets/perfuction/">Puck Ferpection</a></li>
        <li class="<?php echo $subsection == 'micromedia' ? 'opened' : '' ?>"><a href="/web/pages/projets/micromedia/">Micromedia</a></li>
        <li class="<?php echo $subsection == 'memoirevive' ? 'opened' : '' ?>"><a href="/web/pages/projets/memoirevive/">Mémoire vive</a></li>
        <li class="<?php echo $subsection == 'figures' ? 'opened' : '' ?>"><a href="/web/pages/projets/figures/">Figures</a></li>
        <li class="<?php echo $subsection == 'lasn' ? 'opened' : '' ?>"><a href="/web/pages/projets/lasn/">Local Area Social Network</a></li>
        <li class="<?php echo $subsection == 'neogeo' ? 'opened' : '' ?>"><a href="/web/pages/projets/neogeo/">✹ NeoGeo</a></li>
    </ul>
</nav>
<nav class="pane subnav <?php echo $section == 'culturenum' ? 'active' : '' ?>"  id="culturenum">
  <ul>
    <li class="<?= $subsection == 'intro' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/">Introduction</a></li>
    <li class="<?= $subsection == 'figures' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/figures/">Figures</a></li>
    <!-- <li class="<?= $subsection == 'lectures' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/lectures/">Lectures</a></li> -->
    <li class="<?= $subsection == 'ethique' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/ethique/">Design éthique</a></li>
    <li class="<?= $subsection == 'libre' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/libre/">Design libre</a></li>
    <li class="<?= $subsection == 'folklore' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/folklore/">Folklore</a></li>
    <li class="<?= $subsection == 'web3' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/web3/">Web3 ?</a></li>
    <li class="<?= $subsection == 'aiaiaie' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/aiaiaie/">AI AI Aïe</a></li>
    <li class="<?= $subsection == 'mediaqueries' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/mediaqueries/">Media queries</a></li>
  </ul>
</nav>
<!-- <nav class="pane subnav <?php echo $section == 'archives' ? 'active' : '' ?>"  id="archives">archives</nav> -->
