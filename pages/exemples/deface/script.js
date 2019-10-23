$(function(){
//    alert('z’êtes sur le site de l’ÉSA PŸRRRRRÉN"ES')

    // sélectionner un lien par son url
    //$( "a[href=http:///]" )

    // change l’attribut src de l’image toto.jpg
    //$('img[src=toto.jpg]').attr('src', 'http://esap.fr/tata.jpg')

    // ede
    var trucs = ["Absolue","Admirable","Aimable","Amusante","Apocalyptique","Approximatif","Attachant","Banale","Bouleversante","Captivante","Caractérielle","Cataclysmique","Catastrophique","Charmante","Chouette","Coquette","Correcte","Croquante","Cynique","Dégueulasse","Délicieuse","Disjonctée"];

    // sélectionne toutes les images
    var $img = $('img');

    // // initialise un compteur pour la liste des images de remplacement
    // var j = 0;
    // // boucle sur les images du document
    // for (var i = 0; i < $img.length; i++) {
    //     //si la limite des images de remplacement est atteinte
    //     // on réinitialise le compteur
    //     if ( j == images.length )  j = 0;
    //     // on change le src
    //     $img[i].src = 'images/' + images[j];
    //     // on incrémente le compteur
    //     j++;
    // }

    // modifie tous les h1
    // meilleure méthode que la boucle ci-dessus
    $('h1').each( function( i ){
        $(this).text(trucs[i]);
        var delay = Math.floor( Math.random() * 2000 );
        setTimeout(function(){
            $(this).css({
                'transition' : 'all 2500ms ease-out',
                'letter-spacing': '150px'
            })
        }, delay)

    } )


    // boucle sur les images du document
    $('img').each(function(){
        $(this).wrap('<span class="imagebg"></span>');
        $(this).css('visibility', 'hidden')
        var hue =  Math.floor( Math.random() * 360 );
        var sat =  Math.floor( Math.random() * 100 ) + '%';
        var lum =  Math.floor( Math.random() * 100 ) + '%';
        
        $(this).parent().css({
            'display':'block',
            'background': 'hsl(' + hue + ',' + sat + ',' + lum + ')'
        })
    })

    var bougeLesLettres = function(){
        $("#navE ul li a, #navS , #navA ul li a, #navP").each(function(){
            $(this).css({
                'transition':'all 5000ms',
                'display':'block',
                'left': Math.round( Math.random() * $(window).width() ),
                'top': Math.round( Math.random() * $(window).height() )
            })
        })
    }

    setInterval(bougeLesLettres, 3000)


    // blast !
    // http://julian.com/research/blast/
    // découpe les textes en mots
    var $descriptions = $(".imgBoxLink span p");

    $descriptions.each(function(){
        var $desc = $(this);
        $desc.blast({ delimiter: "word" });
        var description_en_desordre = shuffle( $desc.find('.blast').toArray() )
        $desc.empty();
        for (var i = 0; i < description_en_desordre.length; i++) {
            var mot = description_en_desordre[i];
            mot.appendChild (document.createTextNode (" "));
            $desc.append( mot )
        }
    })



    var $tags = $(".blockTitle .centerSpan a");
    $tags.each(function(){
        var $tag = $(this);
        $tag.blast({ delimiter: "character" });
        var tag_en_desordre = shuffle( $tag.find('.blast').toArray() )
        $tag.empty();
        for (var i = 0; i < tag_en_desordre.length; i++) {
            var lettre = tag_en_desordre[i];
            $tag.append( lettre )
        }
    })

})


function shuffle(array) {
    let counter = array.length;

    // While there are elements in the array
    while (counter > 0) {
        // Pick a random index
        let index = Math.floor(Math.random() * counter);

        // Decrease counter by 1
        counter--;

        // And swap the last element with it
        let temp = array[counter];
        array[counter] = array[index];
        array[index] = temp;
    }

    return array;
}
