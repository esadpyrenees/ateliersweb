<nav class="pane active">
  <ul>
    <li><a href="/web/pages/ressources/python/#bases">Bases</a></li>    
  </ul>
  <ul>
    <li class="<?= $subsubsection == 'strings' ? 'opened' : '' ?>"><a href="/web/pages/ressources/python/strings/">Textes</a> </li>
    <li class="<?= $subsubsection == 'lists' ? 'opened' : '' ?>"><a href="/web/pages/ressources/python/lists/">Listes</a> </li>
    <li class="<?= $subsubsection == 'files' ? 'opened' : '' ?>"><a href="/web/pages/ressources/python/files/">Fichiers</a> </li>
  </ul>
  <ul>
    <li class="<?= $subsubsection == 'mkdocs' ? 'opened' : '' ?>"><a href="/web/pages/ressources/python/mkdocs/">MkDocs</a> </li>
    <?php if($subsubsection == 'mkdocs'): ?>
      <ul>
        <li><a href="#documentation">Documentation</a></li>
        <li><a href="#environnement-virtuel">Environnement</a></li>
        <li><a href="#structure-du-projet">Structure </a></li>
        <li><a href="#configuration">Configuration</a></li>
        <li><a href="#commandes">Commandes</a></li>
        <li><a href="#contenu">Contenu</a></li>
        <li><a href="#demo">Démo</a></li>
        <li><a href="#template">Templates</a></li>
        <li><a href="#hack">Hack</a></li>
        <li><a href="#scraping">Scraping</a></li>
        <li><a href="#publier">Publier</a></li>
      </ul>
    <?php endif ?>
  </ul>
</nav>