const urls = [
  { name:"Vladimir", url:"vladimir"},
  { name:"Tess", url:"tess"},
  { name:"Serdane", url:"serdane"},
  { name:"Quentin", url:"quentin"},
  { name:"Médina", url:"medina"},
  { name:"Maxime", url:"maxime"},
  { name:"Marilou", url:"marilou"},
  { name:"Marie-Lou", url:"marie-lou"},
  { name:"Margot", url:"margot"},
  { name:"Maksim", url:"maksim"},
  { name:"Lyne", url:"lyne"},
  { name:"Luciane", url:"luciane"},
  { name:"Lucas", url:"lucas"},
  { name:"Lola", url:"lola"},
  { name:"Lisa", url:"lisa"},
  { name:"Julie", url:"julie"},
  { name:"Juliane", url:"juliane"},
  { name:"Inès", url:"ines"},
  { name:"Emma D.", url:"emma-d"},
  { name:"Emma C.", url:"emma-c"},
  { name:"Corentin", url:"corentin"},
  { name:"Coline", url:"coline"},
  { name:"Ambre", url:"ambre"}
];


var head = document.head || document.getElementsByTagName('head')[0];
var style = document.createElement('style');
style.setAttribute("type", 'text/css');
var css = '#webring { position: fixed; bottom: 50px; right:50px; background: black; border-radius: 1em;display: flex;gap: 1em;padding: .5em 1em;justify-content: center;align-items: center;font-size: 18px;}#webring a {color: white;text-decoration: none;border: none;font: normal 1em/1 monospace}#webring select {color: white;text-decoration: none;border: none;background: #333; font: normal .85em/1 monospace;padding: .25em 1em;}#webring option {  font: normal .85em/1 monospace;}';
style.appendChild(document.createTextNode(css));
head.appendChild(style);


const base_url = "https://ateliers.esad-pyrenees.fr/web/archives/2023-2024/2DGM/";
const webring = document.createElement("nav");
webring.id = "webring";


let loc = window.location.href;
loc = "https://ateliers.esad-pyrenees.fr/web/archives/2023-2024/2DGM/lucas/figures/"
let current = null, next = null, prev = null;
urls.forEach((url,index) => {
  if(loc.includes(url.url)) {
    current = url;
    let nextindex = index < urls.length - 1 ? index + 1 : 0
    next = urls[nextindex];
    let previndex = index > 0 ? index - 1 : urls.length - 1
    prev = urls[previndex];
    console.log(url.url, index, previndex, nextindex);
  } 
});

const prevlink = `<a href="${prev.url}" title="${prev.name}">←</a>`;
const nextlink = `<a href="${next.url}" title="${next.name}">→</a>`;
webring.insertAdjacentHTML('afterbegin', prevlink);

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
  console.log(select.options[select.selectedIndex].value);
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
