<?php
    // config
    $title = "Auto-défense économique – 2023–2024";
    $description = "Ressources d’auto-défense économique pour graphistes en temps de crise.";
    $section="gopro";
    $subsection="2425";
    $mdfile = "./index.md";
    $nav = "/web/snippets/gopro.php"; // specific subnav
    $custom_css = "../assets/gopro.css"; // relative or absolute file URL
    $custom_js = "../assets/gopro.js"; // relative or absolute file URL
    
    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtraPlugin.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtraPlugin();
    $Parsedown->figuresEnabled = true;

?>
    <style>
    #refreshsurvive{ border:none; background:none; padding:0; font:inherit; color:currentColor; text-decoration: underline; text-underline-offset: .15em; text-decoration-color: #ccc; 
        cursor: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='48' viewport='0 0 100 100' style='fill:black;font-size:24px;'><text y='50%'>🙃</text></svg>")
      16 0, auto;
    }
    </style>
    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

    <script>
        fetch("survive.md")
            .then(response => response.text())
            .then(text => filterDatabase(text))
            .then(database => { 
                shuffle(database);
                survive(database)
                document.querySelector('#refreshsurvive').onclick = () => {survive(database)};
            })
        function survive(database){
            document.querySelector("#survive").textContent = database.pop()
        }        
        // shuffle array
        function shuffle(array) {
           for (let i = array.length - 1; i > 0; i--) {
                let j = Math.floor(Math.random() * (i + 1));
                [array[i], array[j]] = [array[j], array[i]];
            }
        }
        // filter source text, returns an array
        function filterDatabase(text) {    
            let db = text.split('\n');
            return db.filter(function(element) {
                return element !== '' && !element.startsWith('//');
            });
        }
            
    </script>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
