<?php

  // inclure yml parser library
  require_once "Spyc.php";

  // on ouvre le fichier yaml pour lire les résultats
  $base = "base.yml";
  $votes = Spyc::YAMLLoad($base);

  // sort votes (desc)
  asort($votes);

  // sum up total votes
  $votesnumber = 0;
  foreach ($votes as $key=>$value) {
    $votesnumber += $value;
  }
  
  //  build results array
  $results = [
    "votes" => $votes,
    "votesnumber" => $votesnumber
  ];

  // send results as json
  header('Content-Type: application/json'); 
  echo json_encode($results);
  