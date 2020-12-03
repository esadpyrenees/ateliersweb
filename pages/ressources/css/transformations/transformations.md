# Transformations

Les transformations CSS sont un ensemble de fonctions qui permettent de modifier les éléments selon plusieurs méthodes :

* `translate` : déplace l'élément au long de 3 axes (x,y et z)
* `rotate` : fait tourner l'élément autour d'un point 
* `scale` : redimensionne l'élément
* `skew` : déforme l'élément

Il y a 3 propriétés de transformation CSS disponibles :

* `transform` définit la fonction de transformation à utiliser (translation, rotation, échelle...)
* `transform-origin` permet de modifier le point d'origine d'une transformation (fonctionne comme les positions d'[arrière-plan](../background/))
* `transform-style` est dédié aux réglages 3d

Il est important de noter que les éléments transformés n'affectent pas le flux ni la position normale des éléments qui les entourent. 

## Translate
La fonction `translate()` permet de déplacer un élément dans le plan (sur les axes x et y).
```
@keyframes move {
  0%  { transform: translate(0, 0);}
  100%{ transform: translate(200px, 0);}
}
.bille { animation: move 2s ease-out alternate infinite;}
```
<div class="bille"></div>

L’animation avec `transform: translate()` diffère de la balle rebondissante vue dans les [animations CSS](../transitions) : elle est notamment plus performante du point de vue du navigateur.

On peut utiliser `translateX()` et `translateY()` pour ne déplacer l’élément que le long des axes x et y.

## Rotate

> Eppur si ~~muove~~ gira !

```
@keyframes tourne {
  0%  { transform: rotate(0deg);}
  100%{ transform: rotate(360deg);}
}
.troll { animation: tourne 2s linear infinite;}
```
<div class="troll"></div>

En modifiant la propriété `transform-origin`, on peut décentrer le point de rotation (par défaut au centre, à `50% 50%`) :

```
.snoopy { 
    transform-origin: 100% 100%;
    animation: tourne 2s linear infinite;
}
```
<div class="snoopy-container"><div class="snoopy"></div></div>

## Scale

La fonction `scale()` permet de redimensionner un élément. Elle fait office de “multiplicateur” et peut soit l'agrandir soit le rétrécir. Si l’on lui donne un seul paramètre, l'élément est redimensionné uniformément, si on lui en passe deux, la première valeur redimensionne l'élément horizontalement, la seconde verticalement.

<div class="marios">
<div><img src="mario.png"><span>scale(1)</span></div>
<div><img src="mario.png"><span>scale(2)</span></div>
<div><img src="mario.png"><span>scale(.5)</span></div>
<div><img src="mario.png"><span>scale(0)</span></div>
<div><img src="mario.png"><span>scale(-1)</span></div>
<div><img src="mario.png"><span>scale(2, 1)</span></div>
</div>

## Skew

La plus marrante et imprévisible des transformations, `skew()` permet de déformer un élément selon l’axe x ou l’axe y. De manière similaire à `translate()` et `scale()`, on peut définir un seul axe ou les deux, de manière simultanée avec `skew()` ou indépendante avec `skewX()` et `skewY()`).

<div class="aie">Aïe</div>
```
.aie { transform: skewX(30deg); }
```
<div class="ouille">Ouille</div>
```
.ouille { transform: skewY(30deg); }
```

Voir [Le Droit à la Paresse (dé)composé en Reglo](../../../exemples/random-transform/).

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
