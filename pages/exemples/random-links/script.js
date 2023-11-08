// La liste des liens est obtenue grâce à la lecture d’un fichier csv (Libre Office Calc, Excel, Google Sheets)

// Configuration :
const csv = "links.csv";
const separator = ";"

// Lecture du fichier
var request = new XMLHttpRequest();  
request.open("GET", "links.csv", false);   
request.send(null);  

// fonction pour supprimer les guillemets autour des chaînes
function unquote(string="", quote='"'){
  return string.replaceAll(quote, '');
}

// construction de données exploitables
const links = new Array();
// coupe la réponse par ligne
const json = request.responseText.split(/\r?\n|\r/);
// nom des colonnes
let columns = new Array()

// pour chaque ligne :
for (let i = 0; i < json.length; i++) {
  // ligne 0 : entête (nom des colonnes)
  if(i == 0) {
    columns = json[i].split( separator )
  // autres lignes : valeurs
  } else {
    const values = json[i].split( separator )
    let row = {};
    columns.forEach((column, index) => {
      row[unquote(column)] = unquote(values[index]);
      // ici, on peut mofifier les valeurs en faisant des tests
      // par exemple :
      // if(column == "categories") {
      //    // découpe une liste séparé par des virgules en array
      //    row[column] = values[index].split(",");
      // }
    });    
    links.push(row);
  }
};
console.log(links);
// Construction du HTML et interactions

let padding = 50, // marges
    wh = window.innerHeight - padding * 2, // hauteur de la fenêtre
    ww = window.innerWidth - padding * 2, // largeur de la fenêtre
    anchors = []; // liste des éléments <a>

//  pour chaque lien de la liste
for (var i = 0; i < links.length; i++) {
  const link = links[i];
  var a = document.createElement("a");
  // ici, on pourrait ajouter des class en fonction de la colonne “categories”
  a.classList.add('link');
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

// interactions
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
      body.className = bodyclass;
    }
  }
  
})