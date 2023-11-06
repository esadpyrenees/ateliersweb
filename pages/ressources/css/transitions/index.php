<?php
    // config
    $title = "Ressources CSS → Transitions et animations";
    $section="ressources";
    $subsection="css";
    $nav = "/web/snippets/ressources/css.php";
    $subsubsection="transitions";
    $mdfile = "./transitions.md";

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
    td{ position:relative}
    td{white-space:nowrap}
    .demo{ width:100%;}
    .demo div, .ball{
        animation: demo 2500ms infinite forwards; 
        position:absolute;
        width:1em;
        height:1em;
        background:black;
        top:.25em;
        border-radius:1em;
    }
    @keyframes demo{
        0% { left: 0}
        100% { left:calc(100% - 1em)}
    }
    
    @keyframes bouncing{
        0%  { bottom: 0; box-shadow: 0 0 5px rgba(0,0,0,0.8);}
        100%{ bottom: 50px; box-shadow: 0 50px 50px rgba(0,0,0,0.1);}
    }

    .ballcontainer { height:70px; position:relative;}
    .ball{ animation: bouncing .7s cubic-bezier(0.1,0.25,0.1,1) 0s infinite alternate both; top: auto}

    .shake {
        opacity: 1;
        animation: shake linear .2s infinite;
    }

    @keyframes shake {
        0%    { transform:  translateX(0px) }
        33%   { transform:  translateX(2px) }
        66%  { transform:  translateX(-2px) }
    }

</style>

    <main class="pane active" id="content">
        <?= $Parsedown->text( file_get_contents( $mdfile ) ); ?>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php"); ?>
