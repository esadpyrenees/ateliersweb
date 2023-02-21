<?php include('_top.php'); 

    // les inclusions de _top.php et _bottom.php permettent de gérer un système de cache minimaliste
    // pour éviter un trop long temps de calcul et une trop grosse charge du serveur
    // la page n’est recalculée qu’après expiration d’un délai de 2 heures (paramétrable dans _top.php)  

    // 0 – utilitaire (nouvelle ligne vers <p>)
    function nl2p($string) {
        return "<p>".implode("</p><p>", explode("\n", $string))."</p>";
    }

    // 1 – inclure Spyc, bibliothèque de lecture des fichiers Yaml
    require_once "Spyc.php";

    // 2 – on parcourt les fichiers yml contenus dans le dossier “recettes”
    // 2.1 — création d’une liste vide
    $recettes = [];
    // 2.2 — boucle sur tous les fichiers yml du dossier “recettes”
    foreach (glob("recettes/*.yml") as $yml) {
        // lecture du contenu du fichier yaml
        $recette = Spyc::YAMLLoad($yml);
        // ajoute une nouvelle entrée à la liste
        $recettes []= $recette;
    }
    // tri des recettes
    usort($recettes, fn($a, $b) =>
        $a['order'] <=> $b['order']
    );
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Livre de recettes</title>
    <link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body class="grid">

    <header>
        <h2>Livre de recettes</h2>
        <p>Les recettes, structurées selon format YAML, sont stockées dans un dossier dédié et réunies grâce à un script PHP.</p>
        <p>Elles sont mise en forme en CSS, et peuvent être “ouvertes” et imprimées via javascript.</p>
        <p>⚠️ Cet exemple sommaire est dédié à l’exportation de PDF A5, uniquement depuis Chromium / Chrome.</p>
    </header>

    <?php foreach($recettes as $recette):?>
      <article class="recette">
        <div class="recto">
            <h1><?= $recette['title'] ?></h1>
            <img src='images/<?= $recette['image'] ?>' alt='<?= $recette['title'] ?>'>
            <nav>
                <button class="print">Imprimer</button>
                <button class="close">×</button>
            </nav>
        </div>
        <div class="verso">
            <div class="metadata">
                <p>
                    <strong>Niveau</strong><br> <?= $recette['level'] ?>
                </p>
                <p>
                    <strong>Personnes</strong><br> <?= $recette['servings'] ?>
                </p>
                <p>
                    <strong>Préparation</strong><br> <?= $recette['preparation_time'] ?>
                </p>
                <p>
                    <strong>Cuisson</strong><br> <?= $recette['cooking_time'] ?>
                </p>            
            </div>

            <div class="stuff-and-ingredients">
                <h2>Ce qu’il vous faut</h2>
                <ul>
                    <?php foreach($recette['ingredients'] as $ingredient):?>
                        <li><?= $ingredient ?></li>
                    <?php endforeach ?>
                </ul>
                <ul>
                    <?php foreach($recette['stuff'] as $stuff):?>
                        <li><?= $stuff ?></li>
                    <?php endforeach ?>
                </ul>
            </div>

            <div class="preparation">
                <h2>Préparation</h2>
                <?= nl2p($recette['cooking']); ?>
            </div> 

            <div class="credits">
                <a href="<?= $recette['source'] ?>">Source</a>
            </div>
        </div>
      </article>
    <?php endforeach ?>

    <script src="script.js"></script>
</body>
</html>
<?php include('_bottom.php'); ?>