$('.rotate').each(function(){
        var $this = $(this),
            txt = $this.text(),
            a = txt.split(''), // une liste de toutes les lettres
            al = a.length + 1, // la longueur de la liste + une espace
            duration=6000, // durée de l’animation
            delay = duration / al; // délai de chaque lettre
      
        // on vide le contenu de l’élément
        $this.html('');

        // une fonction qui affiche le span
        // après un délai
        var showSpan = function($s, d){
            setTimeout(function(){
                $s.addClass('visible');
            }, d + 100)
        }

        // pour chaque lettre de la liste
        for(var i=0; i < al; i++){
            // on crée un span
            var $s = $('<span></span>');
            // on le remplit avec la bonne lettre 
            // ou avec une espace insécable
            $s.html(a[i] || '&nbsp;');
            // on l’ajoute à l’élément 
            $this.append($s);

            // calcul et arrondi du délai
            var d = Math.floor( delay * i );

            //affectation des propriétés css
            $s.css({
                'animation-delay': d + 'ms',
                'animation-duration': duration + 'ms' 
            });
            // activation de l’animation
            $s.addClass('animated');
            // affichage du span avec délai
            showSpan($s, d)
        } 
    })