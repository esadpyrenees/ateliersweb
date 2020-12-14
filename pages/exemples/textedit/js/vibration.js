var progressives = document.querySelectorAll('.progressive');
 

for (let a = 0; a < progressives.length; a++) {
  var progressive = progressives[a];
  var string = progressive.textContent;
  progressive.textContent= "";
  var min = 110, max = 200, length = string.length;
  string.split("");
  for (var i = 0; i < length; i++) {
    var span = document.createElement("span");
    var variation = min + parseInt((max-min) * i/length);
    console.log(progressive.tagName);
    if(progressive.tagName == "STRONG") {
      variation = min + Math.round(Math.random() * (max-min));
    }
    span.setAttribute('style', "font-variation-settings: 'wdth' " + variation + ", 'wght' " + variation +"");
    span.textContent = string[i];
    progressive.appendChild(span);
  }
}