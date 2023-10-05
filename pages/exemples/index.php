<?php

require_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Spyc.php';
$title = "Exemples";
$section="exemples";
$description = "Exemples HTML, CSS, JavaScript, PHP, web to print et plus des ateliers web de l’ÉSAD Pyrénées.";

include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");

?>

<main class="pane active exemples" id="content">
<div class="grid">
    <div class="examples-info" id="examples-info">
        <p>
        Les exemples ci-dessous peuvent être filtrés par catégorie (menu ci-contre), étudiés (le code est commenté) et téléchargés (lien “zip” ou “télécharger ☻”). <br>
        Il est souhaitable que leur usage fasse l’objet d’une appropriation personnelle.</p>
        <button title="En cliquant sur ce bouton, cet avertissement sera masqué.">×</button>
    </div>
<?php
// examples directory
$directory = './';

function scan_dir($dir) {
    $ignored = array('.', '..', '.svn', '.htaccess', '_archive');

    $files = array();
    foreach (scandir($dir) as $file) {
        if (in_array($file, $ignored)) continue;
        $files[$file] = filemtime($dir . '/' . $file);
    }

    arsort($files);
    $files = array_keys($files);

    return ($files) ? $files : false;
}

// call
$exemples_dirs = scan_dir($directory);

// sort files
usort($exemples_dirs, function($a, $b) {
    return filemtime($a) < filemtime($b);
});

clearstatcache();


// bulid page
foreach ($exemples_dirs as $exemple){

    $dir = $directory . "/" . $exemple;
    if (is_dir($dir)){
        $readme = $dir . "/info.yml";
        $webp = $dir . "/thumb.webp";
        $thumb = $dir . "/thumb.png";

        if (file_exists($readme)) {

            // read yaml
            $data = Spyc::YAMLLoad($readme);
            $tags = $data["tags"];
            $title = $data["title"];            
            $date = intval($data["date"]);
            
            $my_tags = "";
            if( isset($tags) ){
                foreach (explode(',', $tags) as $tag) {
                    $tg = str_replace(array("\r", "\n"), '', $tag);
                    $my_tags .= "$tg ";
                }
            }
            $order = -1 * $date;
            echo  "<div class='exemple $my_tags' style='--order: $order'>";
        }
        echo "<a class='download' download href='backup.php?dir=$exemple'>zip!</a>";
        echo "<a href='$exemple/'>";
        echo "<span><strong>";
        if( isset($tags) ){
            foreach (explode(',', $tags) as $tag) {
              $tg = str_replace(array("\r", "\n"), '', $tag);
                echo "#$tg ";
            }
        }
        echo "</strong>";

        if (file_exists($webp)) {
            echo "<img src='$exemple/thumb.webp' loading='lazy'>";
        } else if (file_exists($thumb)) {
            echo "<img src='$exemple/thumb.png' loading='lazy'>";
        }
        
        echo "</span>";
        echo "<h2>$title</h2>";
        echo "</a></div>\n\n";
    }
}
?>
</div>
</main>

<script type="text/javascript" src="/web/assets/js/mixitup.min.js"></script>
<script type="text/javascript" src="/web/assets/js/examples.js"></script>
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
