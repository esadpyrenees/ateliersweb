<div id="top"></div>
# Contenu

<div id="text"></div>
## Texte


Lorsqu’on écrit du code HTML, on écrit du texte. Le premier et principal contenu dont est composé le web est également le texte (lire à ce sujet le vieil article d’Olivier Reichenstein, [Web Design is 95% Typography](https://ia.net/topics/the-web-is-all-about-typography-period)).

### Les paragraphes

Les paragraphes `<p>` sont les éléments HTML parmi les plus utilisés.

```html
<p>
  95% de l’information sur le web est constitué d’écrit. Il est tout à fait logique de dire qu’un designer web devrait recevoir une bonne formation dans la discipline principale de la mise en forme de l’information écrite, en d’autres termes, la typographie (Olivier Reichenstein).
</p>
```

### Les listes

Les listes existent en 3 variantes:

* `<ul>` : des listes non ordonnées
* `<ol>` : des listes ordonnées (dont les éléments sont automatiquement numérotés)
* `<dl>` : des listes de définitions (plus rarement utilisées, et non décrites ici)

Les listes HTML nécessitent une structure spécifique:

`<ul>` et `<ol>` doivent inclure et être les parents directs de `<li>`, les _list items_, éléments de la liste.

#### Listes non ordonnées

Ce sont les types de listes les plus couramment utilisés. Elles servent à regrouper une liste d’éléments individuels, sans ordre particulier.

```html
<p>Liste de courses :</p>
<ul>
  <li>Lait </li>
  <li>Pain </li>
  <li>Chocolat </li>
  <li>Plus de chocolat…</li>
</ul>
```

Les éléments de la liste sont affichés (par défaut) avec des puces.

<p>Liste de courses :</p>
<ul>
  <li>Lait </li>
  <li>Pain </li>
  <li>Chocolat </li>
  <li>Plus de chocolat…</li>
</ul>

#### Listes ordonnées

Les listes ordonnées sont utilisées lorsque l’ordre de ses éléments est important.
```html
<ol>
  <li>Première étape </li>
  <li>Deuxième étape </li>
  <li>Troisième étape </li>
</ol>
```
Les listes ordonnées sont (par défaut) automatiquement numérotées par le navigateur. Il n’est pas nécessaire d’inclure les nombres dans le code HTML.
<ol>
  <li>Première étape </li>
  <li>Deuxième étape </li>
  <li>Troisième étape </li>
</ol>

### Bloc de citation

Les blocs de citation sont utilisés pour identifier une citation.
```html
<p>Tim Berners-Lee a déclaré: </p>
<blockquote>
  « Le web est plus une invention sociale que technologique. Je l’ai conçu pour qu’il ait un effet social – aider les gens à travailler ensemble – et non comme un jouet technologique. »
</blockquote>
```
<p>Tim Berners-Lee a déclaré: </p>
<blockquote>
  « Le web est plus une invention sociale que technologique. Je l’ai conçu pour qu’il ait un effet social – aider les gens à travailler ensemble – et non comme un jouet technologique. »
</blockquote>

### Les titres

Il existe 6 niveaux de titres disponibles, allant de `<h1>` (le plus important) à `<h6>`.

Les titres sont destinés à être utilisés avec les paragraphes et les listes, pour dessiner la structure naturelle du document.

<div id="inline"></div>
## Sémantique en ligne

Si les paragraphes et les listes visent à identifier des blocs de texte, il est souvent nécessaire de donner du sens à un mot (ou à quelques mots) au sein du texte.

### Strong

Pour les mots importants, on utilise la balise `<strong>`:
```html
<p>
  C’est <strong> important </strong> !
</p>
```

C’est **important** !


Par défaut, les éléments `<strong>` sont affichés en gras. ⚠️ Attention, `<strong>` ne doit pas être utilisé uniquement pour mettre du texte en gras, mais pour donner au texte plus d’importance (avec l’aide de CSS, on pourra préférer changer sa couleur plutôt que sa graisse).

### Accentuation

Pour appuyer un mot au sein du texte,on utilise la balise `<em>`:
```html
<p>
  Ceci est <em>parfaitement</em> clair.
</p>
```
Ceci est <em>parfaitement</em> clair.

Par défaut, les éléments `<em>` sont affichés en italique. ⚠️ Attention, `<em>` ne doit pas être utilisé uniquement pour mettre du texte en italique, mais pour donner au texte plus d’importance (avec l’aide de CSS, on pourra préférer changer sa couleur plutôt que son style).

N.B. : Lorsque le **sens** l’exige, on peut utiliser la balise `<i>`, par exemple pour l’inclusion d’un terme en langue étrangère :
```html
<p>
  Archimède s’écria : <i>Eurêka !</i>
</p>
```

### Abréviations

Des abréviations telles que W3C ou ÉSAD peuvent utiliser l’élément `<abbr>`:

On ajoute généralement un attribut `title` pour spécifier la description de l’abréviation, qui apparaît au survol de l’élément.

```html
<p>
  J’étudie à l’<abbr title="École supérieure d’art et de design">ÉSAD</abbr> des Pyrénées.
</p>
```
<p>
  J’étudie à l’<abbr title="École supérieure d’art et de design">ÉSAD</abbr> des Pyrénées.
</p>

### Citations en ligne

L’élément `<blockquote>` est un élément de niveau bloc. Il a une version en ligne, pour les citations intégrées à une phrase :
```html
<p>
  J’ai dit <q>“Bonjour monde”</q> et je suis parti.
</p>
```
J’ai dit <q>“Bonjour monde”</q> et je suis parti.

### Non-sémantique
Lorsque l’on balise un élément de contenu qui n’a pas de signification particulière (par exemple, pour ajouter une couleur ou une graisse à un mot pour une raison autre que l’emphase), on peut utiliser l’élément `<span>`.
```html
<p>
  Ceci est un <span>élément</span> singulier.
</p>
```


## Liens {#links}

Les liens sont des éléments essentiels du HTML ; le Web a été conçu pour être un réseau d’information constitué de documents **liés** entre eux.

En HTML, les liens sont des éléments en ligne écrits avec la balise `<a>` (pour *anchor*, ancre).

L’attribut `href` (référence hypertexte) est utilisé pour définir la cible du lien (à laquelle on accède lorsqu’on clique).
```html
<p>
  Vous êtes <a href="https://perdu.com">perdu⋅es</a> ? 
  Naviguez dans le <a href="https://desordre.net">Désordre</a>.
</p>
```

Les liens constituent l’interaction principale d’une page Web : on navigue d’un document à un autre en cliquant sur les liens.

On peut définir trois types de cibles :

* **ancres cibles**, pour naviguer dans la même page
* **URL relatives**, pour naviguer dans le même site Web
* **URL absolues**, pour naviguer vers un autre site Web

### Ancres cibles

On l’utilise naviguer dans une même page. On peut cibler un élément spécifique grâce à son attribut `id`.

Par exemple, `<a href="#top">` fait défiler la page jusqu’à l’élément dont l’`id` est “top” :

<a href="#top">Haut de page</a>

### URL relatives {#urls-relatives}

Si on souhaite définir un lien vers une autre page du même site Web, on utilise des URL relatives (relatives au document courant, à la page en cours).

Exemple : le dossier “mon-site” contient deux fichiers HTML (`index.html` et `contact.html`), mais aussi un sous-dossier “projets” qui contient d’autres pages.

<pre markdown="0" class="filesystem">
<span class="icon-folder-open"></span> mon-site
    <span class="icon-file-empty"></span> index.html
    <span class="icon-file-empty"></span> contact.html
    <span class="icon-folder-open"></span> projets
        <span class="icon-file-empty"></span> projet1.html
        <span class="icon-file-empty"></span> projet2.html
</pre>


Dans `index.html`, on peut écrire :
```html
<p>
    Regardez mes projets :
</p>
<ul>
    <li><a href="projets/projet1.html">Un super projet</a></li>
    <li><a href="projets/projet2.html">Un projet génial</a></li>
    <!-- les pages sont contenues dans le dossier “projets” ;
    on donne donc leur chemin “relatif” à la page d’accueil -->
</ul>
<p>
    Pour plus d’informations, <a href="contact.html">contactez-moi</a>.
    <!-- la page “contact” est au même niveau que la page d’accueil -->
</p>
```


### URL absolues

Pour partager le lien vers un projet, il faudra transférer le site en ligne, et transmettre l’URL absolue de la page HTML.

Cette URL peut être segmentée en 3 parties:

* **protocole** : `https://`
* **domaine** : `monsupersite.com`
* **chemin du fichier** : `/projets/projet1.html`

Cette URL absolue est autonome : peu importe où l’on affiche le lien, il contient toutes les informations nécessaires pour trouver le bon fichier, dans le bon domaine, avec le bon protocole.

On utilise généralement des URL absolues quand on veut produire un lien vers un autre site Web. La page `contact.html` pourra ainsi contenir un lien vers le site de l’ÉSAD :
```html
<p>
  J’étudie à l’<a href="https://esad-pyrenees.fr/">ÉSAD Pyrénées</a>.
</p>
```
<div id="images"></div>
## Images & médias

Les images sont le premier contenu non textuel apparu sur le Web. Seuls quelques formats d’image peuvent être affichés dans un navigateur : principalement  `.jpg`, `.gif` (animé ou non), `.png` (transparent ou non) ou `.svg` (format d’images vectorielles).

<details markdown="1">
<summary>Voir les différents formats de fichiers image</summary>

#### jpg
Les images JPG sont conçues pour gérer de grandes palettes de couleurs sans augmenter de façon exorbitante la taille du fichier. Cela les rend parfaits pour les photos et les images comportant de nombreux dégradés. En revanche, les fichiers JPG ne permettent pas de pixels transparents.

#### gif
Les GIF sont l’option par excellence pour les animations simples, mais ils ont en revanche une limite en termes de palette de couleurs : on ne les utilise jamais pour des photos. Les pixels transparents sont une option binaire pour les GIF, on ne peut pas avoir de pixels semi-opaques. Cela peut rendre difficile l’obtention de niveaux de détail élevés sur un arrière-plan transparent. Pour cette raison, il est généralement préférable d’utiliser des images PNG si l’on n’a pas besoin d’animation.

#### png

Les PNG sont parfaits pour tout ce qui n’est pas une photo ou une animation. Pour les photos, un fichier PNG de même qualité (tel que perçu par l’œil humain) serait généralement plus volumineux qu’un fichier JPG équivalent. Cependant, ils gèrent parfaitement la transparence (PNG 24) et n’ont pas de limites de palette de couleurs. Cela les rend parfaits pour les icônes, graphiques, logos, etc.

#### svg

Contrairement aux formats d’image bitmap (basés sur des pixels) ci-dessus, SVG est un format graphique basé sur des vecteurs. Les SVG peuvent être agrandis ou réduits à n’importe quelle dimension sans perte de qualité. Cette propriété fait des images SVG un outil formidable pour le design *responsive*.

</details>

### La syntaxe

Les images utilisent l’élément `<img>`, qui est un élément à fermeture automatique (il ne comporte qu’une balise d’ouverture).

L’attribut `src` définit l’emplacement de l’image. Comme pour les liens, on peut utiliser des URL relatives ou absolues.

<pre markdown="0" class="filesystem">
<span class="icon-folder-open"></span> mon-site
    <span class="icon-file-empty"></span> accueil.html
    <span class="icon-file-empty"></span> logo.png
</pre>


```html
<h1><img src="logo.png" alt="Logo de mon super site"></h1>
<p>
    Bienvenue sur mon site !
</p>
```

Chaque image a deux dimensions: une largeur et une hauteur, exprimées en **pixels**.

Lors de l’insertion d’une image en HTML, le navigateur l’affichera automatiquement dans sa taille réelle. On peut spécifier les dimensions d’affichage d’une image grâce aux attributs `width` et `height`, mais il est recommandé d’utiliser CSS pour mieux maîtriser la taille d’affichage de l’image.

⚠️ Il est important de faire attention à la **taille en pixels** et au **poids en Ko** ou Mo des images que l’on utilise, notamment pour éviter le chargement d’images trop lourdes.


### Audio & vidéo

Les balises `<audio>` et `<video` qui permettent d’insérer des médias audio et vidéo dans une page web sont décrites en détail dans [la section dédiée](../../audiovideo/).

### `<canvas>` et `<iframe>`
La balise `<canvas>` ajoute la possibilité de créer des animations avec du code. Il peut s’agir de 2d (avec [p5.js](https://p5js.org/), ou [paper.js](http://paperjs.org/) par exemple) ou de 3d (avec [three.js](https://threejs.org/) ou [Zdog](https://zzz.dog/)). Elle agit comme un espace rectangulaire dont le contenu est manipulable en javascript exclusivement. Voir [la page dédiée à canvas](../../canvas/)

Les `<iframe>` sont un type de média particulier : ils constituent essentiellement une fenêtre vers une autre page Web. Ils sont aussi appelés *embed*.
On les rencontre notamment si l’on veut intégrer une vidéo provenant d’un service externe (Youtube, Vimeo) :
```html
<iframe width="560" height="315" src="https://www.youtube.com/embed/yfskVxCn_qo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
```


<div id="structure"></div>
## Structure

Lorsque l’on écrit un contenu HTML tel que des paragraphes, des listes ou des liens, on donne du sens à un texte. Mais il est souvent nécessaire de regrouper certains de ces éléments afin de mieux structurer le contenu et sa capacité de mise en forme CSS.

Une page de blog peut être divisée en 4 parties:

* un en-tête similaire sur chaque page, contenant la navigation principale du site
* un contenu principal, qui change pour chaque page: une liste d’articles, un article unique avec des commentaires, une page à propos…
* une barre latérale qui relie aux archives mensuelles et aux catégories
* un pied de page pour des liens supplémentaires vers des pages moins importantes

Il existe certains éléments HTML structurels que l’on peut utiliser comme conteneurs pour d’autres éléments.

### En-tête : `<header>`

Le `<header>` est généralement le premier élément HTML du code. Il s’agit d’une introduction à la page Web, pouvant contenir le logo, un slogan et des liens de navigation.
```html
<header>
    <h1><img src="logo.png" alt="Logo de mon super site"></h1>
    <p>
        Bienvenue sur mon site !
    </p>
    <nav>
        <ul>
            <li><a href="home.html">Accueil </a></li>
            <li><a href="projets.html">Projets</a></li>
            <li><a href="contact.html">Contact </a></li>
        </ul>
    </nav>
</header>
```
### Pied de page : `<footer>`

Le pied de page est généralement le dernier élément d’une page, où les liens de navigation principaux sont répétés et les liens secondaires ajoutés.
```html
<footer>
    <p>Mon super site © 2019</p>
    <nav>
        <ul>
            <li><a href="home.html">Accueil </a></li>
            <li><a href="projets.html">Projets</a></li>
            <li><a href="contact.html">Contact </a></li>
        </ul>
        <ul>
            <li><a href="privacy-policy.html">Règles de confidentialité </a></li>
            <li><a href="terms-of-use.html"> Conditions d’utilisation </a></li>
        </ul>
    </nav>
</footer>
```
### Contenu principal : `<main>`

L’élément `<main>` contient, comme son nom l’indique, le contenu le plus important de la page.

Alors que toutes les pages Web d’un site Web contiennent des éléments communs et répétés de page en page (l’en-tête, la navigation, le pied de page, etc.), l’élément `<main>` se concentre sur un contenu unique.

Cet article fait partie de l’élément `<main>` de cette page Web, car son contenu est unique sur l’ensemble du site Web.

### Annexe : `<aside>`

L’élément `<aside>` réside généralement à côté de l’élément principal et contient des informations supplémentaires relatives au contenu principal.

### Sections et articles

Les éléments `<section>` et `<article>` permettent de grouper des contenus.

Leurs différences sémantiques sont minces. `<section>` est utile pour découper un document en multiples blocs. `<article>` est utile pour définir un contenu autonome. Tous deux sont sensés contenir un titre (`<h1>`, `<h2>`, etc.)

### Figures

L’élément `<figure>` est généralement utilisé pour englober des images, illustrations, diagrammes, ou même des *snippets* de code. Il peut être utilisé en conjonction avec l’élément `<figcaption>` pour signaler la légende.

```html
<figure>
    <img src="cat.jpg" alt="Une photo de mon chat">
    <figcaption>Mon chat est noir.</figcaption>
</figure>
```

### Divisions

Comme pour la balise *inline* `<span>`, on a souvent besoin de grouper le contenu dans des blocs plus précis (généralement pour lui associer une mise en forme CSS). Dans ce cas, il est possible d’utiliser la balise `<div>`, qui ne porte aucun sens. Il faut veiller à l’utiliser le moins possible, pour garder le code HTML le plus *sémantique* possible.

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io), sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
