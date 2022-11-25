# Rattrapage

Je ne ferai pas ça souvent, mais le cours de webdesign de ce matin était important.
Beaucoup parmi vous, pour de bonnes ou de mauvais raisons, n’ont pas pu y assister. Aussi, je récapitule ci-dessous les grandes lignes de ce qu’on a vu. (je fais ça vite, il y aura des fautes d’orthographe. En échange de mon temps, passé à ça, je veux bien que vous aussi, vous preniez le temps de lire, de cliquer et de chercher…)

On a commencé par écouter [The Ex](https://www.youtube.com/watch?v=dzFUjOksyME), [parce que](https://www.youtube.com/watch?v=44lLtURpDQ8).

## Peck Ferpuction
Le projet en cours est [Puck Ferpection](https://ateliers.esad-pyrenees.fr/web/pages/exemples/peck-ferpuction/). À la suite de l’approche [NeoGeo](https://ateliers.esad-pyrenees.fr/web/pages/projets/neogeo/), il nous permet de faire la transition entre la composition / animation de formes géométriques et celle du texte. L’objectif est de mettre en page une citation, dans une page web. L’enjeu est de se positionner entre deux figures “opposées” du design graphique internationale, James Victore et Maximilien Vox.

### Histoire en vitesse
On a fait un parcours rapide de quelques moments importants de l’histoire du design graphique, en citant :

- William Morris (arts & craft) et l’invention du design en réponse à la révolution industrielle naissante
- László Moholy-Nagy, enseignant du Bauhaus, figure essentielle de la théorie du design graphique. Lire (absolument) [Faire du design, c’est penser en termes de relations](https://ateliers.esad-pyrenees.fr/web/pages/exemples/text/).
- À l’appui de la notion de _modernisme_, le Bauhaus. Écouter la [série sur France Culture](https://www.radiofrance.fr/franceculture/podcasts/serie-architecture-design-le-bauhaus-a-100-ans). Quelques membres du Bauhaus : Vassily Kandinsky, Paul Klee, Marcel Breuer. Mais aussi Anni Albers, Ise Gropius…
- Les affiches photo et typo-graphiques de Josef Muller Brockmann et le “style international” (suisse !) (voir aussi Max Bill, Emil Ruder, Karl Gerstner)
- vite fait, la transition (Wofgang Weingart) vers le “post-modernisme” (voir le bouquin de Rick Poynor à la bibliothèque de l’école : Design graphique et post-modernisme)
- Learning from Las Vegas, livre fondamental de Robert Venturi et Denise Scott Brown.
- La fonderie [Emigre](https://www.emigre.com/) et David Carson avec la revue Ray Gun.
- les fontes folles de Benoît Bodhuin

Histoire d’opposer (de montrer l’écart entre) Maximilien Vox (la typo à l’ancienne, avec ses règles et sa science) et les approches expressivistes et décomplexées des partisans de l’imperfection (James Victore, parmi tant d’autres…).

Une de mes définitions : « Le design graphique est un langage dont la richesse réside dans la tension qu’il entretient entre art et communication, entre la mise en forme d’un matériau informatif et la création d’une vibration esthétique et sensible »

## Objectif du projet

Mettre en page = composer – au sens de répartir spatialement, de mettre en tension ou en harmonie – des mots dans un rectangle.

## Typographie

Comment choisir une famille de caractères typographiques : https://ateliers.esad-pyrenees.fr/web/pages/references/typo/ (Beaucoup de fonderies opensource aujourd’hui.  Mention de [Libre fonts by Womxn](https://www.design-research.be/by-womxn/) et de la typothèque inclusive de [Bye Bye Binary](https://typotheque.genderfluid.space/).

Comment intégrer une police (ses variantes, graisses, styles) dans une page web : https://ateliers.esad-pyrenees.fr/web/pages/ressources/typo/webfonts/

On a rapidement évoqué les fontes _variables_ : https://ateliers.esad-pyrenees.fr/web/pages/ressources/typo/variables/ (cf. [Chee](https://v-fonts.com/fonts/cheee-variable)). Voir aussi la hack typographique de Wikipedia par Rpahaël Bastide et Jérémie Landes : https://fungal.page/ (tpo accessible sur Velvetyne).

### Exemples en ligne 
https://ateliers.esad-pyrenees.fr/web/pages/exemples/#positions    
https://ateliers.esad-pyrenees.fr/web/pages/exemples/positions/    
https://ateliers.esad-pyrenees.fr/web/pages/exemples/peck-ferpuction/    
Version alternative : https://ateliers.esad-pyrenees.fr/web/pages/exemples/peck-ferpuction/alt.html

À toutes fins utiles, on rappellera que les exemples sont téléchargeables (bouton ☻ en haut à droite) et que vous êtes invités à vous les approprier.

### Exemple live

Le code écrit ensemble. Voir en [ligne ici](https://codepen.io/esadpyrenees/pen/jOKxRYw).

Le contenu du HTML (balise \<body\>)
```html
<div class="first-word">
  Hell<span class="o1">o</span>  
</div> 

<div class="second-word">
  W<span class="o2">o</span>rld
</div>
```
Le contenu de la CSS
```CSS

@font-face {
  /* la famille est "Compagnon" */
  font-family: "Compagnon";
  /* le chemin vers le fichier, normalement un chemin relatif :*/
  /* src: url("fonts/Compagnon-Roman.woff2"); */
  /* mais pour que ça fonctionne sur codepent, un chemin absolu*/
  src: url("https://assets.codepen.io/4340165/Compagnon-Roman.woff2");
  /* description de la variante : romain (= pas italique), regular */
  font-style:normal;
  font-weight: normal;
}

@font-face {
  font-family: "Compagnon";
  src: url("https://assets.codepen.io/4340165/Compagnon-Bold.woff2");
  /* description de la variante : italic, bold */
  font-style: italic;
  font-weight: bold;
}

@font-face {
  font-family: "Compagnon";
  /* description de la variante : romain, bold */
  src: url("https://assets.codepen.io/4340165/Compagnon-Medium.woff2");
  font-style: normal;
  font-weight: bold;
}

body {
  font-family: "Compagnon";
  font-size: 10vw;
}

/* pour mettre en forme des éléments du html, il faut que ceux-ci aient 
des attributs (ici, une class) permettant de les cibler, les sélectionner */

.o1 {
  color: red;
}
.o2 {
  color: blue;
}

div {
  /* tous les div */
  position: absolute;
}
.first-word { 
  top:0;
  left: 0
}
.second-word { 
   bottom: 0;
   right: 0;
}
```