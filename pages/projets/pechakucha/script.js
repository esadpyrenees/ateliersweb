var groupes = [
    ["Mélissa A.", "Audrey L."],
    ["Claire B.", "Ania J."],
    ["Alizée B.", "Sophie F."],
    ["Ana C.", "Emmanuelle G."],
    ["Sarah C.", "Célia T."],
    ["Stéphanie D.", "Anais T."],
    ["Lisa F.", "Justine R."],
    ["Thomas F.", "Eamon G."],
    ["Dongni J.", "Wenpeng S."],
    ["Anais L.","Adeline S."],
    ["Julian N.","Florent T."]
]

var solos = [
    "Margot L.",
    "Thibault V.",
    "Rafael F.",
    "Paul L.",
    "Lia P.",
    "Alexia S.",
    "Blandine C."
]

var dates = [
    "8/11",
    "14/11",
    "22/11",
    "28/11",
    "6/12",
    "12/12",
    "20/12"
]

/*

// Pseudo code

Tant qu’il y a des éléments dans la liste "solos" :
    On crée un nouveau groupe
    Si le nombre d’étudiants dans la liste est impair :
        N = Trois
    Sinon :
        N = Deux
    N fois :
        Dans la liste "solos", on prend un élément au hasard
        On supprime cet élément de la liste solo
        On met cet élément dans le groupe
    On met le groupe dans la liste des groupes

Pour chaque élément de la liste "dates" :
    On affiche un élément date
    Deux fois :
        On choisis un élément au hasard dans la liste des groupes
        On supprime cet élément de la liste
        On affiche le groupe
    On supprime l’élément date de la liste des dates
*/

// tant que le nombre d’éléments dans la liste "solos" est supérieur à 0
while (solos.length > 0) {
    var groupe = [];
    // l’opérateur modulo (%) renvoie le “reste de la division”
    // ici, 7 divisé par 2 égale 3, reste 1 (ça n’est pas égal à 0)
    if (solos.length % 2 != 0){
        var n = 3;
    } else {
        var n = 2;
    }
    // boucle 2 ou 3 fois (selon la valeur de n)
    for (var i = 0; i < n; i++) {
        // génère un nombre entier aléatoire entre 0 et 7 (la longueur de la liste "solos") : 0, 1, 2, 3, 4, 5 ou 6
        var alea = Math.floor( Math.random() * solos.length );
        // enlève de la liste "solos" 1 élément à partir de l’index "alea"
        var queletudiant = solos.splice(alea, 1)[0];
        // la méthode "splice" produisant une liste, la notation "[0]" permet de ne prendre que le premier élément de la liste
        // on ajoute l’étudiant au groupe
        groupe.push(queletudiant);
    }
    // on ajoute le groupe à la liste des groupes
    groupes.push(groupe);
}

// On parcourt toutes les dates
for (var i = 0; i < dates.length; i++) {
    // on crée une "section" vide pour la date
    var section = document.createElement('section');
    // on crée un élément "h2" vide
    var h2 = document.createElement('h2');
    // on écrit la date dans le h2
    h2.textContent = dates[i];
    // on ajoute le h2 au contenu
    section.appendChild(h2);

    // un peu de fun avec Math.random()
    var scale =  Math.random() * 2 + .6;
    // on ajoute une transformation css pour modifier l’échelle horizontale du h2
    h2.style.transform = 'scaleX(' + scale + ')';
    // on corrige la marge en fonction de l’échelle
    h2.style.marginLeft = scale * scale * -1 + 'px';

    // Deux groupes par date
    for (var g = 0; g < 2; g++) {
        // génère un nombre entier aléatoire entre 0 et le nombre d’éléments de la liste "groupes"
        var alea = Math.floor( Math.random() * groupes.length );
        // on enlève de la liste "groupes" 1 élément à partir de l’index "alea"
        var quelgroupe = groupes.splice(alea, 1)[0];
        // on crée un paragraphe vide
        var p = document.createElement('p');
        // si le nombre de groupes est impair, on se retrouvera avec une valeur "undefined", qu’on ne souhaite pas afficher
        if(quelgroupe != undefined ){
            // on affiche les membres du groupe (on remplit le "<p>")
            for (let j = 0; j < quelgroupe.length; j++) {
                // on affiche le nom de l’étudiant·e
                // la notation "+=" permet d’ajouter une valeur à la valeur de la variable
                p.textContent += quelgroupe[j];
                // c’est identique à p.textContent = p.textContent + quelgroupe[j];
                // si ça n’est pas le dernier du groupe, on affiche une virgule
                if (j != quelgroupe.length - 1){
                    p.textContent +=  ', ';
                }
            }
            section.appendChild(p);
        }
    }
    // Le capitaine a 42 ans

    // finalement, on ajoute la section au body
    document.body.appendChild(section);
}
