# Mise en page

Au cours du temps, et particulièrement depuis l’avènement de CSS et de la navigation mobile, les principes et les outils de mise en page ont beaucoup évolué sur le Web. Plusieurs outils et techniques nous permettent aujour’hui de concevoir des mises en page pour le web.

## Flexbox

Flexbox est principalement conçu pour déterminer la mise en page d’éléments dans un contexte **unidimensionnel** (une ligne ou une colonne).
Il est idéal pour construire des barres de navigation, pour centrer un élément dans son conteneur ou pour aligner des éléments. 

<svg width="650" height="50" viewBox="0 0 650 50" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="649" height="49" stroke="black"/>
<path d="M131 0V50" stroke="black"/>
<path d="M344 0V50" stroke="black"/>
<path d="M450 0V50" stroke="black"/>
<path d="M484 0V50" stroke="black"/>
<path d="M500 0V50" stroke="black"/>
<circle cx="334" cy="10" r="4" fill="black"/>
<circle cx="334" cy="25" r="4" fill="black"/>
<circle cx="394" cy="25" r="4" fill="black"/>
<circle cx="534" cy="25" r="4" fill="black"/>
<circle cx="615" cy="25" r="4" fill="black"/>
<circle cx="334" cy="40" r="4" fill="black"/>
</svg>

Consulter la [**documentation sommaire**](../../flexbox/) et voir quelques exemples avec flexbox dans [la section dédiée](../../../exemples/#flex).

## Grid

Grid est la dernière innovation de CSS pour la mise en page. C’est un module puissant et potentiellement complexe qui représente sans aucun doute l’avenir de la mise en page pour le Web. Il est dédié aux mise en page multidimensionnelles (lignes **et** colonnes). 

<svg width="650" height="277" viewBox="0 0 650 277" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="649" height="276" stroke="black"/>
<rect x="131.5" y="0.5" width="6" height="276" stroke="black"/>
<rect x="403.5" y="0.5" width="6" height="276" stroke="black"/>
<rect x="-0.5" y="-0.5" width="6" height="649" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 649 42)" stroke="black"/>
<rect x="-0.5" y="-0.5" width="6" height="649" transform="matrix(4.37114e-08 -1 -1 -4.37114e-08 649 153)" stroke="black"/>
<rect x="515.5" y="0.5" width="6" height="276" stroke="black"/>
<line x1="152" y1="56.5" x2="348" y2="56.5" stroke="black"/>
<line x1="152" y1="18.5" x2="244" y2="18.5" stroke="black"/>
<line x1="89" y1="18.5" x2="115" y2="18.5" stroke="black"/>
<line x1="538" y1="18.5" x2="564" y2="18.5" stroke="black"/>
<line x1="575" y1="18.5" x2="619" y2="18.5" stroke="black"/>
<line x1="423" y1="56.5" x2="499" y2="56.5" stroke="black"/>
<line x1="152" y1="63.5" x2="348" y2="63.5" stroke="black"/>
<line x1="423" y1="63.5" x2="499" y2="63.5" stroke="black"/>
<line x1="152" y1="70.5" x2="348" y2="70.5" stroke="black"/>
<line x1="423" y1="70.5" x2="499" y2="70.5" stroke="black"/>
<line x1="152" y1="77.5" x2="348" y2="77.5" stroke="black"/>
<line x1="423" y1="77.5" x2="499" y2="77.5" stroke="black"/>
<line x1="152" y1="84.5" x2="348" y2="84.5" stroke="black"/>
<line x1="423" y1="84.5" x2="499" y2="84.5" stroke="black"/>
<line x1="152" y1="91.5" x2="348" y2="91.5" stroke="black"/>
<line x1="152" y1="98.5" x2="348" y2="98.5" stroke="black"/>
<line x1="152" y1="105.5" x2="348" y2="105.5" stroke="black"/>
<line x1="152" y1="112.5" x2="348" y2="112.5" stroke="black"/>
<line x1="152" y1="119.5" x2="348" y2="119.5" stroke="black"/>
<line x1="152" y1="126.5" x2="348" y2="126.5" stroke="black"/>
<line x1="152" y1="133.5" x2="348" y2="133.5" stroke="black"/>
<line x1="152" y1="186.5" x2="348" y2="186.5" stroke="black"/>
<line x1="152" y1="193.5" x2="348" y2="193.5" stroke="black"/>
<line x1="152" y1="200.5" x2="348" y2="200.5" stroke="black"/>
<line x1="152" y1="207.5" x2="348" y2="207.5" stroke="black"/>
<line x1="152" y1="214.5" x2="348" y2="214.5" stroke="black"/>
<line x1="152" y1="221.5" x2="348" y2="221.5" stroke="black"/>
<line x1="152" y1="228.5" x2="348" y2="228.5" stroke="black"/>
<line x1="152" y1="235.5" x2="348" y2="235.5" stroke="black"/>
<line x1="152" y1="242.5" x2="348" y2="242.5" stroke="black"/>
<line x1="152" y1="249.5" x2="348" y2="249.5" stroke="black"/>
<line x1="152" y1="256.5" x2="348" y2="256.5" stroke="black"/>
<line x1="152" y1="263.5" x2="348" y2="263.5" stroke="black"/>
</svg>

Consulter la [**documentation sommaire**](../../css/grid/) et voir quelques exemples avec flexbox dans [la section dédiée](../../../exemples/#flex).


## Relative et absolue

Les positionnements absolus et relatifs d’éléments offrent une très grande souplesse pour organiser des éléments dans l’espace.

Ils permettent à des éléments positionnés en valeurs absolues ou relatives de “sortir du flux”. Ces éléments deviennent alors des “calques” que l’on peut dimensionner et placer dans l’espace indépendemment les uns des autres.

<svg width="650" height="277" viewBox="0 0 650 277" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="0.5" y="0.5" width="649" height="276" stroke="black"/>
<path d="M40.5 38.5H139.5V137.5H40.5V38.5Z" stroke="black"/>
<path d="M325.5 31.5H615.5V238.5H325.5V31.5Z" stroke="black"/>
<path d="M90.5 89H189.5V188H90.5V89Z" stroke="black"/>
<circle cx="325" cy="139" r="49.5" stroke="black"/>
<line x1="344.897" y1="154.511" x2="491.897" y2="123.511" stroke="black"/>
</svg>

Consulter la [**documentation sommaire**](../../css/positions/) et voir quelques exemples avec `position: absolute` ou `position: relative` dans [la section dédiée](../../../exemples/#positions).



## Old school & future-proof

### Propriétés `float` et `inline-block`

Les propriétés CSS `float:left|right` et `display:inline-block` ont ensuite permis de créer des mise en pages plus souples, et de retrouver la dimension sémantique. Ces techniques, bien que souffrant de quelques limites, sont matures et efficientes, mais ont été supplantées depuis par les modules CSS Grid et Flexbox.

Voir l’[archive de la documentation sur `float` et `inline-block`](../floats/).


### Tableaux, lignes et cellules

Avant CSS, on utilisait les éléments `<table>`, leurs `<tr>` (lignes) et `<td>` (cellules) pour mettre en page les sites web. Pour créer des espaces dans la mise en page, on utilisait des images transparentes (`spacer.gif`) en forçant leurs tailles. C’était douloureux, inefficace et non-sémantique au possible (les `<table>` sont dédiées à l’affichage de données tabulaires).

Voir [le site de Libération en 2000, sur web.archive.org](https://web.archive.org/web/20000809010933/http://www.liberation.fr/).

## Ressources

#### Layoutland
Learn what's now possible in graphic design on the web — layout, CSS Grid, and more. A series for designers and web developers created by Jen Simmons, Mozilla Designer and Developer Advocate.

[☞ https://www.youtube.com/layoutland](https://www.youtube.com/layoutland)


## Exemples

Quelques exemples de mise en page sont disponibles dans [la section dédiée](../../../exemples/#layout)

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
