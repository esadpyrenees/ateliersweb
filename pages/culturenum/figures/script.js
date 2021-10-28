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