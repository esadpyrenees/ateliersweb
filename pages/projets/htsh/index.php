<?php
    // config
    $title = "Projets — Hypertext Superhero";
    $section="culturenum";
    $subsection="folklore";
    $section="projets";
    $subsection="htsh";
    $mdfile = "./index.md";
    // $date = "today";
    $nav = "/web/snippets/projets/htsh.php";
    $version = "1.0.1";

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
    <style type="text/css">
        #content img{
            max-width: 100%;
        }
        #content span[title]:after {
            content: attr(title);
            display: block;
            font-size: .85em; 
            color: rgba(0,0,0,.7);
            margin-bottom: 1em;
        }
    </style>

    <main class="pane active typeset" id="content">
        <section >
            <div id="randomramdam" >HYPERTEXT            SUPERHERO</div>                
        </section>
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>


    <script type="text/javascript">
        
        document.querySelectorAll('img').forEach(elem => {
            const span = document.createElement('span');
            elem.parentElement.insertBefore(span, elem);
            span.appendChild(elem);
            const title = elem.getAttribute('title');
            if (title) {
                span.setAttribute('title', "— " + title);
            }
        })

    </script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>


