function randint(a, b){
    return Math.round( Math.random() * (b - a) + a)
}

function randColor(){  
    var red = randint(0,255),
        green = randint(0,255),
        blue = randint(0,255)
    return 'rgb('+ red +','+ green +','+ blue +')';
}

var $win= $(window),
	winHeight = $win.height(),
	winWidth = $win.width();


var trucs_max = 100,
	i = 0;

setInterval(function(){
	
	$('.truc').each(function(){ 
		// on “calcule” une taille aléatoire,
  		var size = randint(100,250);

  		// une opacité aléatoire (entre 0 et 1OO, divisé par 100)
  		// qui va va augmenter au fur et à mesure :
  		// i / 3 va varier de 0 à 50
  		// 20 + i va varier de 20 à 120
  		var transparence = randint(i / 3, 20 + i ) / 100;
  		
	    $(this).css({      
	    	width : size,
	        height: size,
	        opacity: transparence,
	        // une couleur aléatoire
	    	background : randColor(),
	    	// une position aléatoire, à l’intérieur de la fenêtre
	        top : randint(0 - size ,winHeight),
	        left : randint(0 - size ,winWidth)
	    })
	})

	// ajoute un nouveau truc au body, dans la limite de trucs_max
	if (i < trucs_max) {
		$('.truc').first().clone().prependTo('body');
		i++;
	};

}, 750)