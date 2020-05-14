$(function(){

    // draggable elements
    // https://css-tricks.com/snippets/jquery/draggable-without-jquery-ui/
    $('article').drags();

    // open popups
    const nav = document.querySelector("nav");
    nav.addEventListener("click", function(e){
        // on désactive le comportement par défaut du click
        e.preventDefault();
        // si on a cliqué sur un lien (e.target représente l’élément sur lequel on a cliqué)
        if(e.target && e.target.matches('a')){
            // l’attribut href contient l’id de l’élément qu’on souhaite afficher, prcédé d’un #
            const popup_selector = e.target.getAttribute("href");
            const popup = document.querySelector(popup_selector);
            popup.classList.add('open');

            //  si la popup ne dispose pas d’un bouton pour la fermer
            if(!popup.querySelector('.close')){
                // on crée le bouton 
                const close_link = document.createElement('button');
                close_link.className = "close";
                close_link.textContent = "×";
                // on lui attribue une action
                close_link.addEventListener('click', function(){
                    popup.classList.remove('open');
                })
                // et on l’ajoute à la popup
                popup.appendChild(close_link);
            }
            
        }
    })
})