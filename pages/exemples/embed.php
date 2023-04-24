<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Spyc.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
$localhost = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$localurl = $localhost . $_SERVER["REQUEST_URI"];
?>
    <head>

        <!-- 

        Pour accéder au code source de l’exemple, visitez : 
        <?= $localurl ?>?embed=0

         ▄▀▄▀▀▀▀▄▀▄
         █░░░░░░░░▀▄      ▄
        █░░▀░░▀░░░░░▀▄▄  █░█
        █░▄░█▀░▄░░░░░░░▀▀░░█
        █░░▀▀▀▀░░░░░░░░░░░░█
        █░░░░░░░░░░░░░░░░░░█
        █░░░░░░░░░░░░░░░░░░█
         █░░▄▄░░▄▄▄▄░░▄▄░░█ 
         █░▄▀█░▄▀  █░▄▀█░▄▀ 
          ▀   ▀     ▀   ▀          
        
        -->

        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php

            $dir =  $_GET['example'];
            $readme = $dir . DIRECTORY_SEPARATOR . 'info.yml';
            $thumb = $dir . DIRECTORY_SEPARATOR . 'thumb.png';

            if (file_exists($readme)) {
                $data = Spyc::YAMLLoad($readme);                
                $tags = str_replace(",", ", ", $data["tags"]);
                $taglinks = explode(",", $data["tags"]);
                $title = $data["title"];            
                $date = intval($data["date"]);

                if( isset($title) ){
                    $title_line = trim($title);
                    echo "<title>$title_line — $tags</title>\n\n";
                    echo "        <meta property='og:title' content='$title_line — $tags'>\n";
                    echo "        <meta property='og:description' content='$title_line : exemples HTML, CSS, JavaScript, PHP, web to print et plus des ateliers web de l’ÉSAD Pyrénées.'>\n";
                    echo "        <meta property='og:url' content='$localurl'>\n";
                    echo "        <meta property='og:type' content='website'>\n";
                    echo "        <meta property='og:site_name' content='ÉSAD Pyrénées – Ateliers web'>\n";
                    echo "        <meta property='og:locale' content='fr'>\n";
                    echo "        <meta name='twitter:card' content='summary_large_image'>\n";
                    echo "        <meta name='twitter:site' content='@esadpyrenees'>\n";
                    echo "        <meta name='twitter:creator' content='@julienbidoret'>\n";
                }
                if( isset($tags) ){
                    echo "        <meta name='keywords' content='$tags'>\n";
                }
            }
            if (file_exists($thumb)) {
                $thumb = "$localhost/web/medias/exemples/$dir/ogp.png?text=$title";
                echo "        <meta property='og:image' content='$thumb'>\n";
                echo "        <meta name='twitter:image' content='$thumb'>\n";
            }

        ?>
        <script>document.getElementsByTagName('html')[0].className = 'js'</script>
        <style media="all">
            html,body{height:100%}body{display:flex;margin:0;flex-direction:column}#embednav{height:2em;font-family:'Ecole',sans-serif;background:#000;display:flex;justify-content:space-between; align-items:center;}#embednav a{color:#fff;font-size:.85em;text-transform:uppercase;text-decoration:none;border:none;padding:0 .5em }#embednav a span{color:#666}#embednav a:hover span{color:#FFF}iframe{border:0;height:calc(100vh - 2em)} @media (max-width:800px) { #embednav a[href^="../#"] { display:none}} @media (max-width:600px) { #embednav a span{ display:none} }
            @media print {#embednav {display: none; }}
        </style>
    </head>
    <body>

        <nav id="embednav">
            <span>
                <a href="../">↩ <span>retour</span></a>
                <?php foreach($taglinks as $tag):?>
                    <a href="../#<?= $tag ?>">#<span><?= $tag ?></span></a>
                <?php endforeach ?>
            </span>
            <a href="./?embed=2">↯ <span>masquer la navigation</span> </a>
            <a class='download' download href='../backup.php?dir=<?php echo $dir ?>'> <span>télécharger</span> ☻</a>
        </nav>

        <!-- Le code source de l’exemple est situé dans cette iframe : -->
        <iframe src="../<?php echo $dir ?>/?embed=1" width="100%" ></iframe>

    </body>
</html>
