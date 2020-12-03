<?php
    // config
    $title = "Ressources – CSS";
    $section="ressources";
    $subsection="css";
    $nav = "/web/snippets/ressources/css.php";
    $subsubsection="transformations";
    $mdfile = "./transformations.md";

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
<style>
      @keyframes move {
        0%  { transform: translate(0, 0);}
        100%{ transform: translate(200px, 0);}
    }
    .bille { animation: move 2s ease-out alternate infinite;}
    .bille{
        width:1em;
        height:1em;
        background:black;
        top:.25em;
        border-radius:1em;
    }
    @keyframes tourne {
  0%  { transform: rotate(0deg);}
  100%{ transform: rotate(360deg);}
}
.troll { 
    display:block;
    height:100px;
    width:100px;
    background:url(troll.png) no-repeat;
    background-size:contain;
    animation: tourne 2s linear infinite;
}

.snoopy { 
    transform-origin: 100% 100%;
    display:block;
    height:100px;
    width:100px;
    background:url(snoopy.png) no-repeat;
    background-size:contain;
    animation: tourne 2s linear infinite;
}
.snoopy-container{
    display:block;
    height:100px;
    width:100px;
    background:#eee;
    position:relative;
}
.snoopy-container::after{
    content:"";
    display:block;
    position:absolute;
    bottom: 0;
    right:0;
    height: 6px;
    width: 6px;
    background: red;
    border-radius: 6px;
    transform:translate(3px, 3px);
}

.marios{
    display: flex;
    margin-top: 3em;
}
.marios div{
    height:100px;
    width:100px;
    position: relative;
}
.marios div span { position: absolute; bottom: 0}
.marios div img { width: 50px; mix-blend-mode:multiply}
.marios img{ display: block;}
.marios div:nth-child(1) img{transform:scale(1)}
.marios div:nth-child(2) img{transform:scale(2)}
.marios div:nth-child(3) img{transform:scale(.5)}
.marios div:nth-child(4) img{transform:scale(0)}
.marios div:nth-child(5) img{transform:scale(-1)}
.marios div:nth-child(6) img{transform:scale(2, 1)}

.aie {
    position: absolute;
    transform: skewX(30deg);
}
.ouille {
    position: absolute;
    transform: skewY(30deg);
}
.aie + pre { margin-top: 2em;}
.ouille + pre { margin-top: 3em;}
</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
