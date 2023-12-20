# Mise en page

**La mise en page consiste en la mise en relation des éléments graphiques présents sur une surface et en la gestion de l’espace entre ces éléments.**

Au cours du temps, et particulièrement depuis l’avènement de CSS et de la navigation mobile, les principes et les outils de mise en page ont beaucoup évolué sur le Web. Plusieurs outils et techniques nous permettent aujour’hui de concevoir des mises en page pour le web.

Le web est un média *fluide* dans lequel la taille de l’écran, la variabilité des contenus, le temps et l’interactivité ont des impacts sur la présence des éléments d’une page. Cela impose une pensée de la mise en page comme un système dynamique. Le terme “responsive” (ou adaptatif) rassemble les approches nécessaires à la conception de telles mise en pages.

## Comment choisir ?


Pour déterminer quelles solutions techniques doivent être adoptées en réponse à une intention de mise en page, il est souhaitable de déterminer prioritairement les grands principes, puis d’affiner progressivement les logiques en fonction des relations souhaitées entre les éléments.

[→ Exemple pratique pas à pas](step-by-step){.bigbutton}



## Flexbox

Flexbox est principalement conçu pour déterminer la mise en page d’éléments dans un contexte **unidimensionnel** (une ligne ou une colonne).
Il est idéal pour construire des barres de navigation, pour centrer un élément dans son conteneur ou pour aligner des éléments. 

![flexbox](flex.svg)

Consulter la [**documentation sommaire**](../flexbox/) et voir quelques exemples avec _flex_ dans [la section dédiée](../../../exemples/#flex).

## Grid

Grid est la dernière innovation de CSS pour la mise en page. C’est un module puissant –potentiellement complexe– qui est une des plus grandes évolutions de la mise en page pour le Web. Il est dédié aux mise en page multidimensionnelles (lignes **et** colonnes). 

![grid](grid.svg)


Consulter la [**documentation sommaire**](../../css/grid/) et voir quelques exemples avec _grid_ dans [la section dédiée](../../../exemples/#flex).


## Relative et absolue

Les positionnements absolus et relatifs d’éléments offrent une très grande souplesse pour organiser des éléments dans l’espace.

Ils permettent à des éléments positionnés en valeurs absolues ou relatives de “sortir du flux”. Ces éléments deviennent alors des “calques” que l’on peut dimensionner et placer dans l’espace indépendemment les uns des autres.

![positions](positions.svg)

Consulter la [**documentation sommaire**](../../css/positions/) et voir quelques exemples avec `position: absolute` ou `position: relative` dans [la section dédiée](../../../exemples/#positions).




## Exemples de mise en page

Des exemples de mise en page, utilisant `grid`, `flex` ou `position` sont disponibles dans [la section dédiée](../../../exemples/#layout).



## Old school

Avant l’avènement de flex et grid, d’autres techniques de mise en page étaient utilisées. 
<details>

<summary>Voir les archives</summary>

<div  markdown="1">


### Tableaux, lignes et cellules

Avant CSS, on utilisait les éléments `<table>`, leurs `<tr>` (lignes) et `<td>` (cellules) pour mettre en page les sites web. Pour créer des espaces dans la mise en page, on utilisait des images transparentes (`spacer.gif`) en forçant leurs tailles. C’était douloureux, inefficace et non-sémantique au possible (les `<table>` sont dédiées à l’affichage de données tabulaires).

Voir [le site de Libération en 2000, sur web.archive.org](https://web.archive.org/web/20000809010933/http://www.liberation.fr/).

### Propriétés `float` et `inline-block`

Les propriétés CSS `float:left|right` et `display:inline-block` ont ensuite permis de créer des mise en pages plus souples, et de retrouver la dimension sémantique. Ces techniques, bien que souffrant de nombreuses limites, sont matures et efficientes, mais ont été supplantées depuis par les modules CSS Grid et Flexbox.

Voir l’[archive de la documentation sur `float` et `inline-block`](../floats/).

</div>

</details>