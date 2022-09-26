<?php
    // config
    $title = "Références – Écritures numériques";
    $description = "";
    $section="references";
    $mdfile = "./ecrituresnumeriques.md";

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