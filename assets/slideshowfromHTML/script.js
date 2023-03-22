
let idx = 0;
var is_init = false;
var slides = [];
var content = document.querySelector('#content');
var nodes = [...content.children];
var prevslide = null;



var slbtn = document.createElement("button");
slbtn.textContent = "👀";
slbtn.id="slbtn";
slbtn.title = "Afficher l’article en diaporama";
content.insertAdjacentElement('beforebegin', slbtn)
slbtn.onclick = () => {
  initSlideshow(false);
}


function initSlideshow(myidx){
  if(is_init) return;
  var slideshow = document.createElement("div");
  slideshow.id = "slideshow";
  var index = 0;
  nodes.forEach(node => {
    
    var prevslide_is_title = prevslide ? (prevslide.classList.contains("slide-h1") || prevslide.classList.contains("slide-h2") || prevslide.classList.contains("slide-h3")) : false;    
    var tagname = node.tagName.toLowerCase();

    var slide = document.createElement("article");
    slide.id = "slide-" + index;
    slide.classList.add(`slide-${tagname}`, "slide");
    if(index==0) slide.classList.add('visible');
    slide.appendChild(node);

    // insert p that follows an title in title slide
    if(tagname == "p" && prevslide_is_title){ prevslide.appendChild(node); }
    prevslide = slide;
    // don’t insert paragraphs
    if(tagname == "p" || tagname == "h4") { return; }

    slideshow.appendChild(slide);
    slides.push(slide);
    index++;

    // images size
    var images = node.querySelectorAll('img');
    images.forEach(image => {
      image.src = image.src.replace('images-s', 'images-b');
    });
  });

  document.body.appendChild(slideshow);
  is_init = true;

  if(myidx){
    var el = document.querySelector(window.location.hash)
    idx = Array.prototype.indexOf.call(slides, el) - 1;
    changeSlide('right');
  }

}






// navigation au clavier (flèches directionelles)
document.body.onkeydown = function(e){
  if(e.keyCode == 37 || e.keyCode == 39 || e.keyCode == 13) e.preventDefault();
  if (e.keyCode == 37) changeSlide('left');
  if (e.keyCode == 39) changeSlide('right');
  if (e.keyCode == 13) {
    changeSlide('right');
    toggleFullScreen();
  }
  if(e.key == "Escape"){
    window.location.hash = "";
    window.location.reload();
  }
};


// rafraichissement de page
if(window.location.hash) {
  var myidx = window.location.hash.replace("#slide-", '');
  var el = document.querySelector(hash);
  if(el) initSlideshow(myidx);
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


    // quelle direction ?
    if (direction == 'right') {
      idx = idx == slides.length - 1 ? 0 : idx + 1;
    } else {
      idx = idx == 0 ? slides.length - 1 : idx - 1;
    }

    // console.log('index: ' + idx);

    slides.forEach(function(el, index, array){

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
