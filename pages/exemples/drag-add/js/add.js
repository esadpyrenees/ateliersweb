
const main = document.querySelector('main');
const add_button = document.querySelector('#add');
const form = document.querySelector('#form');

// est-ce qu’on est en train d’ajouter un élément
let is_adding = false;

// differenciate “drag” and “click”
let drag = false;
main.addEventListener('mousedown', () => drag = false);
main.addEventListener('mousemove', () => drag = true);

// show add button when clicking on main
main.addEventListener('mouseup', (e) => {

  if(is_adding == true && !e.target.matches('#add')){
    // hide add-button
    add_button.style.top = "-100px";
    add_button.style.left = "-100px";
    add_button.classList.remove('visible');
    is_adding = false;
    // hide form
    form.classList.remove('visible');
  }
  if(drag == false && is_adding == false){
    // we got a click
    var m = main.getBoundingClientRect();
    add_button.style.top = (e.pageY - m.top) + "px";
    add_button.style.left = (e.pageX- m.left) + "px";
    add_button.classList.add('visible');
    is_adding = true;
  }
});

// do something when add button is clicked
add_button.addEventListener('click', (e) => {
  var m = main.getBoundingClientRect();
  form.querySelector('#top').value = (e.pageY - m.top);
  form.querySelector('#left').value = (e.pageX- m.left);
  form.classList.add('visible');
})

