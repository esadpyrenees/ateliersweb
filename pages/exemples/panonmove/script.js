const main = document.querySelector('main');
let rect, ww, wh;

init = function(){ 
  rect = main.getBoundingClientRect();
  ww = window.innerWidth;
  wh = window.innerHeight;
}

init();

move = function (mouseX, mouseY) {
  let xPercent = (mouseX / ww) * 100;
  let yPercent = (mouseY / wh) * 100;
  let posx = scale(xPercent, 0, 100, 0, rect.width - ww) * -1;
  let posy = scale(yPercent, 0, 100, 0, rect.height - wh) * -1;
  main.style.setProperty('--x', posx + "px");
  main.style.setProperty('--y', posy + "px");
};


document.addEventListener('mousemove',function (e) {
  var mouseX = e.clientX;
  var mouseY = e.clientY;
  move(mouseX, mouseY);		
});

document.addEventListener("resize", function(e){						
  init();	
});



// fnction qui transforme une valeur (value) située entre deux limites (inMin et inMax) 
// vers une valeur proprtionellement située entre deux autres limites (outMin et outMax)
function scale(value, inMin, inMax, outMin, outMax) {
  const result = (value - inMin) * (outMax - outMin) / (inMax - inMin) + outMin;
  if (result < outMin) {
    return outMin;
  } else if (result > outMax) {
    return outMax;
  }
  return result;
}