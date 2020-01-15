
// fonction qui permettra de transmettre au CSS une valeur “--y” dépendant de la position du scroll dans la page
function onScroll(event) {
    let y = window.scrollY;
    document.body.style.setProperty('--y', `${y}px`);
}

// test pour savoir si toutes les images sont téléchargées (avant, on ne peut pas connaitre leurs dimensions)
var images = document.querySelectorAll('img');
// un compteur qui stocke le nombre d’images à télécharger
var images_to_load = images.length;

//  pour chaque image détectée dans la page
for (var i = 0; i < images.length; i++) {
    // on crée une nouvelle image (dans la mémoire du navigateur, pas dans la page / le DOM)
    var img = new Image();
    // on “écoute” l’évènement “load” (= l’image est téléchargée)
    img.addEventListener('load', function(){
        // on diminue le nombre d’images restantes à télécharger
        images_to_load --;
        // si le nombre est à 0, on a chargé toutes les images
        if (images_to_load == 0)  initPage();
    })
    // on attribue à l’image en mémoire le src de l’image de la page / du DOM
    img.src= images[i].src;
}


function initPage(){
    // pour toutes les images
    for (var i = 0; i < images.length; i++) {
        var el = images[i];
        // on mets chaque image en top et left aléatoire tout en restreignant sa position à la dimension du viewport
        el.style.top= Math.floor( Math.random() * (window.innerHeight - el.getBoundingClientRect().height)) + "px";
        el.style.left= Math.floor( Math.random() * (window.innerWidth - el.getBoundingClientRect().width)) + "px";
    }
    // on déclenche l’écouteur sur le scroll, qui éxécute la fonction onScroll
    window.addEventListener('scroll', onScroll, { capture: false, passive: true })
}
