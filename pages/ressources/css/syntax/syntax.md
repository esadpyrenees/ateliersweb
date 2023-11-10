
# Démarrer

## Appliquer du style
Il existe trois façons d’ajouter un style CSS au contenu HTML :


1\. **CSS externe** : un fichier CSS, nommé `cequevousvcoulez.css`. On lie toutes les pages HTML du site à une seule feuille de style grâce à une balise `<link>` dans le `<head>` du document.
```html
<html>
  <head>
    <title>Document</title>
    <!-- ici, le fichier “styles.css” est stockée dans un dossier “css” -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    …
  </body>
</html>
```

<details markdown=1>

<summary>Pourquoi une seule CSS alors qu’on a plusieurs pages ?</summary>

<div>
Un seul fichier CSS est généralement suffisant pour l’ensemble d’un site web. Toute modification formelle est ainsi répliquée sur toutes les pages, et on conserve une homogénéité sur l’ensemble du site. Plusieurs fichiers ne sont utiles que dans le cas où le fichier principal devient trop long ou complexe.

Pour distinguer des éléments selon les pages dans lesquelles ils se trouvent, on utilise des `class`. Voir [les sélecteurs](../selectors/#class).
</div>

</details>

2\. Les **styles en ligne**, tels que, dans le `<body>` du code HTML (à réserver à des modifications ponctuelles, ou à l’écriture de styles depuis javascript):
```html
<h2 style="color: green;">Mon titre </h2>
```

3\. **CSS interne**, dans le `<head>` du code HTML (de telles déclarations sont à réserver aux tests rapides, ou à des modifications ponctuelles d’une page) :
```html
<style>
     h2 { color: green; }
</style>
```



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
