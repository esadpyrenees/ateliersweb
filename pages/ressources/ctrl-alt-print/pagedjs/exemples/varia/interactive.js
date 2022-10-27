

function doP5(pages){
  
  let format = document.querySelector(".pagedjs_page");
  width = format.getBoundingClientRect().width;
  height = format.getBoundingClientRect().height;

  // cursor dragging
  document.onmousemove = function(e){
    let x = e.clientX + document.body.scrollLeft; 
    let y = e.clientY + document.body.scrollTop;
    var cursor=document.getElementById('cursor');
    cursor.style.top=y+'px';
    cursor.style.left=x+'px';
  }
  
  pages.forEach(page => {

    const pb = page.pagebox;
    pb.style.userSelect = "none";
    
    // a sketch for each page
    const s = ( sketch ) => {
    

      sketch.setup = () => {
        sketch.createCanvas(width, height);
        sketch.stroke(240);        
      };
    
      sketch.draw = () => {
        if (sketch.mouseIsPressed === true && settings.mode == "draw") {          
          sketch.strokeWeight(settings.size / 2);
          sketch.line(sketch.mouseX, sketch.mouseY, sketch.pmouseX, sketch.pmouseY);
        }        
      };

      sketch.mouseReleased = () => {

        if(settings.mode == "draw"){ 

          // select blasted spans
          let blasts = pb.querySelectorAll('.blast-char');
          // select page area 
          const parentarea = pb.querySelector(".pagedjs_area");
          // compute offset between canvas and page area
          const parentarea_top =  parentarea.offsetTop;
          const parentarea_left =  parentarea.offsetLeft;

          // heavy work on each letter in the page…
          blasts.forEach( (b) => {
            // compute span position
            let top =  b.offsetTop + parentarea_top;
            let left =  b.offsetLeft + parentarea_left;
            // get canvas color at position
            let c = sketch.get(left, top); 

            // transform each span that is above non transparent color
            if(sketch.alpha( c ) > 20 ){
              
              // color
              b.style.color = settings.color;

              // disturbance
              if(settings.disturbance != 0){
                let rotation = settings.disturbance * Math.random() - settings.disturbance/2;
                let scale = Math.random() * settings.disturbance / 50 + 1;
                b.style.transform = `rotate(${rotation}deg) scale(${scale})`;
                // b.style.display = "inline-block";
              }
              
            } 
          });
        }

        sketch.clear();
      }
      
    };

    let myp5 = new p5(s, pb);
  });
}



function doSplit(content){
  console.log(content);
  $(content).find(".text").blast({ delimiter: 'character', customClass: "blast-char"} );
  // $(content).find(".blast-word").blast({ delimiter: 'character', customClass: "blast-char"} );
}

