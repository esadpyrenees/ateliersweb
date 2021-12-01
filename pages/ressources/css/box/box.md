# Les boîtes

Par défaut, chaque élément HTML est rendu dans le navigateur sous la forme d’un rectangle. Les dimensions de ce rectangle sont dynamiques : elles varient en fonction du contenu de cet élément.

Une page Web est un document *fluide* : si on redimensionne la fenêtre du navigateur, la plupart des éléments s’adapteront automatiquement à l’espace disponible. C’est le comportement par défaut d’une page Web. Mais parce que le design d’une page Web nécessite souvent de donner des dimensions spécifiques aux éléments, CSS nous permet de modifier, voire d’annuler ce comportement fluide.

Un élément de niveau bloc, comme un paragraphe, occupera horizontalement tout l’espace possible, qui correspond par défaut à la largeur de votre navigateur. Verticalement, le paragraphe adaptera sa hauteur à la longueur de son contenu.



## Marges externes : `margin`

Les marges sont le principal moyen d’éloigner des éléments les uns des autres. La quantité d’espace peut être définie en utilisant n’importe laquelle des unités de taille.

```
blockquote { margin: 1em; }
```

Les marges peuvent être définies individuellement pour l’un des 4 côtés.

```
blockquote { margin-bottom: 1em; }
```

Ou en utilisant les notations abrégées (dans le sens des aiguilles d’une montre):
```
blockquote {
    margin: 1em; /* 1em de chaque côté */
    margin: 1em 2em 3em 4em; /* 1em en haut, 2 à droite, 3 en bas, 4 à gauche */
    margin: 1em 0; /* 1em en haut et en bas, O à droite et à gauche */
    margin: 1em 0 2em; /* 1em en haut, 0 à droite et à gauche, 2em en bas */
}
```

Il est possible de déterminer une valeur `auto` pour les marges droites et gauche, qui aura pour effet de centrer l’élément dans son conteneur. N. B. : Pour le centrage *vertical* d’un élément, voir [flexbox](../../flexbox/).

```
blockquote { margin: 1em auto; }
```

## Marges internes : `padding`

Le `padding` est l’espace **entre** la bordure d’un élément et son contenu, sa “marge interne”.

```
blockquote { padding: 1em; }
```

Le `padding` peut être défini individuellement pour l’un des 4 côtés, ou en utilisant les mêmes notations abrégées que pour `margin`:

```
blockquote { padding-bottom: 1em; }
```

Comme le `padding` se situe entre la bordure et le contenu, il est plus facile de visualiser l’espace intérieur avec une bordure appliquée (voir plus loin pour les bordures).

```
blockquote{ background: #ddd; border: 1px solid black;}
```
<style>
blockquote { background: #ddd; border: 1px solid black;}
blockquote.padded { padding:1em 2em}
blockquote p { margin:0}
</style>

> 90 percent of design is typography. And the other 90 percent is whitespace.
    — Jeffrey Zeldman

Ajouter un `padding` créera un espace entre le contenu textuel et les bordures:
```
blockquote{ background: #ddd; border: 1px solid black; padding: 1em 2em}
```
<blockquote class="padded">
<p>90 percent of design is typography. And the other 90 percent is whitespace. <br>
    — Jeffrey Zeldman
</p></blockquote>


## Bordures

Parce qu’un élément HTML est rendu sous forme de rectangle, il peut avoir jusqu’à 4 bordures: haut, bas, gauche et droite. On peut définir une bordure de tous les côtés à la fois ou de chaque côté individuellement.

### Types de bordures et emplacement

Une bordure CSS a trois propriétés:

* `border-color` définie en utilisant des unités de couleur
* `border-style` peut être `solid`, `dashed`, `dotted`, voire `double` ou même `groove`…
* `border-width` définie en utilisant des unités de taille

Il a aussi 4 côtés possibles:

* `border-top`
* `border-bottom`
* `border-left`
* `border-right`

```
blockquote { border-color: #ddd; border-style: solid; border-width: 1px; }
```

Une version abrégée de la notation permet de définir les trois propriétés à la fois :

```
blockquote{ border: 1px solid #ddd; }
```

## Box model {#box-model}

La notion de « modèle de boîte » en CSS correspond à la manière dont le navigateur interprète la largeur et la hauteur d’un élément. Le modèle standard produit une largeur apparente qui correspond à `width` + `padding` + `border`. De même pour la hauteur : `height` + `padding` + `border`.

Ce modèle standard, délicat à manier, peut être modifié en CSS. On évite ainsi de devoir faire des additions, et on peut utiliser des boîtes de largeur 100% sans craindre qu’elles ne dépassent du navigateur…

```
/* Même styles (largeur, border, padding) pour chaque div */
div { width:300px; border:20px solid black; background: #ddd; padding: 10px; }
/* Valeurs différentes pour la propriété box-sizing */
#content-box div { box-sizing: content-box; }
#border-box div { box-sizing: border-box; }
```
<style>
#content-box div { box-sizing: content-box; }
#border-box div { box-sizing: border-box; }
</style>

<article id="content-box">
<div style="width:300px; border:20px solid black; background: #ddd; padding: 10px;  margin:0 0 10px 0">
<div id="content-box">
<p>#content-box : 300px de largeur + 20px de border + 10px de padding = 360px</p>
</div>
</div>
</article>

<article id="border-box">
<div style="width:300px; border:20px solid black; background: #ddd; padding: 10px">
<div id="content-box">
<p>#border-box: 300px de largeur = 300px !  (padding et border compris)</p>
</div>
</div>
</article>

Pour homogénéiser le rendu sur l’ensemble des boîtes, on peut (on doit !) utiliser le sélecteur universel (`*`), qui affecte la propriété à l’ensemble des éléments HTML :

```
*, *::after, *::before { box-sizing: border-box; }

```

## Display {#display}

Chaque élément HTML possède par défaut une propriété `display`, qui peut être modifiée en CSS pour les besoins de la mise en page. 

### display:block

L’élément `<div>` est l’élément générique (non-sémantique) pour div-iser les pages en zones et permettre la mise en page de ces zones. Par défaut, l’élément `<div>` a la valeur `display:block`, tout comme les éléments `<p>`, `<blockquote>` (pour les citations), `<form>`, `<header>`, `<footer>`, `<nav>`, `<article>` ou `<section>`.

Tant qu’on ne leur a pas affecté de largeur, les éléments dont la propriété `display` est `block` prennent toute la largeur disponible, et s’empilent verticalement dans la page.


### display:inline

Les éléments inline n’interompent pas le flux du texte ; ils s’insèrent dans celui-ci. Les principaux éléments dont le `display` par défaut est `inline` sont `<a>`, `<span>`, `<strong>`, `<em>`. À l’usage de `<b>` ou `<i>` pour produire du gras ou de l’italique, il faut généralement préférer `<strong>` et `<em>`. Quand à l’élément `<u>`, permettant de souligner, il est généralement à proscrire : le soulignement étant la norme la plus fréquemment adoptée pour les liens.

### display:inline-block

`inline-block` est la propriété par défaut de l’élément `<img>`.

<div class="el">
<img src="pages--mise-en-page--img.gif" alt=""> L’élément <code>&lt;img&gt;</code> est par défaut aligné sur la ligne de base du texte qui l’entoure, à moins que sa propriété <code>vertical-align</code> ne soit modifiée, ou que ne lui soit affectée la propriété <code>display:block</code>.
</div>

### display:none

La valeur `none` permet de masquer totalement un élément, en rendant inopérantes ses valeurs de `height`, `width`, `margin` ou `padding` et son impact sur les éléments adjacents. Différement, la propriété `visibility:hidden` masque l’élément en préservant la place prise par l’élément dans la mise en page.

### display:grid ou flex

Les valeurs de `display` grid et flex sont utilisées pour déterminer un contexte de mise en page des éléments déscendants. Leurs fonctionnalités sont détaillées dans les pages dédiées : [CSS Grid](../grid/) et [Flexbox](../flexbox).

## Dimensions

Les dimensions (la hauteur et la largeur) d’un élément sont dynamiques car elles fluctuent pour s’adapter au contenu. Il est enéanmoins possible de définir des dimensions spécifiques.
```
blockquote { width: 20em; }
h2 { width:50%; }
```

La citation `<blockquote>` ne prendra pas toute la largeur disponible, mais restera fixée à `20em` de large. Le `<h1>` n’occupera que la moitié de la largeur disponible.

* si la fenêtre du navigateur est inférieure à 600px, une barre de défilement horizontale s’affichera.
* si la fenêtre du navigateur est plus large que 600px, la citation restera à 600px de large et n’occupera pas tout l’espace horizontal

Comme nous n’avons défini que la largeur, la citation reste fluide en hauteur: la hauteur devient la dimension variable adaptée au contenu.

### Réglage de la hauteur et de la largeur

En définissant les dimensions d’un élément, celles-ci restent fixes quelle que soit la longueur de son contenu.

On empêche alors l’élément de modifier dynamiquement ses dimensions. Si le contenu est plus long que ce que l’élément accepte, un débordement (`overflow`) se produira.

Par défaut, le contenu sera quand même affiché :

<style>
.blockquotes {

}
.blockquotes:before, .blockquotes:after{
    content:"";
    display:table;
}
.blockquotes blockquote { background: #ddd; height: 100px; width: 200px; }
.blockquotes blockquote.hidden { overflow:hidden }
.blockquotes blockquote.scroll { overflow:scroll }
.blockquotes blockquote.auto { overflow:auto }
</style>
```
blockquote { background: #ddd; height: 100px; width: 200px; }
```
```
<blockquote>Quand arriva l’antiquité à flots tumultueux (…) elle fit irruption et nous inonda. Jusqu’à Malherbe, ce ne fut que débordement et ravage. </blockquote>
```
<div class="blockquotes">
<blockquote>Quand arriva l’antiquité à flots tumultueux (…) elle fit irruption et nous inonda. Jusqu’à Malherbe, ce ne fut que débordement et ravage. </blockquote>
</div>
<br>

Autrement dit…

![CSS is awesome](cssisawesome.png)

### Débordement en CSS

La propriété CSS `overflow` permet de gérer le cas où le contenu est plus long que son conteneur.

La valeur par défaut est `visible`: le contenu sera quand même affiché car “Pourquoi voudriez-vous empêcher le contenu d’être lu par l’utilisateur s’il est présent dans le code ?”.

En appliquant `overflow: hidden`, on empêche la visibilité du débordement.

<div class="blockquotes">
<blockquote class="hidden">Quand arriva l’antiquité à flots tumultueux (…) elle fit irruption et nous inonda. Jusqu’à Malherbe, ce ne fut que débordement et ravage. </blockquote>
</div>

Si l’on souhaite que le contenu déborde tout en le rendant accessible, on peut décider d’afficher les barres de défilement en appliquant `overflow: scroll`.

<div class="blockquotes">
<blockquote class="scroll">Quand arriva l’antiquité à flots tumultueux (…) elle fit irruption et nous inonda. Jusqu’à Malherbe, ce ne fut que débordement et ravage. </blockquote>
</div>

Une meilleure option consiste à utiliser `overflow: auto` car les barres de défilement n’apparaissent que si le contenu déborde, mais restent masquées s’il ne le fait pas.

### Dimensions maximales

Afin de mieux prendre en compte la nécessité d’adaptation à chaque taille d’écran ([Responsive Webdesign](../../rwd/)), on peut utiliser les propriétés `max-width` et `max-height` pour spécifier les dimensions d’un élément. Ainsi, une boîte avec `max-width: 600px` s’ajustera à la taille d’un écran mobile et ne produira pas de barre de défilement horizontal.

[→ les positions](../positions/){.bigbutton}
