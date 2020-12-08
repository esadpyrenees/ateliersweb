# Syntaxe

Le but de CSS est de définir la mise en page et le style de vos éléments HTML. La syntaxe est très simple:
```
/* Une règle CSS */
sélecteur { propriété: valeur; }
```
On peut le lire comme :
```
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
```
<blockquote> Le ciel est bleu </blockquote>
```

Le nom de la balise, sans les `< >`, est `blockquote`. Il existe une relation directe entre le nom de la balise et le sélecteur :
```
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
```
/* De jolies citations */
blockquote { background: orange; }

```

La balise HTML `<blockquote>` est un élément de type `block` [*](../box/#display) ; il a une contrepartie `inline`: `<q>`. Si l’on veut créer un lien visuel entre elles, on peut ajouter un sélecteur à la règle :

```
blockquote, q {
  background: orange;
  color: white;
}
```

[→ Sélecteurs](../selectors/){.bigbutton}
