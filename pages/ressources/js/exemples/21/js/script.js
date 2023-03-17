
// référence du premier élément visible
var visible_element = document.querySelector('.visible');

// premier élément (image)
visible_element.addEventListener('click', function(){
  playNext();
})

// fonction 
function playNext(){
  
  // cache l’élément visible actuel
  visible_element.classList.remove('visible');

  // stocke le prochain élément
  visible_element = visible_element.nextElementSibling;

  // affiche l’élément
  visible_element.classList.add('visible');

  // si cet élément est un média
  if( ["audio", "video"].includes(visible_element.tagName.toLowerCase()) ){

    // joue le média 
    visible_element.play();

    // à la fin du média, joue le suivant 
    visible_element.addEventListener("ended", function() { 
      playNext();
    }, true);
    
  }

}