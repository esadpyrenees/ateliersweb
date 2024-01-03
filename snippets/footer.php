
  <script src="/web/assets/js/notes.js"></script>
  <script src="/web/assets/js/main.js"></script>
  <!-- <script src="/web/assets/js/snow.js"></script> -->

  <?php if(isset($custom_js)) {
    $jss = explode(',', $custom_js) ;
    foreach( $jss as $js ) {
      echo "<script src='$js'></script>";
    }
  }?>


</body>

</html>
