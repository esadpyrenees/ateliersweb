<?php
    // config
    $title = "Ressources → FTP";
    $section="ressources";
    $subsection="ftp";
    $subsubsection="ftp";
    $nav = "/web/snippets/ressources/ftp.php";
    $mdfile = "./ftp.md";
    $custom_css = "ftp.css";

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

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script>

        var buttons = document.querySelectorAll('.ftp-details');
        buttons.forEach( button => {
            button.onclick = (e) => {
                e.preventDefault()
                var activebtn = document.querySelector('.activebtn');
                if(activebtn) activebtn.classList.remove('activebtn');
                var open = document.querySelector('.open');
                if(open) open.classList.remove('open');
                button.classList.add('activebtn');

                const target = document.querySelector( button.getAttribute('href') );
                target.classList.add('open');
            }
        });
        var configs = document.querySelectorAll('.button-config');
        configs.forEach( button => {
            button.onclick = (e) => {
                var active = document.querySelector('.activeconfig');
                if(active) active.classList.remove('activeconfig');
                button.classList.add('activeconfig');
                const targets = document.querySelectorAll( ".config" );
                targets.forEach( target => {
                    if(target.matches('.' + button.id)) {
                        target.classList.add('open');
                    } else {
                        target.classList.remove('open');
                    }
                });
            }
        });

    </script>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>

