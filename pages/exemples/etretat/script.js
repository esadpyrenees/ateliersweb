// enregistre toutes les slides
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

// quand on clique sur un lien de la nav
document.querySelectorAll("nav a").forEach((a) => {
  a.onclick = (e) => {
    e.preventDefault();
    // on masque la slide courante
    slides[currentSlide].classList.remove('visible');
    // si la class du lien est "next", on invoque nextSlide(), sinon, prevSlide()
    // on peut aussi écrire : if (a.className == "next") { nextSlide(); } else { prevSlide(); }
    a.className == "next" ? nextSlide() : prevSlide();
    // on affiche la nouvelle slide courante
    slides[currentSlide].classList.add('visible');
    //  on modifie le #hash de la page en fonction de l’id de la nouvelle slide courante
    window.location.hash = slides[currentSlide].id;
  }
})

function nextSlide() {
  // utilise l’opérateur modulo pour “boucler”quand on arrive à la dernière slide
  currentSlide = (currentSlide + 1) % slides.length;
}
function prevSlide() {
  // utilise l’opérateur modulo pour “boucler”quand on arrive à la première slide
  // c’est assez barbare, je reconnais…
  currentSlide = ((currentSlide - 1) % slides.length + slides.length) % slides.length;
}

// quand on actualise, ou qu’on accède à l’url d’une slide en particulier
// on cherche la bonne slide en fonction du #hash de la page
const h = window.location.hash;
if (h) {
  // récupère la bonne slide en fonction de son id
  const s = document.querySelector(h);
  if (s) {
    // masque la première slide (visible par défaut)
    document.querySelector('.visible').classList.remove('visible');
    // affiche la slide ciblée par le #hash
    s.classList.add('visible');
    // récupère l’index de la slide parmi l’ensemble des slides pour que la navigation fonctionne
    const arr = Array.from(slides);
    currentSlide = arr.indexOf(s);
  }
}