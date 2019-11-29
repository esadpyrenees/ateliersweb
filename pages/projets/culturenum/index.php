<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "ÉSAD·Pyrénées — Ateliers web — Projets";
  $section="projets";
  $subsection="pechakucha";
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
?>
    <style type="text/css">

@font-face{
    font-family: "HappyTimes";
    font-weight: bold;
    font-style: normal;
    src:url("fonts/happy-times-NG_bold_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_bold_master_web.woff2") format('woff2');
}
@font-face{
    font-family: "HappyTimes";
    font-weight: normal;
    font-style: italic;
    src:url("fonts/happy-times-NG_italic_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_italic_master_web.woff2") format('woff2');
}
@font-face{
    font-family: "HappyTimes";
    font-weight: normal;
    font-style: normal;
    src:url("fonts/happy-times-NG_regular_master_web.woff") format('woff'),
        url("fonts/happy-times-NG_regular_master_web.woff2") format('woff2');
}

        .culturenum {
            font-family: "HappyTimes";
        }

        .culturenum h1 {
            font-size: 3em;
        }


    </style>
<main class="pane active" id="content">
    <div class="culturenum">


        <h1><span>cultures</span> <span>numériques</span></h1>

        <article>

                <?= $Parsedown->text( file_get_contents( "https://semestriel.framapad.org/p/esad_cultures_numeriques/export/txt" ) ); ?>


        </article>



    </div>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
