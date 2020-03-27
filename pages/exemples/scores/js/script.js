
// un "objet" pour enregistrer les scores
// les "clés" doivent être des chaines de caractères sans espace ni accents
var scores = {
    carres : 0,
    triangles : 0,
    ronds : 0
}

// références des éléments d’interaction ou d’affichage
var buttons = document.querySelectorAll('button');
var sections = document.querySelectorAll('section');
var result = document.querySelector('#result');

// action pour chaque bouton
buttons.forEach(function(button){
    // quand on clique
    button.addEventListener('click', function(){
        // modification des scores
        switch(button.value){
            case 'rond':
                scores.ronds++;
                break;
            case 'carre':
                scores.carres++;
                break;
            case 'carre':
                scores.carres++;
                break;
        }
        // on masque toutes les sections
        sections.forEach(function(section){
            section.classList.add('hidden');
        })
        
        // on cherche la section suivante
        // (l’élément qui suit l’élément parent du bouton…)
        var quellesectionafficher = button.parentElement.nextElementSibling;
        
        // s’il existe une section suivante on l’affiche
        if(quellesectionafficher){
            quellesectionafficher.classList.remove('hidden');
        // sinon, on calcule les scors et on affiche le résultat
        } else {
            
            // fonction compliquée pour trier l’objet scores par valeur 
            // (transforme l’objet en tableau, le trie puis l’inverse)
            sortedScores = Object.keys(scores).sort(function(a,b){return scores[a]-scores[b]}).reverse();
            
            // selon quelle est la plus grande valeur
            switch(sortedScores[0]){
                case 'ronds':
                    result.innerHTML = "Vous êtes plutôt arrondi. <span>Votre score : " + scores.ronds + " ●</span>"; 
                    break;
                case 'carres':
                    result.innerHTML = "Vous êtes plutôt carré. <span>Votre score : " + scores.carres + "  ■</span>"; 
                    break;
                case 'triangles':
                    result.innerHTML = "Vous êtes plutôt triangulaire. <span>Votre score : " + scores.triangles + " ▴</span>";  
                    break;
                    
            }
            // on affiche le résultat
            result.classList.remove('hidden');
        }
        
        
    })
    
})