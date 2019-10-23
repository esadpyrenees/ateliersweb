// on attend que tout soit prêt
$(function(){

    // enregistrement d’une action au clic sur un bouton
    $('body').on('click', function(){
        genereUneInsulte();
    })
    // une insulte par deux secondes
    //setInterval(genereUneInsulte, 1200);


    // choisit et retourne une valeur aléatoire dans une liste
    var getRandomValueInArray = function(liste){
        var max = liste.length;
        var random = Math.floor( Math.random() * max );
        return liste[ random ];
    }

    // fonction de génération
    var genereUneInsulte = function(button_id){

        // crée une variable pour stocker la phrase
        var insulte = "<span>";

        // sélectionne un des deux groupes de mots (féminins ou masculins)
        if ( Math.random() >= .5 ) {
        	var liste_selon_genre = liste_homme;
        } else {
        	var liste_selon_genre = liste_femme;
        }
        // pour chaque liste du groupe (milieu, début et fin)
        // sélectionne un mot au hasard (jQuery)
        $.each(liste_selon_genre, function(index, liste) {
            insulte += " " + getRandomValueInArray(liste);
        });

        // pour rajouter un peu de “qualité” à l’insulte,
        // on ajoute quelques qualificatifs
        if ( Math.random() > .95) {
            // 5% de chances
            insulte += ', ' + getRandomValueInArray(liste_selon_genre.fin) +
                ', ' + getRandomValueInArray(liste_selon_genre.fin) +
                " et <span>" + getRandomValueInArray(liste_selon_genre.fin) + "</span>";
        } else if ( Math.random() > .66) {
            // ~30% de chances
            insulte += ', ' + getRandomValueInArray(liste_selon_genre.fin) + " et <span>" + getRandomValueInArray(liste_selon_genre.fin) + "</span>";
        } else if ( Math.random() > .4) {
            // ~30 % de chances
            insulte += " et <span>" + getRandomValueInArray(liste_selon_genre.fin) + "</span>"
        }

        // on construit le fragment html
        var element_html = "<p>" + insulte + "</span></p>";
        // bonus jquery
        var $element_html = $(element_html);
        $element_html.css({
            'color': '#'+(Math.random()*0xFFFFFF<<0).toString(16),
            'background-color' : '#'+(Math.random()*0xFFFFFF<<0).toString(16)
        })

        //qu’on ajoute au body
        $("body").prepend($element_html);

    }

})
