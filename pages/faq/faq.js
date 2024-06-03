

var elements = document.querySelectorAll('.question');
var filters = document.querySelectorAll('[data-filter]');

const accordionHeaders = document.querySelectorAll('[data-accordion-header]');
Array.prototype.forEach.call(accordionHeaders, accordionHeader => {
  accordionHeader.onclick = () => {
    showHideAccordion(accordionHeader);
  }
})

function showHideAccordion(accordionHeader){  
  let target = accordionHeader.parentElement.nextElementSibling;
  var hash = window.location.hash.replace(/^#/g, "");
  if(accordionHeader.id != hash) {
    setHash(accordionHeader.id);
  } else {
    setHash(hash)
  }
  let expanded = accordionHeader.getAttribute('aria-expanded') === 'true' || false;
  accordionHeader.setAttribute('aria-expanded', !expanded);
  target.hidden = expanded;
  console.log(target.hidden);
}


var targetSelector = ".question";
function getSelectorFromHash() {
  var hash = window.location.hash.replace(/^#/g, "");
  var selector = hash ? hash  : targetSelector;
  return selector;
}

function setHash(selector) {
  var newHash = "#" + selector.replace(/^\./g, "");
  if (selector === targetSelector && window.location.hash) {
    history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
  } else if (newHash !== window.location.hash && selector !== targetSelector) {
    history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
  }
}

// rafraichissement de page
if(window.location.hash) {
  var hash = window.location.hash.replace(/^#/g, "");
  
  let target = document.querySelector("#" + hash);
  if(target) {
    // is question (id)
    showHideAccordion(target)
  } else {
    // is filter (class)
    target = document.querySelector("[data-filter=" + hash + "]");
    filterFAQ(target);
  }
  
}

filters.forEach( filter => { 
  filter.onclick = (e) => {
    filterFAQ(e.target);
  }
});

function filterFAQ(target){
  // modifie les liens du menu (les filtres)
  document.querySelector('#faq-nav .active').classList.remove('active');
  target.classList.add('active');
  // on lit la catégorie du filtre
  var filter = target.dataset.filter;
  setHash(filter);
  // on parcourt tous les projets pour voir s’ils 
  // ont la class corrrespondant à la catégorie active
  elements.forEach( element => {
    if(element.classList.contains(filter)){
      // si oui, on les affiche
      element.classList.remove('hidden');
    } else {
      // si non, on les masque
      element.classList.add('hidden');
    }
  })
}


var codepen_links = document.querySelectorAll('strong a');
codepen_links.forEach( link => {
  link.onclick = (e) => {
    e.preventDefault();
    var slug = link.href.split("/").pop();
    if(link.classList.contains('open')){
      var pen = document.querySelector("#cp_embed_" + slug).parentElement;
      pen.parentElement.removeChild(pen);
      link.classList.remove('open');
    } else {  
      link.classList.add('open');
      var pen = document.createElement('div');
      pen.className = "codepen-later codepen-" + slug;
      pen.setAttribute('data-height', "350"); 
      pen.setAttribute('data-theme-id',"39469");
      pen.setAttribute('data-default-tab',"css,result");
      pen.setAttribute('data-user', "esadpyrenees"); 
      pen.setAttribute('data-slug-hash', slug);
      pen.setAttribute('data-editable', "true");
      link.closest("p").after(pen);
      
      // The API for looking for and creating embeds
      window.__CPEmbed(".codepen-" + slug);
    }
  }
})