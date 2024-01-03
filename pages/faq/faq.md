## Comment naviguer dans ce site

tags: #atelier

----

## Comment et pourquoi utiliser plusieurs fichiers CSS dans un site web ?

tags: #css #html

Il est généralement suffisant d’avoir une seule feuille de style pour chaque site (= pour chaque “ensemble de pages”).
On utilise alors les class pour sélectionner spécifiquement des éléments sur différentes pages.

Mais on peut parfaitement lier plusieurs feuilles de style à un même document HTML. Ainsi, dans le `<head>` d’un fichier HTML, on peut avoir:
```html
<link href="css/fonts.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<link href="css/accueil.css" rel="stylesheet" type="text/css">
```

le fichier `fonts.css` contient les déclarations @font-face.
Le fichier `styles.css` contient les styles communs à l’ensemble du site.
Le fichier `accueil.css` ne contient que des styles spécifiques à la page d’accueil.
