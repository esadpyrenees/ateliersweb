<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/_resources.php"; ?>

<nav class="pane active">
    <h3>Grid</h3>
    <ul>

    </ul>
  <ul>
      <li class="<?= $subsubsection == 'bases' ? 'opened' : '' ?>"><a href="/web/pages/ressources/grid/">Bases</a></li>
      <li class="<?= $subsubsection == 'start' ? 'opened' : '' ?>"><a href="/web/pages/ressources/grid/start/">Démarrer</a></li>
  </ul>
  <ul>
      <li class="<?= $subsubsection == 'resources' ? 'opened' : '' ?>"><a href="/web/pages/ressources/grid/resources/">Ressources</a></li>
  </ul>
</nav>
