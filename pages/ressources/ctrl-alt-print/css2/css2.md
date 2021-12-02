# CSS print

Les mécanismes d’impression sont prévus en CSS depuis la [version 2.1](https://www.w3.org/TR/CSS2/page.html) du langage, dont les premières recommandations remontent à 2004.


## Logiques de base

Intégrer une feuille de style dont les règles ne seront appliquées qu’à l’impression
```html
<link media="print" href="print.css">
```
*Ou bien* déterminer une `media-query` print dans le fichier CSS :
```css
@media print {
  /* styles réservés à l’impression */
}
```


Déterminer une taille de page
```css
@media print {
    @page {
        size: A4 landscape;
    }
    /* ou pour une affiche */
    @page {
        size: A3 portrait;
    }
    /* ou pour un A5 */
    @page {
        size: 148mm 210mm;
    }
}
```

On peut cibler des pages spécifiques avec les sélecteurs `:left` et `:right`. La première page peut être ciblée avec `:first`, les pages vierges avec `:blank` :

```css
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
Veuves et orphelines
```css
p {
    /* minimume deux lignes présentes sur la page, au début ou à la fin d’un paragraphe */
    orphans: 2;
    widows: 2;
}
```
Contours continus
```css
section {
    /* pour que le contour de la section soit complet sur chaque page */
    border: 0.5pt solid;
    -webkit-box-decoration-break: clone;
    box-decoration-break: clone;
}
```
