<?php
  include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
  $Parsedown = new Parsedown();

  $title = "Webradiola";
  $section="projets";
  $subsection="webradiola";
  $nav = "/web/snippets/projets/_projets.php";

  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
  include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  
  // nav snippet
  if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

?>

<main class="pane active" id="content">
    <?= $Parsedown->text( file_get_contents('./webradiola.md') ); ?>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
<?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
?>
