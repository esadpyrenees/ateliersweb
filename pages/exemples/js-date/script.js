
// on sélectionne le premier bouton (<button>) de la page
var bouton = document.querySelector('button');

// à ce bouton on associe un “écouteur d’événement” – ici, l’événement click –
// et au déclenchement de cet événement, on exécute une fonction
bouton.addEventListener('click', function(){
	// on enregistre la date du click (année, mois, jour, heure, minutes, secodes, millisecondes…) 
	var maintenant = new Date();
	// on envoie cette date à une fonction qui sert à formater la date “en toutes lettres”
	var message = quelleHeureEstIl(maintenant);
	// on crée un nouveau paragraphe 
	var paragraphe = document.createElement('p');
	// auquel on donne comme contenu le texte précédemment formaté 
	paragraphe.textContent = message;
	// enfin, on ajoute l’élément au <body>
	document.body.appendChild(paragraphe);
});



var quelleHeureEstIl = function( ma_date ){
	// on vérifie que le paramètre reçu est bien une Date
	if(ma_date instanceof Date) {
		// on crée une chaine de caractères complète grace aux fonctions de l’objet Date
		var ma_date_lisible = 'Il est ' + ma_date.getHours() + ' heures, ' + ma_date.getMinutes() + ' minutes et ' + ma_date.getSeconds() + ' secondes';
		// On retourne la chaîne de caractères
		return ma_date_lisible;
	}
}
