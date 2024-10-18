<?php 

  $params = '';
  if (isset($_GET['params'])) {
    $params = '/' . $_GET['params'];
  }

  // $archivesdir = '../../archives';
  $archivesdir = $_SERVER["DOCUMENT_ROOT"] . "/web/archives";

  // Does the dir has an index.html|php|htm file 
  function hasIndex($dir){    
    $archivesdir = $_SERVER["DOCUMENT_ROOT"] . "/web/archives" . "/" . $dir;
    $s = scandir( $dir);
    $fs = array_diff( $s, array(".", "..") );
    foreach($fs as $f){
      if(in_array($f, ["index.html", "index.php", "index.htm"])){        
        return $f;
      } 
    }
    return false;
  }

  // Does the dir has an index.md file 
  function hasMDIndex($dir){
    foreach(glob($dir.'/index.md',GLOB_BRACE) as $file){
      return $file;
    }
    return false;
  }

  // Is the directory empty
  function isEmpty($dir){
    return !(new \FilesystemIterator($dir))->valid();
  }

  $currentdir = $archivesdir . $params;
  
  $index = hasIndex($currentdir);
  if($index){
    header("Location: $index");
  } 
  

  $title = "Archives";
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
      <!-- L’archivisme est un exercice délicat ☺<br><br> -->
      <p>☺</p>
      <?php
        $results = array();
        $cool_extensions = Array('jpg','png','pdf','gif','webp','html','zip', 'css', 'js');

        // browse currentdir, looking for subdirs or index
        foreach (new DirectoryIterator($currentdir) as $fileinfo) {

          if ($fileinfo->isDir() && !$fileinfo->isDot()) {
            $path = $fileinfo->getFilename() . '/';
            if ($index != false ) {
              $path = $fileinfo . '/' .$index;
            }
            $is_empty = !(new FilesystemIterator($fileinfo->getPathname(), FilesystemIterator::SKIP_DOTS))->valid();
            $dirArray = array(
              'path'=>$path, 
              'name'=>basename($fileinfo). '/',
              'is_empty' => $is_empty
            );
            $results[] = $dirArray;
          } elseif(in_array($fileinfo->getExtension(), $cool_extensions) && !$fileinfo->isDot())  {
            $path = $fileinfo->getFilename();
            $dirArray = array(
              'path'=>$path, 
              'name'=>basename($fileinfo),
              'is_empty' => false
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
              echo "<li class=''>" . ($dir['is_empty'] ? "• " : "" ) . "<a href='". $dir['path'] . "'>".$dir['name']."</a></li> ";
          }
          echo "</ul>";
        }
      ?>
    </nav>
  </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?> 

  