<?php
    // config
    $title = "FAQ";
    $section="faq";
    $mdfile = "./faq.md";

    $description = "";
    $custom_css = "faq.css"; // relative or absolute file URL
    $custom_js = "faq.js"; // relative or absolute file URL

    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // includes
    
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // faq
    require_once $_SERVER["DOCUMENT_ROOT"] . "/web/pages/faq/faq.php";
    
    
    
?>

    <?= $faqnav ?>
    
    <main class="pane active" id="content">
        
        <h1>FAQ</h1>
        <p>
            Questions plus ou moins fréquentes, et tentatives de réponses.
        </p>
        
        

        <?= $faq ?>

        
    </main>

    <script type="text/javascript" src="/web/assets/js/mixitup.min.js"></script>
    

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>

