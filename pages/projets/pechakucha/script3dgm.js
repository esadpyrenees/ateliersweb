

var groups = [
  ["Marie A.", "Malea L."],
  ["Irma B.","Maud E."],
  ["Wenting Z.", "Jiajing W."],
  ["Anastasia V.", "Cecile B." ],
  ["Ophelie S.", "Marion R."],
  ["Adeline S.", "Paul L."],
  ["Carla R.", "Ambrosia D."],
  ["Thibault J.", "Hugo H."],
  ["Chloé G.","Oceane F."],
  ["Manon G.","Elisa M.",],
  ["Salome R.", "Matthew C."],
  ["Soulyne C.", "Orso D."]
]

  
  var dates = [
      "15/10",
      "16/10",
      "22/10",
      "5/11",
      "12/11",
      "13/11",
      "19/11",
      "26/11",
      "27/11",
      "3/12",
      "10/12",
      "11/12"
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
    // on corrige la marge en fonction de l’échelle
    h2.style.marginLeft = scale * scale * -1 + 'px';
    // quelles étudiantes
    var p = document.createElement('p');
    p.textContent += groups.shift();
    section.appendChild(p);
  
    document.querySelector('#pk').appendChild(section);
      
  });