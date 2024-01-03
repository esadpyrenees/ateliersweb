<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/_resources.php"; ?>

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
    <li><a href="/web/pages/ressources/mkdocs/">MkDocs</a> </li>    
  </ul>
</nav>