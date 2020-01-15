/* JS */

// get
var winHeight = $(window).height();
var winWidth = $(window).width();

var hauteurdup = $('p').height();
var largeurdup = $('p').width();


// RANDOM

Math.random();
// retourne un nombre décimal entre 0 et 1

Math.random() * winWidth; 
// retourne un nombre décimal entre 0 et winWidth


$('p').css('left', Math.random() * (winWidth - largeurdup));

$('p').css('top', Math.random() * (winHeight - hauteurdup));














// retourne un nombre décimal entre 0 et 4 ; par ex. : 0.802936547
Math.random() * 150 ;
// retourne un nombre décimal entre 0 et 150 ; par ex. : 127.365478029
Math.floor(Math.random() * 150) ;
// retourne un nombre entier (arrondi) entre 0 et 150 ; par ex. : 127

var positif_ou_negatif = function(){
    if(Math.random() > 0.5){
        return -1;
    } else { 
        return 1 
    }
}
Math.random() * 150 * positif_ou_negatif();
// retourne un nombre décimal entre -150 et 150