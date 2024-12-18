const urls = [
  {url:"louise", name: "Louise"},
  {url:"ilona", name: "Ilona"},
  {url:"mevena", name: "Mevena"},
  {url:"victoria", name: "Victoria"},
  {url:"alix", name: "Alix"},
  {url:"marlyne", name: "Marlyne"},
  {url:"thelma", name: "Thelma"},
  {url:"julie", name: "Julie"},
  {url:"claire", name: "Claire"},
  {url:"lucie", name: "Lucie"},
  {url:"corentin", name: "Corentin"},
  {url:"yunalou", name: "Yuna-Lou"},
  {url:"charlyne", name: "Charlyne"},
  {url:"lisa", name: "Lisa"},
  {url:"clementine", name: "Clémentine"},
  {url:"chelsea ", name: "Chelsea "},
  {url:"loubna", name: "Loubna"},
  {url:"alexis", name: "Alexis"},
  {url:"ophelie", name: "Ophélie"},
  {url:"ambre", name: "Ambre"},
  {url:"lucas", name: "Lucas"},
  {url:"amanda", name: "Amanda"},
  {url:"medina", name: "Médina"},
  {url:"zoe", name: "Zoé"},
  {url:"mel", name: "Mel"}
];


var head = document.head || document.getElementsByTagName('head')[0];
var style = document.createElement('style');
style.setAttribute("type", 'text/css');
var css = '#webring { margin: 0 !important; height: auto !important; flex-wrap: auto !important;top: auto !important; position: fixed !important; bottom: 20px !important; right:20px !important; background: black !important; border-radius: 1em !important;display: flex !important;gap: 1em !important;padding: .5em 1em !important;justify-content: center !important;align-items: center !important;font-size: 18px !important;}#webring a {color: white !important;text-decoration: none !important;border: none !important;font: normal 1em/1 monospace !important}#webring select {color: white !important;text-decoration: none !important;border: none !important;background: #333 !important; font: normal .85em/1 monospace !important;padding: .25em 1em !important;}#webring option { font: normal .85em/1 monospace !important;}';
style.appendChild(document.createTextNode(css));
head.appendChild(style);


const base_url = "https://ateliers.esad-pyrenees.fr/web/archives/2024-2025/2dgm/";
const webring = document.createElement("nav");
webring.id = "webring";


let loc = window.location.href;
let current = null, next = null, prev = null, prevlink = null, nextlink = null;
urls.forEach((url,index) => {
  if(loc.includes(url.url)) {
    // console.log(loc, url.url);
    current = url;
    let nextindex = index < urls.length - 1 ? index + 1 : 0;
    next = urls[nextindex];
    let previndex = index > 0 ? index - 1 : urls.length - 1
    prev = urls[previndex];
    prevlink = `<a href="${base_url}${prev.url}/figures" title="${prev.name}">←</a>`;
    nextlink = `<a href="${base_url}${next.url}/figures" title="${next.name}">→</a>`;
    webring.insertAdjacentHTML('afterbegin', prevlink);
  } 
});



const select = document.createElement('select');

shuffled_urls = [...urls];
shuffle(shuffled_urls);

let opt = document.createElement('option');
opt.textContent = "Figures";
opt.value = "#";
select.appendChild(opt);

shuffled_urls.forEach((url,index) => {
  const option = document.createElement('option');
  option.textContent = url.name;
  option.value = base_url + url.url+ "/figures";
  select.appendChild(option)
});

select.addEventListener("change", () => {
  window.location.href = select.options[select.selectedIndex].value;
})

webring.appendChild(select);
webring.insertAdjacentHTML('beforeend', nextlink);


const target = document.body; // document.querySelector("main") || 
target.appendChild(webring);



function shuffle(array) {
  for (let i = array.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    [array[i], array[j]] = [array[j], array[i]];
  }
}
