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
        – <a href="/web/pages/about/">CC BY-NC</a>
        – <a href="/web/pages/about/?contact">Corrections, compléments et commentaires bienvenus !</a>
    </small>
</footer>
