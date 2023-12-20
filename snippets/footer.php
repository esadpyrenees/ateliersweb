
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
  <script src="/web/assets/js/notes.js"></script>
  <script src="/web/assets/js/main.js"></script>
  <button class="stopsnow">*</button>
  <!-- <script src="/web/assets/js/snow.js"></script> -->
  <script>
    const stopsnow = document.querySelector('.stopsnow');
    let is_snowing = true;
    const listener =  (e) => {
      document.body.querySelector('snow-fall').style.opacity= is_snowing == true ? 0 : 1;
      is_snowing = !is_snowing 
    }
    stopsnow.addEventListener("click", listener, false);
  </script>
  <script type="module" src="/web/assets/js/snow-fall.js"></script>
  <script type="module" src="/web/assets/js/is-land.js"></script>
  <is-land on:media="(prefers-reduced-motion: no-preference)">
    <snow-fall></snow-fall>
  </is-land>

  <?php if(isset($custom_js)) {
    $jss = explode(',', $custom_js) ;
    foreach( $jss as $js ) {
      echo "<script src='$js'></script>";
    }
  }?>

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

</body>

</html>
