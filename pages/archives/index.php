  <?php 
    $title = "ÉSAD·Pyrénées — Ateliers web — Archives";
    $section="archives";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?> 

  <main class="pane active" id="content">
    <nav>
      
        L’importation des archives est en cours ☺
        <br><br>

  <?php

$params = '';
if (isset($_GET['params'])) {
  $params = '/' . $_GET['params'];
}

// $result = array();

$archivesdir = '../../archives';
$currentdir = $archivesdir . $params;
$results = array();

function hasIndex($dir){
  foreach(glob($dir.'/index.{html,htm,php}',GLOB_BRACE) as $file){
    return basename($dir) . '/' . basename($file);
  }
  return false;
}

$dir = new DirectoryIterator($currentdir);
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
      $index = hasIndex($fileinfo->getPathname());      
      $path = $fileinfo->getFilename() . '/';

      if ($index != false ) $path = $index;
      
        $dirArray = array(
          'path'=>$path, 
          'name'=>basename($dir)
        );
    
        $results[] = $dirArray;
    }
}


echo "<ul>";
if ($params) {
  $up = dirname($currentdir);
  $upname = basename($up);
  echo "<li><a href='../'/>← $upname</a></li><li><br></li>";
}

foreach ($results as $dir) {
    echo "<li><a href='". $dir['path'] . "'>".$dir['name']."</a></li>";
}
echo "</ul>";
?>
</nav></main><?php
   include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  