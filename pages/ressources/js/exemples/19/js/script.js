
// nombre d’itérations (pour arrêter après 50 chats)
var iterations = 0;

const gimmeACat = function(){
  // invoque la fonction ajax_get
  ajax_get('https://api.thecatapi.com/v1/images/search?size=full', function(data) {
    var image = document.createElement("img");
    image.src = data[0]["url"];
    // détermine la largeur et la hauteur du body
    const w = document.body.clientWidth;
    const h = document.body.clientHeight;
    // positionne aléatoirement l’image dans les limites du body (en fonction de la taille de l’image reçue dans `data`)
    image.style.left = Math.random() * (w - data[0]["width"]) + "px";
    image.style.top = Math.random() * (h - data[0]["height"]) + "px";
    document.body.appendChild(image);  
    // rotation ? entre -20 et +20 degrés
    image.style.transform = `rotate(${(Math.random() * 40) - 20}deg)`;
    iterations++; // ajoute 1 à i, = “incrémente“ i  
  });
  if(iterations == 50) {
    // on arrête !
    clearInterval(intval);
  }
}

// invoque la fonction gimmeACat toutes les demi-secondes
const intval = setInterval(() => {
  gimmeACat()  
}, 500);



// fonction ajax avec deux paramètres 
// - une URL (celle de l’API, qu’on nomme `endpoint`)
// - une fonction à exécuter si la réponse est correctement retournée (status = 200)
function ajax_get(url, callback) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      console.log('responseText:' + xmlhttp.responseText);
      try {
        // la réponse de catapi est au format JSON.
        // JSON.parse transforme le JSON en liste javascript
        var data = JSON.parse(xmlhttp.responseText);
      } catch (err) {
        console.log(err.message + " in " + xmlhttp.responseText);
        return;
      }
      callback(data);
    }
  };
  xmlhttp.open("GET", url, true);
  xmlhttp.send();
}
