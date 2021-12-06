class DoublePageBackground extends Paged.Handler {
  constructor(chunker, polisher, caller) {
    super(chunker, polisher, caller);
    this.pagedDoublepage;
    this.sourceSize;
  }
  
  beforeParsed(content) {
    
    const doublepages = content.querySelectorAll('.doublepage');
    doublepages.forEach( (doublepage) => {
      console.log(doublepage);
      let background_url = doublepage.dataset.background;
      for(let i=0; i<2; i++){
        let img = document.createElement("img");
        img.src = background_url;
        doublepage.insertBefore(img, doublepage.firstChild);
      }
    })
    
  }
  afterRendered(pages) {
    
  }
}
Paged.registerHandlers(DoublePageBackground);