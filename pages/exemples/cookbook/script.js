const recipes = document.querySelectorAll('.recette');
recipes.forEach(recipe => {
  recipe.onclick = (e) => {
    // clic sur une image (mode grille)
    if(document.body.className != "detail" && e.target.tagName == 'IMG' ){
      document.body.className = "detail";
      const recette = e.target.closest('article');
      recette.classList.add('open');
      recette.scrollIntoView({behavior:"smooth"})
    }

    // clic sur un bouton print (mode détail)
    if(document.body.className == "detail" && e.target.className == 'print' ){
      document.body.className = "printing";
      const recette = e.target.closest('article');
      window.print();
      // reset
      document.body.className = "grid";
      recette.classList.remove('open');
    }

    // clic sur un bouton close (mode détail)
    if(document.body.className == "detail" && e.target.className == 'close' ){
      const recette = e.target.closest('article');
      // reset
      document.body.className = "grid";
      recette.classList.remove('open');
    }
  }
});