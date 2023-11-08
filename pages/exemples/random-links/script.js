// La liste des liens est obtenue grâce à la déclaration de `const links = […]` dans le fichier links.js
// Les liens sont formatés ainsi :
const example_links = [
  { 
    text: "Libellé du lien", 
    url: "http://url-du.lien"
  }, 
  { 
    text: "Libellé du lien", 
    url: "http://url-du.lien"
  }
];


let padding = 50, // marges
    wh = window.innerHeight - padding * 2, // hauteur de la fenêtre
    ww = window.innerWidth - padding * 2, // largeur de la fenêtre
    anchors = []; // liste des éléments <a>

//  pour chaque lien de la liste
for (var i = 0; i < links.length; i++) {
  const link = links[i];
  var a = document.createElement("a");
  a.className = 'link';
  // texte et href issus des attributs "text" et "url" de l’élément
  a.textContent = link.text;
  a.href = link.url;
  document.body.appendChild(a);
  // on l’ajoute à la liste des éléments
  anchors.push(a);
  // on détermine sa position
  setPosition(a);
}

function setPosition(element){
  // on mesure l’élément
  const size = element.getBoundingClientRect(),
    w = Math.floor(size.width),
    h = Math.floor(size.height);
  // on le positionne aléatoirement en tenant compte de sa taille 
  const left = padding + Math.floor(Math.random() * (ww - w)),
    top = padding + Math.floor(Math.random() * (wh - h));
  element.style = 'left:' + left + 'px; top:' + top + 'px;';
}

// au redimensionnement de la fenêtre, on repositionne tout
window.addEventListener('resize', () => {
  wh = window.innerHeight - padding * 2;
  ww = window.innerWidth - padding * 2;
  // pour chaque élément
  anchors.forEach(function (a) {  
    setPosition(a);
  });
});

const nav = document.querySelector('#nav'),
  body = document.body;
nav.addEventListener("click", (e) => {
  const clicked_element = e.target;
  // si l’élément cliqué a un attribut data-bodyclass :
  if(clicked_element.dataset.hasOwnProperty('bodyclass')){
    const bodyclass = clicked_element.dataset.bodyclass;
    // enlève la class du body s’il en a déjà une
    if(body.classList.contains(bodyclass)) {
      body.className = "";
    // ou ajoute la class au body
    } else {
      body.className = bodyclass
    }
  }
  
})