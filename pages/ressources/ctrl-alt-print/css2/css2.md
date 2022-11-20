# CSS print

Les mécanismes d’impression sont prévus en CSS depuis la [version 2.1](https://www.w3.org/TR/CSS2/page.html) du langage, dont les premières recommandations remontent à 2004.
Les règles évoquées ci-dessous fonctionnent plus ou moins bien selon les navigateurs. C’est dans l’objectif de pallier ces approximations que _Paged.js_ a été conçu.

Si ces simples règles CSS permettent de générer des impressions simples, des documents plus complexes ou multi-pages seront plus aisément traités via [Paged.js](../pagedjs).

Actuellement, en contexte *web to print*, il est préférable d’utiliser [Ungoogled Chromium](https://github.com/Eloston/ungoogled-chromium#downloads) ou [Chromium](https://download-chromium.appspot.com/) (à défaut, M$ Edge ou G👀gle Chrome)


## Principes

Intégrer une feuille de style dont les règles ne seront appliquées qu’à l’impression :
```html
<link  rel="stylesheet" href="print.css" media="print">
```
*Ou bien* déterminer une `media-query` print dans le fichier CSS :
```css
@media print {
  /* styles réservés à l’impression */
}
```


Déterminer la taille de la page :
```css
@media print {
    @page { size: A4 landscape; }
    /* ou pour une affiche / poster A3 */
    @page { size: A3 portrait; }
    /* ou pour un A5 */
    @page { size: 148mm 210mm; }
}
```

On peut cibler des pages spécifiques avec les sélecteurs `:left` et `:right`. La première page peut être ciblée avec `:first`, les pages vierges avec `:blank` :

```css
@page :first { margin-top: 4cm; }
@page :left { margin-right: 8cm; }
@page :right { margin-left: 8cm; }
```
Pour mieux maîtriser la pagination du flux du contenu, il faut utiliser les règles `break-*` et `page-break-*`:
```css
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

### Afficher ou masquer des éléments selon le média (écran / print)

```css
/* appliquer la classe .print pour n'afficher des éléments qu’à l'impression,
appliquer la classe .screen pour n'afficher des éléments qu’à l'écran */

/* en contexte écran, masque le colophon et les éléments .print */
#colophon,
.print { display:none; }

/* en contexte print… */
@media print {
    .screen { display: none; } /* masque les éléments .screen */
    .print { display: block; } /* affiche les éléments .print */
    /* on peut également masquer ou afficher des éléments individuellement : */
    #nav { display: none; }
    #colophon { display: flex; }
}


```

### Trucs et astuces 

Éviter les veuves et orphelines :
```css
p {
    /* minimume deux lignes présentes sur la page, au début ou à la fin d’un paragraphe */
    orphans: 2;
    widows: 2;
}
```
_Quick tip_ pour des contours continus :
```css
section {
    /* pour que le contour de la section soit complet sur chaque page */
    border: 0.5pt solid;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
}
```
