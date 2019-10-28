# CSS

Le langage CSS sert à décrire la mise en forme d’un document HTML.



## Le futur (proche)

Les mise en page avec `float`, `inline-block` et les positions `relative`, `absolute` et `fixed` (telles que décrites dans ce document) se sont répandues dans le début des années 2000 avec l’avénement de la spécification CSS 2, qui a permis de remplacer un système de mise en page archaïque basé sur des tableaux (`<table>`).

Aujourd’hui, plusieurs nouveaux outils sont intégrés au sein des navigateurs et débattus au sein du <abbr title="CSS Working Group">CSSWG</abbr>, instance chargée de faire évoluer et définir le standard CSS.

Il s’agit principalement des modules CSS [Grid Layout](/web/pages/ressources/cssgrid/) et [Flexbox](/web/pages/ressources/flexbox/). Ces modules sont encore en évolution et leurs implémentations au sein des navigateurs est loin d’être stabilisée. Mais ils deviendront sans doute de bien meilleurs outils que `float` ou `inline-block` pour concevoir des mise en page adaptés aux écrans et aux usages à venir.

**[ le futur est déjà là… Depuis la publication de ce document, [flex](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/cssgrid/) sont devenus des standards supportés par la plupart des navigateurs récents. Les mises en page avec `float` ou `inline-block` sont désormais à éviter ]**


## Donner du style

Hors cas particuliers (styles _en ligne_), il convient de créer un ou plusieurs fichiers avec l’extension .css et de les associer au document HTML grâce à la balise `<link>` insérée dans le `<head>` de la page.

    <link rel="stylesheet" type="text/css" href="chemin/vers/le/fichier.css">

Un seul fichier CSS est généralement suffisant pour l’ensemble d’un site web. Plusieurs fichiers ne sont utiles que dans le cas où le fichier principal devient trop long ou complexe, ou dans le cas d’ajouts liés à l’intégration de plugins javascript ou à l’utilisation de librairies CSS.


## Syntaxe

Un fichier CSS se décompose en plusieurs **règles**, qui permettent de **sélectionner** un élément de la page HTML, et de lui affecter un certain nombres de **déclarations** qui vont définir sa mise en forme.

Chaque déclaration est composée d’une **propriété**, à laquelle on affecte une **valeur**

![](/web/assets/img/css-intro-syntaxe.png)



## Display

Chaque élément HTML possède par défaut une propriété `display`, qui peut être modifiée en CSS pour les besoins de la mise en page. Si le plus fréquemment, la valeur de ces propriétés est `block` ou `inline`, les valeurs `inline-block` ou `none` sont particulièrement utiles.

### display:block


L’élément `<div>` est l’élément générique (non-sémantique) pour div-iser les pages en zones et permettre la mise en page de ces zones. Par défaut, l’élément `<div>` a la valeur `display:block`, tout comme les éléments `<p>`, `<blockquote>` (pour les citations), `<form>`, `<header>`, `<footer>`, `<nav>`, `<article>` ou `<section>`.

Tant qu’on ne leur a pas affecté de largeur, les éléments dont la propriété `display` est `block` prennent toute la largeur disponible, et s’empilent verticalement dans la page.


### display:inline

Les éléments inline n’interompent pas le flux du texte ; ils s’insèrent dans celui-ci tel ce <span class="el">`span`</span>. Les principaux éléments dont le `display` par défaut est `inline` sont `<a>`, `<span>`, `<strong>`, `<em>`. À l’usage de `<b>` ou `<i>` pour produire du gras ou de l’italique, il faut généralement préférer `<strong>` et `<em>`. Quand à l’élément `<u>`, permettant de souligner, il est généralement à proscrire : le soulignement étant la norme la plus fréquemment adoptée pour les liens.

### display:inline-block

`inline-block` est une valeur qui peut être utilisée pour la mise en page de colonnes et de blocs juxtaposés les uns aux autres, comme nous le verrons plus loin. Mais son usage le plus courant est celui des images. C’est effectivement la propriété par défaut de l’élément `<img>`.

<div class="el">

![](/web/assets/img/pages--mise-en-page--img.gif) L’élément `<img>` est par défaut aligné sur la ligne de base du texte qui l’entoure, à moins que sa propriété `vertical-align` ne soit modifiée, ou que ne lui soit affectée la propriété `display:block`.

</div>

### display:none

La valeur `none` permet de masquer totalement un élément, en rendant inopérantes ses valeurs de `height`, `width`, `margin` ou `padding` et son impact sur les éléments adjacents. Différement, la propriété `visibility:hidden` masque l’élément en préservant la place prise par l’élément dans la mise en page.

## Width & max-width

Affecter une largeur à un élément block est la première étape vers un contrôle de la mise en page.
```
#large {
    width: 500px;
}
```
<div class="el" style="width:500px; ">


    ```<div id="large">```


</div>

Pour centrer cet élément au sein de son élément parent, on peut lui affecter des valeurs de marges `auto` pour ses marges supérieures et inférieures.

```
#centre {
    width: 500px;
    margin: 0 auto;
}
```
<div class="el" style="width:500px; margin:0 auto">

`<div id="centre">`

</div>

Les valeurs de `margin` (ainsi que celle de `padding`, la marge interne des éléments) peuvent se noter de manière étendue ou abrégée. En utilisant la notation abrégée, l’ordre des valeurs est celui des aiguilles d’une montre : `top`, `right`, `bottom` et `left`. Les exemples ci-dessous illustrent les différentes manières d’affecter des marges :
```
#marges-etendues {
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
}
```

Si l’on veut éviter l’apparition d’une _scrollbar_ horizontale pour les écrans dont la largeur serait inférieure à la largeur souhaitée pour le `<div>`, il est préférable d’utiliser la propriété `max-width`.
```
#centre-responsive {
    max-width: 500px;
    margin: 0 auto;
}
```
<div class="el" style="max-width:500px; margin:0 auto">

`<div id="centre-responsive">`

</div>

**Attention !** Pour manipuler les propriétés `width`, `height`, `max-width` et `max-height`, il convient de maîtriser le « [modèle de boite](/exemples/boxmodel) » ou de copier / coller la ligne ci-dessous au départ de tous vos fichiers CSS :
```
* { box-sizing: border-box; }
```

## Positions

Le mot-clé `position` en CSS est un faux-ami. Sa valeur permet de définir le comportement de mise en page d’un élément au sein de la page et sa relation aux éléments qui l’entourent (éléments parents, enfants et frères (_siblings_).

### Static

Par défaut (tant qu’on ne l’a pas modifiée), la `position` d’un élément est `static`.
```
#static {
    position:static;
}
```
On dit d’un élément auquel est affecté une `position` autre que `static` qu’il est _positionné_.

### Fixed

La position `fixed` permet de définir la position d’un élément par rapprort au _viewport_, l’espace visible de la fenêtre du navigateur. Il permet d’utiliser les propriétés `top`, `right`, `bottom` ou `left`. Un exemple pour produire un carré noir en bas à gauche d’une page :
```
#fixed {
  position: fixed;
  bottom: 10px;
  left: 10px;
  width: 20px;
  height:20px;
  background:black;
}
```
Bien que particulièrement utile, cette position n’est que partiellement supportée par les navigateurs mobiles.

### Sticky

La position `sticky` ressemble à `fixed`, au détail près qu’elle prend comme contexte son élément parent. Il permet d’utiliser les propriétés `top`, `right`, `bottom` ou `left` et permet au bloc de rester fixe à l’intérieur du scroll tant que l’élément parent y est contenu. Exemple avec ce point noir :
```
#sticky {
  position: sticky;
  top: 10px;
  margin-left: -20px;
  width: 10px;
  height:10px;
  background:black;
  border-radius:10px;
}
```
### Relative

La valeur `relative` est un outil très puissant pour la mise en page. Elle permet plusieurs comportements :  

• Sans autre règle, la position relative semble être strictement identique au positionnement `static`.

• La position de l’élément peut être modifiée par les propriétés `top`, `right`, `bottom` ou `left` **relativement** à sa position d’origine.

<div style="padding-bottom:25px">

<div class="el no-padding">

<article class="el " style="position:relative; left:12px; top:25px;">
```
    div {
        position:relative;
        left:12px;
        top:25px;
    }
```
</article>

</div>

</div>

• Cette modification du positionnement préserve l’impact initial de l’élément sur ses éléments parents et frères. Ainsi, le `<div class="el-2">` est affecté par la taille **initiale** de l'élément `<div class="el-1">` après lequel il est placé.

<section class="el clearfix" style="overflow:auto">

<div class="el " style="position:relative; left:70px; width:400px; float:left;">

    .el-1 {
        position:relative;
        left:70px;
        width:400px;
        float:left;
    }

</div>

<div class="el " style="width:300px; float:left;">

    .el-2 {
        width:300px;
        float:left;
    }

</div>

</section>

• La position `relative` créee également un nouveau référenciel de positionnement pour les éléments positionnés en `absolute` :

### Absolute

La position `absolute` permet de positionner un élément en supprimant l’impact qu’il a sur ses autres éléments parents et frères. L’élément positionné par le code CSS suivant se trouve tout en haut d’une page.

    #absolute {
        position:absolute;
        top: 20px;
        right: 20px;
        width: 20px;
        height:20px;
        background:black;
    }

Cette position s’établit en effet _par rapport au document_ ou au premier élément parent dont la position est autre que `static`.

<div class="el box" style="position:relative">

    .box {
        position:relative
    }
    #absolute-2 {
        position:absolute;
        top: 20px;
        right: 20px;
        width: 20px;
        height:20px;
        background:red;
    }

</div>

</section>

<section class="section" id="floats">

## Mise en page avec float & clear

La propriété `float` est une des plus utilisées pour structurer une mise en page **[ avant que n’arrivent [flexbox](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/cssgrid/) ]**, mais son usage est parfois délicat. Elle spécifie qu'un élément doit être retiré du flux normal et placé à la droite ou à la gauche du bloc qui le contient. Le texte et les éléments `inline` adjacents se répartiront autour de lui.

Dans son usage le plus simple, la propriété `float` permet d’habiller une image avec du texte :

<div class="el">

![C](/web/assets/img/pages--mise-en-page--lettrine-small.gif)ette jolie lettre ornée est l’œuvre de Joseph Apoux, peintre et illustrateur français de la fin du XIXe siècle proche du décadentisme (dixit [wikipedia](http://fr.wikipedia.org/wiki/Joseph_Apoux)). Joseph Apoux étudie la peinture et le dessin avec Jean-Léon Gérôme. (…) On lui doit notamment cet _Alphabet pornographique_, dont est issu [cette image que vous pouvez voir en plus grand](/web/assets/img/pages--mise-en-page--lettrine.png), et qui grace à la propriété `float` permet de créer une lettrine (_notabene_: la propriété `p:first-letter` permettrait de le faire de manière plus élégante, et/ou sans utiliser d’image). Pour plus de typographie érotique, voir [Max Bruinsma](http://maxb.home.xs4all.nl/erotype.html).

</div>

<pre>                `img { float:left; margin:0 10px 0 0; }`</pre>

### Deux colonnes

En utilisant une boîte flottante, on peut ainsi créer deux colonnes :

<section class="el">

<nav class="el" style="float:left; width:250px">

    nav {
        float:left;
        width:250px;
    }

</nav>

<article class="el" style="margin-left:270px; ">

On affecte une marge à l’article, pour « laisser la place » à l’élément `<nav>` flottant.

    article {
        margin-left:270px;
    }

</article>

</section>

### Multiples colonnes

En juxtaposant des boîtes flottantes, on peut créer une mise en page en plusieurs colonnes régulières… **[ mais il vaut mieux utiliser [flex](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/cssgrid/) ]**

<section class="clearfix">

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="col"`</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="col"`</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="col"`</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="col"`</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="col"`</div>

</section>

    .col {
        float:left;
        width:20%;
    }

…ou irrégulières :

<section class="clearfix">

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:14.2857%;">`class="col one"`</div>

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:28.5714%;">`class="col two"`</div>

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:57.1429%;">`class="col three"`</div>

</section>

    .col   { float:left; height:100px; }
    .one   { width:14.2857%;}
    .two   { width:28.5714%;}
    .three { width:57.1429%;}

### Clear et overflow

Un problème se pose cependant ; l’élément conteneur n’est plus affecté par l’élément flottant ( on l’a « sorti du flux »). L’élément flottant peut donc « dépasser » de son conteneur.

<div class="clearfix">

<section class="el">

<nav class="el" style="float:left; width:350px">

    nav {
        float:left;
        width:350px;
    }

</nav>

</section>

</div>

Pour résoudre ce problème, de multiples solutions s’offrent ; la plus simple est ce définir la propriété `overflow` du conteneur avec la valeur `auto`. Et quand ça ne suffit pas, il faut aller chercher dans le monde merveilleux du [_clearfix_](http://stackoverflow.com/questions/211383/which-method-of-clearfix-is-best)…

<section class="el" style="overflow:auto;">

<nav class="el" style="float:left; width:350px">

    section{
        overflow:auto;
    }
    nav {
        float:left;
        width:350px;
    }

</nav>

</section>

### Clear

La propriété `clear` sert à contraindre l’élément qui suit un élément flottant à passer en dessous. Les valeurs possibles de `clear` sont `left`, `right` ou `both` (c’est la valeur qu’on utilise le plus souvent).

<section class="el" style="overflow:auto;">

<nav class="el" style="float:left; ">

    nav {
        float:left;  
    }

</nav>

<article class="el" style="clear:both">

    article{
        clear:both;
    }

</article>

</section>

</section>

<section class="section">

## Blocks en ligne

### Grille

La propriété `float` montre des limites quand il s’agit d’organiser en grille des contenus de hauteurs différentes. Les éléments viennent buter sur l’élément de plus grande hauteur :

<div class="clearfix" style="margin-bottom:1em">

<section class="el" style="overflow:auto;">

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`  
avec un contenu plus important  
</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px; float:left; width:20%;">`class="box"`</div>

</section>

</div>

    .box { float:left; width:20%;}

On peut alors avoir recours aux propriétés `display:inline-block` et `vertical-align:top` **[ et surtout utiliser [flex](/web/pages/ressources/flexbox/) ou [grid](/web/pages/ressources/cssgrid/) ]**

<section class="el" style="overflow:auto; vertical-align:top;">

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`  
avec un contenu plus important  
</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

<div class="el box no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:20%;">`class="box"`</div>

</section>

    .box { display:inline-block; vertical-align:top; width:20%; }

### Mise en page avec inline-block

Cette propriété permet également de structurer une mise en page. Mais elle demande une attention toute particulière. **[ et ne devrait plus être utilisée puisqu’on a [flex](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/cssgrid/) ]** Les éléments `inline-block` juxtaposés se comportent « comme des mots ». Si on laisse une espace entre deux éléments `inline-block`, cette espace sera affichée entre les blocs, induisant une largeur supérieure à 100% lorsque deux blocs sont juxtaposés.

<section class="el" style="overflow:auto; vertical-align:top;">

<nav class="el no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:30%;">

    nav {
        display:inline-block;
        vertical-align:top;
        width:30%;
    }

</nav>

<article class="el no-padding" style=" padding:20px 10px;vertical-align:top; display:inline-block; width:70%;">

    article {
        display:inline-block;
        vertical-align:top;
        width:70%;
    }

Pour résoudre ce problème, il est nécessaire de supprimer tout espace et saut de ligne entre les éléments du code HTML (ici, `nav` et `article`) :

    <!-- affichage incorrect -->
    <nav>
        (navigation)
    </nav>
    <article>
        (texte)
    </article>

    <!-- affichage correct -->
    <nav>
        (navigation)
    </nav><article>
        (texte)
    </article>

</article>

</section>

</section>
