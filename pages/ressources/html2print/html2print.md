# html2print

Pourquoi et comment créer des documents imprimés avec les technologies du web.

## Exemples

Voir les exemples dans la [section dédiée](/web/pages/exemples/#htmltoprint) du site des ateliers Web.

## Collectifs et initiatives

### [PrePostPrint](http://prepostprint.org/)
PrePostPrint cultive un intérêt pour les procédés de création graphique et les systèmes de publication libres considérés comme « alternatifs » ou « non conventionnels », particulièrement s'ils sont conçus avec les technologies du web. Cette initiative a pour vocation première d'interroger, partager, confronter et encourager ces pratiques naissantes et faciliter l'accès aux projets et outils existants. À L’initiative de  [Sarah Garcin](https://sarahgarcin.com), [Raphaël Bastide](https://raphaelbastide.com) et [Julie Blanc](https://julie-blanc.fr).

### [Open Source Publishing](http://osp.kitchen/)
Open Source Publishing est un collectif de designers travaillant à Bruxelles qui ont comme particularité de ne produire leurs livres, sites web, posters, outils, etc. qu’uniquement à partir de logiciels libres ou open source. Ils sont parmi les précurseurs des approches html2print ([voir la conférence de Pierre Huyghebaert et Eric Schrijver](https://vimeo.com/50827775) à l’ÉSA Pyrénées en 2012).

### [L’Atelier des chercheurs](https://latelier-des-chercheurs.fr/)
L’Atelier des chercheurs est un collectif de designers engagés depuis 2013 dans la création d’outils libres et modulaires pour transformer les manières d'apprendre et de travailler. Il est aujourd’huicomposé de Sarah Garcin, Pauline Gourlet et Louis Eveillard.

### Mais ausi
Le collectif bruxellois [Luuse](http://luuse.io/). Le collectif [Bonjour monde](http://bonjourmonde.net/) (recherche des procédés alternatifs dans le champ de la création graphique). Le [Groupe CCC](http://groupeccc.com/), fondé par Alice Gavin et Valentin Bigel. Le studio [Figures libres](http://figureslibres.cc/). Le site d’[Antoine Fauchié](https://quaternum.net/), doctorant à l’Université de Montréal (recherche et articles sur les écritures et les livres numériques). [Loraine Furter](https://www.lorainefurter.net/fr), édition hybride (publications papier et numériques), recherche en design graphique les projets féministes intersectionnels. [La Villa Hermosa](http://www.lavillahermosa.com/) est un autre atelier de design graphique bruxellois.

## Outils

*   [Paged.js](https://gitlab.pagedmedia.org/tools/pagedjs "https://gitlab.pagedmedia.org/tools/pagedjs") : Une librairie javascript pour mettre en page des livres imprimables avec <abbr title="HyperText Markup Language">HTML</abbr> et <abbr title="Cascading Style Sheets">CSS</abbr>. Voir aussi l’article tutoriel sur [Paged.js – sneak peeks](https://www.pagedmedia.org/pagedjs-sneak-peeks/ "https://www.pagedmedia.org/pagedjs-sneak-peeks/")
*   [Les cahiers du studio](https://www.latelier-des-chercheurs.fr/outils/les-cahiers-du-studio "https://www.latelier-des-chercheurs.fr/outils/les-cahiers-du-studio") : Un outil collaboratif de documentation chronologique pour une prise de notes multimédia lors d’une activité ou d’un événement.
*   [OSP’s HTML2PRINT](http://osp.kitchen/tools/html2print/ "http://osp.kitchen/tools/html2print/"): un outil pour faire des documents imprimés en utilisant <abbr title="HyperText Markup Language">HTML</abbr>, less/<abbr title="Cascading Style Sheets">CSS</abbr> et Javascript/Jquery. Il a été utilisé pour des [workshops](https://github.com/HEAR/HTML_sauce-cocktail-workshop-OSP "https://github.com/HEAR/HTML_sauce-cocktail-workshop-OSP"), des [thèses](https://github.com/Antoine-Gelgon/memoire-dnsep "https://github.com/Antoine-Gelgon/memoire-dnsep") et bien d'autres projets de publication (cf. [Médor](https://medor.coop/fr/ "https://medor.coop/fr/") et showcase)
*   [Libriis](https://github.com/bachy/libriis "https://github.com/bachy/libriis"): un outil cousin d'HTML2PRINT, permettant de faire de la mise en page html et css vers l'imprimé, avec une interface complète.
*   [Brass Print Tool](http://blog.lavillahermosa.com/brass-%E2%86%92-print-tool-v1/ "http://blog.lavillahermosa.com/brass-%E2%86%92-print-tool-v1/"): un article à propos du kit outils utilisé par Villa Hermosa’s pour générer des flyers et programmes à partir d'une base de donnée.
*   [PDFutils](https://github.com/osp/PDFutils "https://github.com/osp/PDFutils"): un répertoire de scripts permettant de manipuler et convertir des pdf rgb vers du CMJN, avec aperçu des plaques et noir forcé.
*   [The Sausage machine](http://www.publishinglab.nl/the-sausage-machine/2016/01/14/hello-world/ "http://www.publishinglab.nl/the-sausage-machine/2016/01/14/hello-world/"): du texte au format ePub, icml ou html.
*   [hybrid publishing Group](https://hpg.io/ "https://hpg.io/"): plateforme de solutions modulables pour publications multi-format.
*   [Bindery.js](https://evanbrooks.info/bindery/ "https://evanbrooks.info/bindery/"): Une librairie javascript pour mettre en page des livres imprimables avec HTML et <abbr title="Cascading Style Sheets">CSS</abbr>.


## Projets

*   [Hybrid Publishing Back To The Future Publishing Theses at the KABK](https://i.liketightpants.net/and/hybrid-publishing-back-to-the-future-publishing-theses-at-the-kabk), projet d’Eric Schrijver à la KABK / *Royal Academy of Art* de la Haie. Mémoires de fin d’étude sous forme de publication hybride (web / print).
*   [L’atlas critique d’Internet](http://internet-atlas.net/), travail de recherche théorique et graphique initié et développé par Louise Drulhe dont l’impression se conçoit sous la forme d’un objet “responsif”, naturellement adaptable à [tous les formats d’impression](http://internet-atlas.net/order/).



## Techniques

Intégrer une feuille de style dont les règles ne seront appliquées qu’à l’impression
``` css
<link media="print" href="print.css">
```
Déterminer une taille de page
``` css
@page {
  size: A4 landscape;
}
/* ou pour une affiche */
@page {
  size: A3 portrait;
}
```

On peut cibler des pages spécifiques avec les sélecteurs `:left` et `:right`. La première page peut être ciblée avec `:first`, les pages vierges avec `:blank` :

```
@page :first {
    margin-top: 4cm;
}
@page :left {
    margin-right: 8cm;
}

@page :right {
    margin-left: 8cm;
}
```
Pour mieux maîtriser la pagination du flux du contenu, il faut utiliser les règles `break-*` et `page-break-*`:
```
h2 {
    /* toujours provoquer un saut de page avant l'élément h2 */
    break-before: page; /* ou */
    page-break-before: always;
}
h2, h3 {
    /* éviter qu'un paragraphe ne se détache du titre qui le précède immédiatement. */
    break-after: avoid-page; /* ou */
    page-break-after: avoid;
}
figure {
    /* pour éviter qu’un élément soit coupé et affiché sur deux pages */
    break-inside: avoid; /* ou */
    page-break-inside: avoid;  
}
```
Veuves et orphelines
```
p {
    /* minimume deux lignes présentes sur la page, au début ou à la fin d’un paragraphe */
    orphans: 2;
    widows: 2;
}
```
Contours continus
```
section {
    /* pour que le contour de la section soit complet sur chaque page */
    border: 0.5pt solid;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
}
```

### Tester

Sur Firefox, ouvrir les outils de développement et saisir `media emulate print`
Sur Chrome, ouvrir les outils de développement et sélectionner “More Tools” puis “Rendering”.

\[ à suivre… \]

## Pourquoi ?

> « Les technologies du web offrent un environnement de publication ouvert et décentralisé. Les documents web sont ainsi éditables en différents endroits et temporalités par une variété de personnes et d'outils, rompant avec la logique linéaire de l'ère Gutenberg. ¶ Dans cet espace, la notion de flux est centrale: le flux des données, allant de la conversion de documents "bruts" vers la production de multiples formats; le flux des formes produites, conditionné par la struture du HTML et la logique de «cascade» des feuilles de style; ou encore le flux des personnes et les nouveaux moyens de collaboration qui leurs sont offerts par le net. ¶ Si cet espace offre de nouvelles possibilités, cela ne va pas sans poser de questions. Comment penser un design alors sans le subordonner au contenu? Comment publier sur différents formats sans nier la spécificité des différents supports? Comment tester et combiner différentes pistes de mise en page? Comment se partager les taches tout en permettant à tous d'avoir une vue d'ensemble sur l'objet produit ? »  — [OLA](http://ola4.outilslibresalternatifs.org/#00-ola)

### Adobe

Si des alternatives libres ([Gimp](https://www.gimp.org/), [Inkscape](https://inkscape.fr/), [Scribus](https://www.scribus.net/)) ou commerciales ([Affinity](https://affinity.serif.com/)) existent ou émergent, Adobe a établi une puissante hégémonie sur l’écosystème logiciel de la création graphique. Ce qui n’est pas sans poser quelques problèmes:

*   formatage de l'expérience esthétique
*   location de l'outil de travail
*   dépendance au logiciel
*   création et pratiques conditionnées
*   Surconception
*   Non adapté aux médias interactifs

### 4 libertés du logiciel libre (Richard Stallman)

*   liberté d’utiliser le logiciel, pour quelque usage que ce soit — liberté 0
*   liberté d’étudier le fonctionnement du programme, et de l’adapter à vos propres besoins — liberté 1
*   liberté de redistribuer des copies à tout le monde — liberté 2
*   liberté d’améliorer le programme et de publier vos améliorations — liberté 3
