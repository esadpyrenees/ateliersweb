
var gallery = document.querySelector(".gallery"); 
var children = gallery.querySelectorAll('figure');
var debug = document.querySelector(".debug"); // utile pour débugger

gallery.addEventListener('mousemove', function(e){
  // on mesure la taille de la galerie
  var rect = gallery.getBoundingClientRect();
  var x = e.clientX - rect.left; // calcule la position x dans de la galerie
  var xp = Math.floor(x * 100 / rect.width); // on détermine la position en pourcentage
  var showIndex = Math.floor(xp * children.length / 100); // on détermine l’index de l’image à afficher
  var ontop = children[showIndex]; // on sélectionne l’image à afficher grâce à son index
  children.forEach((c) => {c.classList.remove('above')}) // on supprime la class “above” des autres images
  ontop.classList.add('above'); // on ajoute la class “above” à l’image sélectionnée
  // juste pour info / débug :
  debug.textContent = `Survol: ${xp}% = image ${showIndex + 1}`
})