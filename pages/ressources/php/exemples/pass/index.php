<?php
// inclusion de la méthode d’authentification
require "_check.php";
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

  <p>
    Ce simple système d’authentification utilise 3 fichiers :
  </p>
  <ul>
    <li>
      <p><strong><code>_logins.php</code></strong> contient les couples nom d’utilisateur / mot de passe.</p>
    </li>
    <li>
      <p><strong><code>_check.php</code></strong> vérifie la soumission du formulaire d’authentification de la page <code>index.php</code>.</p>
    </li>
    <li>
      <p><strong><code>_protect.php</code></strong> permet de protéger les pages internes du site et de se déconnecter.</p>
    </li>
  </ul>
    
  <p>
    <a href="../../php-exemple-pass.zip">Télécharger le code</a>
  </p>
  <hr>

  <?php if (isset($failed)) : ?>
  <p>Invalid login or password</p>
  <?php endif ?>

  <form id="login-form" method="post" target="_self">
    <p>
      <label for="username">Username</label>
      <input type="text" name="username" required>
    </p>
    <p>
      <label for="password">Password</label>
      <input type="password" name="password" required>
    </p>
    <p><input type="submit" value="OK"></p>
  </form>

  </body>
</html>
