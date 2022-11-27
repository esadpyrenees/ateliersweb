<?php

/*
 * PHP: Recursively Backup Files & Folders to ZIP-File
 * MIT-License - 2012-2018 Marvin Menzerath
*/


// Make sure the script can handle large folders/files
ini_set('max_execution_time', 600);
ini_set('memory_limit', '1024M');


if($_GET['dir']){
    $dir = str_replace("/","",$_GET['dir']); // no trailing slash
    $zip = "../../zip/$dir.zip";
    // there is alreay a backup
    if (is_file($zip)) {
        returnFile($dir, $zip);
    }
} else {
    die();
}


// Start the backup!
zipData($dir, $zip);

// once done, return file
if (is_file($zip)) {
    returnFile($dir, $zip);
} else {
    die();
}

// helper endsWith
function endsWith($haystack, $needle){
    return substr($haystack, -strlen($needle))===$needle;
}

// helper is_not_forbidden
function is_not_forbidden($filename){
    $forbidden = array('info.txt', 'thumb.png', 'info.yml');
    if (in_array($filename, $forbidden)) {
        return false;
    } elseif (endsWith($filename, '.zip')) {
        return false;
    } else {
        return true;
    }
}

// Here the magic happens :)
function zipData($source, $destination) {
    if (extension_loaded('zip')) {
        if (file_exists($source)) {
            $zip = new ZipArchive();
            if ($zip->open($destination, ZIPARCHIVE::CREATE)) {
                $source = realpath($source);
                if (is_dir($source)) {
                    $files = new RecursiveIteratorIterator(
                        new RecursiveDirectoryIterator(
                            $source,
                            RecursiveDirectoryIterator::SKIP_DOTS),
                        RecursiveIteratorIterator::SELF_FIRST);

                    foreach ($files as $file) {
                        $file = realpath($file);
                        if (is_dir($file)) {
                            $zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
                        } else if (is_file($file) && is_not_forbidden(basename($file))) {
                            $zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
                        }
                    }
                } else if (is_file($source)) {
                    $zip->addFromString(basename($source), file_get_contents($source));
                }
            }
            return $zip->close();
        }
    }
    return false;
}

// return file
function returnFile($dir, $zip){
    header($_SERVER["SERVER_PROTOCOL"] . " 200 OK");
    header("Cache-Control: public"); // needed for internet explorer
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: Binary");
    header("Content-Length:".filesize($zip));
    header("Content-Disposition: attachment; filename=$dir.zip");
    readfile($zip);
    die();
}

?>
