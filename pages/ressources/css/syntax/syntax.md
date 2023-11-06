
# Syntaxe

## Appliquer du style
Il existe trois façons d’ajouter un style CSS au contenu HTML :

1. Les **styles en ligne**, tels que, dans le `<body>` du code HTML:
```html
<h2 style="color: green;">Mon titre </h2>
```
Cela fonctionne mais doit être répliqué pour tous les éléments avec cette propriété (tous les h2 doivent être édités) et rend votre code HTML illisible.

2. **CSS interne**, dans le `<head>` du code HTML:
```html
<style>
     h2 { color: green; }
</style>
```
    C’est mieux parce que l’on n’a pas à se répéter, mais cela restreint le style à une seule page. Il est préférable de n’utiliser qu’une seule feuille de style pour toutes les pages d’un site. Toute mise à jour est ainsi répliquée sur toutes les pages, et on conserve une homogénéité sur l’ensemble du site.

3. **CSS externe** : un fichier CSS dédié contenant tous les styles. On lie toutes les pages HTML du site à un seul fichier CSS dans le `<head>` des pages.
```html
<link href="css/styles.css" rel="stylesheet" type="text/css">
```
Un seul fichier CSS est généralement suffisant pour l’ensemble d’un site web. Plusieurs fichiers ne sont utiles que dans le cas où le fichier principal devient trop long ou complexe, ou dans le cas d’ajouts liés à l’intégration de plugins javascript ou à l’utilisation de librairies CSS.

## qui { quoi: comment; }

Le but de CSS est de définir la mise en page et le style de vos éléments HTML. La syntaxe est très simple:
```css
/* Une règle CSS */
sélecteur { propriété: valeur; }
```
On peut le lire comme :
```css
qui { quoi: comment; }
```

CSS est un processus en trois phases:

* le sélecteur définit qui est ciblé, quel(s) élément(s) HTML
* la propriété définit la caractéristique à modifier
* la valeur définit comment modifier cette caractéristique

Ce bloc entier (sélecteur / propriété / valeur) est une règle CSS.

![](/web/assets/img/css-intro-syntaxe.png)

## Exemple rapide

Supposons que l’on souhaite changer la couleur de toutes les citations.
```html
<blockquote> Le ciel est bleu </blockquote>
```

Le nom de la balise, sans les `< >`, est `blockquote`. Il existe une relation directe entre le nom de la balise et le sélecteur :
```css
blockquote { background: orange; }
```
<style>blockquote { background: orange; }</style>
<blockquote> Le ciel est bleu </blockquote>

On peut ajouter de nouvelles *déclarations* :
```
blockquote {
  background: orange;
  color: white;
}
```

Chaque déclaration est placée sur sa propre ligne. Comme en HTML, les espaces ne sont pas signifiants. Ce sont les caractères spéciaux `{ }`, `:` et `;` qui importent. On peut donc formater le code CSS à volonté grâce à des tabulations, des commentaires et des sauts de ligne pour le rendre plus lisible.

En CSS, un commentaire s’écrit sous la forme `/* commentaire */` :
```css
/* De jolies citations */
blockquote { background: orange; }

```

La balise HTML `<blockquote>` est un élément de type `block` [*](../box/#display) ; il a une contrepartie `inline`: `<q>`. Si l’on veut créer un lien visuel entre elles, on peut ajouter un sélecteur à la règle :

```css
blockquote, q {
  background: orange;
  color: white;
}
```

[→ Sélecteurs](../selectors/){.bigbutton}
