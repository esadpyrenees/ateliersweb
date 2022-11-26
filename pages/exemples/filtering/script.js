
document.addEventListener("DOMContentLoaded", function() {
  // séelction de tous les boutons pour filtrer l’affichage
  var filters = document.querySelectorAll('nav button');
  // sélection de tous les élements à filtrer
  var elements = document.querySelectorAll('.color');

  filters.forEach( filter => { 
    filter.onclick = (e) => {
      // modifie les liens du menu (les filtres)
      document.querySelector('nav .active').classList.remove('active');
      filter.classList.add('active');
      // on lit la catégorie du filtre
      var category = filter.dataset.category;
      // on parcourt tous les projets pour voir s’ils 
      // ont la class corrrespondant à la catégorie active
      elements.forEach( element => {
        if(element.classList.contains(category)){
          // si oui, on les affiche
          element.classList.remove('hidden');
        } else {
          // si non, on les masque
          element.classList.add('hidden');
        }
      })
    }
  });
});