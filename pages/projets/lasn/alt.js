window.addEventListener('DOMContentLoaded', function(){
  const images = document.querySelectorAll('img');
  images.forEach( (image) => {
    image.style.opacity = 0;
    image.onload = () => { wrapImage(image) }
  })
})

function wrapImage(image){
  let bdr = image.getBoundingClientRect();
  let figure = document.createElement('figure');
  figure.style.margin=0;
  figure.style.width = bdr.width;
  figure.style.height = bdr.height;
  image.parentElement.insertBefore(figure, image);
  figure.appendChild(image);
  figure.style.position = "relative";
  
  // figcaption
  let figcaption = document.createElement('figcaption') ;
  figure.appendChild(figcaption);
  figcaption.textContent = image.alt;
  figcaption.style.border = "1px solid #000";        
  figcaption.style.opacity = 1;
  figcaption.style.position = "absolute";
  figcaption.style.top = 0;
  figcaption.style.left = 0;
  figcaption.style.padding = ".5em";
  figcaption.style.width = "100%";
  figcaption.style.height = "100%";
  figcaption.style.boxSizing = "border-box";

  // image
  figure.onclick = () => {
    image.style.opacity = image.style.opacity == 0 ? 1 : 0;
    figcaption.style.opacity = figcaption.style.opacity == 0 ? 1 : 0;
  }
}

