<?php 
 
  // config
  $title = "Ressources → Javascript → Exemples";
  $section="ressources";
  $subsection="js";
  $subsubsection="exemples";
  $nav = "/web/snippets/ressources/js.php";
  $mdfile = "./index.md";

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
    .exemples p {font-size: 4vw; max-width:none; margin: 0; font-family: 'Fira Code', "monospace"; }
    .exemples a { color: tomato; text-decoration: underline; border-bottom: none; text-decoration-thickness: .075em;   text-underline-offset: .1em;}
  </style>

  <main class="pane active" id="content">
    <div class="exemples">
      <!-- L’archivisme est un exercice délicat ☺<br><br> -->
        <p>
          <span style="color:orange">var</span> <span style="color:orangered">exemples</span> = 
      <?php
        // browse currentdir, looking for subdirs or index
        $dirs = scandir(".");
        $idx = 0;
        foreach ($dirs as $dir) {
          if($dir[0] == '.'){continue;}
          if (is_dir($dir) ) {
            if($idx == 0){ echo "["; }
            echo("<a href='$dir'>$dir</a>");
            if(count($dirs)  - 4 != $idx){
              echo(', ');
            } else { echo "];"; }
          } 
          $idx ++;
        };
      ?>
    </div>
  </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?> 

  