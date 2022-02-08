# Positions

Le mot-clé `position` en CSS est un faux-ami. Sa valeur permet de définir le comportement de mise en page d’un élément au sein de la page et sa relation aux éléments qui l’entourent (éléments parents, enfants et frères (_siblings_).

### Static

Par défaut (tant qu’on ne l’a pas modifiée), la `position` d’un élément est `static`.

```css
#static {
    position:static;
}
```

On dit d’un élément auquel est affecté une `position` autre que `static` qu’il est _positionné_.

### Fixed

La position `fixed` permet de définir la position d’un élément par rapprort au _viewport_, l’espace visible de la fenêtre du navigateur. Il permet d’utiliser les propriétés `top`, `right`, `bottom` ou `left`. Voici le code qui correspond au carré noir en bas de page :

```css
#fixed {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:black;
}
```

Bien que particulièrement utile, cette propriété peut être gênante sur mobiles (si l’élément `fixed` est trop grand).



### Sticky
Avec la position `sticky` l'élément sera naturellement soumis au scroll du document, mais une fois qu'il a atteint un certain point par rapport à la fenêtre, il se met à « coller » et se comporte comme `position: fixed`. Exemple avec le carré vert à droite. 



```css
.sticky {
    position: sticky;
    top: 0;
}
```
<div class="sticky"></div>

### Relative

La valeur `relative` est un outil très puissant pour la mise en page. Elle permet plusieurs comportements :  

Sans autre règle, la position relative semble être strictement identique au positionnement `static`.
La position de l’élément peut être modifiée par les propriétés `top`, `right`, `bottom` ou `left` **relativement** à sa position d’origine.

<div style="padding-bottom:25px">

<div class="el no-padding">

<article class="el " style="position:relative; left:-20px; top:25px; z-index:3">

    div {
        position:relative;
        left:-20px;
        top:25px;
    }

</article>

</div>

</div>

La position `relative` est particulièrement utile pour créer un nouveau _référenciel de positionnement_ pour les éléments positionnés en `absolute` :

### Absolute

La position `absolute` permet de positionner un élément en supprimant l’impact qu’il a sur ses autres éléments parents et frères. L’élément positionné par le code CSS suivant se trouve tout en haut de la page.

```css
#absolute {
    position:absolute;
    top: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:black;
}
```
Cette position s’établit en effet _par rapport au document_ ou au premier élément parent dont la position est relative.

<div class="el box" style="position:relative">
    <div style="position:absolute; top: 20px; right: 20px; width: 20px; height:20px; background:FireBrick;"></div>
    <pre><code>
.box {
    position:relative
}
#absolute-2 {
    position:absolute;
    top: 20px;
    right: 20px;
    width: 20px;
    height:20px;
    background:FireBrick;
}
    </code></pre>
</div>

[→ la mise en page](../layout/){.bigbutton}


—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
