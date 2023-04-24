
var pile = document.querySelector(".pile");
var images = pile.querySelectorAll("figure");

// pour chaque image
images.forEach( image => {
  // applique une couleur aléatoire
  image.style.setProperty("--color", r(0, 360));  
  // applique une rotation aléatoire
  image.style.transform = `rotate(${ r(-20, 20) }deg)`;  
  // applique un centre de rotation aléatoire 
  image.style.transformOrigin = `${ 100 - r(0, 100) }% ${ 100 - r(0, 100) }%`;    
});

// au click sur la pile
pile.addEventListener ("click", function(){
  // sélectionne la dernière image
  let lastimage = pile.querySelector(":scope > :last-child");
  // injecte la dernière image en première place
  pile.prepend(lastimage);
  // modifie la transformation
  lastimage.style.transform = `rotate(${ r(-20, 20) }deg)`;      
});

// utilitaire qui renvoie un nombre entier entre min et max
function r(min, max){
  return Math.floor(Math.random() * (max - min) + min);
}