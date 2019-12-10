<!DOCTYPE html>
<html lang="fr" >

<head>
    <meta charset="UTF-8">
    <title>PHP list dir</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- Le formulaire qui sert à ajouter un élément -->
    <form action="index.php" method="post">

        <label for="name">name</label>
        <input type="text" id="name" name="name" value="" placeholder=" " required>

        <label for="color">color</label>
        <select id="color" name="color">
            <option value="red">red</option>
            <option value="yellowgreen">yellowgreen</option>
            <option value="hotpink">hotpink</option>
            <option value="crimson">crimson</option>
            <option value="tomato">tomato</option>
            <option value="indigo">indigo</option>
            <option value="lightsteelblue">lightsteelblue</option>
        </select>

        <button type="sumbit" name="button">+</button>

    </form>

    <!-- le  -->
    <main>


    <?php
        // méthode pour protéger le script ; nettoie les caractères spéciaux
        function cleanData($input) {
            $input = htmlspecialchars($input, ENT_IGNORE, 'utf-8');
            $input = strip_tags($input);
            $input = stripslashes($input);
            return $input;
        }

        //  Si le formulaire a été soumis
        if (!empty($_POST)){
            // détermine un nom et un chemin de fichier
            $filename = 'dossier/file_'.date('Y-m-d-His').'.yml';
            // initialise une variable pour stocker le contenu
            $filecontent = "";
            // s’il y a une donnée “name” dans le POST
            if (array_key_exists("name", $_POST )) {
                // on ajoute au contenu une ligne sous la forme «name: bidule»
                $filecontent .= "name: " . cleanData($_POST["name"]) . "\n";
            }
            if (array_key_exists("color", $_POST )) {
                // on ajoute au contenu une ligne sous la forme «color: truc»
                $filecontent .= "color: " . cleanData($_POST["color"]) . "\n";
            }
            // on écrit le contenu dans le fichier
            file_put_contents($filename, $filecontent, FILE_APPEND | LOCK_EX);
            // on redirige la page pour éviter lea duplication du post si l’utilisateur actualise la page
            header("location:index.php");
        }

        // On parcourt ensuite les fichiers yml contenus dans le dossier

        // yml parser library
        require_once "Spyc.php";

        // boucle sur tous les fichiers yml du dossier “dossier”
        foreach (glob("dossier/*.yml") as $yml) {

            // lecture du contenu du fichier yaml
            $data = Spyc::YAMLLoad($yml);
            // vérification de la présence des clés
            if (array_key_exists("name",$data )) {
                $name = $data["name"];
            } else {
                $name = "";
            }
            if (array_key_exists("color",$data )) {
                $color = $data["color"];
            } else {
                $color = "";
            }
            echo "<div class='$color'>$name</div>";


        }
    ?>

    </main>



</body>

</html>
