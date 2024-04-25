<?php
// Session
session_start();

// Si on s’est déconnecté⋅e
if (isset($_POST["logout"])) {
  session_destroy();
  unset($_SESSION);
}

// Redirection vers l’accueil si déconnecté
if (!isset($_SESSION["username"])) {
  header("Location: index.php");
  exit();
}