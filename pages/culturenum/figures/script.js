var galleries = document.querySelectorAll('.figure');

galleries.forEach( g => {
  g.addEventListener('click', (e) => {
    if(g.classList.contains("visible-figure")){
      return false;
    }
    const opend = document.querySelector('.visible-figure');
    if(opend) opend.classList.remove('visible-figure');
    const close = document.querySelector('.close-figure');
    if(close) close.parentElement.removeChild(close);
    g.classList.add('visible-figure');
    g.scrollIntoView({behavior: "smooth"})
    createClose(g);
  })
  
  var children = g.querySelectorAll('figure');
  g.addEventListener('mousemove', function(e){
    var rect = g.getBoundingClientRect();
    var x = e.clientX - rect.left; //x position within the element.
    var xp = Math.floor(x * 100 / rect.width);
    var showIndex = Math.floor(xp * children.length / 100);
    children.forEach((c) => {c.style.zIndex = 1})
    var stackmedia = children[showIndex];
    stackmedia.style.zIndex = 2000;
  })
});

function createClose(g){
  var close = document.createElement('span');
  close.textContent = "×";
  close.className = "close-figure";
  g.querySelector('.text').appendChild(close);
  close.onclick = (e) => {
    e.stopPropagation()
    g.classList.remove('visible-figure');
    close.parentElement.removeChild(close);
  }
}