## Avertissement

Les _snippets_ de code ci-dessous ont été mis à jour pour refleter la syntaxe utilisée dans la version ES2015 (plus souvent nommée <abbr title="ECMAScript v. 6">ES6</abbr>) de javascript.
Javascript est un langage très puissant et très utilisé, qui évolue rapidement et dont ces ressources ne peuvent se faire le miroir en temps réel. De [nombreux exemples](../../exemples/#js) présents dans ce site utilisent une syntaxe plus ancienne.

### Découvrir par la pratique
Des exemples d’interactions simples, à hybrider et continuer à faire dévier.

[→ fork ! ](fork){.bigbutton}

Quelques fonctions d’usage courant pour l’interaction entre HTML et Javascript 

[→ DOM ! ](dom){.bigbutton}


### Pré-requis

* Une connaissance de base du [HTML](../html) et du [CSS](../css) est requise. 


## Introduction {#introduction}

### Premiers pas 

Le code javascript peut être écrit directement à l’intérieur des balises `<script>` d’une page HTML, ou être inclus via un fichier externe. Un navigateur lit le contenu d’un script de bas en haut (sauf si on lui demande de faire autrement). 

En interne : 
```html
<script> 
    alert("Salut, tout le monde.");
</script> 
```
En externe : 
```html
<script src="fichier.js"></script>
```
Attention au chemin d’accès au fichier ! 

[exemple 00](exemples/00/) 

### La console 

Les navigateurs modernes disposent d’une console javascript, qui est un outil indispensable, à la fois pour résoudre des erreurs, et pour essayer des lignes de code. 

Ouvrir la console (⌥⌘I dans Firefox, Safari ou Chrome ; dans Safari, il est nécessaire d’activer l’inspecteur Web en cochant la case “Afficher le menu Développement” dans le menu Safari > Préférences > Avancées), atteindre la console et taper `alert("Salut, tout le monde.");`. 

On peut utiliser la console depuis le code javascript : 
```js
console.log("Salut, tout le monde.");
```
[exemple 01](exemples/01/)


## Variables {#variables}

Une variable est un espace de stockage, un nom symbolique, pour stocker une valeur.

Une **variable** est composée d’un **nom** (ou identifiant) et d’une **valeur**. Pour la déclarer, il faut utiliser le mot clé `var`. Pour lui attribuer une valeur, il faut utiliser le signe `=` ; et terminer la ligne par un `;`. Les noms des variables (ou plus loin des fonctions) ne peuvent pas contenir d’espace ni commencer par un chiffre, et il est préférable de ne pas les accentuer.
```js
var nom = valeur;
```

En javascript “contemporain” (aka ES6), deux autres mots-clés sont préférés à `var` : `let` et `const`.
```js
let parole = "Je vais pouvoir être modifiée (une valeur différente va pouvoir m’être ré-assignée)";
const marbre = "Ma valeur est définie à tous jamais";
```

`let` et `const` présentent de nombreux avantages par rapport à `var`.

Attention, `const`, pour “constante”, présente la particularité de ne pas pouvoir être modifiée.

Une variable déclarée avec `var` ou `let` peut être _déclarée_, tout en n’étant pas _initialisée_. Une fois crée, on peut l’initialiser ou modifier sa valeur :
```js
let nom;
nom = valeur;
```

### Valeurs

Dans javascript, une variable est dite "typée dynamiquement". On ne sait pas à priori si elle contient un nombre, une liste (ou _tableau_), une fonction, un “objet” ou autre chose…

Les valeurs simples sont : `number`, un nombre, qui peut être entier ou flottant ; `string`, une chaîne de caractères ; un `boolean`, sorte d’interrupteur qui n’a que deux valeurs possibles (`true` ou `false`). On trouve également les valeurs `null`(aucune valeur) et `undefined` (valeur non définie).

```js
let ma_chaine = "Hifi"; 
// Une chaîne de caractères se place entre guillemets (droits, doubles ou simples)
let age_du_capitaine = `42 ans`;
// depuis ES6, on peut aussi utiliser des “backtiks” : ``
let mon_nombre = 20; 
// un nombre n’a pas de guillements
let mon_autre_nombre = 17 + 3; 
// Javascript sait faire des maths… 
let javascript_cest_facile = true; 
// n’est-ce-pas ?
```

Des valeurs plus complexes existent : ce sont les mystérieux **objets**, dont on parlera plus tard #oupas ; les **tableaux**, qui servent à faire des listes ; et les **fonctions**, qui servent à …faire des trucs, et dont on parlera vraiment plus tard.

```js
let mon_objet = {}; 
let ma_liste = ['pierre', 'papier', 'ciseaux'];
function ma_fonction(){
    // fera quelque chose plus tard
}
```
En passant, on aura remarqué que l’on peut inscrire des commentaires dans du code javascript.

```js
// sur une seule ligne

/*
    ou sur 
    plusieurs
    lignes
*/
```

### Opérations

Javascript peut faire des additions, des divisions, des multiplications, des soustractions et quantité d’autres opérations sur les nombres qui nous seront fort utiles plus tard.
```js
let torchons = 4; 
let serviettes = 2; 
// ou
let torchons = 4, 
    serviettes = 2;
// les deux notations ci-dessus sont équivalentes

console.log(torchons + serviettes);
// affiche 6 dans la console 
torchons = 6;
// une variable (déclarée avec var ou let) peut varier 
// ici, on assigne à la variable torchons une nouvelle valeur
console.log(torchons + serviettes);
// affiche 8 dans la console 
console.log( torchons / serviettes);
// affiche "3" dans la console (6 divisé par 2, vous suivez ?)

console.log("torchons" + serviettes);
// affiche "torchons2" dans la console 
// ici l’opérateur "+" ne produit pas une adition, mais une “concaténation”
// on se sert de la concaténation pour intégrer des variables à des chaines de caractères
console.log("J’ai " + serviettes + " serviettes"); // affichera “J’ai 2 serviettes”
// Par contre :
console.log( "torchons" * serviettes);
// affiche NaN, (pour “Not a Number” ; en javascrit, on ne peut pas diviser une chaine de caractères par un nombre
```

### Tableaux

Les tableaux, ou `Array`, sont des listes pouvant contenir tous types de données, y compris d’autres tableaux.

Chaque élément d’un tableau est accessible via son **index**, qui représente sa position (son ordre) dans le tableau. Le premier élément d’un tableau a l’index **0**;
```js
let un_tableau_vide = [];
let choses_a_faire = ['Manger', 'Dormir', 'Prendre des vacances'];
choses_a_faire[1];
// 'Dormir'
```
Il est possible de réassigner une valeur :
```js
let choses_a_faire = ['Manger', 'Dormir', 'Prendre des vacances'];
choses_a_faire[2] = "Travailler";
choses_a_faire;
// ['Manger', 'Dormir', 'Travailler']
```
On peut connaitre la longueur d’une liste (le nombre d’éléments qu’elle contient) en appelant la propriété `length`
```js
let choses_a_faire = ['Manger', 'Dormir', 'Travailler'];
choses_a_faire.length;
// 3
```
On peut ajouter ou supprimer des éléments en utilisant les méthodes `push` et `pop` :
```js
let choses_a_faire = ['Manger', 'Dormir', 'Travailler'];
choses_a_faire.push('Coder');
choses_a_faire;
// ['Manger', 'Dormir', 'Travailler', 'Coder']
choses_a_faire.pop();
// ['Manger', 'Dormir', 'Travailler']
```
[04](exemples/04/)

### Objets

Dans javascript, les “objets” sont –presque– comme ceux de la vraie vie. Ils ont des propriétés et des capacités : Un chat a une couleur, cette couleur peut être noir, ou blanc, ou bleu mais c’est plus rare. 

Il peut miauler, courir, sauter et ([parfois](http://www.gifbin.com/bin/20052777.gif)) danser comme Travolta.
```js
const chat = {
    couleur: "noir",
    age: 9,
    miaule: function () { alert("Miiaaaaww…"); }
}
```
On peut ensuite accéder à ses propriétés grace à la syntaxe à point :
```js
chat.couleur;
// "noir"
chat.age;
// 9
chat.miaule();
// les parenthèses sont nécessaires pour invoquer la fonction (qui dans le cas d’un objet prend le nom de méthode)
```
On peut réassigner une propriété :
```js
chat.couleur = 'rouge';
```
Ou en ajouter “à la volée” :
```js
chat.vies = 9;
```
Ou lui attribuer une nouvelle méthode :
```js
chat.danse = function(){ document.location = "http://www.gifbin.com/bin/20052777.gif"; };
chat.danse();
```

## Logique

Il est souvent intéressant de comparer des valeurs. Les opérateurs logiques sont là pour ça ; ils renvoient une valeur de type `boolean` : `true` ou `false`.

Pour tester si deux valeurs sont égales, on utilise les opérateurs `===` ou `==`
```js
12 === 12;
// true
'12' === 12;
// false 
// on ne peut pas comparer une chaîne de caractères (fut-elle composée de chiffres) et un nombre.
```
Pour tester si deux valeurs **ne sont pas** égales, on utilise l’opérateur `!==` ou `!=`
```js
12 !== 12;
// false
12 !== 13;
// true
```
On peut également déterminer si une valeur est plus grande (`>`), ou plus petite (`<`) qu’une autre :
```js
12 > 13;
// false
11 < 12;
// true
12 > 12;
// false  ; les opérateurs > et < sont stricts, mais il existe >= et <= 
12 >= 12;
// true
12 <= 12;
// true
```
## Conditions

La logique est utilisée pour prendre des décisions dans le code, par exemple d’effectuer telle action ou telle autre. Cela requiert l’évaluation d’une condition ; les plus simples d’entre elles étant le `if` (si…) et le `else` (sinon…).
```js
let sel = 8, 
    poivre = 5;
if (sel > poivre) {
    // c’est mauvais pour le cœur
    // seul le code à l’intérieur de ces premières accolades sera exécuté puisque sel > poivre est true, la valeur stockée dans `sel` est bien supérieure à celle stockée dans `poivre`.
} else {
    // le code à l’intérieur de ces derrnières accolades ne pourra être exécuté que si la valeur de poivre change
}
```

Attention à la syntaxe : le mot clé `if` ou `else`, les parenthèses, les accolades…

## Boucles

Les boucles permettent de répéter la même instruction de code plusieurs fois, sans avoir à le ré-écrire.

Le mot-clé `while` permet de faire une boucle dans laquelle on doit modifier la valeur évaluée:
```js
let i = 1;
while (i < 10) {
    console.log(i);
    i = i + 1;
}
// i vaut maintenant 10
```
Le mot-clé `for` est la manière la plus courante de faire des boucles. Mais là où `while` ne prend qu’un seul paramètre (la condition à évaluer), `for` en demande 3 : une variable initiale, une condition et une expression finale, séparées par des `;`
```js
for ( let i = 0; i < 10; i++) {
    // au départ, on crée la variable i, en l’initialisant à 0
    // on vérifie que i est inférieur à 10
    // on "incrémente" la variable i (=> on lui ajoute 1)
    console.log(i);
}
// à l’extérieur de la boucle, i ne vaut rien du tout, sa “portée“ (scope) est restreinte à l’intérieur de la boucle
```
`i++` est equivalent à `i = i + 1`.

ES6 permet d’utiliser une sytaxe plus concise :
```js
const faces = "🤠🙃😎";
for (face of faces) {
  console.log(face);
}
```

## Fonctions {#fonctions}

Les fonction sont les “verbes” du javascript ; elles permettent de **faire des choses**. Il faut tout d’abord les déclarer, grâce au mot-clé `function`, et les faire suivre de parenthèses (qui permettront de transmettre des paramètres à la fonction) et d’accolades (qui contiennent le code à exétuter). Puis, une fois délarée, on peut l’invoquer.
```js
function dis_bonjour(){
    alert ("Hello !");
}
// la fonction est délarée sous le nom dis_bonjour

dis_bonjour();
// elle est maintenant invoquée, exécutée
```
Une fonction peut prendre un ou plusieurs paramètres
```js
function dis_bonjour(a_qui){
    alert ("Bonjour " + a_qui + " !");
}

dis_bonjour('monsieur');

function dis_bonjour(a_qui, sur_quel_ton){
    // on évalue la variable sur_quel_ton (deuxième variable passée en paramètres)
    // et on effectue une action différente selon sa valeur
    if (sur_quel_ton == "reverencieux") {
        alert ("Mes cordiales salutations, " + a_qui + " !");
    } else if (sur_quel_ton == "familier") {
        alert ("Salut " + a_qui + " !");
    } else {
        alert ("Yo " + a_qui + " !");
    }
}

dis_bonjour('monsieur', 'reverencieux');
dis_bonjour('monsieur', 'familier');
dis_bonjour('monsieur');
```
Une fonction, plutôt que faire quelque chose, peut également renvoyer une valeur, grâce au mot-clé `return`.
```js
function ajoute(a, b) {
    return a + b;
}
// déclarée

ajoute(1,3);
// invoquée, retourne 4, si mes calculs sont bons
```
[exemple 03](exemples/03/)


## Le DOM {#dom}

Le DOM, ou _Document Object Model_ permet de manipuler la structure et le style d’une page HTML. Il représente la manière dont le navigateur voit la page HTML, et permet de la modifier avec JavaScript.

Le DOM est une structure constituée comme un arbre, avec ses branches et ses rameaux.  
Il existe un élément racine (`<html>`), qui a deux branches (`<head>` et `<body>`). On évoque ces relations entre branches et rameaux par la métaphore des parents et des enfants : `<body>` est un enfant de `<html>`.

Le DOM est “visible” en ouvrant l’inspecteur web de vos outils de développement.

Un des aspects importants de javascript est sa capacité à interagir avec le DOM.

On peut sélectionner un élément grâce à la même syntaxe qu’en CSS :
```js
const lien = document.querySelector("a"); // via son type
const autre_lien = document.querySelector("#autre_lien") // via son id
```

On peut aussi sélectionner plusieurs éléments :
```js
const liens = document.querySelectorAll("a"); // via leur types
const autres_liens = document.querySelectorAll(".autre_lien") // via leurs class
```

On peut modifier les propriétés CSS des éléments :
```js
lien.style.color = "red";
lien.style.backgroundColor = "blue"; // la syntaxe est dite “camelCase”, on remplace les “-” des propriétés CSS par une capitale
```

On peut lire leurs propriétés :
```js
let texte = lien.textContent;
let width = lien.getBoundingClientRect().width;
let id = lien.id; // certaines propriétés et attributs sont accessibles très simplement
let href = lien.getAttribute('href'); // d’autres via la méthode “getAttribute”
```

On peut modifier leurs propriétés :
```js
lien.textContent = "Un autre texte";
lien.id = "new_id";
lien.setAttribute('href', "https://uneautrepage.com");
```

On peut en créer, et les ajouter au DOM :
```js
const bouton = document.createElement("button");
const paragraphe = document.querySelector("#paragraphecible");
paragraphe.appendChild(bouton);
```

D’autres commandes communes sont explicitées dans **[la page dédiée au DOM](dom)**.
Voir les exemples [17](exemples/17/), [18](exemples/18/) et [19](exemples/19/)

## Aléatoire

La fonction `random`, accessible via le module `Math`, permet de générer un nombre aléatoire (dit [pseudo-aléatoire](http://fr.wikipedia.org/wiki/G%C3%A9n%C3%A9rateur_de_nombres_pseudo-al%C3%A9atoires)) entre 0 et 1.
```js
Math.random();
// retourne un nombre décimal entre 0 et 1
```
À partir de ce comportement simple, il est possible de générer de très nombreuses valeurs :
```js
Math.random() * 4; 
// retourne un nombre décimal entre 0 et 4 ; par ex. : 0.802936547
Math.random() * 150 ;
// retourne un nombre décimal entre 0 et 150 ; par ex. : 127.365478029
Math.floor(Math.random() * 150) ;
// retourne un nombre entier (arrondi) entre 0 et 150 ; par ex. : 127

function positif_ou_negatif(){
    if(Math.random() > 0.5){
        // une chance sur deux – à peu près – que la valeur retournée soit supérieure à 0.5
        return -1;
    } else { 
        return 1 
    }
}
Math.random() * 150 * positif_ou_negatif();
// retourne un nombre décimal entre -150 et 150
```

Pour une plus grande facilité d’utilisation, on peut écrire une petite fonction utilitaire, qui retourne un nombre entre a et b :
```js
function rand(a, b){
    return Math.random() * (b - a) + a
}     
// qu’on peut invoquer ainsi :
rand(-250, 500);
// retourne 323.8463423220761 (par exemple)

// ou si l’on veut un nombre entier :
Math.round(rand(-250, 500));
// retourne 323 (par exemple)
```

### Contrainte

Une fois établie cette possibilité d’un nombre “purement” aléatoire, il est possible de contraindre son utilisation:
```js
Math.floor(Math.random() * 4) * 100 + 200;
// retourne 200, 300, 400, ou 500

Math.round(Math.random() * 4) * 100 + 200;
// retourne 200, 300, 400, 500 ou 600
// la différence vient de l’utilisation de round plutôt que floor :
// round arrondit à l’entier le plus proche, floor arrondit à l’entier inférieur
```
Un nombre entier aléatoire peut être utilisé pour sélectionner une valeur dans une liste :
```js
const couleurs = ["#FF0000", "#FF00FF", "#00FF00", "#0000FF"]
const quel_index = Math.floor(Math.random() * couleurs.length);
// retourne 0, 1, 2 ou 3
couleurs[quel_index];
// retourne du rouge, du magenta, du vert, ou du bleu
```
Pour une couleur “purement” aléatoire, il est également possible d’écrire une petite fonction :
```js
function randint(a, b){
    return Math.round( Math.random() * (b - a) + a)
}

function randColor(){  
    var red = randint(0,255),
        green = randint(0,255),
        blue = randint(0,255)
    return 'rgb('+ red +','+ green +','+ blue +')';
}
```

[exemple 11](exemples/11/)



## jQuery {#jquery}

Au cours de sa vie, Javascript a été implémenté de manières très différentes selon les constructeurs (Netscape _vs_ Microsoft). Ses différences de fonctionnement d’un navigateur à l’autre, d’une version d’un navigateur à l’autre, ont conduit des développeurs à créer des librairies capables d’harmoniser le comportement sur tous les navigateurs. C’est le cas de [jQuery](http://jquery.com), mais aussi de Mootools, Prototype, Zepto…

La librairie jQuery, créé en 2008 a révolutionné l’usage de javascript en donnant accès à une manière unifiée d’écrire du js, et en faisant naître un immense écosystème de *plugins* permettant à de nombreux webdesigners d’ajouter des fonctionnalités interactives à leurs pages sans difficultés techniques. 

Le Javascript natif (ou *vanilla*) est aujourd’hui suffisamment stable, robuste et supporté par la majeure partie des navigateurs pour pouvoir la plupart du temps se dispenser du recours à cette librairie. Néanmoins, la rapide documentation rédigée ici [reste accessible](jquery.php).




### Ressources sur Javascript  {#ressources-js}

* **[htmldom.dev](https://htmldom.dev/)** : exemples pratiques ayant trait à la manipulation du DOM en javascript. 
* **[javascript.info](https://javascript.info/)** : une introduction très complète (et donc un peu longue, en anglais) au javascript “contemporain”. 
* **[eloquentjavascript](https://eloquentjavascript.net/)** : un livre sous licence CC, sous-titré “<i>a modern introuction to programming</i>”.
* Le site Mozilla developper network est une ressource extrêmement complète sur javascript : **[Mozilla developper network](https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide)** 
