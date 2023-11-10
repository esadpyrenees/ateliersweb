# Héritage & cascade

Les notions d’héritage et de cascade sont deux concepts fondamentaux en CSS.

- L’héritage est associé à la manière dont les éléments du balisage HTML **héritent des propriétés** de leurs éléments parents (ancêtres) et les transmettent à leurs enfants.
- La cascade concerne les **priorités** des déclarations CSS appliquées à un document et la manière dont les règles en conflit se superposent ou non.

Les navigateurs affectent des styles par défaut aux élements (des marges et une couleur d’arrière-plan au `<body>`, une couleur pour le texte, une autre pour les liens (`<a>`), du gras pour les `<h1>`, `<h2>`, etc.) qu’on va pouvoir modifier en utilisant les principes de cascade et d’héritage.

## Propagation de la valeur

Si l’on veut changer la couleur du texte d’une page, il serait fastidieux de spécifier une couleur pour chaque élément HTML:
```
p,
ul,
ol,
li,
h1,
h2,
h3,
h4,
h5,
h6 { color: grey; }
```

La valeur de couleur peut être héritée d’un ancêtre. Considérant que nous voulons modifier toute la page, nous choisirons l’ancêtre de tous les éléments HTML, la balise `body`:
```css
body { color: grey; }
```
Tous les éléments enfants et descendants hériteront de la valeur de cet ancêtre commun, qui englobe naturellement tous les éléments (on peut également utiliser la balise html).

## Propriétés héritées

Seules quelques propriétés CSS peuvent être héritées d’ancêtres. Ce sont principalement des propriétés de texte:

* couleur du texte : `color`
* police (famille, taille, style, graisse) : `font-family`, `font-size`, `font-style`, `font-weight`,
* hauteur de ligne : `line-height`

Certains éléments HTML n’héritent pas de leurs ancêtres. Les liens (`<a>`), par exemple, n’héritent pas de la propriété `color`.

# Priorités

Un élément HTML peut être ciblé par plusieurs règles CSS. Prenons un simple paragraphe, par exemple:
```html
<p class="message" id="introduction">
  Le CSS, c’est fabuleux
</p>
```
On peut modifier ce paragraphe simplement en utilisant son nom de balise:
```
p { color: blue; }
```

Ou nous pouvons utiliser son nom de classe:
```
.message { color: green; }
```

Ou nous pouvons utiliser son identifiant:
```
#introduction { color: red; }
```

Étant donné que le navigateur ne peut choisir qu’une couleur à appliquer à ce paragraphe, il lui appartient de choisir la règle CSS prioritaire par rapport aux autres. C’est ce que l’on nomme la “priorité” CSS (ou sa “spécificité”).

Dans notre exemple, si ces trois déclarations étaient présentes dans le style CSS du document, le paragraphe serait rouge car un sélecteur `#id` est plus spécifique et donc plus important que les autres sélecteurs.

## Ordre des règles CSS

Si des sélecteurs similaires se trouvent dans votre CSS, le dernier défini sera prioritaire.
```
p { color: green; }
p { color: red; }
/* Les paragraphes seront rouges */
```
## Conflits

Les différents sélecteurs (génériques, classes ou identifiants) ont des “scores” de spécificité différents que les navigateurs appliquent pour résoudre les conflits.

La règle `#introduction { color: red; }` est plus spécifique que les autres car les identifiants doivent être uniques dans une page Web et ne peuvent donc cibler qu’un seul élément. `.message { color: green; }` peut cibler n’importe quel élément HTML avec un attribut `class="message"` et est par conséquent moins spécifique. De même pour `p {color: blue;}` qui peut cibler n’importe quel paragraphe HTML.




[→ Les unités](../units/){.bigbutton}

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
