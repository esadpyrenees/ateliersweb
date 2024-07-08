

var groups = [
  "Marjorie", 
  "Morgane",
  "Morganne",
  "Yuyuan",
  "Mélina",
  "Izis",
  "Kassandra",
  "Sarah",
  "Clara",
  "Alexandre",
  "Clémence",
  "Manon",
  "Lucie",
  "Lélio",
  "Elen"
]

  
  var dates = [
      "9h15",
      "9h30",
      "9h45",
      "10h00",
      "10h15",
      "10h30",
      "10h45",
      "11h00",
      "11h15",
      "11h30",
      "11h45",
      "12h00",
      "12h15",
      "12h30",
      "12h45",
  ];
  
  
  // suffle
  
  for(let i = groups.length - 1; i > 0; i--){
    const j = Math.floor(Math.random() * i)
    const temp = groups[i]
    groups[i] = groups[j]
    groups[j] = temp
  }
  
  dates.forEach(madate => {
    // on crée une "section" vide pour la date
    var section = document.createElement('section');
    // on crée un élément "h2" vide
    var h2 = document.createElement('h2');
    // on écrit la date dans le h2
    h2.textContent = madate;
    // on ajoute le h2 au contenu
    section.appendChild(h2);
  
    // un peu de fun avec Math.random()
    var scale =  Math.random() * 2 + .6;
    // on ajoute une transformation css pour modifier l’échelle horizontale du h2
    h2.style.transform = 'scaleX(' + scale + ')';
    h2.className = "nohash";
    // on corrige la marge en fonction de l’échelle
    h2.style.marginLeft = scale * scale * -1 + 'px';
    // quelles étudiantes
    var p = document.createElement('p');
    p.textContent += "→ " + groups.shift();
    section.appendChild(p);
  
    document.querySelector('#pk').appendChild(section);
      
  });