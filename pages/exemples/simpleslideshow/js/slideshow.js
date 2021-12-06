// Pour tous les slideshows de la page
var slideshows = document.querySelectorAll('.slideshow');
slideshows.forEach(slideshow => {
  // La durée de transition est déterminée par la présence d’un attribut data-duration 
  var duration = parseInt(slideshow.dataset.duration);
  // la durée est transmise à la CSS par l’intermédiaire d’une propriété personnalisée
  slideshow.style.setProperty('--duration', duration + 'ms');
  // Affiche le premier élément
  var first = slideshow.querySelector(':scope > :first-child');
  first.classList.add('showing');
  //  au click
  slideshow.addEventListener('click', (e) => {
    nextSlide(slideshow, duration);
  })
  // autoplay
  if(slideshow.matches('.autoplay')){
    setInterval(() => {
      nextSlide(slideshow, duration)
    }, duration);
  }
});

function nextSlide(slideshow, duration){
  var first = slideshow.querySelector(':scope > :first-child');
  first.classList.add('hiding');
  first.classList.remove('showing');
  setTimeout(() => {
    first.parentElement.appendChild(first) ;
    first.classList.remove("hiding");
    setTimeout(() => { 
      slideshow.querySelector(':scope > :first-child').classList.add('showing');
    }, 5);
  }, duration);
}