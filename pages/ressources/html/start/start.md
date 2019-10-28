# Bien démarrer

Un site web est composé de nombreux fichiers : contenu textuel, code, feuilles de styles, contenus média, etc. Lors de la construction d'un site web, ces fichiers doivent être organisés et rangés sur votre ordinateur afin qu'ils puissent interagir les uns avec les autres et que le contenu s'affiche correctement.

## Où placer votre site web sur votre ordinateur ?

Les fichiers de votre projet doivent être réunis au sein d’un dossier de votre choix. Il est conseillé de créer dans un endroit stable de votre disque dur (Documents) un dossier `webdesign` pour y stocker les dossiers de chacun de vos projets et exercices.

## Casse, accents et espaces

Les ordinateurs, et notamment les serveurs web, interprêtent différemment la casse dans le nom des fichiers : `MaPage.html` n’est pas identique à `mapage.html`. Il est préférable de s’habituer à n’utiliser que des bas-de-casse.

De la même manière, <strong class="blink">accents et espaces doivent être proscrits</strong>. Pour séparer deux termes dans le nom d’un fichier, il est préférable d’utiliser le tiret au tiret bas (aussi dénommé *underscore*, ou souligné). Par exemple : `mon-image.jpg`.

## Structure du projet

Un site standard possède toujours le même type de structure:

- à la racine, un fichier html nommé `index.html`, qui sert de page d’accueil du projet ;
- à la racine également, les autres fichiers html (pages du site) ;
- un dossier `img`, `images` ou `medias`, dédié à recevoir vos images et médias ;
- un dossier `css` ou `styles`, pour stocker les feuilles de styles et les fichiers relatifs à celles-ci (polices, images de mise en forme) ;
- enfin, un dossier `js` ou `scripts`, dédié aux fichiers javascript.

![organisation des fichiers](site.png)

## Chemins de fichiers

Pour que les fichiers puissent “converser” entre eux, il faut préciser le chemin pour les trouver — en résumé, la route qu'un fichier doit connaître pour situer l'autre fichier.

En reprenant la structure ci-dessus : si le fichier `index.html` appelle une image nommée `logo.png` située dans le dossier `images`, l’adresse de l’image sera `images/logo.png`.

```
<img src="images/logo.png" alt="Logo">
```

Depuis la feuille de style `css/main.css`, pour appeler ce même fichier `logo.png`, il est nécessaire de “remonter” au niveau supérieur (`site`) en utilisant la syntaxe `../` :

```
body { background:url("../images/logo.png"); }
```

Attention ! Les chemins de fichiers sont source de nombreuses erreurs et incompréhensions. Si “ça ne marche pas”, commencez par vérifier que les fichiers sont correctements associés les uns aux autres.

## Types de fichiers

Un navigateur web ne peut afficher qu’un nombre réduit des types de fichiers que l’on peut manipuler sur un ordinateur. Il est essentiel de s’assurer que votre système d’exploitation affiche les extensions de fichiers.

- Les pages HTML ont l’extension `html` (ou plus rarement `htm`…) ;
- Les images bitmap peuvent être `gif`, `jpg` (`jpeg`) ou `png`. On pourra également rencontrer `webp` (plus rarement `bmp`…) ; pas de `tif`, `psd`, etc. Elles doivent utiliser l’espace colorimétrique RVB (pas de CMJN).
- Les images vectorielles doivent au format `svg` ;
- Les vidéos peuvent être `mp4`, `webm` ou `ogv` ;
- Les fichiers audio peuvent être `mp3`, `ogg` ou `wav` ;
- Les feuilles de styles ont l’extension `css` ;
- Les fichiers javascript ont l’extension `js`.

—

<small>Contenu librement adapté et largement emprunté à [MDN Web docs](https://developer.mozilla.org/fr/docs/Apprendre/).</small>
