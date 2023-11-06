<?php
    // config
    $title = "Ressources CTRL + Alt + print → PageTypeToPrint";
    $section="ressources";
    $subsection="ctrlaltprint";
    $nav = "/web/snippets/ressources/ctrlaltprint.php";
    $subsubsection="pagetypetoprint";
    $mdfile = "./pagetypetoprint.md";

    // includes
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . '/web/_inc/ParsedownExtra.php';
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

    // nav snippet
    if(isset($nav)) include_once $_SERVER["DOCUMENT_ROOT"] . $nav;

    // markdown!
    $Parsedown = new ParsedownExtra();

?>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>
    <div style="display:none">

        <a href="https://medor.coop/fr/" target="_blank"><u>Médor </u></a></li>
        <a href="https://timrodenbroeker.github.io/lofi-poster-machine/" target="_blank"><u>LoFi Poster Machine by Tim Rodenbröker </u></a></li>
        <a href="http://www.editions-hyx.com/fr/code-x" target="_blank"><u>Code X </u></a></li>
        <a href="http://internet-atlas.net/" target="_blank"><u>Critical Atlas of Internet</u></a></li>
        <a href="http://internet-atlas.net/order" target="_blank"><u>Critical Atlas of Internet</u></a></li>
        <a href="http://conversations.tools" target="_blank"><u>I think that conversations are the best, biggest thing that free software has to offer its user</u></a></li>
        <a href="http://www.balmoral.club.gbodywork" target="_blank"><u>G.BODYWORK</u></a></li>
        <a href="http://blog.lavillahermosa.com/brass%E2%86%92printtoolv1" target="_blank"><u>La Villa Hermosa " BRASS → Print tool v1</u></a></li>
        <a href="http://htmloutput.risd.gd" target="_blank"><u>for  with  in</u></a></li>
        <a href="http://johncaserta.com/webtoprint.html" target="_blank"><u>John Caserta Web to Print</u></a></li>
        <a href="http://louisedrulhe.fr/designfluide/#sommaire" target="_blank"><u>Design fluide</u></a></li>
        <a href="http://design.lavillahermosa.com/works-75-can-you-dig-it" target="_blank"><u>Can you dig it</u></a></li>
        <a href="https://copy-this-book.eu/?fbclid=IwAR3n7k8LHNzjQhzpK3_KEFfgMmcrPXUsYgltdnUVoBy8m5p4Rz_HadsJl7I#news" target="_blank"><u>Copy This Book. An Artist’s Guide to Copyright</u></a></li>
        <a href=" http://www.theradiohistorian.org/Radiofax/newspaper_of_the_air1.htm" target="_blank"><u>The Newspaper of the Air</u></a></li>
        <a href="https://furter.github.io/public-domain/" target="_blank"><u>Design the public domain</u></a></li>
        <a href="http://138.68.93.192/" target="_blank"><u>Print Capsule</u></a></li>
        <a href="http://drawingcurved.osp.kitchen/foreword.xhtml" target="_blank"><u>Drawing Curved</u></a></li>
        <a href="http://albertinemeunier.net/dadaprint3r" target="_blank"><u>DadaPrint3r</u></a></li>
        <a href="https://centerforfuturepublishing.wordpress.com/projets-de-recherche/automatic-publishing/" target="_blank"><u>Omnirama: journal algorithmique</u></a></li>
        <a href=" https://centerforfuturepublishing.wordpress.com/projets-de-recherche/self-assembling-book/" target="_blank"><u>Self-Assembling Book</u></a></li>
        <a href="http://projects.robertoarista.it/posts/inhabitations/" target="_blank"><u>Inhabitations</u></a></li>
        <a href="http://projects.robertoarista.it/posts/VLM/" target="_blank"><u>VLM</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2018-2019" target="_blank"><u>La Balsamine 2018-2019</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2017-2018" target="_blank"><u>La Balsamine 2017-2018</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2011-2012" target="_blank"><u>La Balsamine 2011-2012</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2016-2017" target="_blank"><u>La Balsamine 2016-2017</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2014-2015" target="_blank"><u>La Balsamine 2014-2015</u></a></li>
        <a href="http://osp.kitchen/work/balsamine.2012-2013" target="_blank"><u>La Balsamine 2012-2013</u></a></li>
        <a href="https://www.nytimes.com/2008/04/14/business/media/14link.html" target="_blank"><u>Phillip Parker</u></a></li>
        <a href="http://www.le-tigre.net/" target="_blank"><u>Le tigre</u></a></li>
        <a href="http://f-u-t-u-r-e.org/" target="_blank"><u>&lt;o&gt; future &lt;o&gt; </u></a></li>
        <a href="http://www.anonymous-press.com/" target="_blank"><u>Anonymous press</u></a></li>
        <a href=" https://Raphaëlbastide.com/" target="_blank"><u>Raphaël Bastide</u></a></li>
        <a href="http://blog.lavillahermosa.com/homeopape-nuit-blanche/" target="_blank"><u>Homepape</u></a></li>
        <a href="https://fathominfonotebook1908" target="_blank"><u>Frankenfont</u></a></li>
        <a href="http://www.felixheyes.com/Google-Book" target="_blank"><u>Google Book</u></a></li>
        <a href=" http://www.books.constantvzw.org/fr/home/death_of_the_authors" target="_blank"><u>The death of the author</u></a></li>
        <a href="http://www.lulu.com/shop/constant/the-death-of-the-authors-james-joyce-rabindranath-tagore-their-return-to-life-in-four-seasons/paperback/product-21310596.html" target="_blank"><u>The death of the author</u></a></li>

        <a href="http://novel.coryarcangel.com/" target="_blank"><u>Working On My Novel</u></a></li>
        <a href="http://kabk.github.io/govt-theses-15/ " target="_blank"><u>Eric Schrijver - Hybrid Publishing Back To The Future Publishing Theses at the KABK</u></a></li>

        <a href="https://lorainefurter.net/fr/" target="_blank"><u>Loraine Furter</u></a></li>
        <a href="https://eracom.github.io/workshop-outils-hybrides-2018/ " target="_blank"><u>Workshop outils d'édition hybrides</u></a></li>


        <a href="http://www.evan-roth.com/work/internet-cache-self-portrait/" target="_blank"><u>Internet Cache Self Portrait series</u></a></li>
        <a href="http://www.luuse.io/provisoire/#fimpah" target="_blank"><u>villa Noailles FIMPAH</u></a></li>
        <a href="http://www.luuse.io/provisoire/#domesticpools " target="_blank"><u>villa Noailles Domestic pools</u></a></li>
        <a href="http://www.luuse.io/provisoire/#dp" target="_blank"><u>villa Noailles Design Parade</u></a></li>
        <a href="http://www.luuse.io/provisoire/#pitchouns" target="_blank"><u>villa Noailles Pitchouns</u></a></li>
        <a href="http://www.luuse.io/provisoire/#constant" target="_blank"><u>Constant flyers</u></a></li>
        <a href="http://design.lavillahermosa.com/works-324-le-geste-radiophonique-audiographie-dun-atelier " target="_blank"><u>Le geste radiophonique</u></a></li>
    </div>
    
<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
