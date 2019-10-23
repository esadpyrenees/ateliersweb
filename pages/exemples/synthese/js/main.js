

//http://mohayonao.github.io/timbre.js/GettingStarted.html

/* ------------------------------------------------------------------------------------------------------------------------------ */
var notes = ["do","ut","re","ré","rê","rè","rë","l'a","l’a","mi","fa","sol","la","si","s'i","s’i"];
var start = 0,
	next = null,
	paused = true;

/* ------------------------------------------------------------------------------------------------------------------------------ */
// grab text
var texte = $("#texte").text();

// split text in words
var mots = texte.split(' ');

// empty text container
$('#texte').empty();

$('#run').on('click', function(event) {
	event.preventDefault();
	$(this).text( paused == true ? 'pause' : 'play');
	paused = !paused;
	run(next);
});

/* ------------------------------------------------------------------------------------------------------------------------------ // find note in mot */
function matchInArray(mot, notes) {

	// returns false
	// or returns note within formatted sting
    for (var i = 0; i < notes.length; i++) {
    	var note = notes[i];
        if (mot.search(note) != -1) {
        	return mot.replace(note,'<em class="' + note.replace("'", "")+ '" >' + note + '</em>');
        }
    }
    return false;
};



for (var i = 0; i < mots.length; i++) {
	
	var mot = mots[i]
	var tempo = mot.length * 20;

	var contains_a_note = matchInArray(mot, notes);
	if(contains_a_note){
		mot = contains_a_note;	
		mot = $('<span data-tempo="'+ tempo +'" class="noteinside" >' + mot + ' </span>');
	} else {
		var mot = $('<span data-tempo="'+ tempo +'" >' + mot + ' </span> ');
	}
	
	$('#texte').append(mot);

	var tempo_width = mot.width();
	mot.attr('data-tempo_width', tempo_width);

	start+=tempo;
	
};



var tnotes = {
	'la': T("sin", {freq:440, mul:0.8}),
	'si': T("sin", {freq:493.88, mul:0.8}),
	'do': T("sin", {freq:261.63, mul:0.8}),
	'ut': T("sin", {freq:523.25, mul:0.8}),
	're': T("sin", {freq:293.66, mul:0.8}),
	'ré': T("sin", {freq:293.66, mul:0.8}),
	'mi': T("sin", {freq:329.63, mul:0.5}),
	'fa': T("sin", {freq:349.23, mul:0.5}),
	'sol': T("sin", {freq:392, mul:0.5})
}
var notes = {
	'la':  440, 
	'si':  493.88, 
	'do':  261.63, 
	'ut':  523.25, 
	're':  293.66, 
	'ré':  293.66, 
	'mi':  329.63, 
	'fa':  349.23, 
	'sol': 392 
}

function playSound(note, duration){
	// console.log(note, duration)
	T("perc", {r:duration*3}, tnotes[note]).on("ended", function() {
	  this.pause();
	}).bang().play();
}



run = function(mot){

	if (paused) return;
	
	if(!mot){
		mot = $('#texte span').first();
	}	
	duration = mot.attr("data-tempo");
	
	if (mot.hasClass("noteinside")) {
		var note = mot.find('em').attr('class');
		playSound(note, duration);
		mot.addClass('underlined')
	} else {
		mot.addClass('read')
	}

	var t = setTimeout(function(){
		next = mot.next();
		if (next.length !=1) {
			$('#texte span').removeClass('underlined');
			run($('#texte span').first());
		} else {
			run(next);
		}
		
	},duration)
	
}
