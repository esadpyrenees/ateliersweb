<div id="top"></div>
# Contenu

<div id="text"></div>
## Texte


Lorsqu’on écrit du code HTML, on écrit du texte. Le premier et principal contenu dont est composé le web est également le texte (lire à ce sujet le vieil article d’Olivier Reichenstein, [Web Design is 95% Typography](https://ia.net/topics/the-web-is-all-about-typography-period)).

### Les paragraphes

Les paragraphes `<p>` sont les éléments HTML les plus utilisés, car ils agissent en tant qu’éléments de niveau bloc par défaut et sont rapides à écrire.

```
<p>
  95% de l’information sur le web est constitué d’écrit. Il est tout à fait logique de dire qu’un designer web devrait recevoir une bonne formation dans la discipline principale de la mise en forme de l’information écrite, en d’autres termes, la typographie (Olivier Reichenstein).
</p>
```

### Les listes

Les listes existent en 3 variantes:

- `<ul>` sont des listes non ordonnées
- `<ol>` sont des listes ordonnées (dont les éléments sont automatiquement numérotés)
- `<dl>` sont des listes de définitions (plus rarement utilisées, et non décrites ici)

Les listes HTML nécessitent une structure spécifique:

`<ul>` et `<ol>` doivent inclure et être les parents directs de `<li>`, qui représente les éléments de la liste. Par conséquent, les éléments `<li>` ne peuvent pas être utilisés seuls et doivent être des enfants directs d’une `<ul>` ou d’une `<ol>`.

#### Listes non ordonnées

Ce sont les types de listes les plus couramment utilisés. Elles servent à regrouper une liste d’éléments individuels, sans ordre particulier.

```
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
```
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
```
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
```
<p>
  C’est <strong> important </strong> !
</p>
```

C’est **important** !


Par défaut, les éléments `<strong>` sont affichés en gras. ⚠️ Attention, `<strong>` ne doit pas être utilisé uniquement pour mettre du texte en gras, mais pour donner au texte plus d’importance (avec l’aide de CSS, on pourra préférer changer sa couleur plutôt que sa graisse).

### Accentuation

Pour appuyer un mot au sein du texte,on utilise la balise `<em>`:
```
<p>
  Ceci est <em>parfaitement</em> clair.
</p>
```
Ceci est <em>parfaitement</em> clair.

Par défaut, les éléments `<em>` sont affichés en italique. ⚠️ Attention, `<em>` ne doit pas être utilisé uniquement pour mettre du texte en italique, mais pour donner au texte plus d’importance (avec l’aide de CSS, on pourra préférer changer sa couleur plutôt que son style).

N.B. : Lorsque le **sens** l’exige, on peut utiliser la balise `<i>`, par exemple pour l’inclusion d’un terme en langue étrangère :
```
<p>
  Archimède s’écria : <i>Eurêka !</i>
</p>
```

### Abréviations

Des abréviations telles que W3C ou ÉSAD peuvent utiliser l’élément `<abbr>`:

On ajoute généralement un attribut `title` pour spécifier la description de l’abréviation, qui apparaît au survol de l’élément.

```
<p>
  J’étudie à l’<abbr title="École supérieure d’art et de design">ÉSAD</abbr> des Pyrénées.
</p>
```
<p>
  J’étudie à l’<abbr title="École supérieure d’art et de design">ÉSAD</abbr> des Pyrénées.
</p>

### Citations en ligne

L’élément `<blockquote>` est un élément de niveau bloc. Il a une version en ligne, pour les citations intégrées à une phrase :
```
<p>
  J’ai dit <q>“Bonjour monde”</q> et je suis parti.
</p>
```
J’ai dit <q>“Bonjour monde”</q> et je suis parti.

### Non-sémantique
Lorsque l’on balise un élément de contenu qui n’a pas de signification particulière (par exemple, pour ajouter une couleur ou une graisse à un mot pour une raison autre que l’emphase), on peut utiliser l’élément `<span>`.
```
<p>
  Ceci est un <span>élément</span> singulier.
</p>
```


<div id="links"></div>
## Liens

Les liens sont des éléments essentiels du HTML ; le Web a été conçu pour être un réseau d’information constitué de documents **liés** entre eux.

La partie “HyperText” de HTML définit le type de ces liens : liens hypertextes, ou hyperliens. Le mot “hypertexte” a été créé en 1965 par Ted Nelson, pour décrire la notion (bien plus ancienne) de liaisons entre des documents.

En HTML, les liens sont des éléments en ligne écrits avec la balise `<a>` (pour *anchor*, ancre).

L’attribut `href` (référence hypertexte) est utilisé pour définir la cible du lien (à laquelle on accède lorsqu’on clique).
```
<p>
  Pour vous perdre, naviguez dans le <a href="https://desordre.net">Désordre</a>.
</p>
```
<p>
  Pour vous perdre, naviguez dans le <a href="https://desordre.net">Désordre</a>.
</p>

Les liens constituent l’interaction principale d’une page Web : on navigue d’un document à un autre en cliquant sur les liens.

On peut définir trois types de cibles :

- **ancres cibles**, pour naviguer dans la même page
- **URL relatives**, pour naviguer dans le même site Web
- **URL absolues**, pour naviguer vers un autre site Web

### Ancres cibles

On l’utilise naviguer dans une même page. On peut cibler un élément spécifique grâce à son attribut `id`.

Par exemple, `<a href="#top">` fait défiler la page jusqu’à l’élément dont l’`id` est “top” :

<a href="#top">Haut de page</a>

### URL relatives {#urls-relatives}

Si on souhaite définir un lien vers une autre page du même site Web, on utilise des URL relatives (relatives au document courant, à la page en cours).

Exemple : le dossier “mon-site” contient deux fichiers HTML (`home.html` et `contact.html`), mais aussi un sous-dossier “projets” qui contient d’autres pages.

- mon-site/
        - accueil.html
        - contact.html
        - projets/
            - projet1.html
            - projet2.html

Dans `accueil.html`, on peut écrire :
```
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

- **protocole** : `https://`
- **domaine** : `monsupersite.com`
- **chemin du fichier** : `/projets/projet1.html`

Cette URL absolue est autonome : peu importe où l’on affiche le lien, il contient toutes les informations nécessaires pour trouver le bon fichier, dans le bon domaine, avec le bon protocole.

On utilise généralement des URL absolues quand on veut produire un lien vers un autre site Web. La page `contact.html` pourra ainsi contenir un lien vers le site de l’ÉSAD :
```
<p>
  J’étudie à l’<a href="https://esad-pyrenees.fr/">ÉSAD Pyrénées</a>.
</p>
```
<div id="images"></div>
## Images & médias

Les images sont le premier contenu non textuel apparu sur le Web. Seuls quelques formats d’image peuvent être affichés dans un navigateur : principalement  `.jpg`, `.gif` (animé ou non), `.png` (transparent ou non) ou `.svg` (format d’images vectorielles).

### Formats

#### jpg
Les images JPG sont conçues pour gérer de grandes palettes de couleurs sans augmenter de façon exorbitante la taille du fichier. Cela les rend parfaits pour les photos et les images comportant de nombreux dégradés. En revanche, les fichiers JPG ne permettent pas de pixels transparents.

#### gif
Les GIF sont l’option par excellence pour les animations simples, mais ils ont en revanche une limite en termes de palette de couleurs : on ne les utilise jamais pour des photos. Les pixels transparents sont une option binaire pour les GIF, on ne peut pas avoir de pixels semi-opaques. Cela peut rendre difficile l’obtention de niveaux de détail élevés sur un arrière-plan transparent. Pour cette raison, il est généralement préférable d’utiliser des images PNG si l’on n’a pas besoin d’animation.

#### png

Les PNG sont parfaits pour tout ce qui n’est pas une photo ou une animation. Pour les photos, un fichier PNG de même qualité (tel que perçu par l’œil humain) serait généralement plus volumineux qu’un fichier JPG équivalent. Cependant, ils gèrent parfaitement la transparence (PNG 24) et n’ont pas de limites de palette de couleurs. Cela les rend parfaits pour les icônes, graphiques, logos, etc.

#### svg

Contrairement aux formats d’image bitmap (basés sur des pixels) ci-dessus, SVG est un format graphique basé sur des vecteurs. Les SVG peuvent être agrandis ou réduits à n’importe quelle dimension sans perte de qualité. Cette propriété fait des images SVG un outil formidable pour le design *responsive*.

### La syntaxe

Les images utilisent l’élément `<img>`, qui est un élément à fermeture automatique (il ne comporte qu’une balise d’ouverture).

L’attribut `src` définit l’emplacement de l’image. Comme pour les liens, on peut utiliser des URL relatives ou absolues.

- mon-site/
    - accueil.html
    - logo.png

```
<h1><img src="logo.png" alt="Logo de mon super site"></h1>
<p>
    Bienvenue sur mon site !
</p>
```

Chaque image a deux dimensions: une largeur et une hauteur, exprimées en **pixels**.

Lors de l’insertion d’une image en HTML, il n’est pas nécessaire de spécifier ses dimensions: le navigateur l’affichera automatiquement dans sa taille réelle.

⚠️ Il est important de faire attention à la **taille en pixels** des images que l’on utilise, notamment pour éviter le chargement d’images trop lourdes.

Si l’on souhaite modifier les dimensions d’affichage d’une image, même si cela est possible en HTML grâce aux attributs `width` et `height`, il est recommandé d’utiliser CSS.

### Audio & vidéo

Les balises `<audio>` et `<video` qui permettent d’insérer des médias audio et vidéo dans une page web sont décrites en détail dans [la section dédiée](../../audiovideo/).

### `<canvas>` et `<iframe>`
La balise `<canvas>` ajoute la possibilité de créer des animations avec du code. Il peut s’agir de 2d (avec [p5.js](https://p5js.org/), ou [paper.js](http://paperjs.org/) par exemple) ou de 3d (avec [three.js](https://threejs.org/) ou [Zdog](https://zzz.dog/)). Elle agit comme un espace rectangulaire dont le contenu est manipulable en javascript exclusivement. Voir [la page dédiée à canvas](../../canvas/)

Les `<iframe>` sont un type de média particulier : ils constituent essentiellement une fenêtre vers une autre page Web. Ils sont aussi appelés *embed*.
On les rencontre notamment si l’on veut intégrer une vidéo provenant d’un service externe (Youtube, Vimeo) :
```
<iframe width="560" height="315" src="https://www.youtube.com/embed/yfskVxCn_qo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
```


<div id="structure"></div>
## Structure

Lorsque l’on écrit un contenu HTML tel que des paragraphes, des listes ou des liens, on donne du sens à un texte. Mais il est souvent nécessaire de regrouper certains de ces éléments afin de mieux structurer le contenu et sa capacité de mise en forme CSS.

Une page de blog peut être divisée en 4 parties:

- un en-tête similaire sur chaque page, contenant la navigation principale du site
- un contenu principal, qui change pour chaque page: une liste d’articles, un article unique avec des commentaires, une page à propos…
- une barre latérale qui relie aux archives mensuelles et aux catégories
- un pied de page pour des liens supplémentaires vers des pages moins importantes

Il existe certains éléments HTML structurels que l’on peut utiliser comme conteneurs pour d’autres éléments.

### En-tête : `<header>`

Le `<header>` est généralement le premier élément HTML du code. Il s’agit d’une introduction à la page Web, pouvant contenir le logo, un slogan et des liens de navigation.
```
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
```
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

```
<figure>
    <img src="cat.jpg" alt="Une photo de mon chat">
    <figcaption>Mon chat est noir.</figcaption>
</figure>
```

### Divisions

Comme pour la balise *inline* `<span>`, on a souvent besoin de grouper le contenu dans des blocs plus précis (généralement pour lui associer une mise en forme CSS). Dans ce cas, il est possible d’utiliser la balise `<div>`, qui ne porte aucun sens. Il faut veiller à l’utiliser le moins possible, pour garder le code HTML le plus *sémantique* possible.

<div id="forms"></div>
## Formulaires

Lorsque l’on navigue sur le Web, l’interaction d’un utilisateur consiste principalement à cliquer sur des liens pour naviguer de page en page. Mais il est également possible de lui proposer de saisir des informations ou d’interagir avec la page grace à des éléments de formulaires. Par exemple :

- inscription et connexion à un site Web
- saisie d’informations personnelles (nom, adresse, carte de crédit…)
- filtrer un contenu (en utilisant des listes déroulantes, des cases à cocher…)
- effectuer une recherche
- uploader des fichiers

Pour répondre à ces besoins, HTML fournit des contrôles de formulaire interactifs:

- saisie de texte (pour une ou plusieurs lignes)
- boutons radio
- cases à cocher
- listes déroulantes
- widgets d’upload
- boutons de soumission

Ces contrôles utilisent différentes balises HTML, mais la plupart d’entre eux utilisent la balise `<input>`. Comme il s’agit d’un élément à fermeture automatique, le type d’entrée est défini par son attribut type:
```
<!-- Entrée de texte -->
<input type="text">
<!-- Case à cocher -->
<input type="checkbox">
<!-- Bouton radio -->
<input type="radio">
```


### L’élément de formulaire

`<form>` est un élément de niveau bloc qui définit une partie interactive d’une page Web. En conséquence, tous les contrôles de formulaire (tels que `<input>`, `<textarea>` ou `<button>`) devraient apparaître dans un élément `<form>`.

Deux attributs HTML sont requis:

- L’`action`, qui contient une adresse qui définit où les informations du formulaire seront envoyées
- La `method`, qui peut être GET ou POST définit comment les informations du formulaire seront envoyées.

Généralement, les informations de formulaire sont envoyées à un serveur. La manière dont ces données seront ensuite traitées dépasse le cadre de ce tutoriel.

Un formulaire est un ensemble d’éléments de saisie qui effectuent une seule opération. Pour un formulaire de connexion, on pet avoir trois éléments:

- une entrée email `<input type="email">`
- une entrée de mot de passe `<input type="password">`
- un bouton d’envoi `<input type="submit">`

Ces trois éléments HTML sont inclus dans un seul `<form action="login" method="POST">`.

### Les entrées de texte : `<input>` et `<textarea>`

Presque tous les formulaires requièrent une saisie textuelle de la part des utilisateurs pour leur permettre de saisir leur nom, leur adresse électronique, leur mot de passe, leur adresse…  Les contrôles de formulaire texte se déclinent en différentes variantes:

<style>
input, textarea, select { width: 10em; padding:.15em; .5em; font-family:inherit; font-size:inherit }
label { display:block }
input[type=radio], input[type=checkbox]{ width:auto}
</style>

| Type | Rendu  | Spécificité |
| --- | --- | --- |
| text | <input type="text"> | permet tout type de caractères |
| email | <input type="email"> | peut afficher un avertissement si un email invalide est entré |
| password | <input type="password"> | affiche les caratères sous forme de points |
| number | <input type="number"> | permet d’utiliser les touches du clavier (haut / bas) |
| tel | <input type="tel"> | peut déclencher un remplissage automatique. |
| search | <input type="search"> | affiche une icône spécifique |
| range | <input type="range"> | affiche un *slider* |
| color | <input type="color"> | affiche un sélecteur de couleur |
| textarea | <textarea></textarea> | peut être redimensionné |

Bien que ces entrées soient très similaires et permettent aux utilisateurs de saisir tout type de texte (même une entrée erronée), leur type fournit une sémantique spécifique à l’entrée, en définissant le type d’information qu’il est supposé contenir.

Les navigateurs peuvent ensuite modifier légèrement l’interface d’un contrôle pour augmenter son interactivité ou indiquer le type de contenu attendu.

[Voir l’exemple de plus de champs de formulaire](forms/)

### Placeholders

Les entrées de texte peuvent afficher un texte de substitution, qui disparaîtra dès que du texte aura été saisi.

<input type = "text" placeholder = "Entrez votre nom">


### Les `<label>`

Étant donné que les éléments de formulaire ne sont pas très descriptifs, ils sont généralement précédés d’une étiquette, un `<label>`.
```
<label for="your-email"> Email </label>
<input type="email" id="your-email">
```

Bien que les attributs `placeholder` puissent fournir des indications sur le contenu attendu, les étiquettes ont l’avantage de rester visibles à tout moment et peuvent être utilisées avec d’autres types de contrôles de formulaire, tels que les cases à cocher ou les boutons radio. En cliquant sur l’étiquette, le “focus” est placé sur le champ et le curseur de texte est placé à l’intérieur.

### Cases à cocher

Les cases à cocher sont des contrôles de formulaire n’ayant que deux états: cochée ou décochée. Ils permettent à l’utilisateur de dire "Oui" ou "Non" à quelque chose.

Comme il peut être difficile de cliquer sur une petite case à cocher, il est recommandé d’envelopper  la case à cocher et sa description d’un `<label>`.
```
<label>
  <input type="checkbox"> Je suis d’accord
</label>
```
<label>
  <input type="checkbox"> Je suis d’accord
</label>

### Boutons radio

On peut présenter à l’utilisateur une liste d’options à choisir en utilisant des boutons radio.

Pour que ce contrôle de formulaire fonctionne, le code HTML doit regrouper une liste de boutons radio. Ceci est réalisé en utilisant la même valeur pour l’attribut `name`:
```
<p>État civil </p>
<label>
    <input type="radio" name="status" value="single"> Célibataire
</label>
<label>
    <input type="radio" name="status" value="married"> Marié
</label>
<label>
    <input type="radio" name="status" value="divorced"> Divorcé
</label>
<label>
    <input type="radio" name="status" value="widowed"> Veuf
</label>
```
<p>État civil </p>
<label>
    <input type="radio" name="status" value="single"> Célibataire
</label>
<label>
    <input type="radio" name="status" value="married"> Marié
</label>
<label>
    <input type="radio" name="status" value="divorced"> Divorcé
</label>
<label>
    <input type="radio" name="status" value="widowed"> Veuf
</label>

Etant donné que tous les boutons radio utilisent la même valeur pour leur attribut name (dans ce cas, la valeur "status"), la sélection d’une option désélectionne toutes les autres. Les boutons radio sont dits mutuellement exclusifs.

### Menus déroulants : `<select>`

Si le nombre d’options à choisir est trop important, on peut utiliser les menus déroulants `<select>`. Ils fonctionnent comme des boutons radio. Seule leur mise en page est différente.
```
<select>
  <option>Janvier </option>
  <option>Février </option>
  <option>Mars </option>
  <option>Avril </option>
  <option>Mai </option>
  <option>Juin </option>
  <option>Juillet </option>
  <option>Août </option>
  <option>Septembre </option>
  <option>Octobre </option>
  <option>Novembre </option>
  <option>Décembre </option>
</select>
```

<select>
  <option>Janvier </option>
  <option>Février </option>
  <option>Mars </option>
  <option>Avril </option>
  <option>Mai </option>
  <option>Juin </option>
  <option>Juillet </option>
  <option>Août </option>
  <option>Septembre </option>
  <option>Octobre </option>
  <option>Novembre </option>
  <option>Décembre </option>
</select>


[→ Marre des liens bleus ?](../../css/){.bigbutton}


—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io), sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
