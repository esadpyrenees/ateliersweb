

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