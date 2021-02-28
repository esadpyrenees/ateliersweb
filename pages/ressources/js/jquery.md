

Au cours de sa vie, Javascript a été implémenté de manières très différentes selon les constructeurs (Netscape _vs_ Microsoft). Ses différences de fonctionnement d’un navigateur à l’autre, d’une version d’un navigateur à l’autre, ont conduit des développeurs à créer des librairies capables d’harmoniser le comportement sur tous les navigateurs. C’est le cas de [jQuery](http://jquery.com), mais aussi de Mootools, Prototype, Zepto…


### Events et callbacks

Dans notre code javascript, la plupart des instructions seront soumises à des **événements**. Ces évenements peuvent être le chargement de la page ou d’une image, un clic ou une action tactile de l’utilisateur, ou des quantités d’autres. En javascript, beaucoup d’objets sont dits “event-emitters”, ils recçoivent et envoient des événements.
```js
var faisQuelqueChose = function (event) {
    // fais quelque chose
};
var bouton = document.querySelector('#bouton');
bouton.addEventListener('click', faisQuelqueChose);
```
Avec jQuery, les deux lignes ci-dessus peuvent s’écrire :
```js
$('#bouton').on('click', faisQuelqueChose);
```
jQuery possède une fonction maîtresse au nom très court : `$`. Cette fonction très puissante permet ici à jQuery de sélectionner l’élément dont l’`id` est “bouton”, de lui attacher un écouteur sur l’événement `click`, et d’exécuter la fonction `faisQuelqueChose` quand on clique dessus.  

NB: `id="machin"` en HTML se traduit `#machin` en css.

### jQuery DOM API

Grâce à une syntaxe semblables aux sélecteurs utilisés en CSS, jQuery peut **sélectionner** un élément de la page et le **manipuler** (changer son style, ses attributs, son contenu…).  
```js
$('#grosbouton').css('font-size', '30px');    
```
Les istructions peuvent être enchaînées :
```js
$('#grosbouton').css('font-size', '30px').height(100);    
```
La syntaxe se comporte comme une phrase : — “Eh, toi, le gros bouton, quand on te clique dessus, devient rouge” :
```js
$('#grosbouton').on('click', function(){
    $(this).css('color', 'red');
});
```
Ici, on a introduit deux notions importantes : le mot clé **`this`** et une **fonction anonyme**. Le mot `this` désigne l’élément sur lequel on a cliqué ; la fonction anonyme ne sert pas ailleurs dans notre code ; on peut donc la déclarer au même instant qu’on l’exécute.

### Getters et Setters

Ci dessus, nous avons utilisé les méthodes `.css` et `.height` pour **attribuer** des valeurs css et une hauteur à notre bouton. Ces méthodes peuvent également être utilisées pour **lire** ces valeurs css et de hauteur. Elles sont alors invoquées sans l’argument d’affectation :
```js
$('#grosbouton').css('font-size');
// retourne '30px'
$('#grosbouton').height();
// retourne '100px'
$('#grosbouton').height(200);
// change la hauteur du bouton à 200px
$('#grosbouton').height();
// retourne maintenant '200px'
```