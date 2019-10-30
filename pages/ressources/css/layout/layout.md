# Mise en page

Au cours du temps, et particulièrement depuis l’avènement de CSS et de la navigation mobile, les principes et les outils de mise en page ont beaucoup évolué sur le Web.

## Flexbox

Flexbox est principalement conçu pour déterminer la mise en page d’éléments dans un contexte **unidimensionnel** (une ligne ou une colonne).
Il est idéal pour construire des barres de navigation, pour centrer un élément dans son conteneur ou pour aligner des éléments. Flexbox fonctionne idéalement avec Grid.

Consulter la [**documentation sommaire**](../../flexbox/) et voir quelques exemples avec flexbox dans [la section dédiée](../../../exemples/#flex).

## Grid

Grid est la dernière innovation de CSS pour la mise en page. C’est un module puissant et potentiellement complexe qui représente sans aucun doute l’avenir de la mise en page pour le Web. Il est dédié aux mise en page multidimensionnelles (lignes **et** colonnes). Grid fonctionne idéalement avec Flexbox.

Consulter la [**documentation sommaire**](../../grid/) et voir quelques exemples avec flexbox dans [la section dédiée](../../../exemples/#flex).


## Propriétés `float` et `inline-block`

Les propriétés CSS `float:left|right` et `display:inline-block` ont ensuite permis de créer des mise en pages plus souples, et de retrouver la dimension sémantique. Ces techniques, bien que souffrant de quelques limites, sont matures et efficientes, mais ont été supplantées depuis par les modules CSS Grid et Flexbox.

Voir l’[archive de la documentation sur `float` et `inline-block`](../floats/).


## Tableaux, lignes et cellules

Avant CSS, on utilisait les éléments `<table>`, leurs `<tr>` (lignes) et `<td>` (cellules) pour mettre en page les sites web. Pour créer des espaces dans la mise en page, on utilisait des images transparentes (`spacer.gif`) en forçant leurs tailles. C’était douloureux, inefficace et non-sémantique au possible (les `<table>` sont dédiées à l’affichage de données tabulaires).

Voir [le site de Libération en 2000, sur web.archive.org](https://web.archive.org/web/20000809010933/http://www.liberation.fr/).

## Ressources

#### Layoutland
Learn what's now possible in graphic design on the web — layout, CSS Grid, and more. A series for designers and web developers created by Jen Simmons, Mozilla Designer and Developer Advocate.

[☞ https://www.youtube.com/layoutland](https://www.youtube.com/layoutland)


## Exemples

Quelques exemples de mise en page sont disponibles dans [la section dédiée](../../../exemples/#layout)

—

<small>Contenu librement adapté et largement emprunté à [Jeremy Thomas](https://marksheet.io) et à [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license Creative Commons BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
