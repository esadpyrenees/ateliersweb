


let scrollable = document.querySelector('main'), 
  sl = 0, // position gauche de l’élément scrollable 
  sw = 0, //  largeur de l’élément scrollable
  ww; // largeur de la fenêtre  

// effectue les mesures
let doMeasures = new Promise(function(resolve, reject) {
  sw = scrollable.scrollWidth;
  ww = window.innerWidth;
  // transmet à CSS la largeur de l’élément
  scrollable.style.setProperty('--width', sw);
  resolve();
});

// scroll !
function doScroll() {

  // plans parallaxés
  const plans = document.querySelectorAll(".plan");
  plans.forEach(plan => {
    const speed = plan.style.getPropertyValue("--speed") || 1;
    // détermine la largeur de l’élément en fonction de sa propriété --speed
    let pw = ww + (sw - ww ) * speed ;
    plan.style.width = pw + "px"
  }); 

  // scroll event
  scrollable.addEventListener('wheel', (e) => {
    e.preventDefault();
    // dans quelle direction scrolle-t-on ? renvoie 1 ou -1
    var delta = Math.max(-1, Math.min(1, (e.wheelDelta || -e.detail)));
    // multiplie par 100
    delta = delta * 100;
    // empêche de scroller en dessous de zéro
    if((sl < 100 && Math.sign(delta) < 0)) return false;
    // met à jour la variable sl
    sl = Math.min(sw - ww, Math.abs(sl + delta));
    // move !
    doMove();
  })
}
// effectue le déplcement
function doMove(){
  scrollable.style.setProperty('--scroll', sl);
  scrollable.scrollLeft = sl;
}

// fonction rapide pour que ça marche plus ou moins bien sur mobile :(
document.addEventListener('touchmove', function() {
  sl = scrollable.scrollLeft;
  scrollable.style.setProperty('--scroll', sl);
})

// invoque doScroll() quand la page est complète
if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", () => { doMeasures.then(doScroll()) } );
} else {
  doMeasures.then(doScroll());
}

// invoque le mouvement global quand on clique sur un lien de navigation
const navlinks = document.querySelectorAll('nav a');
navlinks.forEach(a => {
  a.onclick = (e) => {
    e.preventDefault();
    const target = document.querySelector( a.getAttribute("href") );
    sl = target.offsetLeft;
    doMove();
  }
});
