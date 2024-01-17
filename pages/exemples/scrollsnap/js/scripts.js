// récupère tous les article
const articles = [...document.querySelectorAll('article')];

// créée une navigation
const nav = document.createElement("nav");
document.body.appendChild(nav);

// pour chaque article, crée un lien
articles.forEach((article,idx) => {
  // attribue un id pour déterminer la destination (ancre) du lien
  const id = article.id || "article-" + idx;
  article.id = id;
  const a = document.createElement("a");
  a.href = "#" + id;
  nav.appendChild(a);

  // bonus couleur
  const color = article.style.getPropertyValue("--color");
  a.style.setProperty('--color', color);
});