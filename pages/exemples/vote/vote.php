<?php

  // 0 – helpers : inclure yml parser library
  require_once "Spyc.php";

  // 1 – on récupère la valeur du vote envoyé via POST
  $vote = $_POST["vote"];

  // 2 – on ouvre le fichier yaml pour stocker les résultats
  $base = "base.yml";
  $data = Spyc::YAMLLoad($base);

  // vérification que l’on a envoyé un vote valide (= pour une entrée qui existe bel et bien dans le fichier)
  if(array_key_exists($vote, $data)){
    // on augmente sa valeur
    $value = intval($data[$vote]) + 1;
    // on met à jour la valeur
    $data[$vote] = $value;
  }
  
  // on écrit les valeurs mises à jour dans le fichier
  file_put_contents($base, spyc_dump($data));

  // on rennvoie une info au JS
  echo("Vote counted for $vote");
