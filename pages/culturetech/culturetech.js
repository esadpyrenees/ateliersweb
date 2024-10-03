const t = document.querySelector('#practicesshapetools');
const linktext = t.textContent.split('');
linktext.push("&nbsp;")
t.innerHTML = linktext.map((l, idx) => {
  l = l == " " ? "&nbsp;" : l;
  let rot = idx / linktext.length * 360;
  return `<span style="--r:${rot}">${l}</span>`;
}).join("");
