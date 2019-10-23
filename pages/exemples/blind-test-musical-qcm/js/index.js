
var lecteur = document.querySelector('#lecteur'),
    morceau_en_cours = null,
    reponse_liee_au_morceau_en_cours = null,
    reponse = document.querySelector('#reponses'),
    question = document.querySelector('#question'),
    resultat = document.querySelector('#resultat'),
    finale = document.querySelector('#finale');
    


// Méthode pour choisir un morceau aléatoirement
function choisirUnMorceau(){

    // initialisation de la liste des morceauxpossibles
    var morceaux = [];

    // s’il y a une déjà réponse effectuée (si on a déjà joué)
    if(reponse_liee_au_morceau_en_cours != null){
        // on supprime la réponse
        // afin qu’elle ne puisse pas à nouveau être sélectionnée
        reponse_liee_au_morceau_en_cours.remove();
        reponse_liee_au_morceau_en_cours = null;
    }

    // on cherche toutes les réponses encore disponibles dans le document
    // pour mettre à jour la liste des morceaux
    var reponses = document.querySelectorAll('.reponse');
    for (var i = 0; i < reponses.length; i++) {
        morceaux.push( reponses[i].getAttribute('data-fichier') );
    }

    //on masque les réponses (si on a déjà joué)
    reponse.style.display= "none";

    // s’il reste des morceaux à lire
    if (reponses.length > 0) {
        // on réaffiche le questionnaire 
        question.style.display = 'block';
    } else {
        // on affiche le finale
        finale.style.display = 'block'; 
    }

    // un morceau au hasard
    morceau_en_cours = morceaux[ Math.floor( Math.random() * reponses.length ) ];
    // la réponse liée à ce morceau
    reponse_liee_au_morceau_en_cours = document.querySelector('[data-fichier="' + morceau_en_cours + '"]')

    // Lecture !
    lecteur.src = morceau_en_cours;
    lecteur.play();
}

choisirUnMorceau();


// Bouton recommencer
document.querySelector('#recommencer').addEventListener('click', choisirUnMorceau );


// QCM
var boutons = document.querySelectorAll('button.choix');

boutons.forEach( function(bouton, index) {
    
    bouton.addEventListener('click', function(e){
      
        // récupérer le texte du bouton 
        var texte_du_bouton = this.textContent;

        // récupérer le texte de la réponse
        var texte_de_la_reponse = reponse_liee_au_morceau_en_cours.querySelector('span.genre').textContent;
                                
        // comparer le texte du bouton et de la réponse
        if( texte_du_bouton == texte_de_la_reponse){
            resultat.textContent = "Gagné !";
        } else {
            resultat.textContent = "Perdu…";
        }   

        // affichage
        reponse_liee_au_morceau_en_cours.style.display= "block";
        reponse.style.display= "block";
        question.style.display = 'none';

    })
});