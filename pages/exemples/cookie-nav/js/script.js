
// utilitaires pour… 
// …lire un cookie
function getCookie(name) {
    var v = document.cookie.match('(^|;) ?' + name + '=([^;]*)(;|$)');
    return v ? v[2] : null;
}
// …écrire dans un cookie
function setCookie(name, value, days) {
    var d = new Date;
    d.setTime(d.getTime() + 24*60*60*1000*days);
    document.cookie = name + "=" + value + ";path=/;expires=" + d.toGMTString();
}
// …supprimer un cookie
function eraseCookie(name) {
    document.cookie = name+'=;path=/;expires=-99999999;';
}

// utilitaire pour comparer deux listes
Array.prototype.diff = function(a) {
    return this.filter(function(i) {return a.indexOf(i) < 0;});
};


// liste des pages
var pages = [
    "page1.html",
    "page2.html",
    "page3.html"
]

var cookie = getCookie("memoire");

if(cookie == "" || cookie == null){
    // pas de cookie = premiere visite, pas de page déjà visitée
    visited_pages = [];
    // console.log('Pas de cookie');
} else {
    // le cookie existe et n’est pas vide = on a déjà visité une page
    visited_pages = getCookie("memoire").split(',');
    // console.log(visited_pages);
}

// pages visitables la liste des pages *moins* les pages visitées
var pages_visitables = pages.diff(visited_pages);

// quand on clique quelque-part
document.addEventListener('click', function(){

    // s’il reste des pages visitables
    if (pages_visitables.length) {

        // ocn choisit une page aléatoire
        var page_aleatoire = pages_visitables[ Math.floor( Math.random() * pages_visitables.length ) ];
        
        // on modifie la liste des pages visitées
        visited_pages.push(page_aleatoire);
        setCookie("memoire", visited_pages, 5);

        // on affiche la nouvelle page
        document.location = page_aleatoire;
        
    } else {
        // sinon, plus de page : the end
        document.location = 'theend.html';
    }

});

var reset_btn = document.querySelector('#reset');
if (reset_btn) {
    reset_btn.addEventListener('click', function(e){
        e.stopPropagation();
        eraseCookie("memoire");
        setTimeout(function(){
            document.location = 'index.html';
        }, 100)
        
    })
}