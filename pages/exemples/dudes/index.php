<?php include('php/top.php'); 

    // les inclusions de _top.php et _bottom.php permettent de gérer un système de cache minimaliste
    // pour éviter un trop long temps de calcul et une trop grosse charge du serveur
    // la page n’est recalculée qu’après expiration d’un délai de 2 heures (paramétrable dans php/top.php)  

    // 1 – inclure Spyc, bibliothèque de lecture des fichiers Yaml
    require_once "php/Spyc.php";

    // 2 – on parcourt les fichiers yml contenus dans le dossier “dudes”
    // 2.1 — création d’une liste vide
    $dudes = [];
    // 2.2 — boucle sur tous les fichiers yml du dossier “dudes”
    foreach (glob("dudes/*.yml") as $yml) {
        // lecture du contenu du fichier yaml
        $dude = Spyc::YAMLLoad($yml);
        $dude["file"] = $yml;
        // ajoute une nouvelle entrée à la liste
        $dudes []= $dude;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Spot selector wizard</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >
    <!-- 
        La description verbale des formes et des couleurs s’inspire du travail de Vasilis Van Gemert : https://vasilis.nl/random/
        Les noms des couleurs et le code qui les associent à une teinte viennent de Chirag Mehta : https://chir.ag/projects/ntc/
        Le code qui a permis de générer les “dudes” est accessible dans le dossier "python"
    -->
</head>
<body class="grid">

    <!-- formulaire de filtrage (voir js/script.js) -->
    <header>        
        <p>
            <label for="hue">Teinte</label>
            <input type="range" name="hue" id="hue" min="0" max="360">
            <button type="reset" data-input="hue">×</button>
        </p>
        <p>
            <label for="shape">Formes:</label>
            <label for="all"><input type="radio" name="shape" value="all" id="all" checked> toutes</label>
            <label for="ellipse"><input type="radio" name="shape" value="ellipse" id="ellipse"> ellipses</label>
            <label for="rectangle"><input type="radio" name="shape" value="rectangle" id="rectangle"> rectangles</label>
        </p>
        <p>
            <label for="hue">Taille</label>
            <input type="range" name="size" id="size" min="1850" max="38809">
            <button type="reset" data-input="size">×</button>
        </p>        
    </header>

    <!-- liste de tous les dudes -->
    <main>
        <?php foreach($dudes as $dude):?>
        <article 
            class="dude <?= $dude['shape'] ?>" 
            data-file="<?= $dude['file'] ?>"        
            data-hue="<?= $dude['hue'] ?>" 
            data-size="<?= $dude['width'] * $dude['height'] ?>"
            data-shape="<?= in_array($dude['shape'], ['rectangle', 'square'] )  ? "rectangle" : "ellipse"; ?>"
            data-brightness="<?= $dude['brightness'] ?>" 
            data-saturation="<?= $dude['saturation'] ?>" >
            <div 
                class="shape" 
                style="color: #<?= $dude['hex'] ?>; width:<?= $dude['width'] * 1 ?>px; height:<?= $dude['height'] * 1 ?>px; font-size:<?= $dude['fontsize'] ?>px; background:hsl(<?= $dude['hsl'] ?>); border-radius:<?= in_array($dude['shape'], ['rectangle', 'square'] )  ? 0 : 100 ?>%">
            </div>
            <h1>
                <svg width="196.834" height="22.236" viewBox="0 0 52.079 5.883" xmlns="http://www.w3.org/2000/svg"><path d="M17.547 122.848h29.676l5.432-5.432v5.432h16.971" transform="translate(-17.547 -117.097)"/></svg>
                <?= $dude['phrase'] ?>
            </h1>
        </article>
        <?php endforeach ?>
    </main>

    <script src="js/script.js"></script>
</body>
</html>
<?php include('php/bottom.php'); ?>