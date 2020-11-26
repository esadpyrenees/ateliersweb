# Responsive web design

Le _Responsive Web Design_ (RWD) est une approche du design web qui permet de construire des pages dont l’affichage s’effectuera correctement sur tous types de périphériques et de tailles de fenêtres ou d'écrans.

Un site conçu ainsi s’adapte à l'environnement de visualisation en utilisant des grilles fluides et proportionnées, des images flexibles, et des “requêtes de média” (_media queries_):

*   Le concept de grille fluide demande que la taille des éléments de page soit exprimée en unités relatives, telles que des pourcentages, plutôt qu'en unités absolues, telles que les pixels ou les points.
*   Les images flexibles sont également dimensionnées en unités relatives, afin de les empêcher de s'afficher en dehors de leur élément parent.
*   Les _media queries_ permettent à la page d'utiliser différentes règles de style CSS en fonction des caractéristiques du périphérique sur lequel le site est affiché, le plus souvent de la largeur du navigateur.

<div style="padding:42.5% 0 0 0;position:relative;border-right:1px solid;border-bottom:1px solid;"><iframe src="https://whatyouseeiswhatyouget.net/" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>
<small>What You See Is What You Get, Jonas Lund, 2012, <a href="http://whatyouseeiswhatyouget.net">http://whatyouseeiswhatyouget.net</a>. La taille de chaque navigateur qui s’est connecté au site depuis 2012 est enregistrée, puis affichée séquentiellement – jusqu’à celle de votre propre visite.</small>

<div id="media-queries"></div>

## Media queries

Les _media queries_ sont un ensemble de directives permettant aux auteurs de feuilles de styles de réserver la mise en forme CSS à certains médias ou périphériques selon leurs caractéristiques.

Ces caractéristiques peuvent être liées au support : `screen`, `print`, `handheld`, `tv`, etc. Elles sont un élément fondamental du _Responsive web design_.

### CSS2

Ci-dessous, un attribut `media` est associé au lien d’importation des feuilles de styles pour déterminer le type de média auquel doit s’appliquer l’ensemble des règles écrites dans les fichiers `screen.css` et `print.css`.

Cette approche est autorisée depuis la version 2 de la spécification CSS. Elle est aujourd’hui moins utile, remplacée et augmentée par la version 3 du langage CSS.

    <!doctype html>
    <html>
        <head>
            <meta charset="utf-8">
            <title>Media Queries !</title>
            <link rel="stylesheet" media="screen" href="screen.css" type="text/css" />
            <link rel="stylesheet" media="print" href="print.css" type="text/css" />
        </head>
        <body>
        ...
        </body>
    </html>

### CSS3

En CSS3, plusieurs critères peuvent être combinés pour déterminer la cible des règles. Ainsi, dans l’exemple ci-dessous, seuls les navigateurs écran dont la taille est au minimum de `200px` et au maximum de `640px` verront leur arrière-plan coloré en rouge.

    @media screen and (min-width: 200px) and (max-width: 640px) {
        body {
            background:red;
        }
    }

### Orientation et résolution

Les _media queries_ peuvent également déterminer des règles en fonction de l’orientation du périphérique – en mode portrait ou paysage :

    @media screen and (orientation:portrait) {
        body {
            background:red;
        }
    }
    @media screen and (orientation:landscape) {
        body {
            background:blue;
        }
    }

Les _media queries_ permettent de réserver des règles aux périphériques en fonction de leur résolution / densité de pixels :
```
    @media
    (-webkit-min-device-pixel-ratio: 2),
    (min-resolution: 192dpi) {
        /* Retina-specific stuff here */
    }
```

<div id="usages"></div>

## Usages

Les _media queries_ permettent d’adapter les règles d’affichage en fonction du périphérique.

On utilisera fréquemment ces adaptations pour :

*   agrandir la taille du texte
*   agrandir la taille des contrôles et zones cliquables (pour une utilisation au doigt)
*   faire passer le contenu sur une seule colonne
*   masquer ou afficher des éléments spécifiques
*   ajuster les dimensions et marges

### Viewport

Avant que le *Responsive Design* ne devienne la norme, les sites web ne disposaient que d'un affichage “bureau”. Les navigateurs mobiles appliquaient alors un zoom arrière afin d'adapter l’affichage à la largeur de l'écran, permettant ainsi à l'utilisateur d'interagir avec celle-ci en effectuant un zoom avant si nécessaire.

Ce comportement par défaut empêchera les appareils mobiles d’utiliser nos Media Queries. Pour le désactiver, il faut ajouter une balise `<meta>`au `<head>` du document. Tout comme `<meta charset='utf-8' >`, c’est un élément dont il faut généraliser l’usage à toutes les pages:

```
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
```

Pour donner à l’utilisateur plus de souplesse, on peut s’abstenir de saisir le `maximum-scale`, ce qui lui permettra par exemple de zoomer sur le détail d’une image.

```
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
```


### Mobile first

Plusieurs stratégies peuvent être employées dans les logiques de mise en œuvre du _responsive web design_.

Il est possible de concevoir en priorité son interface pour le support disposant de la moindre taille d’écran (_mobile first_). Dans ce cas, les premières règles seront dédiées aux affichages restreints, et augmentées progressivement en utilisant les attributs `min-width` des media queries :

Ci-dessous, la taille par défaut est de 18px – pour les mobiles, donc. Elle ne deviendra de 21px que pour des écrans plus larges que 640px.

    body{
        font-size: 18px;
    }

    @media (min-width:640px) {
        body {
             font-size: 21px;
        }
    }

### Desktop first

À l’inverse, on peut spécifier un ensemble de règles standards pour les interfaces de type “ordinateur de bureau”, et ajuster ces règles au fur et à mesure de la diminution de la taille d’écran.

Ci-dessous, un élément servant d’ornement pourra être affiché sur les grands écrans, et disparaitre sur les interfaces mobiles.

    .ornement{
        height:600px;
    }

    @media (max-width:640px) {
        .ornement {
             display:none
        }
    }

### Aller plus loin

[Quelques exemples d’utilisatin du Responsive Web Design et des MediaQueries](../../exemples/#rwd).

Redimensionner votre fenêtre de navigateur (ou utilisez “l’affichage adaptatif”, dans Firefox, ou Chrome) pour voir les règles à l’œuvre.

<div id="typography"></div>

## Typographie Responsive

### Quelques définitions

La définition du [responsive web design](https://fr.wikipedia.org/wiki/Site_web_adaptatif) par Wikipédia (où _responsive_ se traduit en “adaptatif”). La première mention du terme, dans un [article d’Ethan Marcotte](http://alistapart.com/article/responsive-web-design) sur [A List Apart](http://alistapart.com/) (en anglais). Ainsi que [Responsive Typography: The Basics](https://ia.net/know-how/responsive-typography-the-basics), un article d’Olivier Reichenstein

### Quelques exemples

#### Typographie

[Webtypography.net](http://webtypography.net/), où Richard Rutter reprend les grands principes du livre The Elements of Typographic Style de Robert Bringhurst (indispensable à la santé de votre bibliothèque) et les applique au web, en y ajoutant des exemples de code.

Un article de Jon Tangerine, [The Paragraph in Web Typography & Design](http://v1.jontangerine.com/log/2008/06/the-paragraph-in-web-typography-and-design), accompagné de [douze examples de code](http://v1.jontangerine.com/silo/typography/p/) pour styler les paragraphes.

Le monde merveilleux de l’OpenType enfin accessible en css ; une introduction sur le [blog de FontDeck](http://blog.fontdeck.com/post/15777165734/opentype-1) et la référence sur Mozilla Developper Network des propriétés [font-feature-settings](https://developer.mozilla.org/en-US/docs/Web/CSS/font-feature-settings) et [font-variant](https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant).

#### Mise en page

[Responsive Patterns](https://bradfrost.github.io/this-is-responsive/patterns.html), a collection of patterns and modules for responsive designs.

### Quelques scripts pour aller plus loin

[Slabtext](https://freqdec.github.io/slabText/), un plugin jquery pour faire des gros titres (voir aussi fittext, ou bigtext)


</section>
