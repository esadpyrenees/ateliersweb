// Une liste d’images
// ici, les URLs sont absolues, mais elles pourraient être relatives :
// var images = [
//   "img/image1.jpg",
//   "img/image2.jpg",
// ]
var images = [
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/1.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/2.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/3.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/4.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/5.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/6.jpg",
  "https://ateliers.esad-pyrenees.fr/_inc/img/500/7.jpg"
]

// une liste vide pour stocker les images chargées
var loaded = [];

// pour chaque image
for (image_url of images) {
  var i = document.createElement("img");
  // quand l’image est chargée…
  i.addEventListener('load', function(){
    // nb: “this” représente l’image chargée
    // …on ajoute l’image au body
    document.body.appendChild(this);  
    // …on l’ajoute aussi à la liste des images chargées
    loaded.push(this);
    // Si toutes les images sont chargées, on les positionne et on les affiche…
    if(loaded.length == images.length){
      // …en appelant la fonction displayImages
      displayImages();
    }
  });
  i.src = image_url;  
}

function displayImages(){
  // on mesure la taille de la fenêtre pour limiter la position des images
  var wh = window.innerHeight,
      ww = window.innerWidth;

  // on affiche les images grâce à la class ajoutée au body
  document.body.classList.add('loaded');

  // pour chaque élément
  loaded.forEach(function (image) {
    var size = image.getBoundingClientRect();
    // on affecte un left et un top aléatoire dans les limites de
    // la taille de la fenêtre MOINS la taille de l’image
    var w = Math.floor(size.width),
        h = Math.floor(size.height),
        l = Math.floor(Math.random() * (ww - w)),
        t = Math.floor(Math.random() * (wh - h));
        
    image.style = 'left:' + l + 'px; top:' + t + 'px;';
  });
}