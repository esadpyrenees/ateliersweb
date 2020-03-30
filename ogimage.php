<?php

    // WARNING : *really* dirty code

    $params = explode('/', $_GET["params"]);
    
    $section = isset($params[0]) ? $params[0] : "";
    $subsection = isset($params[1]) ? $params[1] : "";

    $fonts_path = realpath(dirname(__FILE__) . '/assets/fonts');
    $fontbold = $fonts_path  . "/Ecole-Bold.otf";
    $fontregular = $fonts_path  . '/' . "Ecole-Regular.otf";

    $key  = 'ogpi_'. md5($section. '-' . $subsection) . '.png';
    $mediaroot = realpath(dirname(__FILE__) . "/medias/");
    $thumb = $mediaroot .'/ogp/'. $key;
    
    // redirige vers le fichier s’il existe
    if (file_exists($thumb)) {
        serveImage($thumb);
    }

    // sinon, c’est parti…

    // chemin vers convert
    $convert = $_SERVER["HTTP_HOST"] == "localhost" ? '/usr/local/bin/convert' : '/usr/bin/convert';    

    // cas des exemples
    if($section == "exemples"){
        // on cherche le dossier de l’exemple
        $dir = dirname(__FILE__) . '/pages/exemples/' . $subsection;
        $readme = $dir . DIRECTORY_SEPARATOR . 'info.txt';
        $dirthumb = $dir . DIRECTORY_SEPARATOR . 'thumb.png';

        // récupère le titre de l’exemple
        if (file_exists($readme)) {
            parse_str( file_get_contents($readme) );
            $title_line = isset($title) ? trim($title) : "";
        } 
        $text = addslashes(ucfirst($section) . "\n" . (isset($title_line)  ? "→ " . ucfirst("$title_line") : "" ));

        // récupère la vignette de l’exemple
        if (file_exists($dirthumb)) {
            $cthumb = $mediaroot .'/ogp/'. $key . '.cthumb.png';
            $tomato = $mediaroot .'/ogp/'. $key . '.tomato.png';
            $rotten = $mediaroot .'/ogp/'. $key . '.rotten.png';
            // resize, dither et colorisation de la vignette
            $resizethumb = $convert  . " -resize 800x418^ -gravity center -extent 800x418 -colors 8  +level-colors tomato,white -ordered-dither h4x4a -colorspace Gray " . $dirthumb . " " . $cthumb;
            exec ($resizethumb);
            // arrière-plan tomato
            $background = $convert . ' -size 800x418  -background tomato xc:  ' . $tomato;
            exec ($background);
            // composition de la vignette ditherisée sur tomato
            $paste_on_tomato = $convert  . " -gravity center -compose Multiply  -extent 800x418  " . $tomato . " " . $cthumb. "  -composite  " . $rotten;
            exec ($paste_on_tomato);
        } else {
            //  si pas d’image, un arrière-plan tomato
            $background = $convert . ' -size 800x418  -background tomato xc:  ' . $rotten;
            exec ($background);
        }

        // sur-titre blanc
        $white = $mediaroot .'/ogp/'. $key . '.white.png';
        $ogi = $convert . ' -size 750x380  -background black -gravity NorthWest -fill white -font ' . $fontregular . ' -pointsize 40  label:"ÉSAD·Pyrénées → ateliers web"  ' . $white;
        
        // titre blanc
        $whitetitle = $mediaroot .'/ogp/'. $key . '.whitetitle.png';
        $title = $convert . ' -size 760x400  -background black -fill white -font ' . $fontbold . ' -pointsize 82 caption:"' . $text . '"   ' . $whitetitle;
        
        // titre et sur-titre ensemble
        $paste = $convert . " -gravity Center -geometry +0+70 -compose Screen -extent 800x418 " . $white . " " . $whitetitle . "  -composite  " . $white;
        
        // titre + sur-titre sur arrièreplan tomato
        $dblpaste = $convert . " -compose Screen  " . $rotten . " " . $white . "  -composite  " . $thumb;
        
        // exécution
        exec ($ogi);
        exec ($title);
        exec ($paste);
        exec ($dblpaste);

        // nettoyage
        exec ("rm -f " . $whitetitle);
        exec ("rm -f " . $white);
        exec ("rm -f " . $tomato);
        exec ("rm -f " . $rotten);
        exec ("rm -f " . $cthumb);
            
            
    } else {
        
        $cache = $mediaroot .'/ogp/'. $key . '.cache.png';

        $text = addslashes(ucfirst($section) . "\n" . ($subsection != "" ? "→ " . ucfirst("$subsection") : "" ));
        // sur-titre blanc
        $ogi = $convert . ' -size 750x380  -background white -gravity NorthWest -fill black -font ' . $fontregular . ' -pointsize 40  label:"ÉSAD·Pyrénées → ateliers web"  ' . $thumb;
        // titre blanc
        $title = $convert . ' -size 760x400  -background white -fill black -font ' . $fontbold . ' -pointsize 82 caption:"' . $text . '"   ' . $cache;
        // titre et sur-titre ensemble
        $paste = $convert . " -gravity Center -geometry +0+70 -compose Multiply -extent 800x418 " . $thumb . " " . $cache . "  -composite  " . $thumb;
        
        // exécution
        exec ($ogi);
        exec ($title);
        exec ($paste);

        // nettoyage
        exec ("rm -f " . $cache);
    }

    
    if (file_exists($thumb)) {
        serveImage($thumb);
    } else {
        die('ERROR: Image generation failed : /web/media/ogp/'. $key);
    }

    // serve image

    function serveImage($thumb){
        // get image data for use in http-headers
        
        $imginfo = getimagesize($thumb);
        $content_length = filesize($thumb);
        $last_modified = gmdate('D, d M Y H:i:s', filemtime($thumb)) . ' GMT';

        // array of getimagesize() mime types
        $getimagesize_mime = array(1 => 'image/gif', 2 => 'image/jpeg', 3 => 'image/png', 4 => 'application/x-shockwave-flash', 5 => 'image/psd', 6 => 'image/bmp', 7 => 'image/tiff', 8 => 'image/tiff', 9 => 'image/jpeg', 13 => 'application/x-shockwave-flash', 14 => 'image/iff');

        // did the browser send an if-modified-since request?
        if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
            // parse header
            $if_modified_since = preg_replace('/;.*$/', '', $_SERVER['HTTP_IF_MODIFIED_SINCE']);

            if ($if_modified_since == $last_modified) {
                // the browser's cache is still up to date
                header("HTTP/1.0 304 Not Modified");
                header("Cache-Control: max-age=86400, must-revalidate");
                exit ;
            }
        }

        // send other headers
        header('Cache-Control: max-age=86400, must-revalidate');
        header('Content-Length: ' . $content_length);
        header('Last-Modified: ' . $last_modified);
        if (isset($getimagesize_mime[$imginfo[2]])) {
            header('Content-Type: ' . $getimagesize_mime[$imginfo[2]]);
        } else {
            // send generic header
            header('Content-Type: application/octet-stream');
        }

        // and finally, send the image
        readfile($thumb);
    }