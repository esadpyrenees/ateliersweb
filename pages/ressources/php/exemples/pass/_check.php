<?php
// Une session en PHP permet de stocker des données différentes pour chaque utilisateur en utilisant un identifiant de session unique.
// = Permet d’enregistrer “en session” l’authentificatoin de l’utilisateur
session_start();

// L’ensemble de la requête postée par la soumission du formulaire sera accessible dans une variable nommé “$_POST”
// nb: isset vérifie l’existence d’une variable
// Ici, on vérifie l’existence dans la requête de la variable "username" 
// et que aucune valeur n’existe pour "username" dans la session de l’utilisateur
if (isset($_POST["username"]) && !isset($_SESSION["username"])) {
  
  // Noms de variables plus courts…
  $p = $_POST['password'];
  $u = $_POST['username'];

  // Inclusion des couples username/password 
  $logins = require('_logins.php');

  // Vérification
  if (isset($logins[$u]) && $logins[$u] == $p) {
    $_SESSION["username"] = $u;
  }

  // Renvoie une info dans la page d’authentification si elle a échoué
  if (!isset($_SESSION["username"])) { $failed = true; }
}

// Redirige vers une autre page si l’authentification est ok
if (isset($_SESSION["username"])) {
  header("Location: ok.php");
  exit();
}