

document.querySelector('.toggle-flexbox').onclick = function(){
  const section = this.closest("section"),
    example = section.querySelector("article"), 
    status = section.querySelector(".status");
  var style = window.getComputedStyle(example);
  
  example.style.display = style.display == "flex" ? "block" : "flex";
  if(style.display == "flex") {
    this.classList.add("actived");
    this.textContent = "Flexbox off";
   }else{
    this.classList.remove("actived");
    this.textContent = "Flexbox on";
   } 
  status.textContent = example.style.display;
}
const direction_buttons = document.querySelectorAll('.toggle-direction');
direction_buttons.forEach(button => {  
  button.onclick = () => {
    const section = button.closest("section"),
      example = section.querySelector("article"), 
      status = section.querySelector(".status");
    direction_buttons.forEach(b => {
      b.classList.remove('actived');
    });
    button.classList.add('actived');
    example.style.flexDirection = button.dataset.direction;
    status.textContent = button.dataset.direction;
  }
})



document.querySelectorAll('.example2-toggle-direction').forEach(button => {  
  button.onclick = () => {
    document.querySelector(".orientation-example").style.flexDirection = button.dataset.direction;
    document.querySelector("#example2-status").textContent = button.dataset.direction;
  }
})

const justify_buttons = document.querySelectorAll('.toggle-justify');
justify_buttons.forEach(button => {  
  button.onclick = () => {
    const section = button.closest("section"),
      example = section.querySelector("article"), 
      status = section.querySelector(".status");
    justify_buttons.forEach(b => {
      b.classList.remove('actived');
    });
    button.classList.add('actived');
    example.style.justifyContent = button.dataset.justify;
    section.querySelectorAll(".explain").forEach(p => {
      p.classList.remove('visible');
    });
    section.querySelector(".justify-" + button.dataset.justify).classList.add('visible');
  }
})


const align_buttons = document.querySelectorAll('.toggle-align');
align_buttons.forEach(button => {  
  button.onclick = () => {
    const section = button.closest("section"),
      example = section.querySelector("article"), 
      status = section.querySelector(".status");
      align_buttons.forEach(b => {
      b.classList.remove('actived');
    });
    button.classList.add('actived');
    example.style.alignItems = button.dataset.align;
    section.querySelectorAll(".explain").forEach(p => {
      p.classList.remove('visible');
    });
    section.querySelector(".align-" + button.dataset.align).classList.add('visible');
  }
})


const addItem = document.querySelector('#example5-add-item');
const removeItem = document.querySelector('#example5-remove-item');
const distribute_examples = document.querySelectorAll(".distribute-example");
addItem.onclick = () => {
  const childrenCount = distribute_examples[0].childElementCount;
  distribute_examples.forEach(example => {
    example.insertAdjacentHTML("beforeend",`<div class="item">Item ${childrenCount + 1}</div>`)
  });
}

removeItem.onclick = () => {
  const childrenCount = distribute_examples[0].childElementCount;
  if(childrenCount < 2) {
    removeItem.disabled = true;
    return
  };
  distribute_examples.forEach(example => {
    example.lastElementChild.remove()
  });
}

