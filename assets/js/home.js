var links = [
  ["HTML", "/web/pages/ressources/html/","ressources"],
  ["CSS", "/web/pages/ressources/css/","ressources"],
  ["FTP", "/web/pages/ressources/ftp/","ressources"],
  ["Javascript", "/web/pages/ressources/js/","ressources"],
  ["Python", "/web/pages/ressources/python/","ressources"],
  ["PHP", "/web/pages/ressources/php/","ressources"],
  ["Typographie", "/web/pages/ressources/typo/","ressources"],
  ["Audio & vidéo", "/web/pages/ressources/audiovideo/","ressources"],
  ["Responsive", "/web/pages/ressources/rwd/","ressources"],
  ["Canvas", "/web/pages/ressources/canvas/","ressources"],
  ["CTRL Alt print", "/web/pages/ressources/ctrl-alt-print/","ressources"],
  ["Internet", "/web/pages/ressources/html/internet/","ressources"],
  ["Le Web", "/web/pages/ressources/html/web/","ressources"],
  ["Démarrer", "/web/pages/ressources/html/start/","ressources"],
  ["Bases", "/web/pages/ressources/html/bases/","ressources"],
  ["Syntaxe", "/web/pages/ressources/html/bases/#syntax","ressources"],
  ["Attributs", "/web/pages/ressources/html/bases/#attributes","ressources"],
  ["Commentaires", "/web/pages/ressources/html/bases/#comments","ressources"],
  ["Block/Inline", "/web/pages/ressources/html/bases/#block-inline","ressources"],
  ["Hiérarchie", "/web/pages/ressources/html/bases/#hierarchy","ressources"],
  ["Sémantique", "/web/pages/ressources/html/bases/#semantics","ressources"],
  ["Espaces", "/web/pages/ressources/html/bases/#spaces","ressources"],
  ["Validation", "/web/pages/ressources/html/bases/#validation","ressources"],
  ["Contenu", "/web/pages/ressources/html/content/","ressources"],
  ["Texte", "/web/pages/ressources/html/content/#text","ressources"],
  ["En ligne", "/web/pages/ressources/html/content/#inline","ressources"],
  ["Liens", "/web/pages/ressources/html/content/#links","ressources"],
  ["Images", "/web/pages/ressources/html/content/#images","ressources"],
  ["Structure", "/web/pages/ressources/html/content/#structure","ressources"],
  ["Formulaires", "/web/pages/ressources/html/content/#forms","ressources"],
  ["Démarrer", "/web/pages/ressources/css/","ressources"],
  ["Syntaxe", "/web/pages/ressources/css/syntax/","ressources"],
  ["Sélecteurs", "/web/pages/ressources/css/selectors/","ressources"],
  ["Héritage", "/web/pages/ressources/css/inheritance/","ressources"],
  ["Unités", "/web/pages/ressources/css/units/","ressources"],
  ["Texte", "/web/pages/ressources/css/text/","ressources"],
  ["Arrière-plan", "/web/pages/ressources/css/background/","ressources"],
  ["Box model", "/web/pages/ressources/css/box/","ressources"],
  ["Positions", "/web/pages/ressources/css/positions/","ressources"],
  ["Mise en page", "/web/pages/ressources/css/layout/","ressources"],
  ["Flexbox", "/web/pages/ressources/flexbox/","ressources"],
  ["Grid", "/web/pages/ressources/css/grid/","ressources"],
  ["Animation", "/web/pages/ressources/css/transitions/","ressources"],
  ["Transformations", "/web/pages/ressources/css/transformations/","ressources"],
  ["Processus", "/web/pages/ressources/css/pratique/","ressources"],
  ["Ressources JS", "/web/pages/ressources/js/#ressources-js","ressources"],
  ["Javascript", "/web/pages/ressources/js/#introduction","ressources"],
  ["Variables", "/web/pages/ressources/js/#variables","ressources"],
  ["Logique", "/web/pages/ressources/js/#logique","ressources"],
  ["Conditions", "/web/pages/ressources/js/#conditions","ressources"],
  ["Boucles", "/web/pages/ressources/js/#boucles","ressources"],
  ["Fonctions", "/web/pages/ressources/js/#fonctions","ressources"],
  ["DOM+", "/web/pages/ressources/js/dom/","ressources"],
  ["DOM", "/web/pages/ressources/js/#dom","ressources"],
  ["jQuery", "/web/pages/ressources/js/#jquery","ressources"],
  ["Aléatoire", "/web/pages/ressources/js/#random","ressources"],
  ["Typo", "/web/pages/ressources/typo/","ressources"],
  ["Macro & micro", "/web/pages/ressources/typo/macromicro/","ressources"],
  ["Webfonts", "/web/pages/ressources/typo/webfonts/","ressources"],
  ["Opentype", "/web/pages/ressources/typo/opentype/","ressources"],
  ["Variables", "/web/pages/ressources/typo/variables/","ressources"],
  ["Ressources", "/web/pages/ressources/audiovideo/#ressources-audiovideo","ressources"],
  ["Exemples", "/web/pages/ressources/audiovideo/#exemples-audiovideo","ressources"],
  ["HTML", "/web/pages/ressources/audiovideo/#html","ressources"],
  ["Services web", "/web/pages/ressources/audiovideo/#services","ressources"],
  ["Javascript", "/web/pages/ressources/audiovideo/#javascript","ressources"],
  ["Web Audio Api", "/web/pages/ressources/audiovideo/#webaudioapi","ressources"],
  ["Media queries", "/web/pages/ressources/rwd/#media-queries","ressources"],
  ["Usages", "/web/pages/ressources/rwd/#usages","ressources"],
  ["Typographie", "/web/pages/ressources/rwd/#typography","ressources"],
  ["HTML / CSS", "/web/pages/references/htmlcss/", "references"],
  ["Typographie", "/web/pages/references/typo/", "references"],
  ["Écritures numériques", "/web/pages/references/ecrituresnumeriques/", "references"],
  ["Webdoc", "/web/pages/references/ecrituresnumeriques/#webdocumentaire", "references"],
  ["Visite", "/web/pages/references/visite/", "references"],
  ["Histoire", "/web/pages/references/histoire/", "references"],
  ["Go pro !", "/web/pages/references/gopro/", "references"],
  ["Fonderies", "/web/pages/references/typo/#fonderies", "references"],
  ["Fontes variables", "/web/pages/references/typo/#fontes-variables", "references"],
  ["Typographie numérique", "/web/pages/references/typo/#typographie-numerique", "references"],
  ["Newsletters", "/web/pages/references/typo/#newsletters", "references"],
  ["Pratique", "/web/pages/references/typo/#pratique", "references"],
  ["En jouant", "/web/pages/references/typo/#en-jouant", "references"],
  ["Réflexions", "/web/pages/references/typo/#reflexions", "references"],
  ["Techniques web", "/web/pages/references/typo/#techniques-web", "references"],
  ["Histoire", "/web/pages/references/histoire/", "references"],
  ["Internet", "/web/pages/references/histoire/internet/", "references"],
  ["Machines", "/web/pages/references/histoire/machines/", "references"],
  ["Kirby", "/web/pages/projets/portfolio/", "projets"],
  ["Hypertext superhero", "/web/pages/projets/htsh/", "projets"],
  ["Pecha Kucha", "/web/pages/projets/pechakucha/", "projets"],
  ["Webradiola", "/web/pages/projets/webradiola/", "projets"],
  ["Zones", "/web/pages/projets/zones/", "projets"],
  ["Programmation", "/web/pages/projets/programmation/", "projets"],
  ["Storytellers", "/web/pages/projets/storytellers/", "projets"],
  ["Portfolio", "/web/pages/projets/portfolio/", "projets"],
  ["Textedit", "/web/pages/projets/textedit/", "projets"],
  ["Puck Ferpection", "/web/pages/projets/perfuction/", "projets"],
  ["Portfolio", "/web/pages/projets/portfolio/", "projets"],
  ["Kirby", "/web/pages/projets/portfolio/kirby", "projets"],
  // ["Blueprints", "/web/pages/projets/portfolio/blueprints", "projets"],
  // ["Données", "/web/pages/projets/portfolio/blueprints/#modele-de-donnees", "projets"],
  // ["Scénario 1", "/web/pages/projets/portfolio/blueprints/scenario-1", "projets"],
  // ["Scénario 2", "/web/pages/projets/portfolio/blueprints/scenario-2", "projets"],
  // ["Champs", "/web/pages/projets/portfolio/blueprints/#champs", "projets"],
  // ["Interface", "/web/pages/projets/portfolio/blueprints/#interface-dadministration", "projets"],
  // ["Templates", "/web/pages/projets/portfolio/templates", "projets"],
  // ["Bases", "/web/pages/projets/portfolio/templates/#php", "projets"],
  //["PHP & Kirby", "/web/pages/projets/portfolio/templates/#kirby", "projets"],
  //["Snippets", "/web/pages/projets/portfolio/templates/#snippets", "projets"],
  ["Figures", "/web/pages/projets/figures/", "projets"],
  ["Local Area Social Network", "/web/pages/projets/lasn/", "projets"],
  ["Mémoire vive", "/web/pages/projets/memoirevive/", "projets"],
  // ["CSS / JS", "/web/pages/projets/portfolio/assets/", "projets"],
  ["Cultures numériques", "/web/pages/culturenum/", "culturenum"],
  ["Cultures numériques", "/web/pages/culturenum/", "culturenum"],
  ["Design éthique", "/web/pages/culturenum/ethique/", "culturenum"],
  ["Design libre", "/web/pages/culturenum/libre/", "culturenum"],
  ["Folklore", "/web/pages/culturenum/folklore/", "culturenum"],
  ["Figures", "/web/pages/culturenum/figures/", "culturenum"],
  ["Web3", "/web/pages/culturenum/web3/", "culturenum"],
  ["Lectures", "/web/pages/culturenum/lectures/", "culturenum"],
  ["Mise en page", "/web/pages/exemples/#layout", "exemples"],
  ["Aléatoire", "/web/pages/exemples/#random", "exemples"],
  ["Audio/vidéo", "/web/pages/exemples/#audio,#video", "exemples"],
  ["Flex", "/web/pages/exemples/#flex", "exemples"],
  ["Grid", "/web/pages/exemples/#grid", "exemples"],
  ["Javascript", "/web/pages/exemples/#js", "exemples"],
  ["Positions", "/web/pages/exemples/#positions", "exemples"],
  ["CSS", "/web/pages/exemples/#css", "exemples"],
  ["Responsive", "/web/pages/exemples/#rwd", "exemples"],
  ["Typographie", "/web/pages/exemples/#typo", "exemples"],
  ["Interactivité", "/web/pages/exemples/#interactive", "exemples"],
  ["Variable fonts", "/web/pages/exemples/#variable", "exemples"],
  ["Webtoprint", "/web/pages/exemples/#webtoprint", "exemples"],
  ["Livres", "/web/pages/lectures/#livres", "lectures"],
  ["Revues", "/web/pages/lectures/#revues", "lectures"],
  ["Newsletters", "/web/pages/lectures/#newsletters", "lectures"],
  ["Podcasts", "/web/pages/lectures/#podcasts", "lectures"],
  ["Vidéos", "/web/pages/lectures/#videos", "lectures"],
  ["Sites", "/web/pages/lectures/#sites", "lectures"],
];

var pane = document.querySelector('.homelinks'), pane_width = 0, pane_height = 0, styles = "", s = null, anchors = [];

function createLink (idx) {
    var data = links[idx];
    var el = document.createElement('a');
    var text = data[0];
    var href = data[1];
    var cat  = data[2];

    el.href = href;
    el.textContent = text;
    el.className = el.dataset.category = cat;

    el.id = "el-" + idx;
    pane.appendChild(el);

    el.addEventListener('mouseover', function(e){
      pane.classList.add(e.target.dataset.category);
      pane.classList.add('hover');
      clearInterval(s);
      s = null;

    })

    el.addEventListener('mouseout', function(e){    
      pane.classList.remove(e.target.dataset.category);
      pane.classList.remove('hover');
      s = setInterval(souk, 12000);
    });  

    anchors.push(el);
}

function setLinkPosition(idx){
  var el = anchors[idx];
  var w = el.clientWidth;
  var h = el.clientHeight;
  
  var base_t = 32 + Math.round( Math.random() * (pane_height - h) / 20 ) * 20;
  var base_l = 32 + Math.round( Math.random() * (pane_width  - w) / 50 ) * 50;
  var base_d = (idx * 5) + "ms";
  base_d =  idx * 2 + Math.round( Math.random() * 100 );
  styles += "#el-" + idx + " { top:" + base_t + "px; left:" + base_l + "px; transition-delay:" + base_d + "ms }";

  var t = 32 + Math.round( Math.random() * (pane_height - h) / 20 ) * 20;
  styles += ".loaded #el-" + idx + "{ top:" + t + "px;}";
}

function createStyles(){
  pane_width = pane.clientWidth - (6 * 16);
  pane_height = pane.clientHeight  - (4 * 16);
  var css = document.querySelector('#homecss') || document.createElement('style');
  css.type = "text/css";
  css.id = "homecss";
  css.textContent = "";
  styles= "";

  for(var i = 0; i< links.length; i++) {
    setLinkPosition(i);
  }
  pane.classList.add("done");
  css.textContent = styles;
  document.querySelector('head').appendChild(css);
  s = setInterval(souk, 12000);
  setTimeout(souk,100);
}

function init(){

  for(var i = 0; i< links.length; i++) {
    createLink(i);
  }
  createStyles();
}


function souk(){
  pane.classList.toggle("loaded");
}

// 
// init();

// resize
window.addEventListener('resize', function(){
  createStyles();
})