function doP5(pages){
  
  let format = document.querySelector(".pagedjs_page");
  width = format.getBoundingClientRect().width;
  height = format.getBoundingClientRect().height;

  pages.forEach(page => {

    const pb = page.pagebox;
    const s = ( sketch ) => {

      let size, r, g, b;
    
      sketch.setup = () => {
        sketch.createCanvas(width, height);
        r = sketch.random(255);
        g = sketch.random(255);
        b = sketch.random(255);
        size = 20
      };
    
      sketch.draw = () => {
        sketch.fill(r, g, b)
        sketch.noStroke();
        if (sketch.mouseIsPressed === true) {
          size += 0.5;
          sketch.ellipse(sketch.mouseX, sketch.mouseY, size, size);
        } else {
          size = 20;
          r = sketch.random(255);
          g = sketch.random(255);
          b = sketch.random(255);
        }
      };
    };
    
    let myp5 = new p5(s, pb);
  });
}

