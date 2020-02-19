
// crée une variable qui contienne la liste (querySelectorAll) de tous les liens de la nav
const mesliens = document.querySelectorAll('nav a');

// crée une boucle pour attribuer à chaque lien un écouteur d’évènement “click”
for (let index = 0; index < mesliens.length; index++) {
    
    // le lien en cours 
    const monlien = mesliens[index];
    // écouteur d’évènement
    monlien.addEventListener('click', function(){
        
        // c’est l’attribut href du lien qui permet de savoir quel panel on affiche
        const href = monlien.getAttribute('href');
        // ici, c’est l’id du panel, précédé de "#", qui est un sélecteur CSS/querySelector valide
        const panel = document.querySelector(href);

        // on crée deux variables pour savoir si un panel est "visible" et si un lien est "active"
        const visiblePanel = document.querySelector(".visible");
        const activeLink = document.querySelector(".active");
        
        //  s’il y a déjà un panel visible, il faut le cacher
        if(visiblePanel){
            //  on le cache (=> en CSS, il se déplace vers la gauche)
            visiblePanel.classList.add('hidden');
            //  et on lui enlève la classe visible
            visiblePanel.classList.remove('visible');
            // au bout de quelques millisecondes, on lui enlève la classe hidden, 
            // pour qu’il retourne à son état normal (=> à droite du viewport)
            setTimeout(function(){
                visiblePanel.classList.remove('hidden');
            }, 250)
        }
        // s’il y a déjà un lien "active", il faut lui enlever ce statut
        if(activeLink){
            // on lui enlève la classe
            activeLink.classList.remove('active');
        }

        // on ajoute la classe visible au panel
        panel.classList.add('visible');
        // on ajoute la classe active au lien
        monlien.classList.add('active');

    })
    
}