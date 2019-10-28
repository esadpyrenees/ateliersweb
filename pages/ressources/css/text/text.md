# Texte

## Famille de caractères

CSS fournit plusieurs propriétés de police qui affectent directement le rendu du texte. La propriété font-family définit la police à utiliser.

### Familles de polices génériques

Les polices sont regroupées dans de grandes familles génériques:

- à empattements, ou `serif`
- sans empattements, linéales ou `sans serif`
- à chasse fixe, `monospace`
- scriptes, ou `cursive`, à éviter
- on évitera aussi l’usage de `fantasy`…

La propriété `font-family` est héritée par tous les éléments enfants HTML, on peut donc appliquer une police à l'ensemble du document HTML en l'appliquant sur l'ancêtre de tous les éléments HTML: l'élément `<body>`.

```
body {font-family: sans-serif;}
```

Avec cette règle CSS, la page Web utilisera la police sans-serif définie par l'utilisateur dans ses préférences.

# Polices Web

Comme on souhaite généralement qu’une page Web ait une apparence similaire sur n’importe quel ordinateur, on peut définir une police spécifique, et prévoir une ou plusieurs solutions alternatives.
```
body { font-family: Helvetica, Arial, sans-serif; }
```
La page Web utilisera Helvetica à condition qu’elle soit installée sur l’ordinateur de l’utilisateur. Si la police Arial n’est pas disponible sur l’ordinateur de l’utilisateur, elle utilisera Arial, ou encore la police sans empattement par défaut du navigateur.

Jusqu’à la fin des années 2000, il était délicat d’intégrer à un site web d’autres familles que les polices considérées comme “sûres” (car installées sur la plupart des systèmes d’exploitation : Arial, Arial Black, Comic Sans MS, Courier New, Georgia, Impact, Times New Roman, Trebuchet MS, Verdana).

On peut désormais aller beaucoup plus loin dans les choix typographiques pour le web, en utilisant les règles `@font-face`, [décrites en détail sur la page dédiée](../../typo/).


## Propriétés du texte

### Corps

Les unités de dimensions CSS servent entre autres à définir le corps du texte, la taille de la police.
```
p { font-size: 16px; }
blockquote { font-size: 2em; }
.big { font-size: 8vw; }
```
N'oubliez pas que définir une taille de police de 16px ne donnera pas à chaque lettre une hauteur de 16 px. La taille réelle de chaque lettre dépend de la famille de polices utilisée.

### Style

Cette propriété peut rendre votre texte en italique:
```
h2 { font-style: italic; }
```
La valeur par défaut est `font-style: normal;`. Les balises `<em>`, `<i>`, `<blockquote>` et `<q>` sont rendues par défaut en italique.

### Graisse

Cette propriété peut rendre votre texte en gras:
```
h2 { font-weight: bold;}
```
La valeur par défaut est `font-weight: normal;`. . Les balises `<h1>` jusqu’à `<h6>`, `<strong>` et `<b>` sont rendues par défaut en gras.

Selon la famille de polices utilisée, une gamme de graisses est disponible, allant de 100 à 900:

```
font-size: 100; / * Fin * /
font-size: 200; / * Extra-light * /
font-size: 300; / * Light * /
font-size: 400; / * Regular, équivalent de font-weight: normal; * /
font-size: 500; / * Medium * /
font-size: 600; / * Semi-gras * /
font-size: 700; / * Gras, équivalent de font-weight: bold; * /
font-size: 800; / * Extra-gras * /
font-size: 900; / * Ultra-gras, Black * /
```


### Variantes

La propriété `font-variant` transforme le texte en petites capitales:
```
h2 { font-variant: small-caps; }
```

## line-height

## font shorthand

## text properties

[→ les boîtes](../box/){.bigbutton}
