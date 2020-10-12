  <?php
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "Références – Visite rapide au cœur du web";
    $section="references";
    $subsection="visite";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <style type="text/css">
      #wrapper img{
        max-width: 100%;
      }
      #wrapper span[title]:after {
        content: attr(title);
        display: block;
        font-size: .85em;
        color: rgba(0,0,0,.7);
        margin-bottom: 1em;
      }
      main a:hover { color:black !important; border-color:tomato !important}
  </style>


  <main class="pane active" id="content">
      <?= $Parsedown->text( file_get_contents('./visite.md') ); ?>
      <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    
    <script>
    var colornames = "Tomato LimeGreen DodgerBlue GreenYellow LightSalmon OrangeRed Chartreuse DarkOrange DarkSeaGreen DeepPink FireBrick HotPink MediumOrchid Olive Orchid Peru  Salmon SeaGreen SkyBlue SlateBlue Purple";
    var colors = colornames.split(" ");

    function colorize(element, index, array) {
      element.style.color = colors[Math.floor(Math.random() * colors.length)];
    }
    
    var as = document.querySelectorAll('main a');
    as.forEach(colorize);
    
    </script>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
