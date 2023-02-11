
  <div id="alarme" style="display:none; position:fixed; background:black; inset:0; display:flex; justify-content:center; align-items:center; color:white; padding:1em">
    <p>
    Contre la destruction de notre modèle social.<br>
    Contre l’augmentation croissante des inégalités.<br>
    Contre la stigmatisation systématique des plus fragiles.<br>
    Ce site est en grève.<br><br>
    <a href="#rejoignons-les-luttes" >✊</a>
    </p>
  </div>
  <script src="/web/assets/js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="/web/assets/js/notes.js"></script>
  <script src="/web/assets/js/main.js"></script>
  <?php if(isset($custom_js)): ?>
    <script src="<?= $custom_js ?>"></script>
  <?php endif ?>

  <script>
    function strike(e){
      e.preventDefault()
      let alarme = document.querySelector('#alarme');
      alarme.parentElement.removeChild(alarme);
    }
    let raisedfist = document.querySelector('a[href="#rejoignons-les-luttes"]');
    raisedfist.onclick = strike;

  </script>

</body>

</html>
