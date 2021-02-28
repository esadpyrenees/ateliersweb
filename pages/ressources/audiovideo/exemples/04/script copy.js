// Une liste des fichiers audio
var audios = [
	'../assets/audio/Artaud-Antonin_01_Opening-Text-01.mp3',
	'../assets/audio/Artaud-Antonin_01_Opening-Text-02.mp3',
	'../assets/audio/Artaud-Antonin_01_Opening-Text-03.mp3',
	'../assets/audio/Artaud-Antonin_01_Opening-Text-04.mp3',
	'../assets/audio/Artaud-Antonin_01_Opening-Text-05.mp3'
	];
// une variable pour ranger les players
var players = [];

// Pour chaque audio…
for (var i = 0; i < audios.length; i++) {

	// on crée les éléments HTML
	var player = document.createElement('div'),
		audio =  document.createElement('audio');
	// on les enregistre dans la liste des players
	players.push(player);

	// on leur affecte les attributs :
	// • de classe (pour le bouton) 
	player.className = 'playerdiv';
	// • de src (pour l’audio)
	audio.src = audios[i];

	// on ajoute l’audio au player (appendChild = “ajoute un enfant”)
	player.appendChild(audio);
	// on ajoute le player au body
	document.body.appendChild(player);

	// on les positionne aléatoirement
	// pour plus d’infos sur l’aléatoire :
	// http://ateliers.esad-pyrenees.fr/web/ramdam/
	var available_width = window.innerWidth - 200, // 200px est la largeur du bouton
		available_height = window.innerHeight - 200, // 200px est la hauteur du bouton
		t = Math.floor( Math.random() * available_height),
		l = Math.floor( Math.random() * available_width);
	player.style.left = l + 'px';
	player.style.top = t + 'px';
	
	// Quand la souris le survole
	player.addEventListener('mouseenter', function(){
		// on sélectionne le premier enfant (qui doit être un <audio>)
		var audioplayer = this.children[0];			

		// on lance la lecture
		audioplayer.play();
		this.classList.add('gros');
		audioplayer.onended = function(){
			this.parentNode.classList.remove('gros');
		}

		// ajoute / enlève les classes .petit et .gros
		for (var i = 0; i < players.length; i++) {
			var player = players[i];
			if(player == this) {
				// si c’est l’élément en cours de survol (“this”)
				player.classList.add('gros');
				player.classList.remove('petit');
			} else {
				// sinon
				player.classList.remove('gros');
				player.classList.add('petit');
			}
		}
		
	})

}