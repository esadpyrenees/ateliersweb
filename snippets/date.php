<footer>
    <p>—</p>
    <small>
        <?php
            if(isset($date)){
                echo $date . " — Mise à jour le ";
            }
            if(isset($mdfile)){
                if (file_exists($mdfile)) {
                    $file = basename($mdfile);
                }
            } else {
                $file =  basename($_SERVER["SCRIPT_NAME"]);
            }

            echo date("d/m/Y", filemtime($file));
        ?>
        <?php 
        $editurl = "/web/pages/about/?contact";
        if(isset($mdfile)){
            $ghf = str_replace("/web/", "", $_SERVER['REQUEST_URI']) . str_replace("./", "", $mdfile);     
            $editurl = "https://github.com/esadpyrenees/ateliersweb/edit/master/$ghf";
        }
        ?>
        – <a href="/web/pages/about/">CC BY-NC</a>
        – <a href="<?= $editurl ?>">Corrections, compléments et commentaires bienvenus !</a>
    </small>
</footer>
