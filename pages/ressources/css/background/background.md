# Arrière plan

L’arrière-plan d’un élément HTML correspond à ce qui apparaît derrière le texte. Bien que CSS permette d’appliquer un arrière-plan sur n’importe quel type d’élément HTML, il est surtout utilisé pour les éléments de niveau bloc.

## Couleur de fond

```
body { background: #f2eee9; }
```

Valeur par défaut: `transparent`.

L’élément entier sera rempli avec une couleur de fond unie. Attention à toujours choisir une couleur de texte appropriée pour que le contenu reste lisible.

## Image de fond

CSS permet d’appliquer des images comme arrière-plans aux éléments.

L’application d’une image d’arrière-plan nécessite uniquement de spécifier son URL:
```
body { background-image: url(images/diagonal-pattern.png); }
```
Le comportement de l’image (comment elle se répète, où elle est placée, comment elle est redimensionnée) est définie par d’autres propriétés d’arrière-plan ; `background-image` ne définit que l’image à utiliser.

### `<img>` *vs* `background-image`

L’élément HTML `<img>` concerne les images faisant partie du contenu, tandis que les images d’arrière-plan CSS sont purement décoratives.

Le logo d’une entreprise, la vignette d’une galerie, l’image d’un produit… Tous ces éléments sont considérés comme du contenu et doivent utiliser l’élément HTML `<img>`. Si l’image est essentielle à la page, utiliser l’élément `<img>`.

Un motif ou une image décorative, une icône représentant un panier… peuvent être considérés comme optionels, car ils soutiennent le contenu mais n’en font pas partie. S’ils devaient disparaître, la page Web aurait toujours du sens.


## Dégradés

CSS permet également de définir des dégradés de couleurs en tant qu’images d’arrière-plan, sous 2 formes différentes:

* `linear-gradient` ; pour les dégradés dans une seule direction, de forme rectangulaire
* `radial-gradient` ; pour des dégradés émergeant d’un point dans toutes les directions, de forme circulaire

```
.linear { background-image: linear-gradient(white, grey); }
.radial { background-image: radial-gradient(white, grey); }
```

<style>
.backgroundboxes { display:flex;}
.backgroundbox { display:inline-block; height:100px; width:100px; margin:0 1em 0 0; display:flex; justify-content:center; align-items:center}
.linear { background-image: linear-gradient(white, grey); }
.radial { background-image: radial-gradient(white, grey); }
.cover, .contain { background:#ddd url(sunset-r.jpg) no-repeat center; color:white; }
.cover { background-size:cover; }
.contain { background-size:contain; }
</style>

<div class="backgroundboxes">
    <div class="backgroundbox linear">linear</div>
    <div class="backgroundbox radial">circular</div>
</div>

## Position d’arrière-plan

On peut spécifier la position d’origine de l’arrière-plan en choisissant une valeur horizontale et une valeur verticale :

* valeurs en pixels `px`
* en pourcentages, `%`, par rapport aux dimensions de l’élément HTML
* avec des mots clés : `left`, `center`, `bottom`, `top`.

```
body { background-position: bottom right; }
/* Ci-dessous, l’image d’arrière-plan affichera son bord gauche à gauche du body, et son bord haut à -100px */
body { background-position: 0px -100px; }

```

## Répétition de l’arrière-plan

Par défaut, une image d’arrière-plan se répète indéfiniment. On peut choisir de ne la répéter qu’horizontalement, verticalement ou pas du tout.
```
body { background-repeat: repeat-x; } /* uniquement horizontalement */
body { background-repeat: repeat-y; } /* uniquement verticalement */
body { background-repeat: no-repeat; } /* L’image d’arrière-plan n’apparaîtra qu’une fois */
```

## Taille de l’arrière-plan

La taille de l’arrière plan peut être définie grâce à la propriété `background-size`. Elle peut être exprimée en pourcentage `%`, en pixels `px`, ou grace aux mots-clés `cover` (demande à l’image de **couvrir** la dimension de l’élément) et `contain` (demande à l’image d’être **contenue**, entièrement visible à l’intérieur de l’élément).

<div class="backgroundboxes">
    <div class="backgroundbox cover">cover</div>
    <div class="backgroundbox contain">contain</div>
</div>



[→ les boîtes](../box/){.bigbutton}

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
