<?php
    // config
    $title = "Ressources – CTRL + Alt + print";
    $description = "Pourquoi et comment créer des documents imprimés avec des outils alternatifs – et notamment avec les langages du web.";
    $section="ressources";
    $subsection="ctrlaltprint";
    $nav = "/web/snippets/ressources/ctrlaltprint.php";
    $subsubsection="intro";
    $mdfile = "./ctrlaltprint.md";
    $custom_css = "ctrlaltprint.css";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>

<style>



</style>
    
    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script>
      // ----------------------------------------------------------------------
      // image slider
      // ----------------------------------------------------------------------

      document.addEventListener('DOMContentLoaded', function() {
          var line = document.querySelector(".scrollables");
          if(line){
              line.style.cursor = 'grab';

              var pos = { top: 0, left: 0, x: 0, y: 0 };

              var mouseDownHandler = function(e) {
                  line.style.cursor = 'grabbing';
                  line.style.userSelect = 'none';

                  pos = {
                      left: line.scrollLeft,
                      top: line.scrollTop,
                      // Get the current mouse position
                      x: e.clientX,
                      y: e.clientY,
                  };

                  document.addEventListener('mousemove', mouseMoveHandler);
                  document.addEventListener('mouseup', mouseUpHandler);
              };

              var mouseMoveHandler = function(e) {
                  // How far the mouse has been moved
                  var dx = e.clientX - pos.x;
                  var dy = e.clientY - pos.y;

                  // Scroll the element
                  line.scrollTop = pos.top - dy;
                  line.scrollLeft = pos.left - dx;
              };

              var mouseUpHandler = function() {
                  line.style.cursor = 'grab';
                  line.style.removeProperty('user-select');

                  document.removeEventListener('mousemove', mouseMoveHandler);
                  document.removeEventListener('mouseup', mouseUpHandler);
              };

              // Attach the handler
              line.addEventListener('mousedown', mouseDownHandler);
          }
      });
    </script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
