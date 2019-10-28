# Sélecteurs

Les sélecteurs CSS définissent les éléments auxquels on souhaite appliquer du style. Ils sont l’équivalent de la flèche de sélection d’Illustrator ou d’InDesign : ils permettent de *sélectionner* un élément avant de lui appliquer une modification de style.

## Sélecteurs génériques

Le ciblage des balises HTML génériques est simple ; on utilise simplement le nom de la balise.
```
a { /* Links */ }
p { /* Paragraphes */ }
ul { /* Listes non ordonnées */ }
li { /* Éléments de liste */ }
```

## Sélecteurs descendants

On peut vouloir être plus spécifique et ne cibler que les éléments contenus **à l’intérieur** d’un autre élément :

```
header a {
  font-style : italic
}
```

Ici, les liens `<a>` contenus dans le `<header>` seront italicisés.

## Les classes

On ne souhaite pas forcément attribuer un style identique à tous les paragraphes ou à tous les titres. Il faut donc pouvoir les différencier.

De tous les attributs HTML, l’attribut `class` est le plus important pour CSS. Il permet de définir un groupe d’éléments HTML que nous pouvons cibler spécifiquement. Il suffit de mettre un point `.` devant le nom de la classe que l’on veut utiliser:

```
.date {
  color: pink;
}
```

On peut utiliser n’importe quel nom pour votre classe CSS, à condition qu’elle ne commence pas par un nombre. Il est préférable d’éviter les accents…

Le sélecteur de classe `.date` ciblera tous les éléments HTML dotés de l’attribut class = "date". Ainsi, les éléments HTML suivants seront tous affectés :

```
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
```
#logo { color: orange; }
```
```
<h1 id="logo">LOGO</h1>
```

## Sélecteurs de pseudo-classes

Les éléments HTML peuvent avoir différents états. Le cas le plus fréquent est lorsque l’on survole un lien. En CSS, il est possible d’appliquer un style différent lorsqu’un tel événement se produit.

Les sélecteurs de pseudo-classes sont attachés aux sélecteurs habituels et commencent par un signe deux-points :
```
a {
   color: blue;
}

a:hover {
   color: red;
}
```


[→ Héritage](../inheritance/){.bigbutton}


—

<small>Contenu librement adapté et largement emprunté à [Jeremy Thomas](https://marksheet.io) et à [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license Creative Commons BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
