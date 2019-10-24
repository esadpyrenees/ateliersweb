# WYSI·NOT·WYG

WYSIWYG est le paradigme d’interface utilisateur dans lequel on voit directement à l’écran à quoi ressemblera le résultat final. C’est le principe d’utilisation “intuitive” – né dans à la fin des années 70 – de logiciels tels que Word, Indesign, Photoshop.

Le Web étant un média *fluide*, ce paradigme n’y est pas adapté. Il n’est pas possible d’avoir une représentation fidèle du contenu que l’on *designe*, dans la mesure où ses modalités d’affichage sont multiples par essence.

## ⌘S ⌘⇥ ⌘R

Deux outils sont donc nécessaires pour coder une page web : un éditeur de texte (Atom, VS Code, Brackets…) pour **modifier** le contenu et un navigateur (Firefox, Chrome…) pour **visualiser** le résultat.

L’aller-retour étant permanent entre les deux outils, il est **indispensable** de s’habituer à utiliser les raccourcis clavier. Modifier le fichier, le sauvegarder, basculer dans le navigateur et rafraichir l’affichage de la page. Autrement dit :

`cmd+s`, `cmd+tab`, `cmd+r` sur MacOS, ou `ctrl+s`, `alt+tab`, `F5` pour Windows/Linux

Pour créer un document HTML, il suffit de créer un fichier texte (cmd/ctrl + N) et de l’enregistrer sous le nom `cequevousvoulez.html`.


## Tags, attributs et élements

Le code HTML est purement sémantique ; il s’agit de donner du **sens** à un texte.
Pour ce faire, HTML “balise” des éléments du contenu en les encadrant :
```
(ici commence un paragraphe)
    <Le contenu textuel du paragraphe>
(ici finit le paragraphe)
```
L’objectif du balisage HTML est de créer des limites aux éléments (ici commence / ici finit) en leur apportant du sens (ceci est un titre / une liste / une image / un paragraphe…).

## Syntaxe

Voici un paragraphe encodé en HTML :

```
<p>Jack, vous dactylographiez bien mieux que votre ami Wolf</p>
```
Dont le résultat interprété par le navigateur est  :

Jack, vous dactylographiez bien mieux que votre ami Wolf

## Attributs

Les attributs sont des informations complémentaires liées à un élément HTML. Ils sont écrits à l’intérieur de la balise d’ouverture. Ils ne sont pas affichés par le navigateur.

Par exemple, l’attribut `href` est utilisé pour définir la cible d’un lien (balise `<a>`) :

```
<a href="http://http://ateliers.esad-pyrenees.fr/">Ce site est génial</a>
```
Qui se traduit en : « [Ce site est génial](http://http://ateliers.esad-pyrenees.fr/) »

Les attributs sont normalisés (on ne peut pas écrire ce que l’on veut). Les plus courants sont `class`, `id`, `href`, `src` ; ils seront abordés progressivement dans la suite de ce document et dans la section [CSS](../css/).

Ils sont parfois indispensables à certaines balises. Par exemple pour insérer une image :
```
<img src="img/logo.png" alt="Logo">
```
On notera ici que la balise `<img>` est une balise “auto-fermante” (de même que les balises `<br>` ou `<input>`).

## Commentaires

On peut écrire dans le code source d’une page Web des portions de texte qui ne seront pas interprétés par le navigateur : les commentaires. Ils permettent de documenter le code afin de pouvoir le relire plus tard plus aisément, ou de supprimer temporairement un élément.
```
<!-- Cette phrase sera ignorée par le navigateur -->
<p>Hello World!</p>
```
En HTML, un commentaire est délimité par les caractères `<!--` et `-->`.

## *Block* et *Inline*

HTML possède deux grands types d’éléments, les éléments *block* et *inline*.

Éléments “bloc” :
- paragraphes `<p>`
- listes : non ordonnées (à puces) `<ul>` ou ordonnées (avec des nombres) `<ol>`
- titres : du 1er niveau `<h1>` au 6e niveau `<h6>`
- articles : `<article>`
- sections : `<section>`
- citations : `<blockquote>`
- division : `<div>`

Éléments “en ligne” :
- liens : `<a>`
- mots appuyés : `<em>` ou en italique `<i>`
- mots importants : `<strong>`
- petites citations : `<q>`
- abréviations : `<abbr>`
- division en ligne : `<span>`
- image : `<img>`
- input : `<input>`

Les **éléments bloc** sont destinés à structurer les principales parties d’une page en divisant son contenu en blocs significatif du point de vue sémantique.

Les **éléments en ligne** sont destinés à différencier une partie d’un texte, à lui donner une fonction ou une signification particulière. Ils contiennent généralement un seul ou quelques mots.

Il existe également des éléments qui ne sont ni *block*, ni *inline* :
- les éléments de liste : `<li>`
- les tableaux, leurs colonnes et cellules : `<table>`, `<tr>` et `<td>`


## Hiérarchie

Un document HTML est comme un arbre généalogique, avec ses parents, ses frères et soeurs, ses enfants, ses ancêtres et ses descendants.

Cela vient de la capacité à imbriquer des éléments HTML les uns dans les autres.
```
<p>
    Le vieux juge <strong>Alex Ferguson</strong> dit : 
    <q>« Buvez du whisky, fumez du chanvre, goûtez l’élixir de la jeune époque »<q>
<p>
```
Qui se trouve interprêté par le navigateur ainsi :

Le vieux juge <strong>Alex Ferguson</strong> dit : <q>« Buvez du whisky, fumez du chanvre, goûtez l’élixir de la jeune époque »<q>

L’élément `<strong>` indique l’importance du mot encadré, et se traduit (par défaut) par l’application de gras. L’élément `<q>` indique une citation.

Dans ce cas:

- `<p>` est l’élément **parent** de `<strong>` et `<q>`
- `<strong>` et `<q>` sont des éléments **enfants** de `<p>`
- `<strong>` et `<q>` sont des éléments **frères**

On imbrique les éléments HTML pour structurer le contenu.
⚠️ Attention néanmoins à l’ordre des imbrications : il convient de penser les éléments comme des boîtes ou des poupées russes ; on ne peut pas refermer la plus grande avant d’avoir refermé une plus petite à l’intérieur.

```
<article>
  <h1>Pangrammes célèbres</h1>
  <p>
    <em>Portez ce vieux whisky au juge blond qui fume</em> est probablement le plus célèbre <strong>pangramme</strong> français, n’utilisant qu’une seule fois chaque consonne et constituant en outre un alexandrin. En anglais, il s’agit de <em>The quick brown fox jumps over the lazy dog</em>.
  </p>
  <p>
    <em>Dès Noël où un zéphyr haï me vêt de glaçons würmiens je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! </em>, créé par <strong>Gilles Esposito-Farèse</strong>, contient les 42 caractères de la langue française.
  </p>
</article>
```

<article>
  <h1>Pangrammes célèbres</h1>
  <p>
    <em>Portez ce vieux whisky au juge blond qui fume</em> est probablement le plus célèbre <strong>pangramme</strong> français, n’utilisant qu’une seule fois chaque consonne et constituant en outre un alexandrin. En anglais, il s’agit de <em>The quick brown fox jumps over the lazy dog</em>.
  </p>
  <p>
    <em>Dès Noël où un zéphyr haï me vêt de glaçons würmiens je dîne d’exquis rôtis de bœuf au kir à l’aÿ d’âge mûr & cætera ! </em>, créé par <strong>Gilles Esposito-Farèse</strong>, contient les 42 caractères de la langue française.
  </p>
</article>

Dans cette configuration:

- `<article>` est l’**ancêtre** de tous les autres éléments
- `<article>` est le **parent** du `<h1>` et des trois `<p>`
- `<h1>` et les trois `<p>` sont **frères**
- chaque `<p>` est le **parent** du `<strong>` et des `<em>` qu’ils contiennent
- chaque `<h1>`, `<p>`, `<strong>` et `<em>` sont tous des **descendants** de `<article>`

L’analogie de l’arbre généalogique s’applique toujours lors de la traversée de plusieurs couches d’imbrication HTML:

- un **descendant** de l’élément X est un élément *contenu* dans X
- un **enfant** est juste un descendant *direct*
- un **ancêtre** de l’élément Y est un élément qui *contient* Y
- le **parent** n’est que le premier ancêtre *direct*
- un **frère** de l’élément X est un élément qui a le *même* parent


## Sémantique

Les balises HTML ont pour but de donner son sens, sa signification, à un document. Elles ne concernent pas l’apparence de la page Web (voir [CSS](../css/)).

Selon le contenu, on choisit l’élément HTML approprié qui correspond à la signification du texte.

### Éléments de structure : organiser la page

Les éléments de structure permettent d’organiser les principales parties d’une page. Ils contiennent généralement d’autres éléments HTML.

Voici ce qu’une page Web typique pourrait inclure:

- `<header>` premier élément de la page, pouvant inclure le logo et le slogan.
- `<nav>` sous forme de liste de liens menant aux différentes pages du site.
- `<h1>` titre de la page.
- `<article>` contenu principal de la page.
- `<footer>` dernier élément de la page.

### Eléments de texte : définir le contenu

À l’intérieur de ces éléments de structure, on trouve généralement des éléments de texte destinés à définir la signification du contenu.

On utilisera principalement:

- `<p>` pour les paragraphes
- `<ul>` pour les listes (non ordonnées)
- `<ol>` pour les listes (ordonnées)
- `<li>` pour les éléments de liste individuels
- `<blockquote>` pour les citations

### Eléments en ligne : différencier le texte

Les éléments de texte peuvent être longs mais posséder un contenu varié, les éléments en ligne permettent de distinguer des parties du texte.

De nombreux éléments en ligne sont disponibles, mais on rencontre généralement les éléments suivants:

- `<strong>` pour les mots importants
- `<em>` pour les mots accentués (qu’on prononcerait avec emphase, insistance)
- `<a>` pour les liens
- `<small>` pour les mots moins importants
- `<abbr>` pour les abréviations telles que W3C, PDF ou ÉSAD

En lisant ce code HTML correctement balisé, on peut facilement comprendre la signification de chaque élément HTML.

```
<article>
    <header>
        <h1>Le titre principal de la page</h1>
        <h2>Un sous-titre</h2>
    </header>
    <p>
        Du texte avec des mots <em>appuyés</em> et des mots <strong>important</strong>.
    </p>
    <p>
        Un autre paragraphe.
    </p>
    <ul>
        <li>Un</li>
        <li>Deux</li>
        <li>Trois</li>
    </ul>
    <blockquote>
        Jacques a dit
    </blockquote>
</article>
<aside>
    <h3>Articles associés</h3>
    <ul>
        <li><a href="#">Une</a></li>
        <li><a href="#">Deux</a></li>
        <li><a href="#">Trois</a></li>
    </ul>
</aside>
```

### Éléments génériques

Lorsque apparemment aucun élément sémantique ne semble convenir à votre contenu mais que l’on souhaite  insérer un élément HTML (à des fins de regroupement ou d’application de style), on peut choisir l’un des deux éléments génériques:

- `<div>` pour les éléments de niveau bloc
- `<span>` pour les éléments en ligne

Bien que ces éléments HTML ne signifient rien, ils sont particulièrement utiles pour la liaison aux feuilles de style CSS.

### Ne pas aller trop loin

Il y a environ 100 éléments HTML sémantiques parmi lesquels choisir. La liste suivante récapitule les principaux éléments :

| Structure | Text | Inline |
| --- | --- | --- |
| header | p | a |
| h1 | ul | strong |
| h2 | ol | em |
| h3 | li | q |
| nav | blockquote 	 | abbr |
| footer | | small |
| article | | *span* |
| section | | |
| *div* | | |


## Espaces et formatage du code

En HTML, l’espacement n’importe (presque) pas : les espaces, les tabulations ou les sauts de ligne à l’intérieur du code source ne sont pas affichés par le navigateur.
De multiples espaces, tabulation ou sauts de ligne ne sont rendus que par une seule espace.

```
<blockquote>
    Tout su
        tout blanc
        corps nu
        blanc

    un mètre
        jambes collées comme cousues.

    Lumières chaleur
        sol blanc
        un mère carré
            jamais vu.
</blockquote>
```
Résultat interprété par le navigateur :
<blockquote>
    Tout su
        tout blanc
        corps nu
        blanc

    un mètre
        jambes collées comme cousues.

    Lumières chaleur
        sol blanc
        un mère carré
            jamais vu.
</blockquote>

Pour forcer un saut de ligne on utilise la balise `<br>`
```
<p>Bien fait, <br> mal fait, <br> pas fait <br>— Robert Filiou, Principe d’équivalence</p>
```
Ce qui donne :

<p>Bien fait, <br> mal fait, <br> pas fait <br>— Robert Filiou, Principe d’équivalence</p>

Pour forcer une espace mot, on utilise l’espace insécable, qui peut s’encoder en HTML avec `$nbsp;` ou être saisie directement dans le texte (sur MacOS : `alt + espace`).
```
<p>S&nbsp;p&nbsp;&nbsp;a&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;&nbsp;&nbsp;e</p>
```
Ce qui donne :

<p>S&nbsp;p&nbsp;&nbsp;a&nbsp;&nbsp;&nbsp;c&nbsp;&nbsp;&nbsp;&nbsp;e</p>

#### Indentation
Plus un document HTML est complexe et contient de balises imbriquées, plus il est compliqué de se repérer à l’intérieur s’il n’est pas correctement “indenté”.

Il est préférable (**indispensable**) d’écrire :
```
<article>
    <p>
        Ce code est écrit sur
        <strong>plusieurs</strong>
        lignes, mais sera néanmoins
        affiché sur
        <em>une</em>
        seule.
    </p>
</article>
```

Plutôt que :

```
<article><p>Ce code est écrit sur
    <strong>plusieurs</strong>
        lignes, mais sera néanmoins affiché sur <em>une
</em>
    seule.</p></article>
```

Même si les deux codes afficheront :
<article>
    <p>
        Ce code est écrit sur
        <strong>plusieurs</strong>
        lignes, mais sera néanmoins
        affiché sur
        <em>une</em>
        seule.
    </p>
</article>

Il n’existe pas de règles spécifiques concernant le formatage HTML, mais il existe des conventions implicites, notamment:

- utiliser des **tabulations** pour aider à visualiser comment les éléments HTML sont imbriqués
- placer les balises d’ouverture et de fermeture des éléments de niveau bloc sur leur propre ligne
- écrire les éléments en ligne sur une ligne (y compris les balises d’ouverture et de fermeture)


## Un document HTML valide

Jusqu’à présent n’ont été évoqués que des extraits isolés de code HTML. Mais un document HTML (= une page Web) nécessite une structure spécifique pour être valide.

Pourquoi nous soucions-nous de valider un document HTML?

- un document valide est correctement affiché par le navigateur
- un code HTML invalide peut provoquer des bogues difficiles à cibler
- un document valide est plus facile à mettre à jour ultérieurement, même par quelqu’un d’autre

### Doctype

La première information à fournir est le type de document HTML que nous écrivons: le `doctype`.

Il faut considérer le `doctype` comme la version d’une voiture au fil des années: une Ford Fiesta achetée en 1986 était une Fiesta 2. Si l’on en achète une aujourd’hui, c’est une Fiesta 7.

Auparavant, plusieurs versions de HTML coexistaient (XHTML et HTML 4.01 étaient des normes concurrentes). De nos jours, HTML 5 est la norme.

Pour indiquer au navigateur que le document HTML est écrit en HTML 5, la première ligne du document doit être :

```
<!DOCTYPE html>
```

### L’élément `<html>`

À part la ligne `doctype`, tout votre document HTML doit être placé dans un élément `<html>`:
```
<!DOCTYPE html>
<html>
   <!-- Le reste de votre code HTML est ici -->
</html>
```
Le `<html>` est l’ancêtre de tous les éléments HTML.



### `<head>`

De la même manière que les attributs portent des informations supplémentaires pour un élément HTML, l’élément <head> contient des informations supplémentaires pour l’ensemble de la page Web.

Par exemple, le titre de la page (affiché dans l’onglet) se trouve dans la balise `<head>`:
```
<head>
   <title>Mon magnifique site</title>
<head>
```
D’autres éléments HTML peuvent apparaître dans le `<head>` et uniquement dans le `<head>`:

- `<link>`
- `<meta>`
- `<style>`

### `<body>`

Bien que `<head>` ne contienne que des métadonnées qui ne doivent être affichées nulle part (à l’exception du `<title>`), l’élément `<body>` est l’endroit est saisi l’ensemble du contenu. Tout ce qui se trouve à l’intérieur du `<body>` sera affiché dans la fenêtre du navigateur.

# Un document HTML complet et valide

En combinant toutes ces exigences, nous pouvons écrire un document HTML simple et valide:

```
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon magnifique site</title>
</head>
<body>
    <p>Hello World!</p>
</body>
</html>
```

Si vous voyez cet exemple dans votre navigateur, vous verrez ceci:

- “Mon magnifique site” est écrit dans l’onglet du navigateur
- “Hello World!” est le seul texte affiché dans la fenêtre, car c’est le seul contenu du `<body>`

—

<small>Contenu librement adapté et largement emprunté à [Jeremy Thomas](https://marksheet.io), sous [license Creative Commons BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
