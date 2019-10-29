  <?php
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="typo";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <main class="pane active" id="content">
    <h1 class="section-title">Typo &amp; web</h1>
    <section class="section">
            <h2 class="section-subtitle">Intégrer une web font </h2>


            <h3>@font-face</h3>
            <p>
                Les fontes doivent être intégrées depuis un appel <code>@font-face</code> dans le fichier CSS.
            </p>
            <p>
                L’emplacement des fichiers de typo est relatif au fichier CSS.
            </p>
            <p>
                Chaque graisse (y compris les italiques) doit faire l’objet d’une déclaration <code>@font-face</code>, mais le nom de la famille doit être le même, de manière à pouvoir supporter les variations de graisses produites par des balises HTML comme <code>&lt;strong&gt;</code> ou <code>&lt;em&gt;</code>.
            </p>

            <pre><code class="langage-css">@font-face {
    font-family: 'MyWebFont';
    font-weight: 400; /* Graisse : regular */
    src: url('fonts/webfont.woff') format('woff');
}
@font-face {
    font-family: 'MyWebFont';
    font-weight: 400; /* Graisse : regulat */
    font-style: italic; /* Style : italique */
    src: url('fonts/webfont-italic.woff') format('woff');
}
@font-face {
    font-family: 'MyWebFont';
    font-weight: 700; /* Graisse : bold */
    src: url('fonts/webfont-bold.woff') format('woff');
}            </code></pre>


<h3>Application</h3>
<p>Pour appliquer la famille à un élément de la page, il suffit de lui attribuer la déclaration <code>font-family</code> adéquate :</p>
            <pre><code class="langage-css">h1 {
    font-family: 'MyWebFont';
    font-weight: bold;
}
p {
    font-family: 'MyWebFont';
}</code></pre>


<h3>Compatibilité</h3>
            <p>
                Pour intégrer une police de caractères dans une page web, un seul fichier ne suffit pas pour assurer la compatibilité avec tous les navigateurs, bien qu’aujourd’hui, le support des formats woff (Web Open Font Format) et woff2 tende à se généraliser sur <a href="https://caniuse.com/#search=woff">les navigateurs modernes</a>.
            </p>
            <p>
                Pour une meilleure compatibilité, une syntaxe plus complèe doit être saisie (et de nombreux fichiers doivent être présents):
            </p>
            <pre><code class="langage-css">@font-face {
    font-family: 'MyWebFont';
    font-weight:400; /* Graisse : regular */
    src: url('fonts/webfont.eot'); /* IE9 */
    src: url('fonts/webfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
        url('fonts/webfont.woff') format('woff'), /* Navigateurs modernes */
        url('fonts/webfont.ttf')  format('truetype'), /* Safari, vieux Android, vieux iOS */
        url('fonts/webfont.svg#svgFontName') format('svg'); /* Très vieux iOS : ) */
}
@font-face {
    font-family: 'MyWebFont';
    font-weight:700; /* Graisse : bold */
    src: url('fonts/webfont-bold.eot');
    src: url('fonts/webfont-bold.eot?#iefix') format('embedded-opentype'),
        url('fonts/webfont-bold.woff') format('woff'),
        url('fonts/webfont-bold.ttf')  format('truetype'),
        url('fonts/webfont-bold.svg#svgBoldFontName') format('svg');
}            </code></pre>

            <h3>Services</h3>

            <p>
                Le service <a href="http://www.google.com/webfonts/">webfonts</a> de Google permet d’intégrer une police fournie par google en faisant simplement un lien avec la feuille de style qui la contient.
                <span class="blink">On se rappellera néanmoins qu’avec Google, rien n’est <em>vraiment</em> gratuit. Google se sert en effet des liens d’intégration des fontes comme de <i>trackers</i> lui permettant d’accumuler des données sur les visiteurs de votre page web.</span>
            </p>
            <p>
                D’autres services, tels <a href="http://typekit.com"><del>Typekit</del> Adobe fonts</a> ou <a href="http://fonts.com" >fonts.com</a> permettent également d’intégrer des typos (moyennant paiement), parfois via l’insertion d’un script javascript.
            </p>
            <p>
                Sur la page <a href="/web/pages/references/foundries/">ateliers.esad-pyrenees.fr/web/pages/references/foundries/</a> se trouve une liste de ces services.
            </p>
            <h3>Générer des webfonts</h3>
            <p>
                La page <a href="/web/pages/references/foundries/">fonderies/</a> liste également quelques fonderies numériques libre ou open-source (<a href="http://velvetyne.fr/">Velvetyne</a>,
                <a href="http://ospublish.constantvzw.org/foundry/">OpenSourcePublishing</a>…), qui peuvent vous permettre de télécharger leurs créations sans vous fournir l’ensemble des fichiers nécessaires.
            </p>
            <p>
                Les fichiers téléchargés (souvent des .otf) devront être convertis pour pouoir être intégrés à vos pages.
            </p>
            <p>
                <a href="http://transfonter.org/">Transfonter</a> ou <a href="https://everythingfonts.com/">Everythingfont</a> permettent de convertir vos fichiers otf ou ttf en webfonts.
                 Font Squirrel met également à disposition un générateur de <a href="http://www.fontsquirrel.com/fontface/generator">«&nbsp;packs&nbsp;» @font-face</a>, qui vous permet de faire ces conversions.
            </p>
            <p>
                <a href="http://fontprep.com">Fontrep</a> est une application Mac dédiée à la transformation de fichiers ttf et otf en webfonts.
            </p>






            </section>

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
