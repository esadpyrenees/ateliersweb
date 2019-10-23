  <?php 
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="rwd";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/rwd.php");
  ?> 

  <main class="pane active" id="content">
    <h1>Responsive web design</h1>
    <p>
      Le <i>Responsive Web Design</i> (RWD) est une approche du design web qui permet de construire des pages dont l’affichage s’effectuera correctement sur tous types de périphériques et de tailles de fenêtres ou d'écrans.
    
    </p>
    <p>
      Un site conçu ainsi s’adapte à l'environnement de visualisation en utilisant des grilles fluides et proportionnées, des images flexibles, et des “requêtes de média” (<i>media queries</i>):
    </p>
    <ul>
      <li>
        Le concept de grille fluide demande que la taille des éléments de page soit exprimée en unités relatives, telles que des pourcentages, plutôt qu'en unités absolues, telles que les pixels ou les points.</li>
      <li>
        Les images flexibles sont également dimensionnées en unités relatives, afin de les empêcher de s'afficher en dehors de leur élément parent.
      </li>
      <li>
        Les <i>media queries</i> permettent à la page d'utiliser différentes règles de style CSS en fonction des caractéristiques du périphérique sur lequel le site est affiché, le plus souvent de la largeur du navigateur.</li>
    </ul>
    <section class="section" id="media-queries">
            <h2 class="section-subtitle">Media queries</h2>
            <p>
                Les <i>media queries</i> sont un ensemble de directives permettant aux auteurs de feuilles de styles de réserver la mise en forme CSS à certains médias ou périphériques selon leurs  caractéristiques.
            </p>
            <p>
                Ces caractéristiques peuvent être liées au support : <code>screen</code>, <code>print</code>, <code>handheld</code>, <code>tv</code>, etc. Elles sont un élément fondamental du <i>Responsive web design</i>.
            </p>
            
            <h3>CSS2</h3>
            <p>
                Ci-dessous, un attribut <code>media</code> est associé au lien d’importation des feuilles de styles pour déterminer le type de média auquel doit s’appliquer l’ensemble des règles écrites dans les fichiers <code>screen.css</code> et <code>print.css</code>.
            </p>
            <p>
                Cette approche est autorisée depuis la version 2 de la spécification CSS. Elle est aujourd’hui moins utile, remplacée et augmentée par la version 3 du langage CSS.
            </p>
            <pre class="language-html"><code>&#x3C;!doctype html&#x3E;
&#x3C;html&#x3E;            
    &#x3C;head&#x3E;
        &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
        &#x3C;title&#x3E;Media Queries !&#x3C;/title&#x3E;
        &#x3C;link rel=&#x22;stylesheet&#x22; media=&#x22;screen&#x22; href=&#x22;screen.css&#x22; type=&#x22;text/css&#x22; /&#x3E;
        &#x3C;link rel=&#x22;stylesheet&#x22; media=&#x22;print&#x22; href=&#x22;print.css&#x22; type=&#x22;text/css&#x22; /&#x3E;
    &#x3C;/head&#x3E;
    &#x3C;body&#x3E;
    ...
    &#x3C;/body&#x3E;
&#x3C;/html&#x3E;</code></pre>
            <h3>CSS3</h3>
            <p>
                En CSS3, plusieurs critères peuvent être combinés pour déterminer la cible des règles. Ainsi, dans l’exemple ci-dessous, seuls les navigateurs écran dont la taille est au minimum de <code>200px</code> et au maximum de <code>640px</code> verront leur arrière-plan coloré en rouge.
            </p>
            <pre class="language-css"><code>@media screen and (min-width: 200px) and (max-width: 640px) {
    body {
        background:red;        
    }
}</code></pre>
            <h3>Orientation et résolution</h3>
            <p>
                Les <i>media queries</i> peuvent également déterminer des règles en fonction de l’orientation du périphérique – en mode portrait ou paysage :
            </p>
            <pre class="language-css"><code>@media screen and (orientation:portrait) {
    body {
        background:red;        
    }
}
@media screen and (orientation:landscape) {
    body {
        background:blue;        
    }
}</code></pre>
            <p>
                Les <i>media queries</i> permettent de réserver des règles aux périphériques en fonction de leur résolution / densité de pixels :
            </p>
            <pre class="language-css"><code>@media 
(-webkit-min-device-pixel-ratio: 2), 
(min-resolution: 192dpi) { 
    /* Retina-specific stuff here */
}</code></pre>
        </section>

        <section class="section" id="usages">
            <h2 class="section-subtitle">Usages</h2>
            <p>
                Les <i>media queries</i> permettent d’adapter les règles d’affichage en fonction du périphérique.
            </p>
            <p>
                On utilisera fréquemment ces adaptations pour :
            </p>
            <ul class="list">
                <li>agrandir la taille du texte</li>
                <li>agrandir la taille des contrôles et zones cliquables (pour une utilisation au doigt)</li>
                <li>faire passer le contenu sur une seule colonne</li>
                <li>masquer ou afficher des éléments spécifiques</li>
                <li>ajuster les dimensions et marges</li>
            </ul>
            
            <h3>Mobile first</h3>
            <p>
                Plusieurs stratégies peuvent être employées dans les logiques de mise en œuvre du <i>responsive web design</i>. 
            </p>
            <p>
                Il est possible de concevoir en priorité son interface pour le support disposant de la moindre taille d’écran (<i>mobile first</i>). Dans ce cas, les premières règles seront dédiées aux affichages restreints, et augmentées progressivement en utilisant les attributs <code>min-width</code>  des media queries :
            </p>
            <p>
                Ci-dessous, la taille par défaut est de 18px – pour les mobiles, donc. Elle ne deviendra de 21px que pour des écrans plus larges que 640px.
            </p>
            
            <pre class="language-css"><code>body{
    font-size: 18px;
}

@media (min-width:640px) {
    body {
         font-size: 21px;                    
    }
}</code></pre>
            <h3>Desktop first</h3>
            <p>
                À l’inverse, on peut spécifier un ensemble de règles standards pour les interfaces de type “ordinateur de bureau”, et ajuster ces règles au fur et à mesure de la diminution de la taille d’écran.
            </p>
            <p>
                Ci-dessous, un élément servant d’ornement pourra être affiché sur les grands écrans, et disparaitre sur les interfaces mobiles.
            </p>
    
            <pre class="language-css"><code>.ornement{
    height:600px;
}

@media (max-width:640px) {
    .ornement {
         display:none
    }
}</code></pre>
            
            <h3>Aller plus loin</h3>
            <p>
                Un exemple de mise en page avec navigation responsive sur <a href="http://ateliers.esapyrenees.fr/web/exemples/mq/">ateliers.esapyrenees.fr/web/exemples/mq/ </a>
            </p>
            <p>
                Redimensionner votre fenêtre de navigateur (ou utilisez “l’affichage adaptatif”, dans Firefox, ou Chrome) pour voir les règles à l’œuvre.
            </p>
        </section>
        
        <section class="section" id="typography">
            <h2 class="section-subtitle">Typographie Responsive</h2>
            
            <h3>Quelques définitions</h3>

            <p>La définition du <a href="https://fr.wikipedia.org/wiki/Site_web_adaptatif">responsive web design</a> par Wikipédia (où <i>responsive</i> se traduit en “adaptatif”), la première mention du terme, dans un <a href="http://alistapart.com/article/responsive-web-design">article d’Ethan Marcotte</a> sur <a href="http://alistapart.com/">A List Apart</a> (en anglais) ainsi que <a href="https://ia.net/know-how/responsive-typography-the-basics">Responsive Typography: The Basics</a>, un article d’Olivier Reichenstein</p>
            
            <h3>Quelques exemples</h3>
            <h4>Typographie</h4>

            <p><a href="http://webtypography.net/">Webtypography.net</a>, où Richard Rutter reprend les grands principes du livre The Elements of Typographic Style de Robert Bringhurst (indispensable à la santé de votre bibliothèque) et les applique au web, en y ajoutant des exemples de code.</p>
            <p>
                Un article de Jon Tangerine, <a href="http://v1.jontangerine.com/log/2008/06/the-paragraph-in-web-typography-and-design">The Paragraph in Web Typography &amp; Design</a>, accompagné de <a href="http://v1.jontangerine.com/silo/typography/p/">douze examples de code</a> pour styler les paragraphes.
            </p>
            <p>
                Le monde merveilleux de l’OpenType enfin accessible en css ; une introduction sur le <a href="http://blog.fontdeck.com/post/15777165734/opentype-1">blog de FontDeck</a> et la référence sur Mozilla Developper Network des propriétés <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-feature-settings">font-feature-settings</a> et <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant">font-variant</a>.
            </p>
            <h4>Mise en page</h4>
            <p>
                <a href="https://bradfrost.github.io/this-is-responsive/patterns.html">Responsive Patterns</a>, a collection of patterns and modules for responsive designs.
            </p>
            <h3>Quelques scripts pour aller plus loin</h3>
            <p><a href="https://freqdec.github.io/slabText/">Slabtext</a>, un plugin jquery pour faire des gros titres (voir aussi fittext, ou bigtext)</p>

            <h3>Un exemple (vite fait…)</h3>
            <p>
              <a href="http://ateliers.esapyrenees.fr/web/exemples/typographie/01.html">Tom Joad</a>
            </p>

            </section>


    </main>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  