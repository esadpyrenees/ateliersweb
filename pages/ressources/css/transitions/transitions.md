# Transitions et animations

## Transitions

Les transitions permettent d’animer facilement des éléments de la page sans recourir à JavaScript.

#### Un exemple rapide
```
a { color: blue; }
a:hover { color: green }
```

<style>
.notrans a {
    color: orange;
}
.notrans a:hover {
    color: green
}
</style>

<p class="notrans">
    <a href="#">Survolez-moi !</a>
</p>
Le lien passe _sans transition_ d’orange à vert lorsqu’il est survolé.

La propriété `transition` permet une animation fluide (plutôt qu’un saut d’un état à un autre). C’est une propriété abrégée qui combine les propriétés suivantes (qui peuvent être utilisées individuellement):

* `transition-property` : quelle propriété (ou quelles propriétés) sera / seront en transition?
* `transition-duration` : combien de temps dure la transition.
* `transition-timing-function` : si la transition a lieu à une vitesse constante, si elle accélère ou décélère.
* `transition-delay` : combien de temps attendre jusqu’à ce que la transition ait lieu.

On l’applique sur l’élément dans son état initial :

```
a {
    transition: color 500ms linear 0ms;
    color: blue;
}
a:hover {
    color: green
}
```

<style>
.trans a {
    transition: color 500ms linear 0ms;
    color: orange;
}
.trans a:hover {
    color: green
}
</style>

<p class="trans">
    <a href="#">Survolez-moi !</a>
</p>

La valeur de la propriété de transition indique ici que seule la couleur sera animée, en une demi-seconde, de manière linéaire et sans délai.

Pour qu’une transition ait lieu, seule la durée de la transition est requise, le reste étant par défaut : `transition-property: all; transition-timing-function: ease; transition-delay: 0;`.

### Easing

La propriété `transition-timing-function` indique comment le navigateur doit gérer les états intermédiaires de la transition.

La propriété décrit une courbe cubique de Bézier : `ease` produit une accélération progressive au début de la transition et une décélération progressive à la fin ; `linear` maintient une vitesse constante tout au long de l’animation ; `ease-in` produit une accélération progressive et `ease-out` une décélération progressive.

Pour plus de finesse, il est possible de saisir une fonction plus précise :
```
a {
    transition: color 500ms cubic-bezier(0.165, 0.840, 0.440, 1.000);
}
```

<table>
    <tr>  
        <td>Linear</td>
        <td>linear</td>
        <td class="demo"><div style="animation-timing-function: linear"></div></td>
    </tr>
    <tr>  
        <td>Ease In Quad</td>
        <td>cubic-bezier(0.550, 0.085, 0.680, 0.530)</td>
        <td class="demo"><div style="animation-timing-function: cubic-bezier(0.550, 0.085, 0.680, 0.530)"></div></td>
    </tr>
    <tr>  
        <td>Ease Out Cubic</td>
        <td>cubic-bezier(0.215, 0.610, 0.355, 1.000)</td>
        <td class="demo"><div style="animation-timing-function: cubic-bezier(0.215, 0.610, 0.355, 1.000)"></div></td>
    </tr>
    <tr>  
        <td>Ease In Out Expo</td>
        <td>cubic-bezier(1.000, 0.000, 0.000, 1.000)</td>
        <td class="demo"><div style="animation-timing-function: cubic-bezier(1.000, 0.000, 0.000, 1.000)"></div></td>
    </tr>
</table>


Voir [easings.net](https://easings.net/) pour un large ensemble de possibilités.

### Déclencher une transition
Les transitions peuvent être déclenchées au changement d’état d’un élément. Les différents états peuvent être définis à l'aide de pseudo-classes telles que `:hover` ou `:active` ou être définis dynamiquement avec JavaScript.

Ainsi, en ajoutant / modifiant une `class` d’un élément via JavaScript, on peut activer sa transition d’un état à l’autre. [Voir un exemple](../../../exemples/transition/).

## Animations

La règle `@keyframes` permet de définir les étapes qui composent la séquence d'une animation CSS de manière plus précise qu’avec les transitions, et sans qu’un changement d’état soit nécessaire.

Les animations peuvent être entendues comme une séquence de plusieurs règles. Contrairement aux transitions, qui ne peuvent alterner qu’entre deux états, les animations permettent de déterminer des étapes intermédiaires, peuvent être mises en boucle et offrent une plus grande maîtrise.

Un exemple : 

```
@keyframes bounce {
    0%   { bottom: 0; box-shadow: 0 0 5px rgba(0,0,0,0.5);}
    100% { bottom: 50px; box-shadow: 0 50px 50px rgba(0,0,0,0.1);}
}
.ball{ animation: bounce 0.5s cubic-bezier(0.1,0.25,0.1,1) 0s infinite alternate both;}
```
<div class="ballcontainer"><div class="ball"></div></div>

Sur l’élément que l’on souhaite animer, on peut définir :
* un nom d’animation arbitraire (ici `bounce`),
* une durée (en secondes –`s`– ou en millisecondes –`ms`–), 
* une fonction d’accélération (`linear`, `ease-out`, etc.)
* un délai (ou pas…)
* un nombre d’itération, fixe ou `infinite`,
* une direction (`normal`, `reverse`, `alternate`, `alternate-reverse`)
* et la propriété `fill-mode`, qui détermine si l’animation revient à la première frame quand elle est terminée (`none`), ou si elle s’arrête sur la dernière (`forwards`).

Un autre exemple : 
```
.shake {
    opacity: 1;
    animation: shake linear .2s infinite;
}

@keyframes shake {
    0%    { transform:  translateX(0px) }
    33%   { transform:  translateX(2px) }
    66%   { transform:  translateX(-2px) }
}
```
<div class="shake">shake!</div>

N. B. : L’animation ci-dessus utilise en outre les [transformations CSS](../transformations).
