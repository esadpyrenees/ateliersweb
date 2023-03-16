
	let idx = 0;

	const articles = document.querySelectorAll('article');
	const bar = document.getElementById('bar');
	let timer = null;

	// affichage du premier article
	articles[0].classList.add('visible');

	// attribution d’un id à chaque article
	articles.forEach(function(el, index, array){
		el.id = "article-" + index;
	})


	// navigation au clavier (flèches directionelles)
	document.body.onkeydown = function(e){
		if(e.keyCode == 37 || e.keyCode == 39 || e.keyCode == 13) e.preventDefault();
		if (e.keyCode == 37) changeSlide('left');
	    if (e.keyCode == 39) changeSlide('right');
	    if (e.keyCode == 13) {
	    	start();
	    	// toggleFullScreen();
	    }
	};


	// rafraichissement de page
	if(window.location.hash) {
		var myidx = window.location.hash.replace("#article-", '')
		var el = document.querySelector(window.location.hash)
		idx = Array.prototype.indexOf.call(articles, el) - 1;
		changeSlide('right');
	}


	function start(){
		changeSlide('right');
	}

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

    // console.log('changeSlide: ' + direction);

    clearTimeout(timer);
    timer = setTimeout(function(){
        changeSlide('right');
    }, 20000)

		// animation
		bar.classList.remove('animated');
		void bar.offsetWidth;
		bar.classList.add('animated');

	  	// quelle direction ?
	  	if (direction == 'right') {
	  		idx = idx == articles.length - 1 ? 0 : idx + 1;
	  	} else {
	  		idx = idx == 0 ? articles.length - 1 : idx - 1;
	  	}

      // console.log('index: ' + idx);

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
	  		// Sinon
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
