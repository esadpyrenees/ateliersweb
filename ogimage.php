<?php


    $params = explode('/', $_GET["params"]);
    
    if(isset($params[0]) ){
        $section = $params[0];
    } else {
        $section = "";
    }
    if(isset($params[1]) ){
        $subsection = $params[1];
    } else {
        $subsection = "";
    }


    $fonts_path = realpath (dirname(__FILE__) . '/assets/fonts');

    $fontbold = $fonts_path  . "/Ecole-Bold.otf";
    $fontregular = $fonts_path  . '/' . "Ecole-Regular.otf";


    $mediaroot = realpath (dirname(__FILE__) . "/medias/");

    $key  = 'ogpi_'. md5($section. '-' . $subsection) . '.png';
    $thumb = $mediaroot .'/ogp/'. $key;
    $cache = $mediaroot .'/ogp/'. $key . '.cache.png';


    if (file_exists($thumb)) {
        return '/web/media/ogp/'. $key;
    }

    $convert = '/usr/bin/convert';
    $convert = '/usr/local/bin/convert';

    $text = addslashes($section . "-" . $subsection);

    $ogi = $convert . ' -size 750x380  -background white -gravity NorthWest -fill black -font ' . $fontregular . ' -pointsize 40  label:"ÉSAD·Pyrénées"  ' . $thumb;

    $title = $convert . ' -size 760x400  -background white -fill black -font ' . $fontbold . ' -pointsize 85 -interline-spacing -15 caption:"' . $text . '"   ' . $cache;

    $paste = $convert . " -gravity Center -geometry +0+70 -compose Multiply -extent 800x418 " . $thumb . " " . $cache . "  -composite  " . $thumb;
    exec ($ogi);
    exec ($title);
    exec ($paste);
    exec ("rm -f " . $cache);

    die('/web/media/ogp/'. $key);
