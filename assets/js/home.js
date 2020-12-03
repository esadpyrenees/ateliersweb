var lonks = [
  ["Ressources", "/web/pages/ressources/"],
  ["Exemples", "/web/pages/exemples/"],
  ["Références", "/web/pages/references/"],
  ["Outils", "/web/pages/outils/"],
  ["Projets", "/web/pages/projets/"],
  ["Lectures", "/web/pages/lectures/"],
  ["Archives", "/web/archives/"],
  ["À propos", "/web/pages/about"],
  ["HTML", "/web/pages/ressources/html/"],
  ["CSS", "/web/pages/ressources/css/"],
  ["FTP", "/web/pages/ressources/ftp/"],
  ["Javascript", "/web/pages/ressources/js/"],
  ["Python", "/web/pages/ressources/python/"],
  ["Typographie", "/web/pages/ressources/typo/"],
  ["Audio & vidéo", "/web/pages/ressources/audiovideo/"],
  ["Responsive", "/web/pages/ressources/rwd/"],
  ["Canvas", "/web/pages/ressources/canvas/"],
  ["Html2print", "/web/pages/ressources/html2print/"],
  ["Kirby", "/web/pages/projets/portfolio/"],
  ["HTML / CSS", "/web/pages/references/htmlcss/"],
  ["Typographie", "/web/pages/references/typo/"],
  ["Écritures numériques", "/web/pages/references/ecrituresnumeriques/"],
  ["Webdoc", "/web/pages/references/webdocumentaire/"],
  ["Visite", "/web/pages/references/visite/"],
  ["Histoire", "/web/pages/references/histoire/"],
  ["Go pro !", "/web/pages/references/gopro/"],
  ["Hypertext superhero", "/web/pages/projets/htsh/"],
  ["Pecha Kucha", "/web/pages/projets/pechakucha/"],
  ["Webradiola", "/web/pages/projets/webradiola/"],
  ["Zones", "/web/pages/projets/zones/"],
  ["Programmation", "/web/pages/projets/programmation/"],
  ["Cultures numériques", "/web/pages/projets/culturenum/"],
  ["Storytellers", "/web/pages/projets/storytellers/"],
  ["Portfolio", "/web/pages/projets/portfolio/"],
  ["Textedit", "/web/pages/projets/textedit/"],
  ["Puck Ferpection", "/web/pages/projets/perfuction/"],
  ["Internet", "/web/pages/ressources/html/internet/"],
  ["Le Web", "/web/pages/ressources/html/web/"],
  ["Démarrer", "/web/pages/ressources/html/start/"],
  ["Bases", "/web/pages/ressources/html/bases/"],
  ["Syntaxe", "/web/pages/ressources/html/bases/#syntax"],
  ["Attributs", "/web/pages/ressources/html/bases/#attributes"],
  ["Commentaires", "/web/pages/ressources/html/bases/#comments"],
  ["Block/Inline", "/web/pages/ressources/html/bases/#block-inline"],
  ["Hiérarchie", "/web/pages/ressources/html/bases/#hierarchy"],
  ["Sémantique", "/web/pages/ressources/html/bases/#semantics"],
  ["Espaces", "/web/pages/ressources/html/bases/#spaces"],
  ["Validation", "/web/pages/ressources/html/bases/#validation"],
  ["Contenu", "/web/pages/ressources/html/content/"],
  ["Texte", "/web/pages/ressources/html/content/#text"],
  ["En ligne", "/web/pages/ressources/html/content/#inline"],
  ["Liens", "/web/pages/ressources/html/content/#links"],
  ["Images", "/web/pages/ressources/html/content/#images"],
  ["Structure", "/web/pages/ressources/html/content/#structure"],
  ["Formulaires", "/web/pages/ressources/html/content/#forms"],
  ["Démarrer", "/web/pages/ressources/css/"],
  ["Syntaxe", "/web/pages/ressources/css/syntax/"],
  ["Sélecteurs", "/web/pages/ressources/css/selectors/"],
  ["Héritage", "/web/pages/ressources/css/inheritance/"],
  ["Unités", "/web/pages/ressources/css/units/"],
  ["Texte", "/web/pages/ressources/css/text/"],
  ["Arrière-plan", "/web/pages/ressources/css/background/"],
  ["Box model", "/web/pages/ressources/css/box/"],
  ["Positions", "/web/pages/ressources/css/positions/"],
  ["Mise en page", "/web/pages/ressources/css/layout/"],
  ["Flexbox", "/web/pages/ressources/flexbox/"],
  ["Grid", "/web/pages/ressources/css/grid/"],
  ["Animation", "/web/pages/ressources/css/transitions/"],
  ["Transform", "/web/pages/ressources/css/transform/"],
  ["Processus", "/web/pages/ressources/css/pratique/"],
  ["Ressources", "/web/pages/ressources/js/#ressources-js"],
  ["Javascript", "/web/pages/ressources/js/#introduction"],
  ["Variables", "/web/pages/ressources/js/#variables"],
  ["Logique", "/web/pages/ressources/js/#logique"],
  ["Conditions", "/web/pages/ressources/js/#conditions"],
  ["Boucles", "/web/pages/ressources/js/#boucles"],
  ["Fonctions", "/web/pages/ressources/js/#fonctions"],
  ["DOM", "/web/pages/ressources/js/#dom"],
  ["jQuery", "/web/pages/ressources/js/#jquery"],
  ["Aléatoire", "/web/pages/ressources/js/#random"],
  ["Typo", "/web/pages/ressources/typo/"],
  ["Macro & micro", "/web/pages/ressources/typo/macromicro/"],
  ["Webfonts", "/web/pages/ressources/typo/webfonts/"],
  ["Opentype", "/web/pages/ressources/typo/opentype/"],
  ["Variables", "/web/pages/ressources/typo/variables/"],
  ["Ressources", "/web/pages/ressources/audiovideo/#ressources-audiovideo"],
  ["Exemples", "/web/pages/ressources/audiovideo/#exemples-audiovideo"],
  ["HTML", "/web/pages/ressources/audiovideo/#html"],
  ["Services web", "/web/pages/ressources/audiovideo/#services"],
  ["Javascript", "/web/pages/ressources/audiovideo/#javascript"],
  ["Web Audio Api", "/web/pages/ressources/audiovideo/#webaudioapi"],
  ["Media queries", "/web/pages/ressources/rwd/#media-queries"],
  ["Usages", "/web/pages/ressources/rwd/#usages"],
  ["Typographie", "/web/pages/ressources/rwd/#typography"],
  ["Portfolio", "/web/pages/projets/portfolio/"],
  ["Kirby", "/web/pages/projets/portfolio/kirby"],
  ["Blueprints", "/web/pages/projets/portfolio/blueprints"],
  ["Données", "/web/pages/projets/portfolio/blueprints/#modele-de-donnees"],
  ["Scénario 1", "/web/pages/projets/portfolio/blueprints/scenario-1"],
  ["Scénario 2", "/web/pages/projets/portfolio/blueprints/scenario-2"],
  ["Champs", "/web/pages/projets/portfolio/blueprints/#champs"],
  ["Interface", "/web/pages/projets/portfolio/blueprints/#interface-dadministration"],
  ["Templates", "/web/pages/projets/portfolio/templates"],
  ["Bases", "/web/pages/projets/portfolio/templates/#php"],
  ["PHP & Kirby", "/web/pages/projets/portfolio/templates/#kirby"],
  ["Snippets", "/web/pages/projets/portfolio/templates/#snippets"],
  ["CSS / JS", "/web/pages/projets/portfolio/assets/"],
  ["Mise en page", "/web/pages/exemples/#layout"],
  ["Aléatoire", "/web/pages/exemples/#random"],
  ["Audio/vidéo", "/web/pages/exemples/#audio,#video"],
  ["Flex", "/web/pages/exemples/#flex"],
  ["Grid", "/web/pages/exemples/#grid"],
  ["Javascript", "/web/pages/exemples/#js"],
  ["CSS", "/web/pages/exemples/#css"],
  ["Responsive", "/web/pages/exemples/#rwd"],
  ["Typographie", "/web/pages/exemples/#typo"],
  ["Interactivité", "/web/pages/exemples/#interactive"],
  ["Variable fonts", "/web/pages/exemples/#variable"],
  ["Html2Print", "/web/pages/exemples/#htmltoprint"],
  ["Fonderies", "/web/pages/references/typo/#fonderies"],
  ["Fontes variables", "/web/pages/references/typo/#fontes-variables"],
  ["Typographie numérique", "/web/pages/references/typo/#typographie-numerique"],
  ["Newsletters", "/web/pages/references/typo/#newsletters"],
  ["Pratique", "/web/pages/references/typo/#pratique"],
  ["En jouant", "/web/pages/references/typo/#en-jouant"],
  ["Réflexions", "/web/pages/references/typo/#reflexions"],
  ["Techniques web", "/web/pages/references/typo/#techniques-web"],
  ["Histoire", "/web/pages/references/histoire/"],
  ["Internet", "/web/pages/references/histoire/internet/"],
  ["Machines", "/web/pages/references/histoire/machines/"],
  ["Livres", "/web/pages/lectures/#livres"],
  ["Revues", "/web/pages/lectures/#revues"],
  ["Newsletters", "/web/pages/lectures/#newsletters"],
  ["Podcasts", "/web/pages/lectures/#podcasts"],
  ["Vidéos", "/web/pages/lectures/#videos"],
  ["Sites", "/web/pages/lectures/#sites"]
];

function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

var pane = document.querySelector('#content');
var pane_width = pane.clientWidth - (8 * 16);
var pane_height = pane.clientHeight  - (4 * 16);
console.log(pane.clientWidth, pane_width);

shuffle(lonks);

var styles = "";


var css = document.createElement('style');
css.setAttribute('type', "text/css");
document.querySelector('head').appendChild(css);

for (var i = 0; i<lonks.length; i++){
  var el = null;
  var link = lonks[i];
  var text = link[0];
  var href = link[1];
  var seed = Math.random();
  if(seed < .3){
    el = document.createElement('select');
    var option = document.createElement('option');
    option.textContent = text;
    el.dataset.val = href;
    option.dataset.val = href;
    el.appendChild(option);
  } else if(seed < .6){
    el = document.createElement('label');
    var input = document.createElement('input');
    el.textContent = text;
    input.type = "checkbox";
    el.dataset.val = href;
    input.dataset.val = href;
    el.appendChild(input)
  } else {
    el = document.createElement('label');
    el.dataset.val = href;
    var progress = document.createElement('progress');
    el.textContent = text;
    el.dataset.val = href;
    progress.dataset.val = href;
    el.appendChild(progress)
  }

  pane.appendChild(el);
  el.id = "el-" + i;

  el.addEventListener('click', function(e){
    document.location.href= e.target.dataset.val;
  })

  var w = el.clientHeight;
  var h = el.clientWidth;
  
  var base_t = 32 + Math.round( Math.random() * (pane_height - h));
  var base_l = 32 + Math.round( Math.random() * (pane_width - w));
  var base_d = (i * 20) + "ms";
  styles += "#el-" + i + " { top:" + base_t + "px; left:" + base_l + "px; transition-delay:" + base_d + "}";

  var t = 32 + Math.round( Math.random() * (pane_height - h));
  var l = 32 + Math.round( Math.random() * (pane_width - w));

  styles += "#el-" + i + ".loaded { top:" + t + "px; left:" + l + "px;}";
}

css.textContent = styles;

function souk(){
  for (var i = 0; i<lonks.length; i++){
    var el = document.querySelector("#el-" + i);
      el.classList.toggle("loaded");
  }
}
setInterval(souk, 8000)
setTimeout(souk,100)