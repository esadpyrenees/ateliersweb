document.addEventListener('click', function (event) {

  // si l’élément sur lequel on clique a la class “click_for_next”
	if (event.target.matches('.click_for_next')) {
    // on selectionne l’élément à afficher grâce à son attribut “data-next”
    var next_element = document.querySelector(event.target.getAttribute('data-next'));
    // on lui retire la class “hidden” qui le masquait
    next_element.classList.remove('hidden');
  }
  
  // si l’élément sur lequel on clique a la class “the_end”
	if (event.target.matches('.the_end')) {
    // on ajoute la classe “end” au body
		document.body.classList.add('end');
  }
  
  // si l’élément sur lequel on clique a la class “start”
  if (event.target.matches('.start')) {
    // on sélectionne tous les éléments à l’intérieur de “main” sauf le premier => :not(:first-child)
		document.querySelectorAll('main :not(:first-child)').forEach(function(element) {
      // à chacun d’eux on ajoute la class hidden
      element.classList.add('hidden');
      // on retire la classe “end” du body
      document.body.classList.remove('end');
    })
  }

}, false);

