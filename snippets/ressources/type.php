<?php include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/_resources.php"; ?>

<nav class="pane active">
    <ul>
        <li class="<?= $subsubsection == 'intro' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/">Introduction</a></li>
    </ul>
    <ul>
    <li class="<?= $subsubsection == 'macromicro' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/macromicro/">Macro &amp; micro</a> </li>
        <li class="<?= $subsubsection == 'webfonts' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/webfonts/">Webfonts</a></li>
        <!-- <li class="<?= $subsubsection == 'opentype' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/opentype/">Opentype</a> </li> -->
        <li class="<?= $subsubsection == 'variables' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/variables/">Variables</a> </li>
        <li class="<?= $subsubsection == 'caracteres' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/caracteres/">Caractères spéciaux</a> </li>
    </ul>
    <ul>
        <li class="<?= $subsubsection == 'fonderies' ? 'opened' : '' ?>"><a href="/web/pages/ressources/typo/fonderies/">Fonderies et références</a></li>
    </ul>
</nav>
