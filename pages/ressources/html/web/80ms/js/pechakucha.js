// ぺちゃくちゃ

const articles = document.querySelectorAll('article');
const bar = document.getElementById('bar');
let timer = null,
	displaygrid = false,
	basesize = 4,
	idx = 0,
	has_started = false;

// affichage du premier article
articles[0].classList.add('visible');

// attribution d’un id et d’un attribut “data-id” à chaque article
articles.forEach(function(article, index){
	article.id = "article-" + index;
	article.dataset.id = index;
	initGridActions(article);
})


// navigation au clavier (flèches directionelles)
document.body.onkeydown = function(e){

	if (e.key == "ArrowLeft") changeSlide('left');
	if (e.key == "ArrowRight") changeSlide('right');
	if (e.key == "Enter") start();
	if (e.key == "Escape") toggleGrid();      
	
	if (e.key == "+") {
		basesize += .1;
		document.body.style.setProperty('--basesize', basesize + "vw")
	}
	if (e.key == "-") {
		basesize -= .1;
		document.body.style.setProperty('--basesize', basesize + "vw")
	}
};


// rafraichissement de page
if(window.location.hash) {
	let myidx = window.location.hash.replace("#article-", '')
	let article = document.querySelector(window.location.hash)
	idx = Array.prototype.indexOf.call(articles, article) - 1;
	changeSlide('right');
}


function start(){
	if(!has_started){
		toggleFullScreen();		
	}
	bar.classList.add('animated');
	changeSlide('right');
}

// toggle grid
function toggleGrid() {
	let body = document.body;
	if (!displaygrid) {
		body.classList.add('grid')
		displaygrid = true;
	} else {
		body.classList.remove('grid')
		displaygrid = false;
	}
}

// grid actions
function initGridActions(article){
	// en mode grille, au clic sur un article, quitte le mode grille et affiche cet article  
	article.addEventListener('click', () => {
		if(displaygrid == true) {
			document.querySelector('.visible').classList.remove("visible");
			toggleGrid();
			article.classList.add('visible');
			idx = parseInt(article.dataset.id) - 1;
			changeSlide("right");
		}
	})
}

// Full screen
document.body.ondblclick = function (e) {
	toggleFullScreen();
};

function toggleFullScreen() {
	if (!document.fullscreenElement) {
		document.documentElement.requestFullscreen();
	} else {
		if (document.exitFullscreen) {
				document.exitFullscreen();
		}
	}
}

// changement de slide
function changeSlide(direction){
	
		// quelle direction ?
		if (direction == 'right') {
			idx = idx == articles.length - 1 ? 0 : idx + 1;
		} else {
			idx = idx == 0 ? articles.length - 1 : idx - 1;
		}

		// restart timer animation
		// bar.classList.remove('animated');
		// void bar.offsetWidth;
		if(idx == 1){
			// bar.classList.add('animated');
		}

		// check each article
		articles.forEach(function(el, index, array){

			// Si c’est la slide qu’on veut afficher
			if (index == idx) {
				el.classList.add('visible');

				// change le “hash” dans l’URL
				history.pushState(null, el.id, '#' + el.id);

				// auto build iframes
				let embed = el.querySelectorAll('.embed')[0] || null
				if (embed !== null) {
					let iframe = document.createElement('iframe');
					iframe.src = embed.getAttribute('rel');
					iframe.setAttribute('width', 854);
					iframe.setAttribute('autoplay', 'true');
					iframe.setAttribute('height', 480);
					iframe.setAttribute('frameborder', 0);
					embed.appendChild(iframe);
					embed.className = 'embedded';
				}

				// autoplay videos
				let video = el.querySelectorAll('video')[0] || null;
				if (video) video.play();
			}
			// Sinon…
			else {
				el.classList.remove('visible');

				// auto destroy iframes
				let embedded = el.querySelectorAll('.embedded')[0] || null
				if (embedded !== null) {
					let iframe = embedded.querySelectorAll('iframe')[0];
					embedded.setAttribute('rel', iframe.src);
					embedded.removeChild(iframe);
					embedded.className = 'embed';
				}

				// pause videos
				let video = el.querySelectorAll('video')[0] || null;
				if (video) video.pause();
			}
		})
}
