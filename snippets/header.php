<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php
    $title_line = isset($title) ? trim($title) . " – " : "";
    $desc = isset($description) ? $description : "Ressources, références et exemples des ateliers web de l’École supérieure d’art et de design des Pyrénées, réunies et proposées par Julien Bidoret.";
    $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER['HTTP_HOST'];
    $localurl = $host . $_SERVER['REQUEST_URI'];
    echo "<title>$title_line Ateliers web – ÉSAD Pyrénées</title>\n\n";
    echo "        <meta property='og:title' content='$title_line Ateliers web – ÉSAD Pyrénées'>\n";
    echo "        <meta property='og:description' content='$desc'>\n";
    echo "        <meta property='og:url' content='$localurl'>\n";
    echo "        <meta property='og:type' content='website'>\n";
    echo "        <meta property='og:site_name' content='ÉSAD Pyrénées – Ateliers web'>\n";
    echo "        <meta property='og:locale' content='fr'>\n";
    if(isset($ogp_url)){
    echo "        <meta property='og:image' content='$localurl$ogp_url'>\n";
    } else {
      $text = rawurlencode($title);
      echo "        <meta property='og:image' content='$host/web/medias/$section" . (isset($subsection) ? '/' . $subsection : "") . (isset($subsubsection) ? '/' . $subsubsection : "") . "/ogp.png?text=$text" . (isset($version) ? '&version=' . $version : "") . "' >\n";    
    }
    if(isset($canonical_url)){
      echo '<link rel="canonical" href="'. htmlspecialchars($canonical_url) .'" >';
    }   
  ?>

  <meta name="author" content="Julien Bidoret">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <!-- sorry for that — that’s just a test -->
  <script defer data-domain="ateliers.esad-pyrenees.fr/web" src="https://plausible.io/js/script.js"></script>


  <link rel="apple-touch-icon" sizes="180x180" href="/web/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/web/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/web/favicon/favicon-16x16.png">
  <link rel="manifest" href="/web/favicon/site.webmanifest">
  <link rel="mask-icon" href="/web/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#ffffff">


  <link rel="stylesheet" href="/web/assets/css/icons.css">
  <link rel="stylesheet" href="/web/assets/css/main.css?yep">
  <link rel="stylesheet" href="/web/assets/fonts/fonts.css">
  <link rel="stylesheet" href="/web/assets/highlight/styles/agate.min.css">

  <?php if(isset($custom_css)) {
    $csss = explode(',', $custom_css) ;
    foreach( $csss as $css ) {
      echo "<link rel='stylesheet' href='$css'>";
    }
  }?>

  <script src="/web/assets/highlight/highlight.min.js"></script>
  <script>hljs.highlightAll();</script>
 
</head>

<body>

  <header id="header">
    <h1><a href="/web/">Ateliers web</a></h1>
    <h2>ÉSAD Pyrénées</h2>
  </header>
