<?php
    // config
    $title = "Ressources → Javascript → DOM";
    $description = "Exemples d’interactions courantes entre Javascript et le DOM.";
    $section="ressources";
    $subsection="js";
    $subsubsection="dom";
    $nav = "/web/snippets/ressources/js.php";
    $mdfile = "./dom.md";

    // includes
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    require $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtraPlugin.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;


    function slugify($text, string $divider = '-'){
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);
        if (empty($text)) { return 'n-a';}
        return $text;
    }

    // markdown!
    $Parsedown = new ParsedownExtraPlugin();
    $Parsedown->headerAttributes = function ($Text, $Attributes, &$Element, $Level) {
        $Id = $Attributes['id'] ?? slugify($Text);
        return ['id' => $Id];
    };
    $Parsedown->figuresEnabled = true;

?>
    <style>
        .bigbutton {margin-top:0.5em}
        main h4 {font-weight: normal; cursor:pointer; margin: 0; }
        main h4:hover {color: tomato}
        h4 + pre { display:none}
        h4.visible + pre { display:block}
        h4.visible::before { content:"↓ "}
    </style>
    <main class="pane active" id="content">
        <section>
            <div id="randomramdam" >DOM+</div>                
        </section>
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script>
        const h4s = document.querySelectorAll("h4");
        h4s.forEach( h4 => {
            h4.onclick= () => {
                window.location.hash = h4.id;
                let visible = document.querySelector("h4.visible");
                if(visible) visible.classList.remove('visible');
                const code = h4.nextElementSibling;
                h4.classList.toggle("visible");
            }
        });
        const hash = window.location.hash;
        console.log(hash);
        if(window.location.hash){
            const el = document.querySelector(hash);
            if(el){
                el.click()
            }
        }
    </script>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  