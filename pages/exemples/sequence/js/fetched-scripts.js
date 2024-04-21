
// --------------------------------------------------------------------------------------- 1 : transforme les <img> en <svg>

// le sélecteur img[src$=svg] permet de sélectionner les img dont l’attribut src finit par svg
// voir https://ateliers.esad-pyrenees.fr/web/pages/ressources/css/selectors/#autres-selecteurs-utiles
// on aurait aussi pu attribuer une class aux <img> qu’on souhaite remplacer par des <svg>
const svgs_as_imgs = document.querySelectorAll('img[src$=svg]');

// création d’une liste vide de même taille que le nombre d’images afin de conserver l’ordre des svgs
const svgs_as_svgs = Array.from({ length: svgs_as_imgs.length }); // https://developer.mozilla.org/fr/docs/Web/JavaScript/Reference/Global_Objects/Array/from
// crée un compteur pour savoir quand tous les svgs auront été chargés
let count = 0;

svgs_as_imgs.forEach((img, index) => {
  // crée une requête vers la source de l’img
  fetch(img.src)
  // traite la réponse en tant que texte
  .then(response => response.text())
  // fait quelque chose avec cette réponse…
  .then(svgcode => {
    // crée un élément svg depuis son code HTML
    // cf. fonction “fromHTML”, plus bas
    const svg = fromHTML(svgcode);
    // injecte l’élément svg juste avant l’image source
    img.insertAdjacentElement("beforebegin", svg);
    // associe à l’élément svg tous les attributs de l’image source
    [...img.attributes].forEach((attr) => {
      svg.setAttribute(attr.name, attr.value);
    });
    // supprime l’image source
    img.remove();
    // intègre le svg dans la liste à la position initiale de l’img
    svgs_as_svgs[index] = svg;

    // est-ce qu’on a fini de charger tous les svgs ?
    count++;
    console.log(count, ' / ', svgs_as_imgs.length, ' has been loaded');
    if(count == svgs_as_imgs.length){
      console.log('Each svg has been loaded');
      init();
    }
  });
});


// --------------------------------------------------------------------------------------- 2 : actions


// une liste d’actions pour chacun des éléments svg interactifs, qui permet d’éditer les svg dans Inkscape / illustrator
// et de leur attribuer des comportements sans éditer leur code, uniquement en fonction des noms (id) des groupes et des calques
// chaque entrée contient :
// - id: "" => une chaine de caractères, l’id du calque, du groupe, de l’élément au sein du svg
// - params: [] => une liste des paramètres éventuels à transmettre à la fonction
// - fn: {} => la fonction appelée pour l’élément
const actions = [
  { id: "path790", params: ["red"], fn: change_fill_on_mouseover },
  
  { id: "svg-1-a", params: ["pink"], fn: change_fill_on_mouseover },
  { id: "svg-1-b", params: ["limegreen"], fn: change_fill_on_mouseover },
  { id: "svg-1-c", params: ["aqua"], fn: change_fill_on_mouseover },

  { id: "svg-1-a", params: ["article-02"], fn: show_article_on_click },
  { id: "svg-1-b", params: ["article-03"], fn: show_article_on_click },
  { id: "svg-1-c", params: ["article-04"], fn: show_article_on_click },
]

// une fois que tous les <svg> ont remplacé les <img>, on initialise les autres comportements
function init() {
  actions.forEach(action => {
    action.fn( document.getElementById(action.id), action.params );
  });
}


// --------------------------------------------------------------------------------------- 3 : fonctions d’exemple

// fonction pour changer la couleur d’un élément
function change_fill_on_mouseover(element, params){
  
  const original_fill = element.style.fill;
  element.addEventListener('mouseenter', (e) => {
    element.style.fill = params[0]
  })
  element.addEventListener('mouseleave', (e) => {
    element.style.fill = original_fill
  })
}


// fonction pour afficher un article au click
function show_article_on_click(element, params){
  element.addEventListener('click', (e) => {
    show_article(params[0]);
  })  
}

// fonction pour afficher un article (à partir de son id)
function show_article(id){
  let visible = document.querySelector('article.visible');
  // cache le précédent article visible
  visible.classList.remove("visible");
  // détermine le nouvel article à afficher
  let real_id = id.replace('#','');
  visible = document.getElementById(real_id);
  // lui ajoute la class “visible”
  visible.classList.add("visible");
  // update du hash
  history.pushState({ }, "", "#" + real_id);
}

// rafraichissement de page
if(window.location.hash) {
  let article_id = window.location.hash;	
  show_article(article_id);	
}

// boutons ← / →
window.addEventListener("popstate", (e) => {
  let article_id = window.location.hash;	
  show_article(article_id);	
})

// --------------------------------------------------------------------------------------- 4 : utilitaires

// fonction utilitaire pour créer un élément à partir de son code HTML
// https://stackoverflow.com/questions/494143/creating-a-new-dom-element-from-an-html-string-using-built-in-dom-methods-or-pro
/**
 * @param {String} HTML representing a single element.
 * @param {Boolean} flag representing whether or not to trim input whitespace, defaults to true.
 * @return {Element | HTMLCollection | null}
 */
function fromHTML(html, trim = true) {
  // Process the HTML string.
  html = trim ? html.trim() : html;
  if (!html) return null;

  // Then set up a new template element.
  const template = document.createElement('template');
  template.innerHTML = html;
  const result = template.content.children;

  // Then return either an HTMLElement or HTMLCollection,
  // based on whether the input HTML had one or more roots.
  if (result.length === 1) return result[0];
  return result;
}