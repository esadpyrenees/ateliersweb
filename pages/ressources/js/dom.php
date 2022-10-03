<?php
    // config
    $title = "Ressources → Javascript DOM";
    $section="ressources";
    $subsection="js";
    $nav = "/web/snippets/ressources/js.php";
    $mdfile = "./dom.md";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>
    <style>
        .bigbutton {margin-top:0.5em}
        main h4 {font-weight: normal; cursor:pointer; margin: 0;}
        main h4:hover {color: tomato}
        h4 + pre { display:none}
        h4.visible + pre { display:block}
    </style>
    <main class="pane active" id="content">
        <section>
            <div id="randomramdam" >RANDOM/RAMDAM</div>                
        </section>
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script>
        const h4s = document.querySelectorAll("h4");
        h4s.forEach( h4 => {
            h4.onclick= () => {
                let visible = document.querySelector("h4.visible");
                if(visible) visible.classList.remove('visible');
                const code = h4.nextElementSibling;
                h4.classList.toggle("visible");
            }
        });
    </script>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  