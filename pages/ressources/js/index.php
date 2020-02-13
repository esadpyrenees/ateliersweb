  <?php 
    $title = "ÉSAD·Pyrénées — Ateliers web — Ressources";
    $section="ressources";
    $subsection="js";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/js.php");
  ?> 

  <main class="pane active" id="content">
    <section >
            <div id="randomramdam" >RANDOM/RAMDAM</div>                
        </section>
        
    <div id="wrapper">
    <!--
        <section class="section">
            
            <h2 class="section-subtitle">Préambule</h2>
            <p>
                Le code du temps fort est accessible ici : <a href="https://github.com/jbidoret/ramdam/archive/master.zip">https://github.com/jbidoret/ramdam/</a>
            </p>
            <p>
                Pour le télécharger en gardant la capacité de le modifier <i>et</i> de le mettre à jour, il est possible d’utiliser <a href="https://git-scm.com/book/fr/v1/D%C3%A9marrage-rapide"><strong>git</strong></a>, s’il est installé sur votre ordinateur. Ouvrir le Terminal (/Applications/Utilitaires/Terminal.app), clonez le dossier contenant le code sur votre ordinateur :
            </p>
            <p>
                <pre class="langage-bash"><code># cd pour *change directory* : change le dossier de travail du terminal vers '~/Desktop' (le Bureau de l'utilisateur courant) + [Entrée]
cd ~/Desktop 

# télécharge en les clonant les fichiers
git clone https://github.com/jbidoret/ramdam/ 

# change le dossier de travail du terminal vers '~/Desktop/ramdam' 
cd ramdam 

# affiche dans le Finder le dossier téléchargé
open . </code></pre>
            </p>
            <p class="note">
                Installer le système de gestion de versions <strong>git</strong> peut se faire de multiples manières selon votre plateforme (mac, windows ou linux). <a href="http://git-scm.com/downloads">Voir ici</a>. (Ceci n’est pas indispensable à la poursuite du temps fort.)
            </p>
            <p>
                Pour mettre à jour les fichiers, dans le Terminal, toujours dans le même dossier, taper : <code langage="shell">git pull</code>
            </p>
            </section>
            -->
        <section class="section" id="ressources">
            
            <h2 class="section-subtitle">
                Ressources
            </h2>
            <ul class="list">
                <li>Une connaissance de base du HTML et du CSS est requise. Les ressources de l’ÉSA sont accessibles ici :  <strong><a href="http://ateliers.esapyrenees.fr/web">ateliers.esapyrenees.fr/web</a></strong></li>
                <li>Le site Mozilla developper network est une ressource extrêmement complète sur javascript : <strong><a href="https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide">Mozilla developper network</a></strong></li>
                <li>La documentaton de la librairie jQuery est elle aussi très complète et abondamment illustrée par de nombreux exemples : <strong><a href="http://api.jquery.com/">api.jquery.com</a></strong></li>
            </ul>
        </section>
        <section class="section" id="warning">
                <p>
                Les <i>snippets</i> de code ci-dessous, s’ils restent valables en 2020 sont écrits dans une syntaxe ancienne. Javascript est un langage très puissant et très utilisé, qui évolue très vite et dont ces ressources ne peuvent se faire le miroir en temps réel.
                </p>
        </section>

        

        <section class="section" id="introduction">
            
            <h2 class="section-subtitle">
                Introduction
            </h2>
            <h3>Premiers pas</h3>
            <p>
                Le code javascript peut être écrit directement à l’intérieur des balises <code>&lt;script&gt;</code> d’une page HTML, ou être inclus via un fichier externe.
                Un navigateur lit le contenu d’un script de bas en haut (sauf si on lui demande de faire autrement).                
            </p>
            <p>
                En interne :
                <pre class="langage-html"><code>&lt;script&gt;
    alert("Salut, tout le monde.");
&lt;/script&gt;</code></pre>
            </p>
            <p>
                En externe :
                <pre class="langage-html"><code>&lt;script src="fichier.js"&gt;&lt;/script&gt;</code></pre>
                Attention au chemin d’accès au fichier !
            </p>
            <p class="exemple">
                <a href="exemples/00/">00</a>
            </p>
            <h3>La console</h3>
            <p>
                Les navigateurs modernes disposent d’une console javascript, qui est un outil indispensable, à la fois pour résoudre des erreurs, et pour essayer des lignes de code.
            </p>
            <p>
                Ouvrir la console (⌥⌘I dans Firefox, Safari ou Chrome ; dans Safari, il est nécessaire d’activer l’inspecteur Web en cochant la case “Afficher le menu Développement” dans le menu Safari > Préférences > Avancées), atteindre la console et taper <code>alert("Salut, tout le monde.");</code>.
            </p>
            <p>
                On peut utiliser la console depuis le code javascript : <code>console.log("Salut, tout le monde.");</code>.  
            </p>
            <p class="exemple">
                <a href="exemples/01/">01</a>
            </p>
          </section>




        <section class="section" id="variables">
            
            <h2 class="section-subtitle">Variables</h2>
            <p>
                Une variable est un espace de stockage, un nom symbolique, pour stocker une valeur.
            </p>
            <p>
                Une <strong>variable</strong> est composée d’un <strong>nom</strong> (ou identifiant) et d’une <strong>valeur</strong>. Pour la déclarer, il faut utiliser le mot clé <code>var</code>. Pour lui attribuer une valeur, il faut utiliser le signe <code>=</code> ; et terminer la ligne par un <code>;</code> :
                <pre class="langage-js"><code>var nom = valeur;</code></pre>
                Une variable peut être <i>déclarée</i>, tout en n’étant pas <i>initialisée</i>. Une fois crée, on peut l’initialiser :
                <pre class="langage-js"><code>var nom;
nom = valeur;</code></pre>
            </p>
            <h3>Valeurs</h3>
            <p>
                Dans javascript, une variable est dite "typée dynamiquement". On ne sait pas à priori si elle contient un nombre, une liste (ou <i>tableau</i>), une fonction, un “objet” ou autre chose…
            </p>
            <p>
                Les valeurs simples sont : <code>number</code>, un nombre, qui peut être entier ou flottant ; <code>string</code>, une chaîne de caractères ; un <code>boolean</code>, sorte d’interrupteur qui n’a que deux valeurs possibles (<code class="langage-js">true</code> ou <code class="langage-js">false</code>). On trouve également les valeurs <code>null</code>(aucune valeur) et <code>undefined</code> (valeur non définie).
                <pre class="langage-js"><code>var ma_chaine = "Hifi"; 
// Une chaîne de caractères se place entre guillemets (droits, doubles ou simples)
var mon_nombre = 20; 
// un nombre n’a pas de guillements
var mon_autre_nombre = 17 + 3; 
// Javascript sait faire des maths… 
var javascript_cest_facile = true; 
// n’est-ce-pas ?</code></pre>
            </p>
            <p>
                Des valeurs plus complexes existent : ce sont les mystérieux <strong>objets</strong>, dont on parlera plus tard #oupas ; les <strong>tableaux</strong>, qui servent à faire des listes ; et les <strong>fonctions</strong>, qui servent à …faire des trucs, et dont on parlera vraiment plus tard.
                <pre class="langage-js"><code>var mon_objet = {}; 
var ma_liste = ['pierre', 'papier', 'ciseaux'];
var ma_fonction = function(){
    // fera quelque chose plus tard
}</code></pre>
            </p>
            <p>
                En passant, on aura remarqué que l’on peut inscrire des commentaires dans du code javascript.
                <pre class="langage-js"><code>// sur une seule ligne

/*
    ou sur 
    plusieurs
    lignes
*/</code></pre>
            </p>

            <h3>Opérations</h3>
            <p>
                Oui, Javascript peut faire des additions, des divisions, des multiplications, des soustractions et quantité d’autres opérations sur les nombres qui nous seront fort utiles plus tard.
                <pre class="langage-js"><code>var torchons = 4; 
var serviettes = 2; 
// ou
var torchons = 4, 
    serviettes = 2;
// les deux notations ci-dessus sont équivalentes
console.log(torchons + serviettes);
// affiche 6 dans la console 
torchons = 6;
// une variable a comme immense intérêt qu’elle peut varier 
// ici, on assigne à la variable torchons une nouvelle valeur
console.log(torchons + serviettes);
// affiche 8 dans la console 
console.log("torchons" + serviettes);
// affiche "torchons2" dans la console 
// si l’on peut effectivement aditionner des torchons et des serviettes, 
// l’adition de variables de type différent provoque parfois des résultats innatendus
console.log( torchons / serviettes);
// affiche "3" dans la console (6 divisé par 2, vous suivez ?)
console.log( "torchons" * serviettes);
// affiche NaN, ou Not a Number ; on ne peut pas diviser une chaine de caractères par un nombre</code></pre>
            </p>

            <h3>Tableaux</h3>
            <p>
                Les tableaux, ou <code>Array</code>, sont des listes pouvant contenir tous types de données, y compris d’autres tableaux.
            </p>
            <p>
                Chaque élément d’un tableau est accessible via son <strong>index</strong>, qui représente sa position (son ordre) dans le tableau.
                Le premier élément d’un tableau a l’index <strong>0</strong>;
                <pre class="langage-js"><code>var un_tableau_vide = [];
var choses_a_faire = ['Manger', 'Dormir', 'Prendre des vacances'];
choses_a_faire[1];
// 'Dormir'</code></pre>                
            </p>
            <p>
                Il est possible de réassigner une valeur :
                <pre class="langage-js"><code>var choses_a_faire = ['Manger', 'Dormir', 'Prendre des vacances'];
choses_a_faire[2] = "Travailler";
choses_a_faire;
// ['Manger', 'Dormir', 'Travailler']</code></pre>        
            </p>
            <p>
                On peut connaitre la longueur d’une liste (le nombre d’éléments qu’elle contient) en appelant la propriété <code>length</code>
                <pre class="langage-js"><code>var choses_a_faire = ['Manger', 'Dormir', 'Travailler'];
choses_a_faire.length;
// 3</code></pre>     
            </p>
            <p>
                On peut ajouter ou supprimer des éléments en utilisant les méthodes <code>push</code> et <code>pop</code> :
                <pre class="langage-js"><code>var choses_a_faire = ['Manger', 'Dormir', 'Travailler'];
choses_a_faire.push('Coder');
choses_a_faire;
// ['Manger', 'Dormir', 'Travailler', 'Coder']
choses_a_faire.pop();
// ['Manger', 'Dormir', 'Travailler']
</code></pre>       
            </p>
            <p class="exercice"><a href="exemples/04/">04</a></p>

            <h3>Objets</h3>
            <p>
                Dans javascript, les “objets” sont comme ceux de la vraie vie. Ils ont des propriétés et des capacités : 
                Un chat a une couleur, cette couleur peut être noir, ou blanc, ou bleu mais c’est plus rare.<br>
                Il peut miauler, courir, sauter et (<a href="http://www.gifbin.com/bin/20052777.gif">parfois</a>) danser comme Travolta.
            </p>
            <p>
                <pre class="langage-js"><code>var chat = {
    couleur: "noir",
    age: 9,
    miaule: function () { alert("Miiaaaaww…"); }
}</code></pre>
            </p>
            <p>
                On peut ensuite accéder à ses propriétés grace à la syntaxe à point :
                <pre class="langage-js"><code>chat.couleur;
// "noir"
chat.age;
// 9
chat.miaule();
// les parenthèses sont nécessaires pour invoquer la fonction (qui dans le cas d’un objet prend le nom de méthode)</code></pre>
            </p>
            <p>
                On peut réassigner une propriété :
                <pre class="langage-js"><code>chat.couleur = 'rouge';</code></pre>
                Ou en ajouter “à la volée” :
                <pre class="langage-js"><code>chat.vies = 9;</code></pre>
                Ou lui attribuer une nouvelle méthode :
                <pre class="langage-js"><code>chat.danse = function(){ document.location = "http://www.gifbin.com/bin/20052777.gif"; };
chat.danse();</code></pre>
            </p>
      </section>
      



      <section class="section" id="logique">
            <h2 class="section-subtitle">Logique</h2>
            <p>
                Il est souvent intéressant de comparer des valeurs. Les opérateurs logiques sont là pour ça ; ils renvoient une valeur de type <code>boolean</code> : <code>true</code> ou <code>false</code>.                
            </p>
            <p>
               Pour tester si deux valeurs sont égales, on utilise les opérateurs <code>===</code> ou <code>==</code> 
               <pre class="langage-js"><code>12 === 12;
// true
'12' === 12;
// false 
// on ne peut pas comparer une chaîne de caractères (fut-elle composée de chiffres) et un nombre.</code></pre>
            </p>
            <p>
               Pour tester si deux valeurs <strong>ne sont pas </strong> égales, on utilise l’opérateur <code>!==</code>  ou <code>!=</code> 
               <pre class="langage-js"><code>12 !== 12;
// false
12 !== 13;
// true</code></pre>
            </p>
            <p>
                On peut également déterminer si une valeur est plus grande (<code>&gt;</code>), ou plus petite (<code>&lt;</code>) qu’une autre :
                <pre class="langage-js"><code>12 &gt; 13;
// false
11 &lt; 12;
// true
12 &gt; 12;
// false  ; les opérateurs &gt; et &lt; sont stricts, mais il existe &gt;= et &lt;= 
12 &gt;= 12;
// true
12 &lt;= 12;
// true</code></pre>
            </p>

        </section>

        <section class="section" id="conditions">
            <h2 class="section-subtitle">Conditions</h2>
            <p>
                La logique est utilisée pour prendre des décisions dans le code, par exemple d’effectuer telle action ou telle autre.
                Cela requiert l’évaluation d’une condition ; les plus simples d’entre elles étant le <code>if</code> (si…) et le <code>else</code> (sinon…).
                <pre class="langage-js"><code>var sel = 8, 
    poivre = 5;
if (sel > poivre) {
    // c’est mauvais pour le cœur
    // seul le code à l’intérieur de ces premières accolades sera exécuté puisque sel > poivre est true
} else {
    // le code à l’intérieur de ces derrnières accolades ne pourra être exécuté que si la valeur de poivre change
}</code></pre>
            </p>
            <p>
                Attention à la syntaxe : le mot clé <code>if</code> ou <code>else</code>, les parenthèses, les accolades…
            </p>
          </section>

        <section class="section" id="boucles">
            <h2 class="section-subtitle">Boucles</h2>
            <p>
                Les boucles permettent de répéter la même instruction de code plusieurs fois, sans avoir à le ré-écrire.
            </p>
            <p>
                Le mot-clé <code>while</code> permet de faire une boucle dans laquelle on doit modifier la valeur évaluée:
                <pre class="langage-js"><code>var i = 1;
while (i &lt; 10) {
    console.log(i);
    i = i + 1;
}
// i vaut maintenant 10</code></pre>
            </p>
            <p>
                Le mot-clé <code>for</code> est la manière la plus courante de faire des boucles. Mais là où <code>while</code> ne prend qu’un seul paramètre (la condition à évaluer), <code>for</code> en demande 3 : une variable initiale, une condition et une expression finale, séparées par des <code>;</code>
                <pre class="langage-js"><code>for ( var i = 0; i &lt; 10; i++) {
    // au départ, on crée la variable i, en l’initialisant à 0
    // on vérifie que i est inférieur à 10
    // on "incrémente" la variable i (= on lui ajoute 1)
    console.log(i);
}
// i ne vaut rien du tout, sa “portée“ (scope) est restreinte à l’intérieur de la boucle</code></pre>
            </p>
            <p><code>i++</code> est equivalent à <code>i = i + 1</code>.</p>
</section>

        <section class="section" id="fonctions">
            <h2 class="section-subtitle">Fonctions</h2>
            <p>
                Les fonction sont les “verbes” du javascript ; elles permettent de <strong>faire des choses</strong>. Il faut tout d’abord les déclarer, grâce au mot-clé <code>function</code>, suivi de parenthèses (qui permettront de transmettre des paramètres à la fonction) et d’accolades (qui contiennent le code à exétuter).
                Puis, une fois délarée, on peut l’invoquer.
                <pre class="langage-js"><code>var dis_bonjour = function(){
    alert ("Hello !");
}
// la fonction est délarée sous le nom dis_bonjour

dis_bonjour();
// elle est maintenant invoquée, exécutée</code></pre>
            </p>
            <p>
                Une fonction peut prendre un ou plusieurs paramètres 
                <pre class="langage-js"><code>var dis_bonjour = function(a_qui){
    alert ("Bonjour " + a_qui + " !");
}

dis_bonjour('monsieur');</code></pre>
            <pre class="langage-js"><code>var dis_bonjour = function(a_qui, sur_quel_ton){
    // on évalue la variable sur_quel_ton (deuxième variable passée en paramètres)
    // et on effectue une action différente selon sa valeur
    if (sur_quel_ton == "reverencieux") {
        alert ("Mes cordiales salutations, " + a_qui + " !");
    } else if (sur_quel_ton == "familier") {
        alert ("Salut " + a_qui + " !");
    } else {
        alert ("Yo " + a_qui + " !");
    }
}

dis_bonjour('monsieur', 'reverencieux');
dis_bonjour('monsieur', 'familier');
dis_bonjour('monsieur');</code></pre>
            </p>
            <p>
                Une fonction, plutôt que faire quelque chose, peut également renvoyer une valeur, grâce au mot-clé <code>return</code>.
                <pre class="langage-js"><code>var ajoute = function (a, b) {
    return a + b;
}
// déclarée

ajoute(1,3);
// invoquée, retourne 4, si mes calculs sont bons</code></pre>
            </p>
            <p class="exemple">
                <a href="exemples/03/">03</a>
            </p>

            
        </section>

        <section class="section" id="dom">
            
            <h2 class="section-subtitle">Le DOM</h2>
            <p>
                Le DOM, ou <i>Document Object Model</i> permet de manipuler la structure et le style d’une page HTML. Il représente la manière dont le navigateur voit la page HTML, et permet de la modifier avec JavaScript.
            </p>
            <p>
                Le DOM est une structure constituée comme un arbre, avec ses branches et ses rameaux.<br> Il existe un élément racine (<code>&lt;html&gt;</code>), qui a deux branches (<code>&lt;head&gt;</code> et <code>&lt;body&gt;</code>). On évoque ces relations entre branches et rameaux par la métaphore des parents et des enfants : <code>&lt;body&gt;</code> est un enfant de <code>&lt;html&gt;</code>.
            </p>
            <p>
              Le DOM est “visible” en ouvrant l’inspecteur web de vos outils de développement.
            </p>
        </section>

        <section class="section" id="jquery">
            <h2 class="section-subtitle">jQuery</h2>
            <p>
                Au cours de sa vie, Javascript a été implémenté de manières très différentes selon les constructeurs (Netscape <i>vs</i> Microsoft). Ses différences de fonctionnement d’un navigateur à l’autre, d’une version d’un navigateur à l’autre, ont conduit des développeurs à créer des librairies capables d’harmoniser le comportement sur tous les navigateurs. C’est le cas de <a href="http://jquery.com">jQuery</a>, mais aussi de Mootools, Prototype, Zepto…
            </p>
            <p>
                La suite de cette introduction utilisera intensivement le framework jQuery ; mais il est capital de comprendre que jQuery, développé en javascript, <strong>est</strong> du javascript.
                jQuery nous servira à manipuler des variables, des objets, des tableaux, etc. et à interagir avec le DOM.
            </p>
            <h3>Events et callbacks</h3>
            <p>
                Dans notre code javascript, la plupart des instructions seront soumises à des <strong>événements</strong>. Ces évenements peuvent être le chargement de la page ou d’une image, un clic ou une action tactile de l’utilisateur, ou des quantités d’autres. En javascript, beaucoup d’objets sont dits “event-emitters”, ils recçoivent et envoient des événements.
                <pre class="langage-js"><code>var faisQuelqueChose = function (event) {
    // fais quelque chose
};
var bouton = document.querySelector('#bouton');
bouton.addEventListener('click', faisQuelqueChose);</code></pre>
            </p>
            <p>
                Avec jQuery, les deux lignes ci-dessus peuvent s’écrire :
            </p>
                <pre class="langage-js"><code>$('#bouton').on('click', faisQuelqueChose);</code></pre>
            <p>
                jQuery possède une fonction maîtresse au nom très court : <code>$</code>. Cette fonction très puissante permet ici à jQuery de sélectionner l’élément dont l’<code>id</code> est “bouton”, de lui attacher un écouteur sur l’événement <code>click</code>, et d’exécuter la fonction <code>faisQuelqueChose</code> quand on clique dessus.<br>
                NB: <code>id="machin"</code> en HTML se traduit <code>#machin</code> en css.
            </p>
            <h3>jQuery DOM API</h3>
            <p>
                Grâce à une syntaxe semblables aux sélecteurs utilisés en CSS, jQuery peut <strong>sélectionner</strong> un élément de la page et le <strong>manipuler</strong> (changer son style, ses attributs, son contenu…).<br>
                <pre class="langage-js"><code>$('#grosbouton').css('font-size', '30px');    </code></pre>
            </p>
            <p>
                Les istructions peuvent être enchaînées :
                <pre class="langage-js"><code>$('#grosbouton').css('font-size', '30px').height(100);    </code></pre>
            </p>
            <p>
                La syntaxe se comporte comme une phrase : — “Eh, toi, le gros bouton, quand on te clique dessus, devient rouge” :
                <pre class="langage-js"><code>$('#grosbouton').on('click', function(){
    $(this).css('color', 'red');
});</code></pre>
            </p>
            <p>
                Ici, on a introduit deux notions importantes : le mot clé <strong><code>this</code></strong> et une <strong>fonction anonyme</strong>. Le mot <code>this</code> désigne l’élément sur lequel on a cliqué ; la fonction anonyme ne sert pas ailleurs dans notre code ; on peut donc la déclarer au même instant qu’on l’exécute.
            </p>
            <h3>Getters et Setters</h3>
            <p>
                Ci dessus, nous avons utilisé les méthodes <code>.css</code> et <code>.height</code> pour <strong>attribuer</strong> des valeurs css et une hauteur à notre bouton. Ces méthodes peuvent également être utilisées pour <strong>lire</strong> ces valeurs css et de hauteur. Elles sont alors invoquées sans l’argument d’affectation :
                <pre class="langage-js"><code>$('#grosbouton').css('font-size');
// retourne '30px'
$('#grosbouton').height();
// retourne '100px'
$('#grosbouton').height(200);
// change la hauteur du bouton à 200px
$('#grosbouton').height();
// retourne maintenant '200px'</code></pre>
            </p>
            
        </section>

        <section class="section" id="random">
            
            <h2 class="section-subtitle">Aléatoire</h2>
            <p>
                La fonction <code>random</code>, accessible via le module <code>Math</code>, permet de générer un nombre aléatoire (dit <a href="http://fr.wikipedia.org/wiki/G%C3%A9n%C3%A9rateur_de_nombres_pseudo-al%C3%A9atoires">pseudo-aléatoire</a>) entre 0 et 1.
            </p>
                <pre class="langage-js"><code>Math.random();
// retourne un nombre décimal entre 0 et 1
</code></pre>      
            <p>
                À partir de ce comportement simple, il est possible de générer de très nombreuses valeurs :
            </p>
<pre class="langage-js"><code>Math.random() * 4; 
// retourne un nombre décimal entre 0 et 4 ; par ex. : 0.802936547
Math.random() * 150 ;
// retourne un nombre décimal entre 0 et 150 ; par ex. : 127.365478029
Math.floor(Math.random() * 150) ;
// retourne un nombre entier (arrondi) entre 0 et 150 ; par ex. : 127

var positif_ou_negatif = function(){
    if(Math.random() > 0.5){
        // une chance sur deux – à peu près – que la valeur retournée soit supérieure à 0.5
        return -1;
    } else { 
        return 1 
    }
}
Math.random() * 150 * positif_ou_negatif();
// retourne un nombre décimal entre -150 et 150
</code></pre>       
            <p>
            Pour une plus grande facilité d’utilisation, on peut écrire une petite fonction utilitaire, qui retourne un nombre entre a et b :
            </p>            
            <pre class="langage-js"><code>function rand(a, b){
    return Math.random() * (b - a) + a
}     
// qu’on peut invoquer ainsi :
rand(-250, 500);
// retourne 323.8463423220761 (par exemple)

// ou si l’on veut un nombre entier :
Math.round(rand(-250, 500));
// retourne 323 (par exemple)</code></pre>    
            <h2 class="section-subtitle">Contrainte</h2>
            <p>
                Une fois établie cette possibilité d’un nombre “purement” aléatoire, il est possible de contraindre son utilisation:
            </p>
                <pre class="langage-js"><code>Math.floor(Math.random() * 4) * 100 + 200;
// retourne 200, 300, 400, ou 500

Math.round(Math.random() * 4) * 100 + 200;
// retourne 200, 300, 400, 500 ou 600
// la différence vient de l’utilisation de round plutôt que floor :
// round arrondit à l’entier le plus proche, floor arrondit à l’entier inférieur</code></pre>  
            <p>
                Un nombre entier aléatoire peut être utilisé pour sélectionner une valeur dans une liste :
            </p>
                <pre class="langage-js"><code>var couleurs = ["#FF0000", "#FF00FF", "#00FF00", "#0000FF"]
var quel_index = Math.floor(Math.random() * couleurs.length);
// retourne 0, 1, 2 ou 3
couleurs[quel_index];
// retourne du rouge, du magenta, du vert, ou du bleu
</code></pre>       
            <p>
                Pour une couleur “purement” aléatoire, il est également possible d’écrire une petite fonction : 
            </p>            
<pre class="langage-js"><code>function randint(a, b){
    return Math.round( Math.random() * (b - a) + a)
}

function randColor(){  
    var red = randint(0,255),
        green = randint(0,255),
        blue = randint(0,255)
    return 'rgb('+ red +','+ green +','+ blue +')';
}</code></pre>
            <p class="exemple">
                <a href="exemples/11/">11</a>
            </p>
        </section>

        <div id="toc"></div>

    </div>
        

        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  