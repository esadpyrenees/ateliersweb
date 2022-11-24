<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zuck or not?</title>
  <link rel="stylesheet" href="style.css">
  <style>
    /* les articles sont masqués par défaut, et affichés quand on leur affecte la `class` "visible" en javascript */
    article {display: none;}
    article.visible {display: block;}
  </style>
</head>
<body>

  <p>
    Vos votes seront comptabilisés et agrégés avec ceux des précédent⋅es votant⋅es.
    Des statistiques hautement représentatives en seront tirées.
  </p>

  <article>
    <p>Que préférez-vous ?</p>
    <button value="a4">Une feuille A4</button>
    <button value="zuck">Mark Zuckerberg</button>
    <button value="nothing">J’sais pas</button>
  </article>

  <article>
    <p>Que préférez-vous ?</p>
    <button value="can">Une canette de Coca</button>
    <button value="zuck">Mark Zuckerberg</button>
    <button value="nothing">J’peux pas dire</button>
  </article>

  <article>
    <p>Que préférez-vous ?</p>
    <button value="sandwich">Une sandwich à l’omelette</button>
    <button value="zuck">Mark Zuckerberg</button>
    <button value="nothing">J’ai pas d’avis</button>
  </article>

  <article id="results">
    <p>
      Parmi <span id="votes"></span> votes exprimés, sans contexte, pas grand monde n’aime <span id="shittier"></span>.
    </p>
    <p>
      Dans l’ordre, suivent <span id="following"></span>
    </p>
    <footer>
      Sur une idée originale d’Aurore T.
    </footer>
  </article>

  <!-- le fichier js ci-dessous contient les appels aux scripts PHP qui comptabilisent les votes et renvoient les résultats   -->
  <script src="votes.js"></script>

</body>
</html>