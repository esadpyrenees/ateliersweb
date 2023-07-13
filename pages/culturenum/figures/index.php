<?php
    // config
    $title = "Cultures numériques → Figures";
    $section="culturenum";
    $subsection="figures";
    $mdfile = "./index.md";
    // $date = "today";

    $custom_css = "style.css";
    $custom_js = "script.js";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

    //find . -name '*.jpg' -exec mogrify -resize 300x300 {} +
?>
    <style>
        .pad{
            border: 1px dotted #000;
            padding: 1em;
            font-family: monospace;
        }
        .pad h1, .pad h2, .pad h3, .pad h4 {font-size: 1em; font-weight: bold;;}
    </style>
    <main class="pane active typeset" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php 
            $dirs = array_filter(glob('figures/*'), 'is_dir'); 
            $dirs = ["ada-lovelace", "norbert-wiener", "grace-hopper", "vera-molnar", "muriel-cooper", "douglas-engelbart", "ted-nelson", "stewart-brand", "donna-haraway", "john-p-barlow", "richard-stallman", "susan-kare", "tim-berners-lee", "brewster-kahle", "lev-manovich", "lawrence-lessig", "kenneth-goldsmith",  "julian-assange", "james-bridle","edward-snowden", "aaron-swartz","alexandra-elbakyan"];
            $next = [ "chaos-cumputer-club", "evgeni-morozov", "linus-torvalds",]
        ?>
        <div class="galleries">
            <?php 
                foreach($dirs as $dir) :
                    // $dirname = str_replace("figures/", "", $dir);
                    $index = file_get_contents( "figures/" . $dir . "/index.md" );
                    $text = $Parsedown->text( $index );
                    $files = "figures/" . $dir . '/*.{jpg,JPG,jpeg,JPEG,png,PNG,gif,GIF}';
                    $images = glob($files,GLOB_BRACE);          
            ?>
                <article id="<?= $dir ?>" class="figure">
                    <div class="gallery">
                    <?php foreach($images as $img) :?>
                        <figure><img src='<?= $img ?>' loading="lazy"></figure>
                    <?php endforeach ?>
                    </div>
                    <div class="text">
                        <?= $text ?>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
