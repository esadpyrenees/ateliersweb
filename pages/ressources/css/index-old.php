  <?php
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="CSS";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/css.php");
  ?>

  <main class="pane active" id="content">
    <h1>CSS</h1>
    <p>
                Le langage CSS sert à décrire la mise en forme d’un document HTML.
            </p>
    <section class="section">

        <h2 class="section-subtitle">Le futur (proche)</h2>
        <p>
            Les mise en page avec <code>float</code>, <code>inline-block</code> et les positions <code>relative</code>, <code>absolute</code> et <code>fixed</code> (telles que décrites dans ce document) se sont répandues dans le début des années 2000 avec l’avénement de la spécification CSS 2, qui a permis de remplacer un système de mise en page archaïque basé sur des tableaux (<code>&lt;table&gt;</code>).
        </p>
        <p>
            Aujourd’hui, plusieurs nouveaux outils sont intégrés au sein des navigateurs et débattus au sein du <abbr title="CSS Working Group">CSSWG</abbr>, instance chargée de faire évoluer et définir le standard CSS.
        </p>
        <p>
            Il s’agit principalement des modules CSS <a href="/web/pages/ressources/cssgrid/">Grid Layout</a> et <a href="/web/pages/ressources/flexbox/">Flexbox</a>. Ces modules sont encore en évolution et leurs implémentations au sein des navigateurs est loin d’être stabilisée.
            Mais ils deviendront sans doute de bien meilleurs outils que <code>float</code> ou <code>inline-block</code>
             pour concevoir des mise en page adaptés aux écrans et aux usages à venir.
        </p>
        <p>
          <strong class="edit">[ le futur est déjà là… Depuis la publication de ce document, <a href="/web/pages/ressources/flexbox/">flex</a> et <a href="/web/pages/ressources/cssgrid/">grid</a> sont devenus des standards supportés par la plupart des navigateurs récents. Les mises en page avec <code>float</code> ou <code>inline-block</code> sont désormais à éviter ] </strong>
        </p>
    </section>

    <section class="section" id="style">

            <h2 class="section-subtitle">Donner du style</h2>

            <p>
                Hors cas particuliers (styles <i>en ligne</i>), il convient de créer un ou plusieurs fichiers avec l’extension .css et de les associer au document HTML grâce à la balise <code>&lt;link&gt;</code> insérée dans le <code>&lt;head&gt;</code> de la page.
            </p>
            <pre class="langage-html"><code>&lt;link rel="stylesheet" type="text/css" href="chemin/vers/le/fichier.css"&gt;</code></pre>
            <p>
                Un seul fichier CSS est généralement suffisant pour l’ensemble d’un site web. Plusieurs fichiers ne sont utiles que dans le cas où le fichier principal devient trop long ou complexe, ou dans le cas d’ajouts liés à l’intégration de plugins javascript ou à l’utilisation de librairies CSS.
            </p>

</section>
            <section class="section" id="syntaxe">

            <h2 class="section-subtitle">Syntaxe</h2>
            <p>
                Un fichier CSS se décompose en plusieurs <strong>règles</strong>, qui permettent de <strong>sélectionner</strong> un élément de la page HTML, et de lui affecter un certain nombres de <strong>déclarations</strong> qui vont définir sa mise en forme.
            </p>
            <p>
                Chaque déclaration est composée d’une <strong>propriété</strong>, à laquelle on affecte une <strong>valeur</strong>
            </p>
            <p>
                <img src="/web/assets/img/css-intro-syntaxe.png">
            </p>
</section>


        <section class="section" id="display">
            <h2 class="section-subtitle">Display</h2>
            <p>
                Chaque élément HTML possède par défaut une propriété <code>display</code>, qui peut être modifiée en CSS pour les besoins de la mise en page. Si le plus fréquemment, la valeur de ces propriétés est <code>block</code> ou <code>inline</code>, les valeurs <code>inline-block</code> ou <code>none</code> sont particulièrement utiles.
            </p>

            <h3>display:block</h3>
            <div class="el">
                <p>L’élément <code>&lt;div&gt;</code> est l’élément le plus courant pour <i>div</i>iser les pages en zones et permettre la mise en page de ces zones. Par défaut, l’élément <code>&lt;div&gt;</code> a la valeur <code>display:block</code>, tout comme les éléments <code>&lt;p&gt;</code>, <code>&lt;blockquote&gt;</code> (pour les citations), <code>&lt;form&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;article&gt;</code> ou  <code>&lt;section&gt;</code>.</p>
                <p>Tant qu’on ne leur a pas affecté de largeur, les éléments dont la propriété <code>display</code> est <code>block</code> prennent toute la largeur disponible, et s’empilent verticalement dans la page.</p>
            </div>

            <h3>display:inline</h3>
            <p>
                Les éléments inline n’interompent pas le flux du texte ; ils s’insèrent dans celui-ci tel ce <span class="el"><code>span</code></span>. Les principaux éléments dont le <code>display</code> par défaut est <code>inline</code> sont <code>&lt;a&gt;</code>, <code>&lt;span&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>. À l’usage de <code>&lt;b&gt;</code> ou <code>&lt;i&gt;</code> pour produire du gras ou de l’italique, il faut généralement préférer <code>&lt;strong&gt;</code> et <code>&lt;em&gt;</code>. Quand à l’élément <code>&lt;u&gt;</code>, permettant de souligner, il est généralement à proscrire : le soulignement étant la norme la plus fréquemment adoptée pour les liens.
            </p>

             <h3>display:inline-block</h3>
             <p>
                <code>inline-block</code> est une valeur qui peut être utilisée pour la mise en page de colonnes et de blocs juxtaposés les uns aux autres, comme nous le verrons plus loin. Mais son usage le plus courant est celui des images. C’est effectivement la propriété par défaut de l’élément <code>&lt;img&gt;</code>.
             </p>
             <div class="el">
                <p>
                    <img src="/web/assets/img/pages--mise-en-page--img.gif" alt="">
                    L’élément <code>&lt;img&gt;</code> est par défaut aligné sur la ligne de base du texte qui l’entoure, à moins que sa propriété <code>vertical-align</code> ne soit modifiée, ou que ne lui soit affectée la propriété <code>display:block</code>.</p>
            </div>

            <h3>display:none</h3>
             <p>
                La valeur <code>none</code> permet de masquer totalement un élément, en rendant inopérantes ses valeurs de <code>height</code>, <code>width</code>, <code>margin</code> ou <code>padding</code> et son impact sur les éléments adjacents. Différement, la propriété <code>visibility:hidden</code> masque l’élément en préservant la place prise par l’élément dans la mise en page.
             </p>
        </section>

        <!--
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        -->


        <section class="section" id="largeurs">
            <h2 class="section-subtitle">Width &amp; max-width</h2>
            <p>
                Affecter une largeur à un élément block est la première étape vers un contrôle de la mise en page.
            </p>
            <pre class="langage-css"><code>#large {
    width: 500px;
}</code></pre>
            <div class="el" style="width:500px; ">
                <p><code>&lt;div id="large"&gt;</code></p>
            </div>
            <p>
                Pour centrer cet élément au sein de son élément parent, on peut lui affecter des valeurs de marges <code>auto</code> pour ses marges supérieures et inférieures.
            </p>
            <pre class="langage-css"><code>#centre {
    width: 500px;
    margin: 0 auto;
}</code></pre>
            <div class="el" style="width:500px; margin:0 auto">
                <p><code>&lt;div id="centre"&gt;</code></p>
            </div>

            <p>
                Les valeurs de <code>margin</code> (ainsi que celle de <code>padding</code>, la marge interne des éléments) peuvent se noter de manière étendue ou abrégée. En utilisant la notation abrégée, l’ordre des valeurs est celui des aiguilles d’une montre : <code>top</code>, <code>right</code>, <code>bottom</code> et <code>left</code>. Les exemples ci-dessous illustrent les différentes manières d’affecter des marges :
            </p>
            <pre class="langage-css"><code>#marges-etendues {
    margin-top:0;
    margin-right:auto;
    margin-bottom:0;
    margin-left:auto;
}
#marges-abregees {
    /* la valeur de margin-left sera la même que margin-right */
    /* la valeur de margin-top sera la même que margin-bottom */
    /* ces valeurs sont équivalentes à celles de #marges-etendues */
    margin:0 auto;
}
#marges-raccourcies {
    /* la valeur de margin-left sera la même que margin-right */
    margin:0 auto 20px;
}
#pas-de-marges {
    margin:0;
}</code></pre>
            <p>
                Si l’on veut éviter l’apparition d’une <i>scrollbar</i> horizontale pour les écrans dont la largeur serait inférieure à la largeur souhaitée pour le <code>&lt;div&gt;</code>, il est préférable d’utiliser la propriété <code>max-width</code>.
            </p>
            <pre class="langage-css"><code>#centre-responsive {
    max-width: 500px;
    margin: 0 auto;
}</code></pre>
            <div class="el" style="max-width:500px; margin:0 auto">
                <p><code>&lt;div id="centre-responsive"&gt;</code></p>
            </div>

            <p>
                <strong>Attention !</strong> Pour manipuler les propriétés <code>width</code>, <code>height</code>, <code>max-width</code> et <code>max-height</code>, il convient de maîtriser le « <a href="/exemples/boxmodel">modèle de boite</a> » ou de copier / coller la ligne ci-dessous au départ de tous vos fichiers CSS :
            </p>
            <pre><code class="language-css">* { box-sizing: border-box; }</code></pre>

        </section>

        <!--
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        -->

        <section class="section" id="positions">
            <h2 class="section-subtitle">Positions</h2>

            <p>
                Le mot-clé <code>position</code> en CSS est un faux-ami. Sa valeur permet de définir le comportement de mise en page d’un élément au sein de la page et sa relation aux éléments qui l’entourent (éléments parents, enfants et frères (<i>siblings</i>).
            </p>
            <h3>Static</h3>
            <p>
                Par défaut (tant qu’on ne l’a pas modifiée), la <code>position</code> d’un élément est <code>static</code>.
            </p>
            <pre class="langage-css"><code>#static {
    position:static;
}</code></pre>
            <p>
                On dit d’un élément auquel est affecté une <code>position</code> autre que <code>static</code> qu’il est <em>positionné</em>.
            </p>
            <h3>Fixed</h3>
            <p>
                La position <code>fixed</code> permet de définir la position d’un élément par rapprort au <i>viewport</i>, l’espace visible de la fenêtre du navigateur.
                Il permet d’utiliser les propriétés <code>top</code>, <code>right</code>, <code>bottom</code> ou <code>left</code>. Un exemple pour produire un carré noir en bas à gauche d’une page :
            </p>
            <pre><code class="langage-css">#fixed {
  position: fixed;
  bottom: 10px;
  left: 10px;
  width: 20px;
  height:20px;
  background:black;
}</code></pre>

            <p>
                Bien que particulièrement utile, cette position n’est que partiellement supportée par les navigateurs mobiles.
            </p>

            <h3>Sticky</h3>
            <p>
                La position <code>sticky</code> ressemble à <code>fixed</code>, au détail près qu’elle prend comme contexte son élément parent.
                Il permet d’utiliser les propriétés <code>top</code>, <code>right</code>, <code>bottom</code> ou <code>left</code> et permet au bloc de rester fixe à l’intérieur du scroll tant que l’élément parent y est contenu. Exemple avec ce point noir :
            </p>
            <div style="position: sticky;
  top: 10px;
  margin-left: -20px;
  width: 10px;
  height:10px;
  border-radius:10px;
  background:black;"></div>
            <pre><code class="langage-css">#sticky {
  position: sticky;
  top: 10px;
  margin-left: -20px;
  width: 10px;
  height:10px;
  background:black;
  border-radius:10px;
}</code></pre>

            <h3>Relative</h3>
            <p>
                La valeur <code>relative</code> est un outil très puissant pour la mise en page. Elle permet plusieurs comportements : <br>
            </p>
            <p>
                • Sans autre règle, la position relative semble être strictement identique au positionnement <code>static</code>.
            </p>
            <p>
                • La position de l’élément peut être modifiée par les propriétés <code>top</code>, <code>right</code>, <code>bottom</code> ou <code>left</code> <strong>relativement</strong> à sa position d’origine.
            </p>
            <div style="padding-bottom:25px">
                <div class="el no-padding">
                    <article class="el " style="position:relative; left:12px; top:25px;">
                            <pre style="margin:0"><code class="language-css">div {
    position:relative;
    left:12px;
    top:25px;
}</code></pre>
                    </article>
                </div>
            </div>
            <p>
                • Cette modification du positionnement préserve l’impact initial de l’élément sur ses éléments parents et frères.
                Ainsi, le <code>&lt;div class="el-2"&gt;</code> est affecté par la taille <strong>initiale</strong> de l'élément <code>&lt;div class="el-1"&gt;</code> après lequel il est placé.
            </p>

            <section class="el clearfix" style="overflow:auto">
                <div class="el " style="position:relative; left:70px; width:400px; float:left;">
                    <pre ><code class="language-css">.el-1 {
    position:relative;
    left:70px;
    width:400px;
    float:left;
}</code></pre>

                </div>
                <div class="el " style="width:300px; float:left;">
                    <pre ><code class="language-css">.el-2 {
    width:300px;
    float:left;
}</code></pre>

                </div>
            </section>

            <p>
                • La position <code>relative</code> créee également un nouveau référenciel de positionnement pour les éléments positionnés en <code>absolute</code> :
            </p>

            <h3>Absolute</h3>

            <p>
                La position <code>absolute</code> permet de positionner un élément en supprimant l’impact qu’il a sur ses autres éléments parents et frères. L’élément positionné par le code CSS suivant se trouve tout en haut d’une page.
            </p>
            <pre ><code class="language-css">#absolute {
    position:absolute;
    top: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:black;
}</code></pre>
            <p>
                Cette position s’établit en effet <em>par rapport au document</em> ou au premier élément parent dont la position est autre que <code>static</code>.
            </p>

            <div class="el box" style="position:relative">
                <div style="position:absolute;
    top: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:red;"></div>
                <pre ><code class="language-css">.box {
    position:relative
}
#absolute-2 {
    position:absolute;
    top: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:red;
}</code></pre>
            </div>
        </section>

        <!--
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        -->

        <section class="section" id="floats">
            <h2 class="section-subtitle">Mise en page avec float &amp; clear</h2>

            <p>
                La propriété <code>float</code> est une des plus utilisées pour structurer une mise en page <strong class="edit">[ avant que n’arrivent <a href="/web/pages/ressources/flexbox/">flexbox</a> et <a href="/web/pages/ressources/cssgrid/">grid</a> ]</strong>, mais son usage est parfois délicat. Elle spécifie qu'un élément doit être retiré du flux normal et placé à la droite ou à la gauche du bloc qui le contient. Le texte et les éléments <code>inline</code> adjacents se répartiront autour de lui.
            </p>
            <p>Dans son usage le plus simple, la propriété <code>float</code> permet d’habiller une image avec du texte : </p>

            <div class="el">
                <p>
                    <img src="/web/assets/img/pages--mise-en-page--lettrine-small.gif" alt="C" style="float:left; margin:0 10px 0 0">ette jolie lettre ornée est l’œuvre de Joseph Apoux, peintre et illustrateur français de la fin du XIXe siècle proche du décadentisme (dixit <a href="http://fr.wikipedia.org/wiki/Joseph_Apoux">wikipedia</a>).
                    Joseph Apoux étudie la peinture et le dessin avec Jean-Léon Gérôme. (…) On lui doit notamment cet <i>Alphabet pornographique</i>, dont est issu <a href="/web/assets/img/pages--mise-en-page--lettrine.png">cette image que vous pouvez voir en plus grand</a>, et qui grace à la propriété <code>float</code> permet de créer une lettrine (<i>notabene</i>: la propriété <code>p:first-letter</code> permettrait de le faire de manière plus élégante, et/ou sans utiliser d’image). Pour plus de typographie érotique, voir <a href="http://maxb.home.xs4all.nl/erotype.html" >Max Bruinsma</a>.
                </p>
            </div>
            <pre>
                <code class="language-css">img { float:left; margin:0 10px 0 0; }</code></pre>
            <h3>Deux colonnes</h3>
            <p>
                En utilisant une boîte flottante, on peut ainsi créer deux colonnes :
            </p>
            <section class="el">
                <nav class="el" style="float:left; width:250px">
                    <pre><code class="language-css">nav {
    float:left;
    width:250px;
}</code></pre>
                </nav>
                <article class="el" style="margin-left:270px; ">
                    <p>
                        On affecte une marge à l’article, pour « laisser la place » à l’élément <code>&lt;nav&gt;</code> flottant.
                    </p>
                    <pre><code class="language-css">article {
    margin-left:270px;
}</code></pre>
                </article>
            </section>
            <h3>Multiples colonnes</h3>
            <p>
                En juxtaposant des boîtes flottantes, on peut créer une mise en page en plusieurs colonnes régulières… <strong class="edit">[ mais il vaut mieux utiliser <a href="/web/pages/ressources/flexbox/">flex</a> et <a href="/web/pages/ressources/cssgrid/">grid</a> ]</strong>
            </p>
            <section class="clearfix">
                <div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="col"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="col"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="col"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="col"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="col"</code></div>
            </section>
            <pre><code class="language-css">.col {
    float:left;
    width:20%;
}</code></pre>
            <p>
                …ou irrégulières :
            </p>
            <section class="clearfix">
                <div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:14.2857%;"><code>class="col one"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:28.5714%;"><code>class="col two"</code></div>
                <div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:57.1429%;"><code>class="col three"</code></div>
            </section>
            <pre><code class="language-css">.col   { float:left; height:100px; }
.one   { width:14.2857%;}
.two   { width:28.5714%;}
.three { width:57.1429%;}</code></pre>

            <h3>Clear et overflow</h3>
            <p>
                Un problème se pose cependant ; l’élément conteneur n’est plus affecté par l’élément flottant ( on l’a « sorti du flux »).
                L’élément flottant peut donc « dépasser » de son conteneur.
            </p>
            <div class="clearfix">
            <section class="el">
                <nav class="el" style="float:left; width:350px">
                    <pre><code class="language-css">nav {
    float:left;
    width:350px;
}</code></pre>
                </nav>
            </section>
            </div>

            <p>
                Pour résoudre ce problème, de multiples solutions s’offrent ; la plus simple est ce définir la propriété <code>overflow</code> du conteneur avec la valeur <code>auto</code>. Et quand ça ne suffit pas, il faut aller chercher dans le monde merveilleux du <a href="http://stackoverflow.com/questions/211383/which-method-of-clearfix-is-best" ><i>clearfix</i></a>…
            </p>

            <section class="el" style="overflow:auto;">
                <nav class="el" style="float:left; width:350px">
                    <pre><code class="language-css">section{
    overflow:auto;
}
nav {
    float:left;
    width:350px;
}</code></pre>
                </nav>
            </section>


            <h3>Clear</h3>
            <p>
                La propriété <code>clear</code> sert à contraindre l’élément qui suit un élément flottant à passer en dessous. Les valeurs possibles de <code>clear</code> sont <code>left</code>, <code>right</code> ou <code>both</code> (c’est la valeur qu’on utilise le plus souvent).
            </p>
            <section class="el" style="overflow:auto;">
                <nav class="el" style="float:left; ">
                    <pre><code class="language-css">nav {
    float:left;
}</code></pre>
                </nav>
                <article class="el" style="clear:both">
                    <pre><code class="language-css">article{
    clear:both;
}</code></pre>
                </article>
            </section>

        </section>

        <!--
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        -->

        <section class="section">
            <h2 class="section-subtitle">Blocks en ligne</h2>
            <h3>Grille</h3>

            <p>
                La propriété <code>float</code> montre des limites quand il s’agit d’organiser en grille des contenus de hauteurs différentes. Les éléments viennent buter sur l’élément de plus grande hauteur :
            </p>
            <div class="clearfix" style="margin-bottom:1em">
                <section class="el" style="overflow:auto;">
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code><br>avec un contenu plus important<br></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
                <div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;"><code>class="box"</code></div>
            </section>
            </div>
            <pre><code class="langage-css">.box { float:left; width:20%;}</code></pre>
            <p>
                On peut alors avoir recours aux propriétés <code>display:inline-block</code> et <code>vertical-align:top</code> <strong class="edit">[ et surtout utiliser <a href="/web/pages/ressources/flexbox/">flex</a> ou <a href="/web/pages/ressources/cssgrid/">grid</a> ]</strong>
            </p>

            <section class="el" style="overflow:auto; vertical-align:top;">
                      <div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code><br>avec un contenu plus important<br>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code>
                </div><div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;"><code>class="box"</code></div>
            </section>
            <pre><code class="langage-css">.box { display:inline-block; vertical-align:top; width:20%; }</code></pre>

            <h3>Mise en page avec inline-block</h3>
            <p>
                Cette propriété permet également de structurer une mise en page. Mais elle demande une attention toute particulière. <strong class="edit">[ et ne devrait plus être utilisée puisqu’on a <a href="/web/pages/ressources/flexbox/">flex</a> et <a href="/web/pages/ressources/cssgrid/">grid</a> ]</strong>
                Les éléments <code>inline-block</code> juxtaposés se comportent « comme des mots ». Si on laisse une espace entre deux éléments <code>inline-block</code>, cette espace sera affichée entre les blocs, induisant une largeur supérieure à 100% lorsque deux blocs sont juxtaposés.
            </p>
            <section class="el" style="overflow:auto; vertical-align:top;">
                    <nav class="el no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:30%;">
                        <pre><code class="langage-css">nav {
    display:inline-block;
    vertical-align:top;
    width:30%;
}</code></pre>
                    </nav>
                    <article class="el no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:70%;">
                        <pre><code class="langage-css">article {
    display:inline-block;
    vertical-align:top;
    width:70%;
}</code></pre>
                        <p>
                            Pour résoudre ce problème, il est nécessaire de supprimer tout espace et saut de ligne entre les éléments du code HTML (ici, <code>nav</code> et <code>article</code>) :
                            <pre><code class="langage-html">&lt;!-- affichage incorrect --&gt;
&lt;nav&gt;
    (navigation)
&lt;/nav&gt;
&lt;article&gt;
    (texte)
&lt;/article&gt;

&lt;!-- affichage correct --&gt;
&lt;nav&gt;
    (navigation)
&lt;/nav&gt;&lt;article&gt;
    (texte)
&lt;/article&gt;

</code></pre>
                        </p>
                    </article>
            </section>

        </section>

        <!--
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        ////////////////////////////////////////////////////////////////////////////////////////////////////////////////
        -->


  </main>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
