  <?php 
    $title = "Projets";
    $section="projets";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    $nav = "/web/snippets/projets/_projets.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;
  ?> 


  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  