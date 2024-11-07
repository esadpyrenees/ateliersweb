#  Curriculum vitæ

Qu’y écrire ? Son identité, son adresse, son expérience professionnelle, ses compétences, ses langues maîtrisées, ses formations et hobbies ? Comment le structurer ? De manière chronologique, anti-chronologique ou thématique ?

Ce projet ne vise pas à se substituer à Pôle Emploi, France Travail ou autres missions locales, mais à construire un document bref et synthétique qui met en jeu de manière prépondérante les notions de lisibilité, de hiérarchie de l’information, en s’appropriant les logiques du web design _responsive_ (ou même _intrinsèque_), de l’écran jusqu’au papier.

☞ Si vous ne souhaitez pas mettre cette proposition au service de votre brillant devenir professionnel, il est possible de travailler à partir du CV fanstasmé d’un personnage plus ou moins fictif (Dieu, Karl Marx, Taylor Swift, le Magicien d'Oz ou [Rick Astley](rr) sont acceptables).

☞ Voir sur [read.cv](https://read.cv/sites/templates) des examples de mise en forme de CV web.

## Mise en page adaptative

La mise en page d’un CV (ainsi que de tout autre type de document…) implique une pensée du « _macro-layout_ » autant que du « _micro-layout_ » : il s’agit de concevoir à la fois les logiques globales structurantes, et la mise en relation des données à la plus petite échelle de l’information.

### Macro

```html
<header>…</header>
<main>
  <article>…</article>
  <aside>…</aside>
</main>
<footer>…</footer>
```
### Micro

```html
<div class="experience">
    <h3 class="date">…</h3>
    <p>…</p> 
</div>
```

L’enjeu de la proposition est de concevoir ces deux niveaux dans leur adaptation à l’espace fluide d’un écran aux dimensions indéfinies, jusqu’au format papier, A4 ou tiquet de caisse.

## Étape 1

La première étape consiste à réunir le contenu textuel du CV et le composer au format HTML. Pour démarrer, la structure la plus légère est souhaitable.

```html
<header>
  <h1>…</h1>
  <p>…</p>
</header>

<section id="…">
  <h2>…</h2>
  <article>
    <h3>…</h3>
    <p>…</p>
  </article>
  …
</section> 

…
```
[→ Voir la démo de l’étape 1](demo/01.html)

## Étape 2

Les logiques de mise en page _macro_ peuvent alors être engagées. Une, deux ou trois colonnes ? L’entête à gauche ou en haut ? Les décisions gagnent à être prises (et les alternatives explorées) sur du papier avec un crayon.

La maquette (simple et sans grande finesse graphique…) qui sera utilisée ci-après obéit à cette logique :

[![Maquette de la mise en page](demo/02.svg)](demo/02.svg) {.imglink}

L’enjeu est ici de préfigurer les variations de mise en page en fonction des formats, tout en maintenant la cohérence des décisions graphiques structurelles. 

Des outils plus complexes que le papier et le crayon peuvent être sollicités à cette étape. Figma, ou son alternative libre [Penpot](https://penpot.app/) sont parmi les outils de prototypage web les plus puissants. L’idée ici est de s’en passer pour embrasser 😚 la fluidité de la page avec plus de fougue 😘. 

## Étape 3

Une fois la maquette _macro_ déterminée, les règles CSS structurantes peuvent être envisagées pour les différents formats d’affichage.

Sans se préoccuper des styles typographiques, des marges, des couleurs, des bordures ou des arrières-plans, on peut déterminer les variations d’affichage grâce au module de mise en page CSS Grid (`display: grid`). Voir la [documentation](../../ressources/css/grid/) de Grid et les [exemples](../../exemples/#grid) associés.

Les ruptures de mise en page (changements radicaux de nombre de colonnes et de direction du flux du document, ou changement de médium –screen _vs_ print) sont prise en charge par des _media queries_:

```css
@media (max-width: 50em) {
  /* pour les tailles d’écran inférieures à 50em */
}
@media print {
  /* pour le print */
}
```
Si CSS possède aujourd’hui des approches plus subtiles pour produire une mise en page “responsive” (adaptative), les _media queries_ ont l’avantage d’être aisément compréhensible et facilement maîtrisables. Pour en savoir plus sur les _media queries_, [voir ici](../../ressources/css/rwd/).

[→ Voir la démo](demo/03.html) (redimensionnez la fenêtre de votre navigateur et prévisualisez l’impression) et comprendre la [feuille de style CSS associée](demo/styles-macro.css).

⚠ Définir un format de page imprimée en CSS ne fonctionne qu’avec le navigateur Chrome / Chromium, et pas encore avec Firefox 😢 (à qui on demande ça depuis 11 ans ; ça finira bien par arriver un jour ou l’autre…).

## Étape 4

Les grands principes de mise en page étant déterminés, le document étant “responsive” et adapté à l’ensemble de ses formats d’affichage, on peut à présent affiner les choix graphiques et typographiques.

Dans le contexte de cet exemple, on choisit d’intégrer une nouvelle feuille de style, pour mieux distinguer les enjeux de mise en page des choix typographiques.

```html
<link rel="stylesheet" href="styles-typo.css">
```

La mise en forme typographique obéit aux logiques CSS décrites dans [les ressources CSS de base](../../ressources/css/) et dans la page dédiée aux questions de [Macro & micro typographie](../../ressources/typo/macromicro/).

[→ Voir la feuille de style CSS](demo/styles-typo.css) et jeter un œil à [la démo ](demo/04.html) (n’oubliez pas de redimensionner la fenêtre de votre navigateur et de prévisualiser l’impression).

## Étape 5

Les principes typographiques fondamentaux étant définis, la structuration de la mise en page _micro_ peut enfin être envisagée.

Toujours pour plus de clarté, on choisit d’intégrer une nouvelle feuille de style.

```html
<link rel="stylesheet" href="styles-micro.css">
```

Les zones surlignées demandent une attention particulière :

[![Mise en visibilité des zones à définir](demo/05.svg)](demo/05.svg) {.imglink}

### L’entête, en bleu 

Les trois éléments qui la composent sont répartis dans l’espace selon un axe (horizontal et vertical) et une justification (répartition de l’espace blanc entre les éléments) qui varie.

En vue Web Desktop, les élements sont composés en colonne et le dernier paragraphe est positionné en bas de la page. En vue A4 print, ils sont composés en ligne ; la première colonne détermine une largeur qui sera ré-utilisée pour les éléments du contenu. En vue mobile, pas grand chose à signaler…

Les spécificités de la mise en page rendent plus simple la poursuite de l’utilisation du module CSS _Grid_. Mais les éléments étant répartis sur une seule direction, on aurait également pu utiliser la logique de mise en page _Flex_. Voir la [documentation](../../ressources/css/flexbox/) de Flex et les [exemples](../../exemples/#flex) associés. 

Au format A4, définira une largeur de colonne pour l’entête qui s’appliquera également au contenu.

<details markdown=1>
<summary>Voir les règles CSS pour le Web Desktop</summary>

```css
@media (min-width:60em) {
  header {
    /* une grille d’une seule colonne ; 
    les deux premières lignes se réduisent à la dimension du contenu
    la dernière ligne occupe le reste de la hauteur */
    display: grid;
    grid-template-columns: 1fr;
    grid-template-rows: min-content min-content 1fr;
    /* on force la hauteur à 100% de la hauteur du viewport (= de l’écran) */
    height: 100vh;
    /* une bordure à droite */
    border-right: 1px solid #666;
    /* l’élement reste fixe au scroll */
    position: sticky;
    top: 0;
  }
  
  header p:last-child {
    /* le dernier paragraphe est aligné en bas de la cellule */
    align-self: end;
  }
}
```
</details>


<details markdown=1>
<summary>Voir les règles CSS pour le Web Mobile</summary>

```css
@media screen and (max-width:60em) {
  header {
    /* une bordure en bas */
    border-bottom: 1px solid #666;
  }
}
```
</details>



<details markdown=1>
<summary>Voir les règles CSS pour le Print A4</summary>

```css
@media print and (min-width:15cm) {  
  header {
    /* une grille d’une seule ligne ; 
    la première colonne est définie à 4.5cm, les deux autres se partagent l’espace restant */
    display: grid;
    grid-template-columns: 4.5cm 1fr 1fr;    
  }
  header p:last-child {
    /* le dernier paragraphe est aligné en bas de la cellule */
    justify-self: end;
  }
}
```
</details>

### Le contenu, en vert 

Les `<article>` voient leur fonctionnement évoluer entre les affichages larges (A4 et Desktop) et étroits (Imprimante thermique et Mobile).

Dans les formats larges, le contenu est organisé en deux colonnes, grâce à CSS Grid. Dans les formats étroits, les `h3` sont rendus “flottants”.

<details markdown=1>
<summary>Voir les règles CSS pour le Web Desktop</summary>

```css
@media (min-width:60em) {
  /* 250px = dimensions identiques pour la marge gauche des titres et la colonne des dates */
  h2 { margin-left: 250px; }
  article {
    display: grid;
    grid-template-columns: 250px 1fr;
  }
}
```

</details>

<details markdown=1>
<summary>Voir les règles CSS pour le Web Mobile</summary>

```css
/* Règle établie dans styles-typo.css, qui s’applique au web mobile ET à l’imprimante thermique */
@media (max-width: 30em) {
  h3 {
    display: inline;
    float: left;
    padding-right: 2em;
  }
}
```

</details>

<details markdown=1>
<summary>Voir les règles CSS pour le Print A4</summary>

```css
@media print and (min-width:20cm) {  
  article {
    /* une grille d’une seule ligne et deux colonnes ; 
    la première colonne est définie à 4.5cm, les deux autres se partagent l’espace restant */
    display: grid;
    grid-template-columns: 4.5cm 1fr ;    
  }
  /* marge gauche identique à la colonne définie précédemment */
  h2 { margin: 0 0 .5cm 4.5cm; }
  /* pour condenser la mise en page */
  article { margin: 0;}
}
```

</details>

<details markdown=1>
<summary>Voir les règles CSS pour le Print Imprimante thermique</summary>

```css
@media print and (max-width:20cm) {  
  section {
    /* plus d’espace vertical pour compenser l’étroitesse */
    padding-top: 3em;
    /* une bordure ticket de caisse… */
    border-top: 1px dashed black;
  }  
}
```

</details>



[→ Voir la démo finale](demo/05.html) (redimensionnez encore la fenêtre de votre navigateur et prévisualisez l’impression) et contemplez la [feuille de style CSS associée : )](demo/styles-micro.css).

L’ensemble du code est [téléchargeable](demo-cv.zip).

## Étape 6 ! 

Cet exercice vise à comprendre les grandes logiques du glissement d’un média à l’autre, d’un format à l’autre. Un [autre exemple pas à pas](../../ressources/css/layout/step-by-step/) est disponible sur ce site, qui propose une mise en page web / mobile conventionnelle, sans aller jusqu’au print.

Les choix graphiques et typographiques produits dans cet exemple mériteraient largement d’être améliorés. Cela permettrait notamment d’ajuster le positionnement de certains éléments ou la finesse de la composition typographique. 

☞ Si les possibilités du _web to print_ / _code to print_ sont immensément étendues (elles sont parcourues dans la page [CTRL + Alt + print](../../ressources/ctrl-alt-print/)), la conception multi-support sur la base du même code source HTML est une approche relativement rare.