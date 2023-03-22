
  <div id="alarme">
    <p>
    Contre la destruction de notre modèle social.<br>
    Contre l’augmentation croissante des inégalités.<br>
    Contre la stigmatisation systématique des plus fragiles.<br>
    Contre la négation de la valeur de l’art et de la culture.<br>    
    Contre le <i>cloud</i> et son monde, ce site est en grève.<br>
    </p>
    <p>
    <a href="#rejoignons-les-luttes" style="font-size:xx-large">✊</a>
    </p>
  </div>
  <script src="/web/assets/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="/web/assets/js/notes.js"></script>
  <script src="/web/assets/js/main.js"></script>
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
    }
    let raisedfist = document.querySelector('a[href="#rejoignons-les-luttes"]');
    raisedfist.onclick = strike;
    // raisedfist.click();
  </script>

</body>

</html>
