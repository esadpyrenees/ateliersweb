<style type="text/css">
.ex1 * { padding:1em;}
.ex1 section {
    background:#a9d0fd;
  display: grid;
  grid-template-columns: 150px 500px;
}
.ex1 article {
    background:#f3c986;
    grid-column: 2;  
}
.ex1 aside {
    background:#c1bdf7;
    grid-column: 1;
}
.ex2 * { padding:1em; }
.ex2 {
    background:#a9d0fd;
    display: grid;
    grid-template-columns: 150px 500px;
    grid-template-rows: 100px 200px;
    grid-column-gap: 20px;
    grid-row-gap: 20px;
}
nav {
    background:#d1e5fd;
  grid-column: 1; grid-row: 1;
}
section {
  grid-column: 2; grid-row: 1;
  background:#ed8e92;
}
aside {
  grid-column: 1; grid-row: 2;
  background:#c1bdf7;
}
article {
  grid-column: 2; grid-row: 2;
  background:#f3c986;
}
.ex3.container * { padding:1em}
.ex3.container {
    background:#a9d0fd;
    display: grid;
    grid-template-columns: 150px 1fr;
    grid-template-rows: 60px 300px 100px;
    display: grid;
    grid-template-areas: "h h"
                       "n c"
                       "f f";
}
.ex3 header {
    background:#f3c986;
  grid-area: h;
}
.ex3 nav {
  grid-area: n;
}
.ex3 aside {
  grid-area: c;
}
.ex3 footer {
    background:#ed8e92;
  grid-area: f;
}


</style>


# Démarrer

On crée un “contexte de grille” en appliquant la déclaration `display: grid` à un élément HTML. Cette déclaration définit un ensemble de pistes, formées de lignes et de colonnes, définissant des “cellules”.

Cet ensemble est “virtuel”, il n’existe pas dans le HTML.

Les enfants directs de ce conteneur deviennent alors des `grid-items` et pourront être positionnées au sein des cellules de la grille.

## Positionnement des éléments

Les éléments d’une grille peuvent être excplicitement affectés à une cellule.

```
<body>
  <nav>nav</nav>
  <section>section</section>
  <article>article</article>
  <aside>aside</aside>
</body>
```
```
body {
    display: grid; /* crée une grille */
    grid-template-columns: 150px 500px; /* crée deux colonnes */
    grid-template-rows: 100px 200px; /* crée deux lignes */
    grid-column-gap: 20px; /* goutière verticale */
    grid-row-gap: 20px; /* goutière horizontale */
}
nav {
    /* ligne 1, colonne 1 */
    grid-row: 1; grid-column: 1;
}
section {
    /* ligne 1, colonne 2 */
    grid-row: 1; grid-column: 2;
}
article {
    /* ligne 2, colonne 1 */
    grid-row: 2; grid-column: 1;
}
aside {
    /* ligne 2, colonne 2 */
    grid-row: 2; grid-column: 2;
}
```
<div class="ex2">
  <nav>nav</nav>
  <section>section</section>
  <article>article</article>
  <aside>aside</aside>
</div>


## Zones

En complément de `grid-template-columns` et de `grid-template-rows`, on peut **nommer** les emplacements à l’aide de chaines de caractères  ou de lettres, grâce à la propriété `grid-template-areas`.
```
section {
    display: grid;
    grid-template-areas: "entete entete"
                         "navigation contenu"
                         "pied pied";
}
nav {
    grid-area: navigation; /* placement de <nav> dans l'emplacement “navigation” */
}
```

<div class="container ex3" >
  <header>header</header>
  <aside>aside</aside>
  <nav>nav</nav>
  <footer>footer</footer>
</div>


## Flexibilité

CSS Grid introduit des unités plus complexes que les habituels `px`, `%`, `em`, qui permettent notamment de s'adapter à la taille des contenus et d’aporter beaucoup de flexibilité à la mise en page.

| Unité     | Détails     |
| :------------- | :------------- |
| `fr`  | fraction(s) de l'espace restant |
| `min-content`  | se rapporte à la largeur (ou hauteur) de l'élément le plus petit |
| `max-content`  | se rapporte à la largeur (ou hauteur) de l'élément le plus grand |
| `minmax(min, max)`  | exemple `minmax(min-content, 20%)` correspond à largeur 20% (ou hauteur), mais au  minimum largeur (ou hauteur) du contenu |
| `auto`  | s'adapte à la largeur (ou hauteur) du contenu |
| `fit-content`  | identique à auto et aussi à `minmax(min-content, max-content)` |


(Mise à jour en cours…)
