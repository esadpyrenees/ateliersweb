<?php
  // 0 – helpers : méthode pour protéger le script ; nettoie les caractères spéciaux
  function cleanData($input) {
    $input = htmlspecialchars($input, ENT_IGNORE, 'utf-8');
    $input = strip_tags($input);
    $input = stripslashes($input);
    return $input;
  }

  // 0 – helpers :method to transform new lines to <p>
  function nl2p($string) {
    return $string_with_paragraphs = "<p>".implode("</p><p>", explode("\n", $string))."</p>";
  }
  
  // 0 – helpers : inclure yml parser library
  require_once "Spyc.php";

  // 0 — body classname (affiche-t-on le formulaire ou les résultats ?)
  if($_GET["submission"]=="done"){
    $bodyclassname = "results";
  } else {
    $bodyclassname = "form";
  }
  
  $message = "nomessage";
  // 1 – form : processing
  // Si le formulaire a été soumis :
  if (!empty($_POST)){
    // détermine un nom et un chemin de fichier (une date, par ex. 2022-11-24-221424)
    $filename = 'dossier/file_'.date('Y-m-d-His').'.yml';      
    // initialise une variable pour stocker le contenu
    $data = [];
    $keys = ['name', 'color'];
    foreach($keys as $key){
      if (array_key_exists($key, $_POST )) {
        $data[$key] = cleanData($_POST[$key]);
      }
    };

    // on envoie un e-mail
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "julien@accentgrave.net";
    $to = "julien@accentgrave.net";
    $subject = "Nouvelle couleur sur le site";
    $message = $data["name"] . " a signalé sa couleur préférée : " . $data["color"] . ".";
    $headers = "From:" . $from;
    mail($to,$subject,$message, $headers);

    // on écrit le contenu YAML dans le fichier
    file_put_contents($filename, spyc_dump($data), FILE_APPEND | LOCK_EX);
    
    // on redirige la page pour éviter lea duplication du post si l’utilisateur actualise la page
    header("location:index.php?submission=done");
  } 

  // 2 – display
  // On parcourt ensuite les fichiers yml contenus dans le dossier
  // création d’une liste vide
  $submissions = [];
  // boucle sur tous les fichiers yml du dossier “dossier”
  foreach (glob("dossier/*.yml") as $yml) {
    // lecture du contenu du fichier yaml
    $data = Spyc::YAMLLoad($yml);
    // ajoute une nouvelle entrée à la liste
    $submissions []= $data;
  }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="<?= $bodyclassname  ?>">
  <?= $message ?>
  <!-- le formulaire -->
  <form action="index.php" id="form" method="post">
    <p>
      <label for="name">Votre nom</label>
      <input required type="text" id="name" name="name">
    </p>
    <p>
      <label for="color">Votre couleur</label>
      <select name="color" id="color">
        <option style="background:Aqua" value="Aqua">Aqua</option>
        <option style="background:AquaMarine" value="AquaMarine">AquaMarine</option>
        <option style="background:Bisque" value="Bisque">Bisque</option>
        <option style="background:BlueViolet" value="BlueViolet">BlueViolet</option>
        <option style="background:Brown" value="Brown">Brown</option>
        <option style="background:CadetBlue" value="CadetBlue">CadetBlue</option>
        <option style="background:Coral" value="Coral">Coral</option>
        <option style="background:CornFlowerBlue" value="CornFlowerBlue">CornFlowerBlue</option>
        <option style="background:Crimson" value="Crimson">Crimson</option>
        <option style="background:Cyan" value="Cyan">Cyan</option>
        <option style="background:DarkCyan" value="DarkCyan">DarkCyan</option>
        <option style="background:DarkGreen" value="DarkGreen">DarkGreen</option>
        <option style="background:DarkKhaki" value="DarkKhaki">DarkKhaki</option>
        <option style="background:DarkMagenta" value="DarkMagenta">DarkMagenta</option>
        <option style="background:DarkOliveGreen" value="DarkOliveGreen">DarkOliveGreen</option>
        <option style="background:DarkOrange" value="DarkOrange">DarkOrange</option>
        <option style="background:DarkOrchid" value="DarkOrchid">DarkOrchid</option>
        <option style="background:DarkRed" value="DarkRed">DarkRed</option>
        <option style="background:DarkSlateBlue" value="DarkSlateBlue">DarkSlateBlue</option>
        <option style="background:DarkSlateGray" value="DarkSlateGray">DarkSlateGray</option>
        <option style="background:DarkTurquoise" value="DarkTurquoise">DarkTurquoise</option>
        <option style="background:DarkViolet" value="DarkViolet">DarkViolet</option>
        <option style="background:DeepPink" value="DeepPink">DeepPink</option>
        <option style="background:DeepSkyBlue" value="DeepSkyBlue">DeepSkyBlue</option>
        <option style="background:DimGray" value="DimGray">DimGray</option>
        <option style="background:DodgerBlue" value="DodgerBlue">DodgerBlue</option>
        <option style="background:FireBrick" value="FireBrick">FireBrick</option>
        <option style="background:ForestGreen" value="ForestGreen">ForestGreen</option>
        <option style="background:Gold" value="Gold">Gold</option>
        <option style="background:GoldenRod" value="GoldenRod">GoldenRod</option>
        <option style="background:HotPink" value="HotPink">HotPink</option>
        <option style="background:LightBlue" value="LightBlue">LightBlue</option>
        <option style="background:LightGreen" value="LightGreen">LightGreen</option>
        <option style="background:LightPink" value="LightPink">LightPink</option>
        <option style="background:LightSalmon" value="LightSalmon">LightSalmon</option>
        <option style="background:LightSeaGreen" value="LightSeaGreen">LightSeaGreen</option>
        <option style="background:LightSkyBlue" value="LightSkyBlue">LightSkyBlue</option>
        <option style="background:LightSlateGray" value="LightSlateGray">LightSlateGray</option>
        <option style="background:LightSteelBlue" value="LightSteelBlue">LightSteelBlue</option>
        <option style="background:Magenta" value="Magenta">Magenta</option>
        <option style="background:OliveDrab" value="OliveDrab">OliveDrab</option>
        <option style="background:Orange" value="Orange">Orange</option>
        <option style="background:OrangeRed" value="OrangeRed">OrangeRed</option>
        <option style="background:Orchid" value="Orchid">Orchid</option>
        <option style="background:PaleGoldenRod" value="PaleGoldenRod">PaleGoldenRod</option>
        <option style="background:PaleGreen" value="PaleGreen">PaleGreen</option>
        <option style="background:PaleTurquoise" value="PaleTurquoise">PaleTurquoise</option>
        <option style="background:PaleVioletRed" value="PaleVioletRed">PaleVioletRed</option>
        <option style="background:PapayaWhip" value="PapayaWhip">PapayaWhip</option>
        <option style="background:PeachPuff" value="PeachPuff">PeachPuff</option>
        <option style="background:Teal" value="Teal">Teal</option>
        <option style="background:Thistle" value="Thistle">Thistle</option>
        <option selected style="background:Tomato" value="Tomato">Tomato</option>
        <option style="background:Turquoise" value="Turquoise">Turquoise</option>
        <option style="background:Violet" value="Violet">Violet</option>
        <option style="background:Yellow" value="Yellow">Yellow</option>
        <option style="background:YellowGreen" value="YellowGreen">YellowGreen</option>
      </select>
    </p>    
    <p>
      <button type="submit">Envoyer</button>
    </p>
  </form>

  <!-- les résultats -->
  <ul>
    <?php foreach($submissions as $submission):?>
      <li style="color:<?= $submission['color'] ?>"><?= $submission['name'] ?></li>
    <?php endforeach ?>
  </ul>

  
</body>
</html>