function wrapChars(str) {
  return str.replace(/(<.*?>)|(.)/g, (match, tag, ch, offset, string) => {
    
    let wght = scale(offset, 0, string.length, 40, 200);
    let wspacing = scale(offset, 0, string.length, 0, .2);

    let style = `style="font-variation-settings: 'wght' ${wght}; word-spacing: ${wspacing}em"`;
    return tag || (`<span ${style}>${ch}</span>`);
 });
}

const scale = (num, in_min, in_max, out_min, out_max) => {
  return (num - in_min) * (out_max - out_min) / (in_max - in_min) + out_min;
}

function do_implosion(content, selector){
  const elements = content.querySelectorAll(selector);
  elements.forEach( (element) => {
    element.innerHTML = wrapChars(element.textContent);
  })
}