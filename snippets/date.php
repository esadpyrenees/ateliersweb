<footer>
    <p>—</p>
    <small>
        <?php
            
            if (file_exists($mdfile)) {
                $file = basename($mdfile);
            } else {
                $file =  basename($_SERVER["SCRIPT_NAME"]);
            }

            echo date("d/m/Y", filemtime($file));
        ?>
    </small>
</footer>
