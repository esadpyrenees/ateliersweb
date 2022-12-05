<?php
  $cachefile = 'cached-index.html';
  $cachetime = 2; // 72000; // 2 heures

  // Sert depuis le cache s’il est plus récent que $cachetime
  if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
      echo "<!-- Cached copy, generated at ".date('H:i', filemtime($cachefile))." -->\n";
      readfile($cachefile);
      exit;
  }
  ob_start(); // Start the output buffer
?>