const liste = [
  "Sarah",
  "Morganne",
  "Aurore",
  "Thibault",
  "Andreas",
  "Carla",
  "Anita",
  "Guilhem",
  "Gaylina",
  "Salomé",
  "Marion"
]

liste.forEach(student =>  {
  // crée un paragraphe avec une class "hidden" (pour cacher l’élément au démarrage)
  const p = document.createElement('p');
  p.classList.add("hidden");
  p.textContent = student;
  document.body.appendChild(p);

  // crée un input de type "range" (slider) dont la valeur oscille entre 0 et 100
  const input = document.createElement("input");
  input.type = 'range';
  input.setAttribute("max", 100);
  input.setAttribute("min", 0);
  p.appendChild(input)

  // crée un bouton pour valider la valeur
  const button = document.createElement('button');
  p.appendChild(button);
  button.textContent = "OK"
  // au click sur le bouton
  button.onclick = () => {
    if(input.value < 50) {
      // si la valeur est inférieure à 50
      alert('Not enough!');
    } else {
      // sinon, exécute la fonction "next", en transmettant le nom de l’étudiant et la valeur de l’input
      next(student, input.value);
    }
  }
})

// crée une variable pour contenir les résultats
let results = "<h2>Résultats</h2>";

function next(student, value){
  // sélectionne le premier élément qui a la class visible, = l’élément courant
  var visible = document.querySelector('.visible');
  if(visible){
    // next = l’élément qui suit immédiatement l’élément visible
    var next = visible.nextElementSibling;
    // lui enlève la visibilité
    visible.classList.remove('visible');
    if(next) {
      // s’il y a un élément suivant (encore un⋅e étudiant⋅e à évaluer)
      // ajoute la class visible
      next.classList.add('visible');
      // les chaines entre backticks (``) peuvent contenir des variables, affichées grâce à la notation ${nom_de_la_variable}
      // += permet d’ajouter une chaine la valeur actuelle de la variable (ou d’additionner des nombres si les deux valeurs sont des nombres)
      results += `<p>${student}: ${value}</p>`;
    } else {
      var div = document.createElement("div");
      div.classList.add('results');
      div.innerHTML = results;
      document.body.appendChild(div);
    }
  }
}

// rend visible le premier paragraphe
document.querySelector('p').classList.add("visible");
  