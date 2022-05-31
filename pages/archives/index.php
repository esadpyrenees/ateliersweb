<?php 
  // Does the dir has an index.html|php|htm file 
  function hasIndex($dir){
    
    $fs = array_diff( scandir($dir), array(".", "..") );
    foreach($fs as $f){
      if(in_array($f, ["index.html", "index.php", "index.htm"])){
        return basename($f);
      }
    }

    return false;
    // old (glob) : 
    // foreach(glob($dir.'/index.{html,htm,php}',GLOB_BRACE) as $file){
    //   return basename($dir) . '/' . basename($file);
    // }
  }

  // Does the dir has an index.md file 
  function hasMDIndex($dir){
    foreach(glob($dir.'/index.md',GLOB_BRACE) as $file){
      return $file;
    }
    return false;
  }

  $params = '';
  if (isset($_GET['params'])) {
    $params = '/' . $_GET['params'];
  }

  $archivesdir = '../../archives';
  $currentdir = $archivesdir . $params;
  
  $index = hasIndex($currentdir);
  if($index){
    // var_dump($index);
    header("Location: $index");
  } 
  
  // if current dir has index
  $dir = new DirectoryIterator($currentdir);

  $title = "ÉSAD·Pyrénées — Ateliers web — Archives";
  $section="archives";
  include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
  include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";
  // markdown!
  $Parsedown = new ParsedownExtra();
?> 

  <main class="pane active" id="content">
    <nav class="archives-nav">
      L’importation des archives est en cours ☺<br><br>

      <?php
        $results = array();
        
        // browse currentdir, looking for subdirs or index
        foreach ($dir as $fileinfo) {
          if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            $index = hasIndex($fileinfo->getPathname());  
            $path = $fileinfo->getFilename() . '/';
            if ($index != false ) {
              $path = basename($dir) . '/' .$index;
            }
            $dirArray = array(
              'path'=>$path, 
              'name'=>basename($dir). '/'
            );
            $results[] = $dirArray;
          } elseif (strpos($fileinfo, 'html') !== false && !$fileinfo->isDot()){
            $path = $fileinfo->getFilename();
            $dirArray = array(
              'path'=>$path, 
              'name'=>basename($fileinfo)
            );
            $results[] = $dirArray;
          }
        }

        echo "<ul>";
        if ($params) {
          $up = dirname($currentdir);
          $upname = basename($up);
          echo "<li><a href='../'/>← $upname</a></li>";
        }

        // display md contents if any
        $mdindex = hasMDIndex($currentdir);
        if($mdindex){
          echo "</ul>";
          echo $Parsedown->text( file_get_contents( $mdindex ) );
        } else {

          // sort dir results
          rsort($results);
          echo "</ul><ul>";
          foreach ($results as $dir) {
              echo "<li><a href='". $dir['path'] . "'>".$dir['name']."</a></li> ";
          }
          echo "</ul>";
        }
      ?>
    </nav>
  </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?> 

  