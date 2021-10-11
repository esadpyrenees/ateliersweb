const buttons = document.querySelectorAll('button');
const word = document.querySelector('#word');
const debug = document.querySelector('#debug');

buttons.forEach( button => {
  button.onclick = (e) => {
    let value = " ";
    // switch permet d’évaluer la valeur d’une propriété (ici l’id du bouton) 
    // et d’effectuer des actions selon cette valeur
    switch (button.id) {

      // si l’id est 'color'
      case 'color':
        // on détermine une teinte aléatoire (hue)
        const hue = Math.floor(Math.random() * 360);
        // on crée une nouvelle déclaration de couleur
        value = 'hsl(' + hue + ', 80%, 50%)';
        // on l’attribue à l’élément
        word.style.color = value;
        break;
        
      // si l’id est 'width' ou 'weight'
      case 'width':
        // On détermine une valuer aléatoire entre 0 et 900
        value = Math.floor(Math.random() * 900);    
        // On attribue cette valeur comme propriété de l’élément
        word.style.setProperty('--wdth', value);
      break;
      case 'weight':
        value = Math.floor(Math.random() * 900);        
        word.style.setProperty('--wght', value);
        break;

      // si l’id vaut au-centre, a-droite, ou a-gauche, on change la class
      case 'au-centre':
      case 'a-droite':
      case 'a-gauche':
        word.className = button.id;
        break;
    }

    // affiche la valeur de la variable “value”, pour débugger
    debug.textContent = value;
    // au bout d’une seconde, supprime cet affichage
    setTimeout(function(){
      debug.textContent = "";
    }, 1000)
  }
})
