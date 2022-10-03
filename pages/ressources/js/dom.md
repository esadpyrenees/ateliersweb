## Interagir avec le DOM en javascript

*[DOM]: Document Object Model

### Sélectionner

#### Sélectionner un seul élément, grâce à un sélecteur CSS

```js
let el_by_id = document.querySelector('#element'); // sélectionne l’élément dont l’id est 'element'
let el_by_class = document.querySelector('.element'); // sélectionne le premier élément dont la class est 'element'
let el_by_src = document.querySelector('img[href="fichier.jpg"]'); // sélectionne un élément image dont l’attribut src est 'fichier.jpg
```

#### Sélectionner plusieurs éléments, grâce à un sélecteur CSS

```js
let elements = document.querySelectorAll('.element'); // sélectionne tous les éléments dont la class est 'element'
let elementsenfants = document.querySelectorAll('#truc .element'); // idem, mais uniquement au sein de l’élément dont l’id est truc
```


### Traverser

#### Est-ce qu’un élément a une class, un id ou une propriété ?

```js
let el = document.querySelector('p');
let is_important = el.matches('.important'); // est-ce que l’élément à la class important ?  
let is_intro =  el.matches('#intro'); // est-ce que l’élément à l’id intro ?  
let is_second =  el.matches(':nth-child(2)'); // est-ce que l’élément est le deuxième enfant de son parent ?  
```

#### Obtenir le nœud parent d'un élément

```js
let el = document.querySelector('p');
let parent = el.parentElement; // retourne le parent de l’élément
```

#### Otenir les frères et sœurs  suivants ou précédents d'un élément

```js
let el = document.querySelector('p');
let precedent = el.previousSibling;
let suivant = el.nextSibling;
```

#### Obtenir l'élément parent le plus proche par sélecteur

```js
let el = document.querySelector('p');
let article = el.closest(".article"); // retrourne le plus proche parent dont la class est 'article' 
```

#### Sélectionner les enfants d'un élément

```js
let el = document.querySelector('article');
let children = el.children; // retourne tous les éléments enfants
let first = el.firstChild; // retourne le premier enfant
let last = el.lastChild; // …le dernier enfant
```

### Manipulation

#### Créer un élément DOM

```js
let button = document.createElement("button");
let paragraph = document.createElement("p");
```

#### Remplacer un élément du DOM

```js
let old_el = document.querySelector("#old"); // sélectionne l’élément dont l’id est "old"
let new_el = document.createElement('span'); // crée un nouvel élément
new_el.textContent = "NEW!"; // lui affecte un contenu textuel
old_el.parentNode.replaceChild(new_el, old_el); // remplace l’un par l’autre
```


#### Vider le contenu d'un élément

```js
let el = document.querySelector('p');
el.innerHTML = '';
```

#### Supprimer un élément

```js
let el = document.querySelector('p');
el.parentNode.removeChild(el); // on supprime un élément “depuis son parent”
```
#### Obtenir ou définir le contenu textuel d'un élément

```js
let el = document.querySelector('p');
let text = el.textContent; // retourne le contenu textuel de l’élément
el.textContent = "Nouveau texte"; // détermine un nouveau contenu textuel
```

#### Obtenir ou définir le contenu HTML d'un élément

```js
let el = document.querySelector('article');
let html = el.innerHTML; // retourne le contenu HTML de l’élément
el.innerHTML = "<p>Nouveau texte HTML</p>"; // détermine un nouveau contenu HTML
```

#### Insérer un élément après ou avant un autre

```js
let reference = document.querySelector("h1"); // sélectionne un élément de référence
let new_el = document.createElement('h2'); // crée un nouvel élément
new_el.textContent = "NEW!"; // lui affecte un contenu textuel
reference.before(new_el); // insère avant le h1
reference.after(new_el);  // insère après le h1

```
#### Ajouter un élément à l’intérieur d’un autre (au début ou à la fin)

```js
let el = document.querySelector("#container");
let first = document.createElement("header");
let last = document.createElement("footer");
el.append(last); // insère le footer à l’intérieur du #container, en dernière position
el.appendChild(last); // idem, avec quelques différences subtiles
el.prepend(first); // insère le header à l’intérieur du #container, en première position

```

#### Créer une copie d'un élément

```js
let source = document.querySelector(".source"); // sélectionne l’élément dont la class est "source";
let deep_clone = source.cloneNode(true); // clone l’élément source avec son contenu
let empty_clone = source.cloneNode(); //  clone l’élément source sans son contenu
```

#### Parcourir une liste d'éléments et faire quelque chose avec chaque élément.

```js
let elements = document.querySelectorAll('.element'); // sélectionne tous les éléments dont la class est 'element'
// fait un truc pour chaque élément de la liste d’éléments sélectionnés
elements.forEach( el => {
  el.style.color = "red"; // modifie la couleur de chaque élément 
})
```

### Attributs


#### Ajouter, supprimer et tester des classes

```js
let el = document.querySelector('p');
el.classList.add("selected"); // ajoute la class "selected" à l’élément
el.classList.remove("selected"); // supprime la class "selected" de l’élément
el.classList.toggle("selected"); // ajoute ou supprime la class "selected" de l’élément
if(el.classList.contains("selected")) {}; // vérifie si l’élément a la class "selected"
```

#### Définir, obtenir ou supprimer des attributs 

```js
let el = document.querySelector('img');
el.getAttribute("src"); // retourne l’attribut src d’un élément;
el.setAttribute("src", "fichier.jpg"); // affecte une nouvelle valeur à l’attribut src d’un élément;
```

#### Définir, obtenir ou supprimer des attributs de données
```js
// on peut attacher dess données arbitraires à un élément frâce aux attrinbuts “data-”
// en HTML, on peut les créer ainsi : <div data-bidule="machin"></div>
let el = document.querySelector('p');
let bidule = el.dataset.bidule; // retourne la propriété "data-bidule" de l’élément
el.dataset.bidule = "truc"; // ajoute la propriété de données ou modifie la propriété "data-bidule"
```

### Styles

#### Définir et obtenir les styles CSS des éléments

```js
let el = document.querySelector('p');
let style = window.getComputedStyle ? getComputedStyle(el, null) : el.currentStyle; // retourne l’ensemble des styles qui s’appliquent à l’élément
console.log(style.backgroundColor); // renvoie la propriété d’arrière plan de l’élément
el.style.display = 'none'; // affecte une nouvelle valeur de 'display' au style de l’élément
el.fontSize = "12px"; // affecte une nouvelle propriété de font-size 
```

#### Obtenir et définir le scroll d'un élément

```js
let el = document.querySelector('img');
console.log(el.scrollLeft, el.scrollTop); // renvoie la position de scroll de l’élément
el.scrollLeft = 100; // détermine de nouvelles positions
el.scrollTop = 500;
```

#### Obtenir la position d'un élément 

```js
let el = document.querySelector('img');

// retourne la position top et left de l’élément par rapport à son parent
console.log(el.offsetLeft, el.offsetTop); 

// retourne la position top et left de l’élément par rapport au document
let rect = el.getBoundingClientRect(),
  scrollLeft = window.pageXOffset,
  scrollTop = window.pageYOffset;
console.log("top: " + (rect.top + scrollTop)); // top
console.log("left: " + (rect.left + scrollLeft)); // left
```


#### Obtenir la largeur et la hauteur d'un élément

```js
let el = document.querySelector('img');
let width = el.offsetWidth;
let height = el.offsetHeight;
// ou
let rect = el.getBoundingClientRect();
let width = rect.width;
let height = rect.height;
```

### Évènements


#### Gérer les événements d’un élément (click, submit, survol, etc)
```js
let el = document.querySelector("a");
// pour un seul évènement click
el.onclick = () => {
  alert("Clicked!")
};
// pour plusieurs évènements click
el.addEventListener("click", () => {
  alert("Clicked!")
});

// Évènements utiles :
// clicks : click, dblclick
// souris : mousedown, mouseenter, mouseleave, mousemove, mouseover, mouseout, mouseup
// médias : pause, play, playing, timeupdate, canplaythrough, canplay, ended
// scroll : scroll
// chargement : load
// formulaire : submit
// tactile : touchcancel, touchend, touchmove,  touchstart
// clavier : keydown, keypress, keyup
// drag : drag, dragend, dragenter, dragleave, dragover, dragstart
// print : beforeprint
``` 

#### Empêcher l'action par défaut des événements
```js
let el = document.querySelector("a");
el.onclick = (e) => {
  e.preventDefault(); // empêche l’évènement par défaut
  e.stopPropagation(); // empêche l’évènement de “remonter” dans l’arbre du DOM
}
``` 
#### Récupérer les événements clavier
```js
document.addEventListener("keydown" (e) => {
  // le caractère saisi
  console.log(e.key);
  // les éventuels modificateurs 
  console.log((e.shiftKey ? ' shiftKey' : '') + (e.ctrlKey ? ' ctrlKey' : '') + (e.altKey ? ' altKey' : '') + (e.metaKey ? ' metaKey' : '') );
  // touches spéciales
  if (e.key === "Escape") console.log("Escape");
  if (e.key === "Enter") console.log("Enter");
  if (e.key === "Space") console.log("Space");
  if (e.key === "ArrowLeft") console.log("ArrowLeft");
  if (e.key === "Backspace") console.log("Backspace");
  // combinaison de touches
  if (e.ctrlKey && e.key === "z") {
    console.log("Annuler ?"); 
  }
})
``` 
#### Obtenir la position actuelle de la souris
```js
document.addEventListener('mouseMove', (e) => {
  let pageX = e.pageX; // position X
  let pageY = e.pageY; // position Y
});
``` 
#### Exécuter du code lorsque le document est prêt
```js
// Une page ne peut pas être manipulée en toute sécurité tant que le document n'est pas "prêt". 
// Voici comment s'assurer que le code n'est pas exécuté prématurément.
document.addEventListener('DOMContentLoaded', function(){
  // le document est prêt
});
``` 
#### Déclencher un événement programmatiquement
```js
let el = document.querySelector('#input');

// tous les éléments :
el.click();

// inputs, textareas :
el.focus();
el.blur();

// form :
let form = document.querySelector('form');
form.submit();
form.reset();

``` 