# Texte

#### Les ressources liées à la mise en forme du texte sont nombreuses. {.blink}

Ci-dessous, quelques bases spécifiquement liées à CSS, qui seront volontiers complétées par un recours aux pages dédiées à la [Typographie à l’écran](../../typo/), et notamment aux questions de [Macro & micro typo](../../typo/macromicro/).

## Famille de caractères

CSS fournit plusieurs propriétés de police qui affectent directement le rendu du texte. La propriété `font-family` définit la police à utiliser.

### Familles de polices génériques

En CSS, les polices sont regroupées dans de grandes familles génériques : à empattements – ou `serif` ; sans empattements – linéales ou `sans serif` ; à chasse fixe – `monospace` ; `cursive` ou `fantasy` – à éviter

La propriété `font-family` est héritée par tous les éléments enfants HTML, on peut donc appliquer une police à l’ensemble du document HTML en l’appliquant sur l’ancêtre de tous les éléments HTML: l’élément `<body>`.

```
body {font-family: sans-serif;}
```

Avec cette règle CSS, la page Web utilisera la police sans-serif définie par l’utilisateur dans ses préférences.

# Polices Web

Pour plus de précision, on peut “installer” une fonte web depuis le fichier CSS, en utilisant les règles `@font-face`, [**décrites en détail sur la page dédiée**](../../typo/webfonts/).

Si on ne veut pas utiliser de telles fontes (pour éviter le chargement d’un fichier supplémentaire, par exemple), on peut déclarer une liste de fontes par ordre de préférence :

```
body { font-family: Helvetica, Arial, sans-serif; }
```
La page Web utilisera Helvetica à condition qu’elle soit installée sur l’ordinateur de l’utilisateur. Si Helvetica n’est pas disponible elle s’affichera en Arial, ou enfin avec la police sans empattement par défaut du navigateur.

<details markdown=1>
<summary>Jadis…</summary>

Jusqu’à la fin des années 2000, il était délicat d’intégrer à un site web d’autres familles que les polices considérées comme “sûres” (car installées sur la plupart des systèmes d’exploitation : Arial, Arial Black, Comic Sans MS, Courier New, Georgia, Impact, Times New Roman, Trebuchet MS, Verdana).

</details>

## Propriétés du texte

### Corps

Les unités de dimensions CSS servent entre autres à définir le corps du texte, la taille de la police.
```css
p { font-size: 16px; } /* en pixels */
blockquote { font-size: 2em; } /* en em (voir unités) */
.big { font-size: 8vw; } /* en vw, 1vw = 1% de la largeur de l’écran */
```


### Style

Cette propriété peut rendre votre texte en italique:
```css
h2 { font-style: italic; }
```
La valeur par défaut est `font-style: normal;`. Les balises `<em>`, `<i>`, `<blockquote>` et `<q>` sont rendues par défaut en italique.

### Graisse

Cette propriété peut rendre votre texte en gras:
```css
h2 { font-weight: bold;}
```
La valeur par défaut est `font-weight: normal;`. . Les balises `<h1>` jusqu’à `<h6>`, `<strong>` et `<b>` sont rendues par défaut en gras.

Selon la famille de polices utilisée, une gamme de graisses est disponible, allant de 100 à 900:

```css
font-weight: 100; /* Fin */
font-weight: 200; /* Extra-light */
font-weight: 300; /* Light */
font-weight: 400; /* Regular, équivalent de font-weight: normal; */
font-weight: 500; /* Medium */
font-weight: 600; /* Semi-gras */
font-weight: 700; /* Gras, équivalent de font-weight: bold; */
font-weight: 800; /* Extra-gras */
font-weight: 900; /* Ultra-gras, Black */
```


### Variantes

La propriété `font-variant` transforme le texte en petites capitales:
```css
h2 { font-variant: small-caps; }
```

### Aller plus loin

De nombreuses autres propriétés permettent de gérer avec beaucoup de finesse la typographie sur le web.
Elles sont détaillées dans la section [_Ressources / Typographie_](../../typo/).

## Interligne

La propriété `line-height`, lorsqu’elle est appliquée à un élément de niveau bloc, définit, comme son nom l’indique littéralement, la hauteur de chaque ligne. Elle peut utiliser les unités `px`, `em`, `%` ou (mieux) pas d’unité : `1.5`.

La hauteur de ligne a pour but de définir un interligne lisible pour le texte. La lisibilité dépendant de la taille du texte, il est recommandé d’utiliser une valeur _dynamique_ relative à la taille du texte. L’utilisation de `px` n’est donc pas recommandée car elle définit une valeur _statique_.

Utiliser les `px` est utile lorsque l’on souhaite aligner le texte verticalement en fonction d’un autre élément et non en fonction de la taille de la police.

* pour le corps du texte, une hauteur de ligne de 1.5 fois la taille du texte est un bon point de départ.
* pour les en-têtes, une valeur de 1 à 1.2 permet d’avoir des titres plus compacts

## Propriétés du texte

Outre les nombreuses propriétés font-\*, CSS fournit de nombreuses propriétés text-\*.

### Alignement

La propriété `text-align` doit être appliquée sur un élément de niveau bloc et définit comment son texte et ses éléments intégrés sont alignés horizontalement.
```css
body { text-align: left; }
```
Les valeurs les plus utilisées sont:

* `left` : à gauche
* `right` : à droite
* `center` : centre
* `justify` : justifier

La valeur `justify` est à manier avec précaution. Les possibilités de contrôle des césures n’étant pas encore très puissantes dans les navigateurs, l’utilisation de `justify` en particulier avec des lignes courtes peut occasionner de sérieuses difficultés de lectures et de [disgracieuses lézardes](https://fr.wikipedia.org/wiki/L%C3%A9zarde_(imprimerie)).


### “Décoration”

La propriété `text-decoration` est utilisée pour ajouter une ligne au texte, dessus, dessous ou à travers. Les valeurs possibles sont `overline`, `underline` et `line-through`. Par défaut, les liens `<a>` ont un `text-decoration: underline`.  On peut le supprimer :
```css
a { text-decoration: none; }
```
### Retrait

La propriété `text-indent` permet d’ajouter de l’espace avant la première lettre de la première ligne d’un élément de niveau bloc.

```css
blockquote { text-indent: 30px; }
```
<style>
blockquote { text-indent: 30px; }
.shadow { text-shadow: 0 2px 5px rgba(0,255,0,0.9) }
</style>
> Pour la plupart des gens, une typographie parfaite n’offre pas d’attraits esthétiques particuliers \[…\]. La conscience de servir anonymement et sans attendre de reconnaissance particulière, des œuvres de valeur et un petit nombre d’hommes optiquement réceptifs, est en général la seule récompense que reçoit le typographe pour son long apprentissage jamais achevé.  
    — Jan Tschichold

Seule la première ligne est en retrait. Si l’on souhaite décaler tout le bloc de texte, il faut des marges intérieures, le [`padding`](../box/#padding).

Comme pour la propriété `font-size`, on peut utiliser les unités `px`, `em`, etc.

### Ombre

On peut ajouter une ombre à un texte pour le rendre plus ou moins lisible…

On définit le décalage horizontal ; le décalage vertical ; le flou ; la couleur.

```
.shadow { text-shadow: 0 2px 5px rgba(0,255,0,0.9) }
```
<p class="shadow">À l’ombre des jeunes filles en fleurs </p>

Seules les valeurs x et y sont requises. Le flou par défaut est zéro, tandis que la couleur par défaut est celle du texte.

## Aller plus loin

Poursuivre l’exploration des enjeux typographiques sur le web :

[Macro & micro typo](../../typo/macromicro/){.bigbutton}
[Les caractères pour le web (webfonts)](../../typo/webfonts/){.bigbutton}
[Les fontes variables](../../typo/variables/){.bigbutton}
[Les caractères spéciaux](../../typo/caracteres/){.bigbutton}



—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et à [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
