  <?php
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "ÉSAD·Pyrénées — Ateliers web — Références";
    $section="references";
    $subsection="ecrituresnumeriques";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?>

  <style type="text/css">
      #wrapper img{
        max-width: 100%;
      }
      #wrapper span[title]:after {
        content: attr(title);
        display: block;
        font-size: .85em;
        color: rgba(0,0,0,.7);
        margin-bottom: 1em;
      }
  </style>


  <main class="pane active" id="content">
      <?= $Parsedown->text( file_get_contents('./webdocumentaire.md') ); ?>
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

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
