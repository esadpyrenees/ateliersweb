// les objets
const dudes = document.querySelectorAll('.dude');

// les controles
const control_hue = document.querySelector('#hue');
const control_size = document.querySelector('#size');
const controls_shape = document.querySelectorAll('[name=shape]'); 
const resets = document.querySelectorAll('[type="reset"]');

// initialisation des filtres
const filters = {
  "hue": null,
  "shape": null,
  "size": null,
}

// controle : teinte
control_hue.addEventListener('change', () => {
  filters.hue = control_hue.value;
  do_filter();
})

// controle : taille
control_size.addEventListener('change', () => {
  filters.size = control_size.value;
  do_filter();
})

// controle : forme
// il faut agir sur tous les input[radio]
controls_shape.forEach(control_shape => {
  control_shape.addEventListener('change', () => {
    filters.shape = control_shape.value;
    do_filter();
  })
});

// les boutons de réinitialisation de la taille et de la teinte
resets.forEach(reset => {
  reset.onclick = () => {
    let input = reset.parentElement.querySelector('input');
    input.value = "";
    filters[reset.dataset.input] = null;
    do_filter();
  }
});

// au click sur un objet
dudes.forEach(dude => {
  dude.onclick = () => {
    // on établit les valeurs des contrôles et du filtre à apppliquer 
    control_hue.value = filters.hue = dude.dataset.hue;
    control_size.value = filters.size = dude.dataset.size;
    document.querySelector('#'+dude.dataset.shape).checked = true;
    filters.shape = dude.dataset.shape;
    do_filter();
  }
});

// fonction de filtre
function do_filter(){
  dudes.forEach(dude => {
    // tout est bon, à priori
    let is_hue_ok = true,
      is_size_ok = true,
      is_shape_ok = true;
    // application du filtrage sur la teinte (approx)
    if(filters.hue){
      is_hue_ok = is_approx(Number(dude.dataset.hue), Number(filters.hue), 30);   
    }
    // application du filtrage sur la taille (approx)
    if(filters.size){
       is_size_ok = is_approx(Number(dude.dataset.size), Number(filters.size), 4000);   
    }
    // application du filtrage sur la forme
    if(filters.shape){
      if (filters.shape == "all" || dude.dataset.shape == filters.shape) {
          is_shape_ok = true;
      } else {        
        is_shape_ok = false;
      }
    }
    // si l’objet correspond à toutes les contraintes, on l’affiche ; sinon, on le masque
    dude.style.display = (is_hue_ok && is_size_ok && is_shape_ok) ? "flex" : "none"
  });
}

// renvoie vrai si la valeur (value) s’approche de la cible (target), plus ou moins (fuzz)
function is_approx(value, target, fuzz) {
  let min = target - fuzz >= 0 ? target - fuzz : 0;
  return (value >= target - fuzz) && (value <= target + fuzz);
}