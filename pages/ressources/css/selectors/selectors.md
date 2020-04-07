# Sélecteurs

Les sélecteurs CSS définissent les éléments auxquels on souhaite appliquer du style. Ils sont l’équivalent de la flèche de sélection d’Illustrator ou d’InDesign : ils permettent de *sélectionner* un élément avant de lui appliquer une modification de style.

## Sélecteurs génériques

Le ciblage des balises HTML génériques est simple ; on utilise simplement le nom de la balise.
```css
a { /* Links */ }
p { /* Paragraphes */ }
ul { /* Listes non ordonnées */ }
li { /* Éléments de liste */ }
```

## Sélecteurs descendants

On peut vouloir être plus spécifique et ne cibler que les éléments contenus **à l’intérieur** d’un autre élément :

```css
header a {
  font-style : italic
}
```

Ici, les liens `<a>` contenus dans le `<header>` seront italicisés.

## Les classes

On ne souhaite pas forcément attribuer un style identique à tous les paragraphes ou à tous les titres. Il faut donc pouvoir les différencier.

De tous les attributs HTML, l’attribut `class` est le plus important pour CSS. Il permet de définir un groupe d’éléments HTML que nous pouvons cibler spécifiquement. Il suffit de mettre un point `.` devant le nom de la classe que l’on veut utiliser:

```css
.date {
  color: pink;
}
```

On peut utiliser n’importe quel nom pour votre classe CSS, à condition qu’elle ne commence pas par un nombre. Il est préférable d’éviter les accents…

Le sélecteur de classe `.date` ciblera tous les éléments HTML dotés de l’attribut class = "date". Ainsi, les éléments HTML suivants seront tous affectés :

```html
<p class="date">
    Aujourd’hui
</p>
<p>
  L’inauguration aura lieu le <em class="date">samedi 9 novembre</em>.
</p>
```

## Les identifiants

On peut également utiliser l’attribut `id` dans le code HTML et le cibler avec un croisillon (qui n’est pas un “dièse” ♯, ni un “hashtag”) dans le code CSS.

⚠️ Attention, les identifiants sont uniques dans une page Web. Il ne peut y avoir qu’un seul identifiant `id="truc"` dans une page.
```css
#logo { color: orange; }
```
```html
<h1 id="logo">LOGO</h1>
```

## Sélecteurs de pseudo-classes

Les éléments HTML peuvent avoir différents états. Le cas le plus fréquent est lorsque l’on survole un lien. En CSS, il est possible d’appliquer un style différent lorsqu’un tel événement se produit.

Les sélecteurs de pseudo-classes sont attachés aux sélecteurs habituels et commencent par un signe deux-points :
```css
a {
   color: blue;
}

a:hover {
   color: red;
}
```



[→ Héritage](../inheritance/){.bigbutton}

## Autres sélecteurs utiles

### Sélecteurs d’attribut

Sélectionne des éléments via leurs attributs :

```css
[data-value] { /* L’attribut existe */ }
[data-value="foo"] { /* L’attribut a cette valeur */ }
[data-value*="foo"] { /* La valeur de l’attribut contient “foo” */ }
[data-value^="foo"] { /* La valeur de l’attribut commence par “foo” */ }
[data-value$="foo"] { /* La valeur de l’attribut finit par “foo” */ }
/* par exemple, pour les liens externes sans besoin de class */
a[href^="http"]::before { content: "↗ "; }
```

### Sélecteur adjacent

Sélectionne les éléments adjacents / qui suivent directement un autre élément :

```css
/* les <p> précédés par un autre <p> */
p + p { margin: 0; text-indent:2em; }
/* les <p> précédés par un <h1> */
h1 + p { margin-top: 2em; }
```
### Sélecteur négatif

Exclut de la sélection un autre sélecteur :

```css
/* tous les articles qui n’ont pas class="video" */
article:not(.video){ font-size: 2em; }
```

### Sélecteurs d’ordre

Permet de sélectionner les éléments en fonction de leur ordre dans le code-source, vis à vis de leur élément parent :

```css
li:first-child { /* le premier élément de la liste */ }
li:last-child { /* le dernier élément de la liste */ }
li:nth-child(3) { /* le troisième élément de la liste */ }
li:nth-child(4n) { /* le quatrième, le huitième, le douzième… */ }
li:nth-child(4n + 3) { /* le septième, le dixième, le treizième… */ }
```

Ce sélecteur possède une version plus précise qui peut réduire la sélection à un type d’élément :

```css
h2:first-of-type { /* le premier h2 */ }
h2:last-of-type { /* le dernier h2 */ }
h2:nth-of-type(3) { /* le troisième h2, etc. */ }
```

Pour tester `nth-child`, voir chez [Lea Verou](http://lea.verou.me/demos/nth.html).

## Sélecteurs de pseudo-éléments

Les sélecteurs de pseudo-éléments permettent d’injecter du contenu avant ou après le contenu d’une balise html.

```css
a.external-url::before {
  /* signale les liens externes par une flèche */
  content: "↗ "
}
@media print {
  /* ajoute le href des liens entre crochets à la suite de chaque lien dans le contexte print */
  a::after { content: " [" attr( href) "]" }
}

```

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
