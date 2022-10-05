
// Your own API Key must be created at https://developers.giphy.com/
const apikey = "F5vFxzv4KXgT8sDmG2cprKsKEeh8kAff";

// fonction qui effectue une requête asynchrone vers l’API de Giphy
// et renvoie une réponse au format JSON
var askForGif = function (search) {
  let limit = 10;
  // Create the XHR request
  var request = new XMLHttpRequest();

  // Return it as a Promise
  return new Promise(function (resolve, reject) {
    // Setup our listener to process compeleted requests
    request.onreadystatechange = function () {
      // Only run if the request is complete
      if (request.readyState !== 4) return;
      // Process the response
      if (request.status >= 200 && request.status < 300) {
        // If successful
        resolve(request);
      } else {
        // If failed
        reject({
          status: request.status,
          statusText: request.statusText
        });
      }
    };

    // Setup our HTTP request
    request.open( "GET", `https://api.giphy.com/v1/gifs/search?q=${search}&api_key=${apikey}&limit=${limit}` );

    // Send the request
    request.send();
  });
};

// Utilitaire pour randomiser l’ordre d’une liste (array)
function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}

// tous les éléments qui possèdent un attribut "data-gif"
const elements = document.querySelectorAll("[data-gif]");
// pour chaque élément
elements.forEach((element) => {
  element.onclick = () => {
    // si l’attribut "data-gif" est vide, on ne fait rien.
    if(element.dataset.gif === "") return;
    // ajoute la class "loading" pour signaler un chargement en cours
    element.classList.add('loading');

    // effectue la requête vers Giphy avec en paramètre le contenu de l’attribut "data-gif", 
    // puis traite la réponse 
    askForGif(element.dataset.gif).then(function (request) {
      // parse response
      let response = JSON.parse(request.responseText);
      // dive into the response to grab images
      let gifs = response.data;
      // randomize gifs
      shuffle(gifs);
      // console.log(gifs);
      // grab first
      let url = gifs[0].images.original.url;
      // build image
      const img = document.createElement("img");
      img.addEventListener("load", function(){
        // on image load, remove loading classname
        element.classList.remove('loading');
      })
      img.src = url;
      img.className = "gif";
      // inject image
      element.appendChild(img);
      // avoid double image, remove attribute value
      element.dataset.gif = "";
    });
  };
});
