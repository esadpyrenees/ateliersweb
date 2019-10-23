// tous les événements qu’on veut déclencher doivent attendre que la page html soit chargée
// c’est le but de cette fonction englobante
$(function(){
    
    $('#images').css('visibility', 'hidden');

    // on attend que toutes les images soient chargées
    // grâce au script imagesLoaded
    imagesLoaded( '#images', function() {
        // activation du layout isotope sur l’élément #images
        var $images = $('#images');
        $images.isotope({
            itemSelector : 'li',
            onLayout: function( $elems, instance ) {
               $('#images').css('visibility', 'visible');
            }
        });

        // les liens sur lesquels on peut cliquer pour filtrer
        var $filtres = $('#filtres a');

        $filtres.click(function(event){
            // on bloque le comportement par défaut de l’événement click sur un lien
            event.preventDefault();

            // this = le lien sur lequel on clique,
            // qu’on « sélectionne » avec la fonction $
            // on le stocke dans une variable pour pouvoir y accéder 
            // plus rapidement (on en a besoin à plusieurs reprises dans la fonction)
            var $this = $(this);

            // si le filtre est déjà actif, on ne fait rien (return false)
            if ( $this.hasClass('selected') ) {
            return false;
            }

            // on enlève la surbrillance de tous les liens
            $filtres.removeClass('selected');
            // on met le lien sur lequel on veint de cliquer en surbrillance
            $this.addClass('selected');

            // on lit la valeur de l’attribut data-cible, qui correspond à la
            // classe des éléments qu’on veut voir filtrés
            var value = $this.attr('data-filtre');

            // on transmet cette valeur à l’option 'filter' d’isotope
            $images.isotope( {
            	filter : value
            });        
            
        });
    });

      
});