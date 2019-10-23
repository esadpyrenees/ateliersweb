// initialise 50 projets
var projects = [];
for(var i = 1; i < 51; i++){
  projects.push(i);
}

// variables de stockage pour les controles de positionnement
var previous_col = null,
    which_cols_on_current_line = [],
    which_cols_on_previous_line = [],
    current_row = 1;

// méthode pour sélectionner une colonne
function choose_a_col(previous_col){
    // colonne aléatoire entre 0 et 7
    var random_col = Math.floor( Math.random() * 8 );
  
    // recalcule random_col tant que
    // la nouvelle colonne n’est pas 
    // - la même que la précédente random col (même place)
    // - la même que la précédente moins un (place précédente)
    // - la même que la précédente plus un (place suivante)
    // - la même que les colonnes dans la ligne précédente
    // noter l’opérateur ternaire :
    // 1 > 2 ? 'Chaos’ comin' : 'Everything is ok';
    // qui se lit “Si un est supérieur à deux, le chaos arrive; sinon, tout va bien”
    return (random_col == previous_col || 
            random_col == previous_col - 1 || 
            random_col == previous_col + 1 ||
            which_cols_on_previous_line.indexOf(random_col) >= 0) ? 
        choose_a_col(previous_col) : random_col;
}


// boucle sur les projets
for(var i=0; i < projects.length; i++){
    
    // on détermine une colonne grâce à la méthode choose_a_col
    var random_col = choose_a_col(previous_col);
    previous_col = random_col;
    which_cols_on_current_line.push(random_col);
  
    // une chance sur trois d’en mettre deux sur la même ligne
    // à la condition qu’on n’en ait pas déjà mis deux sur la ligne (0, 1)
    var random_row = current_row;
    if (Math.random() > .333 && which_cols_on_current_line.length < 2 ) {
        // on reste sur la même ligne
    } else {
        // on passe à la ligne suivante
        current_row ++;
        // on réinitialise la variable pour la nouvelle ligne
        how_many_on_current_line = 0;
        // on stocke les colones occupées de la ligne précédente
        which_cols_on_previous_line = which_cols_on_current_line;
        // on réinitialise la variable pour la nouvelle ligne
        which_cols_on_current_line = [];
    }
  
    // construction du div projet
    var div = document.createElement('div');
    div.innerHTML = '<strong>' + projects[i] + '</strong> row: ' + random_row + ' <br> col: ' +  parseInt(random_col + 1); 
    // noter ci-dessous le parseInt(random_col + 1) : 
    // les valeurs pour grid-row et grid-column commencent à 1, pas à 0
    // alors que nous utilisons 0 – 7 pour les calculs
    div.style.gridColumn = parseInt(random_col + 1);
    div.style.gridRow = random_row;
    document.body.appendChild(div);
  
}