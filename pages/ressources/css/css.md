# CSS

Le langage CSS (Cascading Styles Sheets, ou feuilles de styles en cascade) est un moyen de styler et de présenter le HTML. Alors que le HTML s’attache à la signification et à la structuration du contenu, CSS permet de décrire l’affichage, la présentation visuelle, du contenu.

## Appliquer du style
Il existe trois façons d’ajouter un style CSS au contenu HTML :

1. Les **styles en ligne**, tels que, dans le `<body>` du code HTML:
```
<h2 style="color: green;">Mon titre </h2>
```
Cela fonctionne mais doit être répliqué pour tous les éléments avec cette propriété (tous les h2 doivent être édités) et rend votre code HTML illisible.

2. **CSS interne**, dans le `<head>` du code HTML:
```
<style>
     h2 { color: green; }
</style>
```

    C’est mieux parce que l’on n’a pas à se répéter, mais cela restreint le style à une seule page. Il est préférable de n’utiliser qu’une seule feuille de style pour toutes les pages d’un site. Toute mise à jour est ainsi répliquée sur toutes les pages, et on conserve une homogénéité sur l’ensemble du site.

3. **CSS externe** : un fichier CSS dédié contenant tous les styles. On lie toutes les pages HTML du site à un seul fichier CSS dans le `<head>` des pages.
```
<link href="css/styles.css" rel="stylesheet" type="text/css">
```
Un seul fichier CSS est généralement suffisant pour l’ensemble d’un site web. Plusieurs fichiers ne sont utiles que dans le cas où le fichier principal devient trop long ou complexe, ou dans le cas d’ajouts liés à l’intégration de plugins javascript ou à l’utilisation de librairies CSS.


[→ syntaxe](syntax/){.bigbutton}

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io) et à [Louis Éveillard](http://pca.louiseveillard.com/),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
