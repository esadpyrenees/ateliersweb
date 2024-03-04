

// le premier élément (article) visible
let visible = document.querySelector('article.visible');
makeSequence(visible);

// pour chaque lien, au click, affiche l’article
const links = document.querySelectorAll('a[href^="#"]'); // ← tous les <a> dont l’attribut href commence par #
links.forEach(link => {
  link.onclick = () => {
    const article_id = link.getAttribute('href');
    showArticle(article_id);
  }
});

// fonction pour afficher un article (à partir de son id: #id_de_larticle )
function showArticle(article_id){
  // cache le précédent article visible
  visible.classList.remove("visible");
  // détermine le nouvel article à afficher
  visible = document.querySelector(article_id);
  // lui ajoute la class “visible”
  visible.classList.add("visible");
  // active la séquence pour cet article
  makeSequence(visible);
}

// fonction pour générer la séquence interne de chaque article
function makeSequence(article){
  // choses à afficher (contiennent un attribut `data-in`)
  const things_to_show = article.querySelectorAll("[data-in]");
  things_to_show.forEach(thing => {
    thing.classList.remove('visible'); // réinitialise les choses précédemment affichées
    // après le temps défini par la valeur de `data-in`
    setTimeout(() => {
      thing.classList.add("visible");
    }, thing.dataset.in);
  });
  // choses à cacher (contiennent un attribut `data-out`)
  const things_to_hide = article.querySelectorAll("[data-out]");
  things_to_hide.forEach(thing => {
    thing.classList.remove('hidden'); // réinitialise les choses précédemment cachées
    // après le temps défini par la valeur de `data-out`
    setTimeout(() => {
      thing.classList.add("hidden");
    }, thing.dataset.out);
  });
}

// rafraichissement de page
if(window.location.hash) {
  let article_id = window.location.hash;	
  showArticle(article_id);	
}

// boutons ← / →
window.addEventListener("popstate", (e) => {
  let article_id = window.location.hash;	
  showArticle(article_id);	
})
