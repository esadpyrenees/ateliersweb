# Reset

Dans les premières années de la diffusion de CSS, et jusqu’à un temps relativement récent, les différents navigateurs proposaient des implémentations et des styles par défaut différents. 

Cela a amené la création de feuilles de styles “Reset”, dédiées à la réinitialisation des styles afin de mettre en cohérence le rendu dans les différents navigateurs. En 2022, les incohérences ont très largement réduit, mais l’avantage amené par ces feuilles de styles stantard reste important.

De nombreuses approches existent :     
* [reset.css](https://meyerweb.com/eric/tools/css/reset/reset.css) d’Eric Meyer, supprime les styles par défaut des navigateurs.   
* [normalize.css](https://necolas.github.io/normalize.css/), bien plus complet, s’attache à *normaliser* et homogénéiser les styles dans tous les navigateurs ; il peut être intégré comme base dans bon nombre de projets .    
* [sanitize.css](https://github.com/csstools/sanitize.css/blob/main/sanitize.css), poursuit le projet de *normalize.css* en incluant également des comportements par défaut plus forts.
* [minireset.css](https://github.com/jgthms/minireset.css), plus humble mais plus radical, est à la base de la proposition ci-dessous.


## Proposition

```css
/* Réinitialiser le “modèle de boite”, afin que `padding` et `border` soient contenus dans le `width` d’un élément */
html { box-sizing: border-box; }
*, *::before, *::after { box-sizing: inherit; }

/* Autoriser des hauteurs en pourcentage dans le site ; adapté pour les sites “application” */
html, body { height: 100%; }

/* Hauteur de ligne et amélioration du rendu typographique */
body { line-height: 1.5; -webkit-font-smoothing: antialiased; }

/* Amélioration des comportement par défaut des médias */
img, picture, video, canvas, svg { display: block; height: auto; max-width: 100%; }

/* Suppressions des margin et padding ; implique que toutes les marges “naturelles” des éléments soient redéfinies */
html, body, p, ol, ul, li, dl, dt, dd, blockquote, figure, fieldset, legend, textarea, pre, iframe, hr, h1, h2, h3, h4, h5, h6 { margin: 0; padding: 0; }

/* Suppression des différences de corps et de graisse sur les titres */
h1, h2, h3, h4, h5, h6 { font-size: 100%; font-weight: normal; }

/* Réinitalisation des propriétés typographiques sur les éléments de formulaire */
input, button, textarea, select { font: inherit; margin: 0; }

/* suppression des bordures sur les iframes */
iframe { border: 0; }
```

Version compressée sur une seule ligne : 

```css
html { box-sizing: border-box; } *, *::before, *::after { box-sizing: inherit; } html, body { height: 100%; } body { line-height: 1.5; -webkit-font-smoothing: antialiased; } img, picture, video, canvas, svg { display: block; height: auto; max-width: 100%; } html, body, p, ol, ul, li, dl, dt, dd, blockquote, figure, fieldset, legend, textarea, pre, iframe, hr, h1, h2, h3, h4, h5, h6 { margin: 0; padding: 0; } h1, h2, h3, h4, h5, h6 { font-size: 100%; font-weight: normal; } input, button, textarea, select { font: inherit; margin: 0; } iframe { border: 0; }
```


Toute feuille de style visant à instaurer des styles par défaut est porteuse d’une *opinion* sur ce que devraient être ces styles, ce qui implique que l’auteur d’un site se familiarise avec les styles qui lui paraissent souhaitable et formule sa propre opinion.

Le *reset* ci-dessus est donc à tester et à adapter à vos propres préférences.