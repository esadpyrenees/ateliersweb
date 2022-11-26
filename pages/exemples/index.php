  <?php

    require_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Spyc.php';
    $title = "Exemples";
    $section="exemples";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <main class="pane active exemples" id="content">
    <div class="grid">
    <?php
    // examples directory
    $directory = './';

    function scan_dir($dir) {
        $ignored = array('.', '..', '.svn', '.htaccess');

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

        $dir = $directory . DIRECTORY_SEPARATOR . $exemple;
        if (is_dir($dir)){
            $readme = $dir . DIRECTORY_SEPARATOR . 'info.txt';
            $thumb = $dir . DIRECTORY_SEPARATOR . 'thumb.png';
            if (file_exists($readme)) {


                parse_str( file_get_contents($readme), $result );
                $tags = $result["tags"];
                $title = $result["title"];

                
                $yml = "$dir/info.yml";  
                // unlink($yml);

                    
                    $ymldata = [];
                    $ymldata["tags"] = $tags;
                    $ymldata["title"] = $title;
                    // $ymldata["date"] = strftime("%Y%M%d", filemtime($dir));
                    file_put_contents($yml, spyc_dump($ymldata), LOCK_EX);

                    if(!file_exists($yml)){
                    }
                

                $my_tags = "";
                if( isset($tags) ){
                    foreach (explode(',', $tags) as $tag) {
                        $tg = str_replace(array("\r", "\n"), '', $tag);
                        $my_tags .= "$tg ";
                    }
                }
                echo  "<div class='exemple $my_tags'>";
            }
            // echo "<a class='download' download href='backup.php?dir=$exemple'>zip!</a>";
            // echo "<a href='$exemple/'>";
            echo "<span><strong>";
            if( isset($tags) ){
                foreach (explode(',', $tags) as $tag) {
                  $tg = str_replace(array("\r", "\n"), '', $tag);
                    echo "#$tg ";
                }
            }
            echo "</strong>";
            if (file_exists($thumb)) {
                echo "<img src='$exemple/thumb.png' loading='lazy'>";
            }
            echo "</span>";
            echo "<h2>$title " .  strftime("%Y%M%d", filemtime($dir)) . "</h2>";
            echo "</div>\n\n";
        }
    }
    ?>
    </div>
  </main>

  <script type="text/javascript" src="/web/assets/js/mixitup.min.js"></script>
    <script type="text/javascript">
    var targetSelector = '.exemple';
    function getSelectorFromHash() {
        var hash = window.location.hash.replace(/^#/g, '');
        var selector = hash ? '.' + hash : targetSelector;
        return selector;
    }

    function setHash(state) {
        var selector = state.activeFilter.selector;
        var newHash = '#' + selector.replace(/^\./g, '');

        if (selector === targetSelector && window.location.hash) {
            console.log('ici');
            history.pushState(null, document.title, window.location.pathname); // or history.replaceState()
        } else if (newHash !== window.location.hash && selector !== targetSelector) {
            console.log('là')
            history.pushState(null, document.title, window.location.pathname + newHash); // or history.replaceState()
        }
    }

    var mixer = mixitup('.grid', {
        animation: {
            enable: false
        },
        selectors: {
            target: targetSelector
        },
        load: {
            filter: getSelectorFromHash() // Ensure that the mixer's initial filter matches the URL on startup
        },
        callbacks: {
            onMixEnd: setHash // Call the setHash() method at the end of each operation
        }
    });

    window.onhashchange = function() {
        var selector = getSelectorFromHash();

        if (selector === mixer.getState().activeFilter.selector) return; // no change

        mixer.filter(selector);
    };


  </script>
  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
