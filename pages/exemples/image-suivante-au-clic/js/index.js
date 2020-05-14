document.addEventListener('click', function (event) {

  // si l’élément sur lequel on clique a la class “click_for_next”
	if (event.target.matches('.click_for_next')) {
    // on selectionne les éléments à afficher grâce à son attribut “data-next”
    var next_elements_list = event.target.getAttribute('data-next');

    // l’attribut peut contenir une liste d’éléments, séparés par des virgules
    // on le “splite” en une liste (un “array”)
    next_elements = next_elements_list.split(",");

    for(var i=0; i<next_elements.length; i++) {
      // on lui retire à chaque élément la class “hidden” qui le masquait
      document.querySelector(next_elements[i]).classList.remove('hidden');
    }
    
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

