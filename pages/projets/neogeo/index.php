<?php
    // config
    $title = "NeoGeo";
    $description = "Abstraction géométrique et CSS";
    $section="projets";
    $subsection="neogeo";
    $mdfile = "./neogeo.md";
    $nav = "/web/snippets/projets/_projets.php";

    // includes
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtraPlugin.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtraPlugin();
    $Parsedown->figuresEnabled = true;

    $markdown = file_get_contents( $mdfile );

    // attempt to include file base on {{ pattern }}

    // // Callback function for replacement
    // function replaceCallback($matches) {
    //     // Extract the special string
    //     $specialString = $matches[1];
    //     // Read content from another file based on the special string
    //     $replacementFile = 'pens/' . $specialString . '.md';
    //     $replacementText = file_get_contents($replacementFile) ;
    //     // Return the replacement text
    //     return $replacementText;
    // }
    // $regex = '/{{\s*([\w_]+)\s*}}/';
    // $text = preg_replace_callback($regex, 'replaceCallback', $markdown); 

    

?>

    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( $markdown ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    
    <script async src="https://cpwebassets.codepen.io/assets/embed/ei.js"></script>
    <script src="fork.js"></script>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>


