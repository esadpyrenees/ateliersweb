<footer>
    <p>—</p>
    <small>
        <?php
            $file =  basename($_SERVER["SCRIPT_NAME"]);
            echo date("d/m/Y", filemtime($file));
        ?>
    </small>
</footer>
