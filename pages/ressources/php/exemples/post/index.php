<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>POST</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form method="POST">
    <p>
      <label for="name_field">your name</label>
      <input type="text" id="name_field" name="name">
    </p>    
    <p>
      <label for="age_field">your age</label>
      <input type="number" id="age_field" name="age">
    </p>
    <!-- un champ “caché” -->
    <input type="hidden" id="secret_field" name="secret" value="Mystère">    
    <p>
      <button type="submit">OK</button>
    </p>
  </form>
  <pre>
  <?php 
    // L’ensemble de la requête postée par la soumission du formulaire sera accessible dans une variable nommé “$_POST”
    // isset vérifie l’existence d’une variable
    // Ici, on vérifie l’existence dans la requête de la variable “secret”
    if(isset($_POST['secret'])){
      // print_r affiche “proprement” le contenu d’une variable, notamment ici, une liste (un array)
      print_r($_POST);
    }
  ?>
  </pre>
</body>
</html>