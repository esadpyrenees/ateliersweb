/*
Author: Vladimir Kharlampidi, The iDangero.us
*/
document.createElement('header');
document.createElement('footer');

$(function(){

	var animateSlidesOnStart;


	// preload, on masque les visages
	$('.main').css('visibility','hidden');

	// mise en page portrait / paysage	
	rebuildMain = function(){
		$screenWidth=$(window).width();
		$screenHeight=$(window).height();
		if(window.innerHeight > window.innerWidth){
		    $width = $screenWidth;
			$height = $screenWidth * 1.42; //ratio paysage
		} else {
			$height = $screenHeight - 100; // marges portrait
			$width = $height / 1.42; //ratio portait
		}
		$('.main').css({
			width:$width,
			height:$height
		});

	}

	rebuildMain();

	$(window).on('orientationchange resize', function(){
		rebuildMain();
	});
	
	// slides
	var swiperHaut = $('.swiper-haut').swiper({ slidesPerSlide : 1 });
	var swiperMilieu = $('.swiper-milieu').swiper({ slidesPerSlide : 1 });
	var swiperBas = $('.swiper-bas').swiper({ slidesPerSlide : 1 });

	var $slides = $('.swiper-nested1');

	for (var i = 0; i < $slides.length; i++) {

		var $swipers =[]

		$slides.each(function(i){
			$this = $(this);
			$swipers[i] = $this.swiper({
				slidesPerSlide : 1
			})

			var $subslides = $this.find('.swiper-nested2');
			var $subswipers =[];

			$subslides.each(function(j){
				$this = $(this);
				$subswipers[j] = $this.swiper({
					slidesPerSlide : 1,
					initialSlide:i,
					mode: 'vertical'
				})
			});	
		});	
	};
	

	

	// animation automatique des slides
	var animateSlides = function(){
		if(is_touched == false){

			$slides.each(function(i){
				$this = $(this);
				var $rand= Math.floor(Math.random()*4);
				var t = setTimeout(function(){
					$swipers[i].swipeTo($rand, 800, false);
				}, 200 * i)
			});			
		} else {
			clearInterval(animateSlidesOnStart);
		}
	}	

	var animateNow = function (){
		// au cas où
		$('body').removeClass('textified');
		animate = window.setInterval(function(){
			animateSlides();
		}, 2000)
	}


	// initialisation, une fois tout chargé

	var is_touched = false;
	$('.main, .slide').on('touchstart click', function(){
		is_touched = true;
	});

	$(window).load(function () {
		//de démarrage
		animateNow();
		$('.main').css('visibility', 'visible');
		
	});


	// mode texte
	var textify = function(){
		// on arrète l’animation
		is_touched = true;
		clearInterval(animateSlidesOnStart);
		// on rend les textes visibles (css)
		$('body').addClass('textified');
		// on lit le texte 10 secondes et on anime à nouveau
		window.setTimeout(function(){
			animateNow();
			is_touched = false;
		}, 10000)

	}
	
	// liste de couleurs aléatoires pour le fond des textes
	$colors =['#eb0079', '#19bcdb', '#822418'];

	$slides.each(function(){
		var rand_color = Math.floor(Math.random()*$colors.length);
		$(this).find('.front, .nez, .bouche').css('color', $colors[rand_color]);
	});



	(function loop() {
		// min 19 sec, max 23 sec
	    var rand = Math.round(Math.random() * (4000)) + 19000;
	    setTimeout(function() {
	            textify();
	            loop();  
	    }, rand);
	}());

	

	
})

