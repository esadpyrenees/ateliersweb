

let main = document.querySelector('main article');
let childnodes = main.children;
let step = Math.floor(childnodes.length / 7);

for (let index = 0; index <= 7; index ++) {
  const element = childnodes[index * step];
  console.log(element); 
  element.insertAdjacentHTML('beforebegin', `<hr> <h2>GROUPE ${index + 1}</h2>`)
}