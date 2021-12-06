function wrapChars(str) {
  return str.replace(/(<.*?>)|(.)/g, (match, tag, ch, offset, string) => {
    
    let wght = scale(offset, 0, string.length, 100, 900);
    let style = `style="font-variation-settings: 'wght' ${wght}"`;
    // let wspacing = scale(offset, 0, string.length, 0, -.15);
    // style = `style="font-variation-settings: 'wght' ${wght}; word-spacing: ${wspacing}em"`;
    // let lspacing = scale(offset, 0, string.length, 0, .25);
    // style = `style="font-variation-settings: 'wght' ${wght}; letter-spacing: ${lspacing}em"`;
    // let rot = scale(offset, 0, string.length, 0, 5);
    // style = `style="font-variation-settings: 'wght' ${wght}; transform:rotate(${rot}deg)"`;
    
    return tag || (`<span ${style}>${ch}</span>`);
 });
}

const scale = (num, in_min, in_max, out_min, out_max) => {
  return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

function do_implosion(content, selector){
  const elements = content.querySelectorAll(selector);
  elements.forEach( (element) => {
    // var t = element.textContent.replace(/\w+/g, "<span class='word'>$&</span>");
    t = element.textContent;
    element.innerHTML = wrapChars(t);
  })
}