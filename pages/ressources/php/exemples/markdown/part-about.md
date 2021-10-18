# À propos

Ce projet utilise les librairies PHP [Parsedown](https://parsedown.org/) et [ParsedownExtra](https://github.com/erusev/parsedown-extra/) pour convertir à la volée des fichiers texte en HTML.

Les liens de la navigation transmettent un paramètre “chapter” à la page `index.php`, qui permet de choisir dynamiquement quel fichier markdown afficher.

Le format de balisage [markdown](https://daringfireball.net/projects/markdown/syntax) permet de structurer sémantiquement un contenu textuel en titres, intertitres, paragraphes, listes, citations, etc. Il permet d’inclure des images, ou des bribes de html pour par exemple intégrer des vidéos.

L’extension markdown-extra permet d’ajouter des attributs (class, id, lang…) aux titres, liens et images, de créer des tableaux, des notes de bas de page et des abréviations.
