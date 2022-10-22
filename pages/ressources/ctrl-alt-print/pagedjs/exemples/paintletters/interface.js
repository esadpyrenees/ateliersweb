

let settings = {
  "size": 60,
  "color": "red",
  "sharpness": 100,
  "disturbance": 10,
  "mode":"draw"
}

let controls = `<nav class="tools">
  <button class="button-settings" title="ESC"><span>Settings (ESC)</span></button>
  <div class="settings hidden">
    <span class="input-container input-with-label">
      <label for="color">Color</label>
      <input type="color" class="input-color" name="color" >
      <span class="help">(C for random color)</span>
    </span>
    <span class="input-container input-with-label">
      <label for="size">Size</label>
      <input type="range" class="input-size" name="size" id="size" min="0" max="500" value="60" oninput="sizeamount.value=this.value" />
      <input id="sizeamount" type="number" value="60" min="0" max="500" oninput="sizeamount.value=this.value" class="input-helper" />
      <span class="help">(+ / - to change size)</span>
    </span>
    <!--<span class="input-container input-with-label">
      <label for="sharpness">Sharpness</label>
      <input type="range" class="input-sharpness" name="sharpness" id="sharpness" min="0" max="100" value="100" oninput="sharpnessamount.value=this.value" />
      <input id="sharpnessamount" type="number" min="0" max="100" value="100" oninput="sharpness.value=this.value" class="input-helper" />
    </span>-->
    <span class="input-container input-with-label">
      <label for="disturbance">Disturbance</label>
      <input type="range" class="input-disturbance" name="disturbance" id="disturbance" min="0" max="30" value="10" oninput="disturbanceamount.value=this.value" />
      <input id="disturbanceamount" type="number" min="0" max="30" value="10" oninput="disturbance.value=this.value" class="input-helper" />
      <span class="help">(D for random disturbance)</span>
    </span>
    <button class="button-apply"><span>Apply</span></button>  
  </div>
  <button class="button-print"><span>Print</span></button>
</nav>
<div id="cursor"></div>
<div class="overlay hidden"></div>`

// btns & inputs
let btn_settings,
  settings_tools,
  input_size,
  input_color,
  // input_sharpness,
  input_disturbance,
  btn_print,
  btn_apply,
  overlay;

function toggleSettings(){
  settings_tools.classList.toggle("hidden");
  btn_settings.classList.toggle("hidden");
  btn_print.classList.toggle("hidden");
  overlay.classList.toggle("hidden");
}

function createControls() {
  document.body.insertAdjacentHTML('afterbegin', controls);
  document.querySelector(".tools").style.display = 'flex';
  btn_settings = document.querySelector(".button-settings");
  settings_tools = document.querySelector(".settings");
  input_size = document.querySelector(".input-size");
  input_color = document.querySelector(".input-color");
  // input_sharpness = document.querySelector(".input-sharpness");
  input_disturbance = document.querySelector(".input-disturbance");
  btn_print = document.querySelector(".button-print");
  btn_apply = document.querySelector(".button-apply");
  overlay = document.querySelector(".overlay");

  // settings toggle
  btn_settings.onclick = (e) => {
    toggleSettings();
    settings.mode = settings.mode == "draw" ? "settings" : "draw"; 
  }
  btn_apply.onclick = (e) => {
    toggleSettings();
    settings.mode = "draw"; 
  }


  // Change size
  input_size.onclick = (e) => { e.stopPropagation() };
  input_size.onchange = (e) => {
    settings.size = input_size.value;
    document.body.style.setProperty("--size", settings.size);
  };

  // Change color
  input_color.onclick = (e) => { e.stopPropagation() };
  input_color.onchange = (e) => {
    settings.color = input_color.value;
    document.body.style.setProperty("--color", settings.color);
  };

  // Change disturbance
  input_disturbance.onclick = (e) => { e.stopPropagation() };
  input_disturbance.onchange = (e) => {
    settings.disturbance = input_disturbance.value;
  };

  window.addEventListener("keyup", (e) => {
    if (e.key === "Escape") {
      toggleSettings();
    }
  });


  window.addEventListener("keypress", (e) => {
    if (e.key === "+") {
      input_size.value =  input_size.value < input_size.max - 5 ? parseInt(input_size.value) + 5 :  input_size.max;
      settings.size = input_size.value;
      document.body.style.setProperty("--size", settings.size);
    }
    if (e.key === "-") {
      input_size.value =  input_size.value > input_size.min + 5 ? parseInt(input_size.value) - 5 : 0;
      settings.size = input_size.value;
      document.body.style.setProperty("--size", settings.size);
    }
    if (e.key === "c") {
      let c = Math.floor(Math.random()*16777215).toString(16);
      input_color.value =  "#" + c;
      settings.color = input_color.value;
      document.body.style.setProperty("--color", settings.color);
    }
    if (e.key === "d") {
      let d = Math.floor(Math.random() * (parseInt(input_disturbance.max) - parseInt(input_disturbance.min)) + parseInt(input_disturbance.min));
      console.log(d, input_disturbance.max, input_disturbance.min);
      input_disturbance.value = d;
    }
  });

  // Change sharpness
  // input_sharpness.onclick = (e) => { e.stopPropagation() };
  // input_sharpness.onchange = (e) => {
  //   settings.sharpness = input_sharpness.value;
  //   // console.log(input_color.value);
  // };

}


class InterfaceHandler extends Paged.Handler {
  constructor(chunker, polisher, caller) {
    super(chunker, polisher, caller);
  }

  afterRendered(pages) {

    createControls();
   
  }
}
Paged.registerHandlers(InterfaceHandler);












