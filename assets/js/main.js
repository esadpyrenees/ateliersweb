$('#mainnav').on('click', 'a', function(e){
    var href = this.getAttribute('href');
    if (href.indexOf('#')==0) {
        showNav(href);
    }
})

function showNav(href){
    $('.pane.active').removeClass('active');
    $(href).addClass('active');
}



// chargement initial
// recherche si un paramètre est présent dans l’url
// élimine le premier caractère (?) : .substring(1)
// prend uniquement le premier paramètre : split('&')[0]
var srch = window.location.search.substring(1).split('&')[0];

// hash management (visite d’une page qui contient un ?hash)
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
$(function(){

    var $ramdam = $('#randomramdam');
    var text = $ramdam.text();
    var letters = text.split('');

    // suppression du contenu de <div id='ramdam'>
    $ramdam.empty();

    // crée des <span> à partir de chaque lettre du texte
    for (var i = 0; i < letters.length; i++) {
        var $span = $('<span>' + letters[i] + '</span>');
        $ramdam.append($span);
        if(letters[i]=='/') $ramdam.append('<br>');
        // mesure la position naturelle de chaque lettre et l’enregitre dans un attribut pour pouvoir la retrouver plus tard
        $span.attr('data--original-left', $span.position().left)
    };

    // function qui "met en désordre" les lettres
    ramdamize = function(container){
        $(container).find('span').each(function(i){
            var $span = $(this);
            // récupère la valeur left naturelle
            var original_left = $span.attr('data--original-left');
            // crée une valeur left aléatoire
            // qui permette de garder le span à l’intérieur de <div id='ramdam'>
            var new_left = Math.round(Math.random() * ($ramdam.width() - $span.width())) - original_left;
            $span.css({
                'left': new_left,
                'transition': 'left 200ms ease-out'
            })
            // rend visible et anime les lettres sequentiellement
            var s = setTimeout(function(){
                $span.addClass('brbrbr');
            }, 100 * i)
        })
    }

    // à intervale régulier, on remet en désordre
    var interval = setInterval(function(){
        ramdamize($ramdam);
    }, 2000)

    // itialisation
    ramdamize($ramdam);

    // interactivité
    $ramdam.on('mouseenter', function(){
        $(this).find('span').css('left', 0)
        clearInterval(interval);
    }).on('mouseleave', function(){
        ramdamize(this);
        interval = setInterval(ramdamize, 2000, $ramdam);
    })

})


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


// random
$(function(){

    var $headings = $('main h1, main h2, main h3');
    $headings.each(function(){
        var $self = $(this);
        if(!$self.attr('id')){
            $self.attr('id', slugify($self.text()));
        }
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