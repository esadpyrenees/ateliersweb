<?php
// inclusion de la vérification d’authentification, dans toutes les pages à protéger
require "_protect.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Authentification</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- formulaire de déconnexion -->
    <form method="post">
      <input type="hidden" name="logout" value="1">
      <input type="submit" value="Log out">
    </form>

    <p>
      Vous êtes bien authentifié⋅e (<?=$_SESSION["username"]?>).
    </p>    

  </body>
</html>
