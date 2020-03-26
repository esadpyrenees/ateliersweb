
// source : https://3dtransforms.desandro.com/
// + https://codepen.io/desandro/pen/LmWoWe

var cards = document.querySelectorAll('.card');
cards.forEach(function(card){
  card.addEventListener( 'click', function() {
    card.classList.toggle('is-flipped');
  });
})