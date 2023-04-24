
const dudes = document.querySelectorAll('.dude');

const control_hue = document.querySelector('#hue');
const control_size = document.querySelector('#size');
const controls_shape = document.querySelectorAll('[name=shape]'); 
const resets = document.querySelectorAll('[type="reset"]');

const filters = {
  "hue": null,
  "shape": null,
  "size": null,
}

control_hue.addEventListener('change', () => {
  filters.hue = control_hue.value;
  do_filter();
})

control_size.addEventListener('change', () => {
  filters.size = control_size.value;
  do_filter();
})

controls_shape.forEach(control_shape => {
  console.log(control_shape);
  control_shape.addEventListener('change', () => {
    filters.shape = control_shape.value;
    do_filter();
  })
});

resets.forEach(reset => {
  reset.onclick = () => {
    let input = reset.parentElement.querySelector('input');
    input.value = "";
    filters[reset.dataset.input] = null;
    do_filter();
  }
});


function do_filter(){
  dudes.forEach(dude => {
    let is_hue_ok = true,
      is_size_ok = true,
      is_shape_ok = false;
    if(filters.hue){
      is_hue_ok = is_approx(Number(dude.dataset.hue), Number(filters.hue), 20);   
    }
    if(filters.size){
       is_size_ok = is_approx(Number(dude.dataset.size), Number(filters.size), 4000);   
    }
    if(filters.shape){
      if (filters.shape == "all" || dude.dataset.shape == filters.shape) {
          is_shape_ok = true;
      } 
    }
    // si le dude correspond à toutes les contraintes, on l’affiche ; sinon, on le masque
    dude.style.display = (is_hue_ok && is_size_ok && is_shape_ok) ? "flex" : "none"
  });
}

// renvoie vrai si la valeur (value) s’approche de la cible (target), plus ou moins (fuzz)
function is_approx(value, target, fuzz) {
  let min = target - fuzz >= 0 ? target - fuzz : 0;
  return (value >= target - fuzz) && (value <= target + fuzz);
}