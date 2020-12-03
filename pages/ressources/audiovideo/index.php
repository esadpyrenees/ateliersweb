<?php
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "ÉSAD Pyrénées — Ateliers web — Audio &amp; vidéo";
    $section="ressources";
    $subsection="audiovideo";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/audiovideo.php");
  ?>

  <main class="pane active" id="content">
    <section >
            <div id="randomramdam" >WEBSOUNDS</div>
        </section>

    <div id="wrapper">

        <section class="section" id="ressources-audiovideo">
            <?= $Parsedown->text( file_get_contents('./1-websounds.md') ); ?>
        </section>

        <section class="section" id="exemples-audiovideo">
            <?= $Parsedown->text( file_get_contents('./0-exemples.md') ); ?>
        </section>

        <section class="section" id="html">
            <?= $Parsedown->text( file_get_contents('./2-html.md') ); ?>
        </section>

        <section class="section" id="services">
            <?= $Parsedown->text( file_get_contents('./3-services.md') ); ?>
        </section>

        <section class="section" id="javascript">
            <?= $Parsedown->text( file_get_contents('./4-javascript.md') ); ?>
        </section>

        <section class="section" id="webaudioapi">
            <?= $Parsedown->text( file_get_contents('./5-webaudioapi.md') ); ?>
        </section>

        <div id="toc"></div>

    </div>

        <?php $mdfile = './1-websounds.md' ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>

    </main>


  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
