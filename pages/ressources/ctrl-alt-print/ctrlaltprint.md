# CTRL + Alt + print

Pourquoi et comment créer des documents imprimés avec des outils alternatifs \[ et notamment avec les langages du web \].

Explorées par de nombreux collectifs de graphistes et d’artistes depuis plus d’une dizaine d’années, les “approches alternatives de production d’objets imprimés” rassemblent des logiques de conception qui tentent de s’affranchir de la domination des outils logiciels habituels du design éditorial (Adobe, Microsoft et autres suites bureautiques propriétaires) pour faire l’expérience d’une forme d’autonomie reconquise. Basées sur l’usage de logiciels libres, volontiers expérimentales, ces pratiques ont acquis au fil du temps une maturité qui leur confère aujourd’hui une légitimité jusque dans le champ de l’édition traditionnelle. 

Les pratiques du _web to print_, ou _html to print_, forment un sous-ensemble de cette dynamique. Elles visent à produire des documents imprimés grâce à l’utilisation des langages du web (HTML, CSS et JavaScript), en s’appuyant sur les capacités de gestion du texte, des images ou des médias des navigateurs, ainsi qu’en bénéficiant des capacités nativement collaboratives et décentralisées du web. 

## En images


<div class="scrollables" >


<figure>
    <img src="img/controverses-home-4.png" alt="*">
    <figcaption>Sarah Garcin : <a href="https://controverses.org/mode-demploi/">Controverses mode d’emploi</a></figcaption>
</figure>
<figure>
    <img src="img/chiragan-0.jpg" alt="*">
    <figcaption>Julie Blanc : <a href="https://controverses.org/mode-demploi/">Les sculptures de la villa Chiragan</a></figcaption>
</figure>
<figure>
    <img src="img/luuse-poisson-eveque.png" alt="*">
    <figcaption>Luuse : <a href="https://gitlab.com/Luuse/poisson-eveque">Poisson Éveque</a></figcaption>
</figure>
<figure>
    <img src="img/12-poisson_eveque-couv.png" alt="*">
    <figcaption>Luuse : <a href="https://gitlab.com/Luuse/poisson-eveque">Poisson Éveque</a></figcaption>
</figure>
<figure>
    <img src="img/PPP-flyer-Raphael-Bastide.png" alt="*">
    <figcaption>Raphaël Bastide : <a href="https://prepostprint.org/">Flyer PPP</a></figcaption>
</figure>
<figure>
    <img src="img/epaf.png" alt="*">
    <figcaption>Raphaël Bastide : <a href="https://raphaelbastide.com/epaf/">Each page a function</a></figcaption>
</figure>
<figure>
    <img src="img/atlas-critique.png" alt="*">
    <figcaption>Louise Drulhe : <a href="https://louisedrulhe.fr/internet-atlas/">Atlas Critique de l’Internet</a></figcaption>
</figure>
<figure>
    <img src="img/balsamine.jpeg" alt="*" >
    <figcaption>Open Source publishing : <a href="http://osp.kitchen/work/balsamine.2020-2021/">Balsamine</a></figcaption>
</figure>
<figure>
    <img src="img/balsamine2.png" alt="*" >
    <figcaption>Open Source publishing : <a href="http://osp.kitchen/work/balsamine.2020-2021/">Balsamine</a></figcaption>
</figure>
<figure>
    <img src="img/bonjour-monde.png" alt="*">
    <figcaption>Bonjour Monde : <a href="http://bonjourmonde.net/">Workshop Gutenberg</a></figcaption>
</figure>
<figure>
    <img src="img/code-X_01.png" alt="*">
    <figcaption><a href="http://editions-hyx.com/fr/code-x">Code X</a></figcaption>
</figure>
<figure>
    <img src="img/web-1.png" alt="*">
    <figcaption><a href="http://editions-hyx.com/fr/code-x">Code X</a></figcaption>
</figure>
<figure>
    <img src="img/open-source-pusblishing.png" alt="*">
    <figcaption>Open Source publishing : <a href="http://osp.kitchen/workshop/saison-graphique/">Une saison graphique</a></figcaption>
</figure>
<figure>
    <img src="img/pad2print-DEViation-Luuse.png" alt="*">
    <figcaption>Luuse : <a href="https://gitlab.com/Luuse/pad2print/">pad2print</a></figcaption>
</figure>
<figure>
    <img src="img/trouble-academy.png" alt="*">
    <figcaption>After Howl : <a href="https://afterhowl.tumblr.com/">Trouble Academy</a>  </figcaption>
</figure>


</div>


## Exemples pratiques

Voir les exemples dans la [section dédiée](/web/pages/exemples/#htmltoprint) du site des ateliers Web.


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

☞ En 2020, les dépenses marketing de la firme s’élèvent à 3 591 millions de dollars.

### 4 libertés du logiciel libre (Richard Stallman)

*   liberté d’utiliser le logiciel, pour quelque usage que ce soit — liberté 0
*   liberté d’étudier le fonctionnement du programme, et de l’adapter à vos propres besoins — liberté 1
*   liberté de redistribuer des copies à tout le monde — liberté 2
*   liberté d’améliorer le programme et de publier vos améliorations — liberté 3
