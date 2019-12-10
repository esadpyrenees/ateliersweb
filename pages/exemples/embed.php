<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="/web/assets/fonts/fonts.css">
        <style media="screen">
            html, body {
                height:100%;
            }
            body{
                display: flex;
                margin:0;
                flex-direction: column;
            }
            #embednav {
                font-family: 'Ecole', sans-serif;
                background: black;
                display: flex;
                justify-content: space-between;
            }
            #embednav a {
                color: white;
                font-size: .85em;
                text-transform: uppercase;
                text-decoration: none;
                border:none;
                padding: .25em .5em;
                display: block;
            }
            #embednav a span { display:none}
            #embednav a:hover span { display:inline}
            iframe {
                border:0
            }
        </style>
    </head>
    <body>
        <nav id="embednav">
            <a href="../">↩ <span>retour</span>    </a>
            <a class='download' download href='../backup.php?dir=<?php echo $_GET['q'] ?>'> <span>télécharger</span> ☻</a>
        </nav>
        <iframe src="../<?php echo $_GET['q'] ?>/?u=2" width="100%" height="100%"></iframe>
    </body>
</html>
