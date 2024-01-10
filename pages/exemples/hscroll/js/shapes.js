
function randint(min, max){
  return Math.floor( Math.random() * (max-min) + min);
}

// Cette fonction génère un nombre aléatoire d’éléments svg 
// qui contiennent chacun un tracé composé d’un nombre aléatoire de points
// et dessinent de petites montagnes :)

function generateShapes(){
  const articles = document.querySelectorAll('article');
  articles.forEach(a => {
    // mesure l’article
    let rect = a.getBoundingClientRect();

    // créée un nombre aléatoire de <svg> (entre 4 et 10)
    for (let i = 0; i < randint(4, 10); i++) {
      // svg
      const s = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      // dimensions
      let w = randint(100, 500);
      let h = randint(100, 300);
      s.setAttribute("width", w);
      s.setAttribute("height", h);
      s.setAttribute("viewBox", `0 0 ${w} ${h}`);
      // crée un tracé…
      const p = document.createElementNS('http://www.w3.org/2000/svg', 'path');
      // chaîne de définition du tracé
      let d = ""; 
      // nombre de points
      const n = randint(2, 20);
      // premier point
      let x = randint(2, w / 2);
      let y = randint(2, h / 2);
      d += `M ${x} ${y} L `;
      // points suivants
      let i = 0;
      while (i < n && x < w - 40) {
        // chaque point varie de plus ou moins 40 pixels par rapport au précédent
        x = Math.min(w - 2, Math.max(2, randint(x , x + 40)));
        y = Math.min(h - 2, Math.max(2, randint(y - 40, y + 40)));
        d += `${x} ${y} `;
        i++;
      }
      // couleur aléatoire
      p.style.stroke = `rgb(0,125,${randint(125,255)})`
      // affecte sa définition au tracé
      p.setAttribute("d", d);
      // ajout du path au svg
      s.appendChild(p);
      // ajout du svg à l’article
      a.appendChild(s);
      // positionnement aléatoire
      s.style.position = "absolute";
      s.style.left = randint(0, rect.width - w) + "px";
      s.style.top = randint(0, rect.height - h) + "px";
    } 
  });
}

if (document.readyState === "loading") {
  document.addEventListener("DOMContentLoaded", generateShapes);
} else {
  generateShapes();
}
