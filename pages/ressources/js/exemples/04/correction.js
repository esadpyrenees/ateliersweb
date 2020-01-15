// Créer une liste de trois personnes
var personnes = ['Manon','Amaya','Claire']

// Créer deux nouvelles personnes et les ajouter à la liste

personnes.push('Samson', 'Sybille');

/*
// la methode prompt permet de demander une valeur à l’utilisateur
// valeur qu’on peut enregistrer dans une variable
var qui_etes_vous = prompt("Qui êtes-vous");

if (qui_etes_vous == '') {
	qui_etes_vous = 'l’inconnu';
};

document.write("— Bonjour à tous, je suis " + qui_etes_vous + '<br><br>');
*/

// Créer une fonction qui permette à une personne de se présenter, 
// en affichant par exemple : “Bonjour, je m’appelle Julien”
// Cette fonction prendra un paramètre : le nom de la personne

function je_me_presente(prenom){
	document.write('— Salut, je suis ' + prenom + '<br>');
}

// Créer une boucle qui invoque la fonction “je_me_presente” pour chaque personne de la liste

for ( var i = 0; i < personnes.length; i++){
    je_me_presente(personnes[i]);
}






