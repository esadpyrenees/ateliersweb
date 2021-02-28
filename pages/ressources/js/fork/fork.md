
Cet exercice propose de découvrir javascript par l’appropriation d’exemples interactifs [simples\*](#note), qui impliquent à la fois HTML, CSS (modification de styles, ajout/suppression de `class`) et JavaScript (sélection d’éléments, association d’évènements – click, mouseover, mouseout –, manipulation du [DOM](../#dom)).

☞ Explorer les expériences en commençant par les versions 1 (elles se complexifient progressivement), puis essayez de vous approprier les techniques employées pour en faire votre propre version (sur le plan graphique autant qu’au niveau de l’interaction).

☞ Une fois ouvert l’un des exemples, cliquer sur “Edit on CodePen”, puis dans la page CodePen, en bas à droite, sur le bouton “Fork”. 

### 1 – Cliquer sur un bouton pour afficher un élément
1. **[base 1.1](https://codepen.io/esadpyrenees/pen/WNodOmN)**    
###### HTML: créer un bouton et un élement-cible à afficher.<br>CSS: cacher l’élément-cible. <br>JS: référencer le bouton et l’élément-cible à afficher. Au click sur le bouton, changer le style de `display` de l’élément-cible. 
    1. **[fork 1.2](https://codepen.io/esadpyrenees/pen/QWGaMMG)**, permet aussi de cacher l’élément.
  ###### JS: Au click sur le bouton, <u>si</u> l’élément est masqué, l’afficher ; <u>sinon</u>, le masquer. 
          1. **[fork 1.3](https://codepen.io/esadpyrenees/pen/MWbVwyO)**, même chose avec une class.
    ###### HTML: Un attribut `class="hidden"` est ajouté à l’élément-cible. <br>CSS: la class `.hidden` masque l’élément. <br>JS: Au click sur le bouton, <u>si</u> l’élément a la class `.hidden`, l’afficher ; <u>sinon</u>, le masquer. 

### 2 – Survoler un élément pour jouer un son

1. **[base 2.1](https://codepen.io/esadpyrenees/pen/eYByRog)**     
###### HTML: créer un élément à survoler et un élement `<audio>`.<br>JS: référencer l’élément à survoler et l’élément audio. Au survol, jouer l’élément audio ; quand le survol s’arrête, mettre l’audio en pause. 
    1. **[fork 2.2](https://codepen.io/esadpyrenees/pen/rNWpzYJ)**, attendre que le son soit lisible avant de le jouer.     
    ###### CSS: Masquer l’élément à survoler, créer une class `.ok` qui permettra de l’afficher<br>JS: Quand l’audio est lisible, affecter la class `ok` à l’élément, avant de gérer son survol
    

### 3 – Survoler un élément pour faire en apparaitre un autre    
1. **[base 3.1](https://codepen.io/esadpyrenees/pen/mdOpMrY)** avec une transition.
######  HTML: créer un bouton et un élement-cible à afficher.<br>CSS: cacher l’élément-cible, lui attribuer une transition et créer une class `.visible` permettant de l’afficher.<br>JS: Au survol du bouton, ajouter la class `.visible` ; quand le survol cesse, l’enlever.  
    1. **[fork 3.2](https://codepen.io/esadpyrenees/pen/eYByEgG)** avec de multiples éléments.     
    ###### HTML: donner à chaque bouton un attribut `data-show` qui permette de l’associer (=créer un “lien”) à l’élément à afficher. <br>JS: Référencer les élements qui permettent d’en afficher d’autres. <u>Pour chacun d’entre-eux</u>, déterminer – en fonction de leur attribut `data-show` – quel est l’élément cible à afficher au survol.

### 4 – Attendre dix secondes avant de faire exploser une bombe  
1. **[base 4.1](https://codepen.io/esadpyrenees/pen/BaQJwzR)**     
###### HTML: Un élément avec la class `.bomb` dont le contenu est l’emoji 💣<br>CSS: centrer l’élément dans la page, et lui donner une taille (corps de texte) importante ; créer une class `.boom` qui sera appliquée au bout de 10 secondes. <br>JS:  Un simple compte à rebours qui affecte la class `boom` au `body`.
    1. **[fork 4.2](https://codepen.io/esadpyrenees/pen/MWbrEeq)**, permet de désamorcer la bombe.
    ###### HTML: ajout d’un bouton “désamorcer”.<br>CSS: On crée une class `.ouf` qui modifie l’apparence de la bombe et supprime l’animation.<br>JS: tant que l’utilisateur n’a pas essayé dix fois de cliquer sur le bouton, à chaque survol, on lui détermine une nouvelle position aléatoire à l’intérieur de la fenêtre. Si l’utilisateur a essayé 10 fois, on change le texte du bouton et on lui permet de cliquer. Au click, on affecte la class `ouf` au body.

### 5 – Cliquer sur des éléments pour augmenter un score    
1. **[base 5.1](https://codepen.io/esadpyrenees/pen/RwoxZJb)**
###### HTML: Créer une série d’images et un élément pour afficher le score.<br>CSS: Affecter une animation à toutes les images et un délai d’animation différent pour chacune.<br>JS: Initialiser une variable `score=0;`, référencer les images et l’élément d’affichage du score ; <u>pour chaque image</u>, au click, augmenter la valeur et modifier l’affichage du score.
    1. **[fork 5.2](https://codepen.io/esadpyrenees/pen/oNYpeLa)**, score différent pour chaque image.
    ###### HTML: affecter à chaque image un attribut `data-score` qui permettra de les différencier<br>CSS: donner une taille différente à chaque image, plus petite si sa valeur de score est iportante.<br>JS: Pour chaque image, au click, déterminer la valeur à ajouter au score en fonction de l’attribut `data-score`.
        1. **[fork 5.3](https://codepen.io/esadpyrenees/pen/OJbzjwM)**, affiche un message quand on a “gagné”.
        ###### CSS: Créer une class `.win` qui servira pour masquer les images, et afficher un message de fin de partie<br> JS: Au click, si le score est supérieur à 5, ajouter la class `win` au `body` et modifier le texte de l’élément d’affichage du score.
            1. **[fork 5.4](https://codepen.io/esadpyrenees/pen/xxRpLyQ)**, atteindre le score de 20 en moins de 20 secondes.
            ###### HTML: un élement `id="timer"` et un élément `id="score"` permettent d’afficher le temps restant et le score. <br>CSS: créer les class `.win` et `.lost` qui détermineront l’affichage en cas de succès ou d’échec.<br>JS: Une variable `start` sert à enregistrer le moment du démarrarage. Une fonction est exécutée à chaque seconde pour déterminer le temps passé et le comparer au moment du démarrage. Si le temps maximum est passé, on affiche le message “perdu” et on affecte la class `lost`. 

—

##### N.B. : la simplicité requise par l’expérience de la découverte implique certains renoncements quand aux problématiques d’accessibilité et de robustesse du code. {#note}
