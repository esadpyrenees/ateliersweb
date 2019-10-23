var boutons = document.querySelectorAll('a');
var lecteur = document.querySelector('#lecteur');
var bouton_en_cours = null;
var fichier_en_cours = null;

for (var i = 0; i < boutons.length ; i++) {

    boutons[i].addEventListener('click', function(e){
        e.preventDefault();
        playSong(this);
    })
}

function playSong(button){
    if (bouton_en_cours) {
        bouton_en_cours.className = '';
    }

    var quel_fichier_veut_on_jouer = button.getAttribute('data-fichier');

    bouton_en_cours = button;

    fichier_en_cours = lecteur.getAttribute('src');

    if (fichier_en_cours == quel_fichier_veut_on_jouer) {
      lecteur.pause();
      button.className = '';

    } else {
      // on modifie le src de la balise audio
      lecteur.src = quel_fichier_veut_on_jouer;
      lecteur.play();
      button.className = 'playing';
    }
}

function playNextSong(bouton_en_cours){
    var nextparent = bouton_en_cours.parentNode.nextElementSibling;
        
    if (nextparent) {
        // s’il existe un élément suivant
        var button = nextparent.firstChild;
        playSong(button);
    } else {
        console.log('no parent')
        // sinon, on revient au début
        var button = boutons[0];
        playSong(button);
    }
}

lecteur.addEventListener('ended', function(){
    bouton_en_cours.className = '';
    playNextSong(bouton_en_cours)
});
