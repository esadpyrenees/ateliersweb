// délai aléatoire pour l’animation de chaque article
var articles = document.querySelectorAll('article');
articles.forEach(function(el, index){
  el.style.animationDelay = '-' + Math.floor( Math.random() * 20) + 's';
})