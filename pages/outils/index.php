  <?php
    $title = "ÉSAD·Pyrénées — Ateliers web — Exemples";
    $section="outils";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <main class="pane active" id="content">
    <h1 class="section-title">Outils</h1>
    <section id="editeurs">
    <h2 class="section-subtitle">Éditeurs</h2>
    <ul>
        <li><a href="http://atom.io">Atom (open source, Github)</a></li>
        <li><a href="http://brackets.io">Brackets (open source, Adobe)</a></li>
        <li><a href="https://code.visualstudio.com/">Visual studio Code (open source, Microsoft)</a>   </li>
        <li><a href="http://www.sublimetext.com">Sublime Text ($)</a></li>
    </ul>
    </section>
    <section id="servers">
    <h2 class="section-subtitle">Serveurs de développement</h2>
    <ul>
        <li><a href="http://mamp.info/">MAMP</a></li>
        <li><a href="https://www.apachefriends.org/">XAMPP</a></li>
    </ul>
    </section>
    <section id="cms">

        <h2 class="section-subtitle">Gestionnaires de contenus</h2>
        <p>Gestionnaires de contenus sans base de données.</p>
        <ul>
            <li><a href="http://staceyapp.com">Stacey</a></li>
            <li><a href="http://www.berta.me/download/">Berta</a></li>
            <li><a href="http://getkirby.com">Kirby ($)</a></li>
            <li><a href="http://subfolio.com">Subfolio</a></li>
        </ul>
        <p>Gestionnaires de contenus avec base de données.</p>
        <ul>
            <li><a href="http://wordpress.org">Wordpress</a></li>
            <li><a href="http://spip.net/">Spip</a></li>
            <li><a href="http://indeshibit.org">Indexhibit ($)</a></li>
        </ul>

        <p>Services web.</p>
        <ul>
            <li><a href="http://wordpress.com">Wordpress.com</a></li>
            <li><a href="http://tumblr.com">Tumblr</a></li>
            <li><a href="http://cargocollective.com/">Cargo ($)</a></li>
            <li><a href="http://squarespace.com/">Squarespace ($)</a></li>
        </ul>

    </section>

    <section>
        <h2>Kirby</h2>
        <ul>
            <li><a href="https://gekirby.com">Kirby</a></li>
            <li><a href="https://getkirby.com/docs/cookbook/setup/kirby-in-a-nutshell">Kirby in a nutshell</a></li>
        </ul>
    </section>

      <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
