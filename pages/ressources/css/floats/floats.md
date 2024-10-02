# Mise en page avec float & clear

La propriété `float` est une des plus utilisées pour structurer une mise en page **\[ avant que n’arrivent [flexbox](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/grid/) \]**, mais son usage est parfois délicat. Elle spécifie qu'un élément doit être retiré du flux normal et placé **à la droite** ou **à la gauche** du bloc qui le contient. Le texte et les éléments `inline` adjacents se répartiront autour de lui.

Dans son usage le plus simple, la propriété `float` permet d’habiller une image avec du texte :


<div class="el">
<p><img src="pages--mise-en-page--lettrine-small.gif" alt="C" style="float:left; margin:0 15px 0 -4px;">ette jolie lettre ornée est l’œuvre de Joseph Apoux, peintre et illustrateur français de la fin du XIXe siècle proche du décadentisme (dixit <a href="http://fr.wikipedia.org/wiki/Joseph_Apoux">wikipedia</a>). Joseph Apoux étudie la peinture et le dessin avec Jean-Léon Gérôme. (…) On lui doit notamment cet <em>Alphabet pornographique</em>, dont est issu <a href="pages--mise-en-page--lettrine-small.gif">cette image</a>, et qui grace à la propriété <code>float</code> permet de créer une lettrine (<em>notabene</em>: la propriété <code>p:first-letter</code> permettrait de le faire de manière plus élégante, et/ou sans utiliser d’image). Pour plus de typographie érotique, voir <a href="https://maxbruinsma.com/index1.html?erotype.html">Max Bruinsma</a>.</p>
</div>

```
img { float:left; margin: 0 15px 0 -4px; }
/* la marge droite négative permet d’aligner *optiquement* l’image sur la colonne de texte */
```

## Deux colonnes

En utilisant une boîte flottante, on peut ainsi créer deux colonnes :

<section class="el">

<nav class="el" style="float:left; width:250px">

    nav {
        float:left;
        width:250px;
    }

</nav>

<article class="el" style="margin-left:270px; ">

On affecte une marge à l’article, pour « laisser la place » à l’élément <code>nav</code> flottant.<br>

    article {
        margin-left:270px;
    }

</article>

</section>

### Multiples colonnes

En juxtaposant des boîtes flottantes, on peut créer une mise en page en plusieurs colonnes régulières… **\[ mais il vaut mieux utiliser [flex](/web/pages/ressources/flexbox/) et [grid](/web/pages/ressources/grid/) \]**

<section class="clearfix">

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">.col</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">.col</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">.col</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">.col</div>

<div class="el col no-padding" style=" padding:20px 10px; float:left; width:20%;">.col</div>

</section>

    .col {
        float:left;
        width:20%;
    }

…ou irrégulières :

<section class="clearfix">

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:14.2857%;"> .col.one</div>

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:28.5714%;"> .col.two</div>

<div class="el col no-padding" style=" padding:20px 10px; height:100px; float:left; width:57.1429%;"> .col.three</div>

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
