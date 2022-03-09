<?php

    // WARNING : *really* dirty code
    // obéissant aux principes :
    // « un tiens vaut mieux que deux tu l’auras »
    // et
    // « ce qui est fait n’est plus à faire »

    $params = explode('/', $_GET["params"]);
    
    $text_str = $_GET["text"];
    if(isset($text_str)){
        $text_str = str_replace("– ", "\n", $text_str);
        $text_str = str_replace("→ ", "\n→ ", $text_str);
    }
    
    
    $section = isset($params[0]) ? $params[0] : "";
    $subsection = isset($params[1]) ? $params[1] : "";
    $subsubsection = isset($params[2]) ? $params[2] : "";
    

    // attention, chemins en dur !

    $fonts_path = realpath(dirname(__FILE__) . '/assets/fonts');
    $fontbold = $fonts_path  . "/Ecole-Bold.otf";
    $fontregular = $fonts_path  . '/' . "Ecole-Regular.otf";

    $mediaroot = realpath(dirname(__FILE__) . "/medias/");

    // $request_uri = $_SERVER['REQUEST_URI'];
    // split query string to get clean filename :
    $request_uri = explode("?", $_SERVER['REQUEST_URI'])[0];
    $final_file_path = $mediaroot . str_replace("web/medias/", "", $request_uri);
    $final_file_dir = dirname($final_file_path);
    if (!is_dir($final_file_dir)) {
        mkdir($final_file_dir, 0777, true);
    }
    
    $key  = 'ogpi_'. md5($section. '-' . $subsection . ($subsubsection != "" ? '-' . $subsubsection : "")) . '.png';
    
    $thumb = $final_file_path;
        
    // redirige vers le fichier s’il existe
    if (file_exists($thumb)) {
        serveImage($thumb);
        exit();
    }

    // sinon, c’est parti…

    $colors = array("#00B25B", "#928505", "#B0B685", "#FDD652", "#FF6347", "#FF6347", "#BEE1F0");
    $color = $colors[array_rand($colors, 1)];
    
    // chemin vers convert
    $convert = $_SERVER["HTTP_HOST"] == "localhost" ? '/usr/local/bin/convert' : '/usr/bin/convert';    
    

    // cas des exemples
    if($section == "exemples"){
        // on cherche le dossier de l’exemple
        $dir = dirname(__FILE__) . '/pages/exemples/' . $subsection;
        $readme = $dir . DIRECTORY_SEPARATOR . 'info.txt';
        $dirthumb = $dir . DIRECTORY_SEPARATOR . 'thumb.png';

        if (file_exists($readme)) {
            parse_str( file_get_contents($readme), $data );
            $title_line = isset($data['title']) ? trim($data['title']) : "";
        } 

        $text = addslashes(ucfirst($section) . "\n" . (isset($title_line)  ? "→ " . ucfirst($title_line) : "" ));

        // récupère la vignette de l’exemple
        $cthumb = $mediaroot .'/ogp/'. $key . '.cthumb.png';
        $tomato = $mediaroot .'/ogp/'. $key . '.tomato.png';
        $rotten = $mediaroot .'/ogp/'. $key . '.rotten.png';
        if (file_exists($dirthumb)) {
            
            // resize, dither et colorisation de la vignette
            $resizethumb = $convert  . ' -resize 800x418^ -gravity center -extent 800x418 -colors 8  +level-colors "#333333",white -ordered-dither h4x4a -colorspace Gray ' . $dirthumb . ' ' . $cthumb;
            exec ($resizethumb);
            // arrière-plan tomato
            $background = $convert . ' -size 800x418 -background "' . $color . '" xc:"' . $color . '" -compose Dst  -flatten ' . $tomato;
            exec ($background);
            // composition de la vignette ditherisée sur tomato
            $paste_on_tomato = $convert  . " -gravity center -compose Multiply  -extent 800x418  " . $tomato . " " . $cthumb. "  -composite  " . $rotten;
            exec ($paste_on_tomato);
        } else {
            //  si pas d’image, un arrière-plan tomato
            $background = $convert . ' -size 800x418  -background "' . $color . '" xc:"' . $color . '"  ' . $rotten;
            exec ($background);
        }

        // sur-titre blanc
        $white = $mediaroot .'/ogp/'. $key . '.white.png';
        $esad_title = $mediaroot .'/ogp/'. $key . '.esad_title.png';
        // $ogi = $convert . ' -size 750x380  -background black -gravity NorthWest -fill white -font ' . $fontregular . ' -pointsize 30  label:"ÉSAD Pyrénées → ateliers web"  ' . $white;
        $esad = $convert . ' -size 760x40 -background black -fill white -font ' . $fontregular . ' -pointsize 30 caption:"ÉSAD Pyrénées → ateliers web" ' . $esad_title;
        
        // titre blanc
        $whitetitle = $mediaroot .'/ogp/'. $key . '.whitetitle.png';
        $title = $convert . ' -size 800x418 -background black -fill white -font ' . $fontbold . ' -pointsize 60 caption:"' . $text . '" ' . $whitetitle;
        
        // // titre et sur-titre ensemble
        // $paste = $convert . " -compose Screen -gravity Center -geometry +0+70 -compose Screen  " . $rotten . " " . $t . "  -composite  " . $rotten;
        
        // // titre + sur-titre sur arrièreplan tomato
        // $paste = $convert . " -gravity NorthWest -geometry +20+10 -compose Screen -colorspace RGB " . $rotten . " " . $esad . " -composite  " . $thumb;
        $tada = $mediaroot .'/ogp/'. $key . '.tada.png';
        $dblpaste = $convert . " -size 800x418 -gravity NorthWest -geometry +20+80 -compose Screen " . $rotten . " " . $whitetitle . " -composite  " . $tada;
        $paste = $convert . " -gravity NorthWest -geometry +20+20  -compose Screen " . $tada . " " . $esad_title . " -composite  " . $thumb;
        // $dblpaste = $convert . " -compose Screen -gravity Center -extent 800x418 " . $rotten . " " . $whitetitle . "  -composite  " . $thumb;
        
        
        // exécution
        // exec ($ogi);
        exec ($title);
        exec ($esad);
        exec ($dblpaste);
        exec ($paste);

        // nettoyage
        // exec ("rm -f " . $whitetitle);
        // exec ("rm -f " . $white);
        exec ("rm -f " . $tomato);
        exec ("rm -f " . $rotten);
        exec ("rm -f " . $cthumb);
            
            
    } else {
        
        $cache = $mediaroot .'/ogp/'. $key . '.cache.png';
        $t = $mediaroot .'/ogp/'. $key . '.t.png';
        
        if(isset($text_str)){
            $text = rawurldecode($text_str);
        } else {
            $text = addslashes(ucfirst($section) . "\n" . ($subsection != "" ? "→ " . ucfirst("$subsection") : "" ) . ($subsubsection != "" ? "→ " . ucfirst("$subsubsection") : "" ));
        }
        
        // sur-titre blanc
        $ogi = $convert . ' -size 800x418 xc:' . $color . ' ' . $thumb;
        //
        $tt = $convert . ' -size 800x40 -background white -fill black -gravity SouthWest  -font ' . $fontregular . ' -pointsize 30 label:"ÉSAD Pyrénées → ateliers web"  ' . $t;
        // titre blanc
        $title = $convert . ' -size 800x418 -background black -fill white -font ' . $fontbold . ' -pointsize 60 caption:"' . $text . '"   ' . $cache;
        // titre et sur-titre ensemble
        $paste = $convert . " -gravity Center -geometry +20+80 -compose Screen -colorspace RGB  " . $thumb . " " . $cache . " -composite  " . $thumb;
        $paste2 = $convert . " -gravity NorthWest -geometry +20+10 -compose Multiply -colorspace RGB  " . $thumb . " " . $t . " -composite  " . $thumb;
        
        // exécution
        exec ($ogi);
        exec ($tt);
        exec ($title);
        exec ($paste);
        exec ($paste2);

        // nettoyage
        exec ("rm -f " . $cache);
        exec ("rm -f " . $t);
    }

    
    if (file_exists($thumb)) {
        serveImage($thumb);
    } else {
        die('ERROR: Image generation failed : /web/medias/ogp/'. $key);
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