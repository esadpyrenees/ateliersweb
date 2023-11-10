
// var mainnavlinks = document.querySelectorAll('#mainnav a');
// mainnavlinks.forEach(a => {
//     a.onclick = (e) => {
//         alert("eee")
//         var href = a.getAttribute('href');
//         if (href.indexOf('#')==0) {
//             var active = document.querySelector(".pane.active");
//             if(active){
//                 active.classList.remove('active')
//             }
//             document.querySelector(href).classList.add(active);
//         }
//     }
// });




// chargement initial
// recherche si un paramètre est présent dans l’url
// élimine le premier caractère (?) : .substring(1)
// prend uniquement le premier paramètre : split('&')[0]
var srch = window.location.search.substring(1).split('&')[0];

// hash management (visite d’une page qui contient un ?searchforhash)
if(srch != ""){
    var hash = "#" + srch;
    if($(hash).length){
        displayContent(hash);
    } else {
        history.replaceState({hash: ""}, document.title, document.location.href);
    }
}



initializeFootnotes();
  

// random

var ramdam = document.querySelector('#randomramdam');
if(ramdam){
    var text = ramdam.textContent;
    var letters = text.split('');

    // suppression du contenu de <div id='ramdam'>
    ramdam.innerHTML = "";

    // crée des <span> à partir de chaque lettre du texte
    for (var i = 0; i < letters.length; i++) {
        var span = document.createElement('span');
        span.textContent = letters[i];
        ramdam.appendChild(span);
        if(letters[i]=='/') ramdam.appendChild( document.createElement('br') );
        // mesure la position naturelle de chaque lettre et l’enregitre dans un attribut pour pouvoir la retrouver plus tard
        var left = span.offsetLeft;
        span.dataset.originalLeft = Math.floor(left);
    };

    // function qui "met en désordre" les lettres
    ramdamize = function(container){
        var spans = ramdam.querySelectorAll('span');
        var ramdam_width = ramdam.getBoundingClientRect().width;
        spans.forEach((span) => {
            // récupère la valeur left naturelle
            var original_left = parseInt(span.dataset.originalLeft);
            var span_width = span.getBoundingClientRect().width;            
            // crée une valeur left aléatoire
            // qui permette de garder le span à l’intérieur de <div id='ramdam'>
            var new_left = Math.floor( Math.random() * (ramdam_width - span_width ) - original_left) ;
            span.style.left = new_left + "px";
            span.style.transition =  'left 200ms ease-out';
            // rend visible et anime les lettres sequentiellement
            var s = setTimeout(function(){
                span.classList.add('brbrbr');
            }, 100 * i)
        })
    }

    // à intervale régulier, on remet en désordre
    var interval = setInterval(function(){
        ramdamize(ramdam);
    }, 2000)

    // itialisation
    ramdamize(ramdam);

    // interactivité
    ramdam.addEventListener('mouseenter', function(){
        var spans = ramdam.querySelectorAll('span');
        spans.forEach((span) => {
            span.style.left = 0;
        })
        clearInterval(interval);
    })
    ramdam.addEventListener('mouseleave', function(){
        ramdamize(ramdam);
        interval = setInterval(ramdamize, 2000, ramdam);
    })
}


function slugify(string) {
    const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
    const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
    const p = new RegExp(a.split('').join('|'), 'g')
  
    return string.toString().toLowerCase()
      .replace(/\s+/g, '-') // Replace spaces with -
      .replace(p, c => b.charAt(a.indexOf(c))) // Replace special characters
      .replace(/&/g, '-and-') // Replace & with 'and'
      .replace(/[^\w\-]+/g, '') // Remove all non-word characters
      .replace(/\-\-+/g, '-') // Replace multiple - with single -
      .replace(/^-+/, '') // Trim - from start of text
      .replace(/-+$/, '') // Trim - from end of text
  }


// headings ids
var headings = document.querySelectorAll('main h1, main h2, main h3');
headings.forEach(function(heading){
    if(heading.classList.contains('nohash')) return false;
    var slug = heading.getAttribute('id') || slugify(heading.textContent);
    if(!heading.getAttribute('id')){
        heading.setAttribute('id', slug);
    }
    var hashref = document.createElement('a');
    hashref.textContent = "#";
    hashref.className = "hashref";
    hashref.href = "#" + slug;
    heading.appendChild(hashref);
    
})


var copy = function(target) {
    var textArea = document.createElement('textarea')
    textArea.setAttribute('style','width:1px;border:0;opacity:0;')
    document.body.appendChild(textArea)
    textArea.value = target.textContent
    textArea.select()
    document.execCommand('copy')
    document.body.removeChild(textArea)
}

var pres = document.querySelectorAll("main pre:not(.filesystem)")
pres.forEach(function(pre){
  var button = document.createElement("button")
  button.className = "copybtn"
  button.textContent = `Copier`;
  pre.insertAdjacentElement('beforeend', button)
  button.addEventListener('click', function(e){
    e.preventDefault()
    button.classList.add("copied");
    button.textContent = `Copié !`;
    setTimeout(() => {
        button.classList.remove("copied");
        button.textContent = `Copier`;
    }, 1500);
    copy(pre.childNodes[0])
  })
})

// var debug = document.createElement('div');
// debug.id="debug";
// var links = document.querySelectorAll("nav a") ;
// var l = [];
// links.forEach(e => {
//     var p = document.createElement('p');
//     p.textContent = '["' + e.textContent + '", "' + e.href +'"],';
//     debug.appendChild(p)
// })
// document.body.appendChild(debug);