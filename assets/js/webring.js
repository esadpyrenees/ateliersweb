var p = document.createElement('p'),
  head = document.head,
  style = document.createElement('style'),
  css = '#webring { background: red; }',
  links = [
    "https://bylerida.alwaysdata.net/audio/",
    "https://bonnemazousarah.alwaysdata.net/audio/",
    "https://bosschaerts.alwaysdata.net/audio/",
    "https://anitaz.alwaysdata.net/audio/",
    "https://andreascamps.alwaysdata.netaudio/",
    "http://chbzdesign.alwaysdata.net/audio/",
    "https://hannah.alwaysdata.net/audio/"
  ];

  
  style.appendChild(document.createTextNode(css)); 
  head.appendChild(style);

  for(var i = 0; i<links.length; i++){
    var a = document.createElement('a');
    a.textContent = i;
    a.href = links[i];
    p.appendChild(a);
  }

  p.id= "webring";
  document.body.appendChild(p);
// 	
	
// container.innerText = '';
// a.setAttribute("href",links[Math.floor(Math.random() * links.length)]);
// p.setAttribute("style", "text-align:center;");
// img.setAttribute('alt', "THANK YOU FOR SHOPPING HERE YOUR BUSINESS IS APPRECIATED");
// img.setAttribute('src', "http://newyorkcirculars.info/thankyouforshopping.png");
// img.setAttribute('style', "border:3px solid #000;");
// container.appendChild(p);