<div id="alarme" style="display:none">
  <p>
    Contre la destruction de notre modèle social.<br>
    Contre l’augmentation croissante des inégalités.<br>
    Contre la stigmatisation systématique des plus fragiles.<br>
    Contre la négation de la valeur de l’art et de la culture.<br>    
    Contre le <i>cloud</i> et son monde, ce site est en grève.<br>
  </p>
  <p>
  <a href="#rejoignons-les-luttes" tabindex="1" style="font-size:xx-large; padding-bottom:.25em">✊</a>
  </p>
</div>

<script>
  function strike(e){
    e.preventDefault()
    let alarme = document.querySelector('#alarme');
    alarme.parentElement.removeChild(alarme);
    localStorage.setItem('striked', 'vivelefeu');
  }
  let raisedfist = document.querySelector('a[href="#rejoignons-les-luttes"]');
  raisedfist.onclick = strike;
  var striked = localStorage.getItem('striked');
  if(striked == "vivelefeu"){
    raisedfist.click();
  }    
</script>