  <?php 
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

// Does the dir has an index.html|php|htm file 
function hasIndex($dir){
  foreach(glob($dir.'/index.{html,htm,php}',GLOB_BRACE) as $file){
    return basename($dir) . '/' . basename($file);
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

// browse currentdir, looking for subdirs or index
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

// display md contents if any
$mdindex = hasMDIndex($currentdir);
if($mdindex){
  echo $Parsedown->text( file_get_contents( $mdindex ) );
}

// sort dir results
rsort($results);
foreach ($results as $dir) {
    echo "<li><a href='". $dir['path'] . "'>".$dir['name']."</a></li>";
}
echo "</ul>";
?>
</nav></main>
<?php
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?> 

  