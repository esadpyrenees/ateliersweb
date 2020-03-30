<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <?php
    $title_line = trim($title);
    $host = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://".$_SERVER[HTTP_HOST];
    $localurl = $host . $_SERVER[REQUEST_URI];
    echo "<title>ÉSAD Pyrénées – Ateliers web – $title_line</title>\n\n";
    echo "        <meta property='og:title' content='ÉSAD Pyrénées – Ateliers web – $title_line'>\n";
    echo "        <meta property='og:description' content='Ressources, références et exemples des ateliers web de l’École supérieure d’art et de design des Pyrénées, réunies et proposées par Julien Bidoret.'>\n";
    echo "        <meta property='og:url' content='$localurl'>\n";
    echo "        <meta property='og:type' content='website'>\n";
    echo "        <meta property='og:site_name' content='ÉSAD Pyrénées – Ateliers web'>\n";
    echo "        <meta property='og:locale' content='fr'>\n";
    echo "        <meta property='og:image' content='$host/web/medias/$section" . (isset($subsection) ? '/' . $subsection : "") . "/ogp.png'>\n";

  ?>
  <meta name="twitter:card" content="summary_large_image"></meta>
  <meta name="twitter:site" content="@esadpyrenees"></meta>
  <meta name="twitter:creator" content="@julienbidoret"></meta>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="/web/assets/css/main.css">
  <link rel="stylesheet" href="/web/assets/fonts/fonts.css">
  <link rel="stylesheet" href="/web/assets/highlight/styles/monokai.css">

  <script src="/web/assets/highlight/highlight.pack.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
 
</head>

<body>

  <header id="header">
    <h1>Ateliers web</h1>
    <h2>ÉSAD·Pyrénées</h2>
  </header>
