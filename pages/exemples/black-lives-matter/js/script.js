
// init text content
const BLM = ["BLACK", "LIVES", "MATTER"];
for(let i=0; i<50; i++){
  for (let j = 0; j < BLM.length; j++) {
    var b = document.createElement('section'),
      s = document.createElement('span');
    s.textContent = BLM[j];
    b.appendChild(s);
    document.body.appendChild(b);
  }
}

const sections = document.querySelectorAll('section');
let h;

// set scroll height
function setHeight() {
  // reset scroll
  window.scrollTo(0,0);
  // get or create div#h  
  h = document.querySelector("#h") || document.createElement("div");
  h.id = "h";
  // compute height
  const height = (sections.length + 1) * window.innerHeight;
  h.style.height = height + "px";
  // append to body if needed
  if(!document.querySelector("#h")) document.body.appendChild(h);
  // size text
  sizeText();
}

function sizeText(){
  // each span fills available space 
  const wh = window.innerHeight; 
  const ww = window.innerWidth;
  const spans = document.querySelectorAll('span');
  spans.forEach(function(span,i){
    const ph = span.clientHeight;
    const pw = span.clientWidth;  
    // set transform (magic numbers are related to font-face metrics)
    span.style.transform = 'scaleY(' + wh/ph * 1.4 + ') scaleX(' + ww/pw  * 1.05+ ') translateY(-' + wh/ph * .15 + 'px)';
  });
  // display
  document.body.classList.add('loaded');
  // scroll !
  window.requestAnimationFrame(scroll);
}

function scroll(){  
  let y = window.scrollY;
  let wh = window.innerHeight; 
  let hh = h.clientHeight; 
  // which section should we scale down ?
  let which = Math.floor(y / (hh - wh) * sections.length);
  let whichs = [sections[ which ]];
  // which section should we scale up ?
  if(which!=sections.length-1){
    whichs.push(sections[ which+1 ]);
  }
  // get transform percentage
  let percent = (y - which * wh) / wh;
  if( whichs[0] !== undefined && whichs[1] !== undefined) {
    whichs[0].style.transform = "scaleY( "+ parseFloat(1 - percent) +")";
    whichs[0].style.transformOrigin = "50% 0% 0px";  
    whichs[1].style.transform = "scaleY( "+ percent +")";
    whichs[1].style.transformOrigin = "50% 100% 0px";
    // reset scale for other sections
    sections.forEach(function(section){
      if(whichs.indexOf(section) == -1){
        section.style.transform = "scaleY(0)";
      }
    })
  }
  window.requestAnimationFrame(scroll);
}

// 🔥
waitForfonts(['Reglo'], function() {
  setTimeout(setHeight, 200);
  window.addEventListener('resize', setHeight);
});

