<?php
// Démarrage de la session
session_start();

// Si on s’est déconnecté⋅e
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}

// Redirection vers la page de login si déconnecté (= si aucune valeur n’existe pour "username" dans la session de l’utilisateur)
if (!isset($_SESSION["username"])) {
  header("Location: index.php");
  exit();
}