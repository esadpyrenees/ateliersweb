var nav = document.createElement('nav'),
  head = document.head,
  style = document.createElement('style'),
  css = '#webring { position: fixed; color: white; margin:0; background: #000; bottom: 0; width: 100vw; left: 0; padding: 10px; display: flex; justify-content: space-between; } #webring a {flex: 1; color: white; text-decoration: none; font-size: 16px; font-family: sans-serif; text-align: center;} #webring a:hover, #webring a.active{color:tomato}',
  links = [
    "https://esad-pyrenees.alwaysdata.net/whatever/index.html",
    "https://massinissa.alwaysdata.net/webring/webring.html",
    "https://maevahuber.alwaysdata.net/video/index.html",
    "https://merilin.alwaysdata.net/mavuidieo.html",
    "https://alicemry.alwaysdata.net/video/video.html",
    "https://andreas2camps.alwaysdata.net/son/son.html",
    "https://chbzdesign.alwaysdata.net/video/ring",
    "https://lorelei-jougleux.alwaysdata.net/accueil/webring/tea.html",
    "https://emmasdata.alwaysdata.net/",
    "https://chrismaik.alwaysdata.net/video/",
    "https://bonnemazousarah.alwaysdata.net/pages_web/webring/webring.html",
    "https://alixlbrt.alwaysdata.net/audio/",
    "https://morganne.alwaysdata.net/son/index.html",
    "https://baptisteroca.alwaysdata.net/",
    "https://jadelafont.alwaysdata.net/2021-03-19/",
    "https://anitaz.alwaysdata.net/test_video/",
    "https://tajine.alwaysdata.net/2021_03_19/index.html",
    "https://astridgautier.alwaysdata.net/exercices/ts.html",
    "https://bosschaerts.alwaysdata.net/webring/site1.html",
  ];

  
  
  style.appendChild(document.createTextNode(css)); 
  head.appendChild(style);

  for(var i = 0; i<links.length; i++){
    var a = document.createElement('a');
    var firstletters = links[i].split('//')[1].substring(0,2);
    a.textContent = firstletters;
    a.href = links[i];
    nav.appendChild(a);
    if(document.location == links[i]) { a.className = "active"}
  }
  nav.id= "webring";
  document.body.appendChild(nav);
