# PHP

PHP est un langage de programmation principalement utilisé pour produire des pages Web dynamiques[^dynamique]. Né dans le milieu des années 90, il est l’un des langages qui ont concourru au développement du web, notamment en favorisant l’émergence de sites et de gestionnaires de contenus dynamiques (Wikipedia, Facebook, Wordpress, etc.).

[^dynamique]:On entend _dynamique_ en opposition à _statique_, tels qu’un ensemble de pages HTML figées.

## Prérequis {#prerequis}

PHP s’exécute dans le contexte d’un serveur web. Il peut être local (serveur de test et de développement) ou distant (chez un hébergeur).

* Un serveur de développement : [MAMP](http://mamp.info/) ou [XAMPP](https://www.apachefriends.org/index.html) ;    
<small>MAMP ou XAMPP permettent d’installer sur un mac ou un pc un “serveur de développement” qui reproduit les conditions et la structure logicielle d’un “vrai” serveur web. En démarrant l’application, on lance plusieurs programmes (Apache, PHP, MySQL) qui permettent de “servir” des sites web localement (sur http://localhost ou http://localhost:8888).</small>

* Un hébergeur : [Alwaysdata](https://alwaysdata.com/) ou [OVH](https://ovh.com) ;    
<small>NB: les étudiants de l’ÉSAD Pyrénées peuvent créer un compte Alwaysdata gratuit à partir d’[ici](https://alws.link/gyB4xU46). De nombreux hébergeurs existent, commerciaux ou associatifs. Alwaysdata fournit un très bon service, mais est comparativement plus cher que d’autres (OVH, Gandi, 1&1, Amen…).</small>

Dasn le contexte de cette introduction, l’usage de PHP sera intimement associé à HTML (mais aussi CSS et JavaScript). Une connaissance de base des langages du web est donc requise.

## Démarrer {#start}

Dans le contexte d’un installation de MAMP, le dossier “racine” de votre serveur web est situé par défaut dans un dossier dénommé `htdocs`. Sur Mac OS, il est situé dans `/Applications/MAMP/htdocs/`. Sur Windows, dans `C:\MAMP\htdocs\`.

Dans le cas d’un MAMP nouvellement installé, un fichier `index.php` a automatiquement été créé dans ce dossier. On peut le supprimer, et le re-créer dans notre éditeur de code favori.

Pour être exécuté par le _moteur_ PHP, l’extension du fichier doit être `.php`. Le fichier correspondant à la page d’accueil du site doit être nommé `index.php` si l’on veut qu’il soit exécuté et affiché par défaut.


## Syntaxe {#syntax}

#### Important

Le code PHP est toujours encapsulé entre les balises `<?php ` et `?>`.   
Chaque ligne **doit** se terminer par un ` ; `.

```php
<?php 
    // affiche "Hello World"
    echo "Hello World"; 
?>
```

Les commentaires peuvent être sur une seule ligne, ou sur plusieurs :

```php
<?php 
    // commentaire bref, sur une seule ligne
    /*
      Commentaire plus long
      sur plusieurs lignes
    */
?>
```

## Les variables {#variables}

Le nom des variables en PHP commence toujours par un `$`. Différents types de variables existent :

```php
$machin = "bidule"; // une chaîne de caractères (String) 
$truc = 18; // un nombre entier (Int)
$chose = 3.14; // un nombre décimal (Float)
$bazar = true; // un booléen : true/vrai ou false/faux (Bool) 
$zero = NULL; // la variable existe, mais sa valeur est nulle (NULL).
$choses = ["un", "deux", "trois"]; // une liste (Array) d’éléments – ici, de chaînes

// Ci-dessous, un objet (Object) 
class Cat { public function miaule() { return "Maaaow"; } }
$garfield = new Cat();
echo $garfield->miaule();
```



#### Afficher du contenu

En PHP, l’affichage des valeurs de variables est l’une des opérations les plus fréquentes.
Il existe une notation raccourcie pour faire appel à la méthode `echo` :
```php
<?= $machin ?>
// est équivalent à :
<?php echo $machin; ?>
```

On peut *concaténer* des valeurs grâce à l’opérateur `.` :
```php
$age = 21;
$prenom = "Sam";
echo $prenom . " a " . $age . " ans."; // affiche “Sam a 21 ans”
// peut également s’écrire :
echo "$prenom a $age ans.";
```




Le contenu d’une liste peut être affiché de différentes manières. Soit par l’intermédiaire d’une boucle ([voir plus bas](#loops)) pour traiter l’ensemble d’une liste, soit – pour une valeur spécifique – en utilisant les crochets \[\]:
```php
$choses = ["machin", "bidule", "truc"];
echo $choses[0]; // affiche “machin” – le premier élément de la liste est en position 0
```
La méthode `implode` permet de concaténer les éléments d’une liste
```php
$liste = ["un", "deux", "trois"]; 
echo implode(" et ", $liste); // affiche “un et deux et trois”
```


## Les conditions  {#conditions}
Pour tester une condition, pour savoir si une variable a une valeur et pour faire autre chose dans cas contraire…
```php
if ($machin == "bidule") { // noter le double =, qui permet de comparer l’égalité
    echo "Ouaip";
} else {
    echo "Nope";
}
```
Peut aussi s’écrire (syntaxe préférable quand on mêle PHP et HTML dans un même fichier) :
```php
<?php if ($machin == "bidule") : ?>
    Ouaip
<?php else : ?>
    Nope
<?php endif ?>
```

## Les boucles {#loops}

La fonction `foreach` permet de parcourir les éléments d’une liste (Array) ou d’un objet. 

```php
$liste = ["un", "deux", "trois"]; 
foreach ($liste as $item) {
    echo "<p>" . $item . "</p>";
} 
```

Peut aussi s’écrire (syntaxe préférable quand on mêle PHP et HTML dans un même fichier) :

```php
<?php foreach ($liste as $item)) : ?>
    <p><?= $item ?></p>
<?php endforeach ?>
```

Au sein de la boucle (entre `foreach` et `endforeach`), chaque élément de la liste est nommé selon la valeur définie par le mot-clé `as` – ici, `$item`.


## Les inclusions {#includes}

PHP permet d’inclure un fichier, via la fonction `include`. Ici, le dossier contient quatre fichiers : `index.php` (le fichier “maître”), `header.php`, `nav.php` et `footer.php`. Chaque fichier inclus peut contenir du PHP, exécuté dans le contexte du fichier maître.

```HTML
<?php include("header.php") ?>
<?php include("nav.php") ?>
<main>
  Le contenu de la page
</main>
<?php include("footer.php") ?>
```

PHP peut également de lire le _contenu textuel_ d’un fichier, retourné sous la forme d’une chaîne de caractères, via la fonction `file_get_contents` :
```php
// un fichier local
$pigeon = file_get_contents('pigeon.svg'); 
echo($pigeon);
// ou un fichier distant
$contenu = file_get_contents('https://mensuel.framapad.org/p/skldhwn3h5-9pzm/export/txt');
echo($contenu);
```    

Un exemple de ces deux types d’inclusions est [téléchargeable ici](php-exemple-includes.zip) et [visible ici](exemples/includes/).  

## Formulaires {#formulaires}

Si HTML possède tous les éléments nécessaires à la [construction de formulaires](../html/content/#forms), il n’est pas capable d’en traiter la soumission.

PHP possède deux méthodes pour recevoir des données de l’utilisateur:
* via la méthode `GET`, PHP reçoit les informations à travers une requête transmise dans l’URL (voir plus bas, les [paramètres d’URL](#querystrings))
* via la méthode `POST`, les informations sont transmises dans l’entête de la requête HTTP 

La soumission de formulaires s’effectue généralement via la methode POST, qui n’expose pas les informations transmises dans l’URL, offre une plus grande souplesse et une plus grande sécurité.

```php
<form method="POST">
    <input type="text" name="name">
    <input type="number" name="age">
    <input type="hidden" name="secret" value="Mystère">
    <button type="submit">OK</button>
</form>
<?php 
    // L’ensemble de la requête postée par la soumission du formulaire sera accessible dans une variable nommé “$_POST”
    // isset vérifie l’existence d’une variable
    // Ici, on vérifie l’existence dans la requête de la variable “secret”
    if(isset($_POST['secret'])){
        // print_r affiche “proprement” le contenu d’une variable, notamment ici, une liste (un array)
        print_r($_POST);
    }
?>

```
Voir cet [exemple](exemples/post/) de manière plus détaillée, ou [téléchargez-le](php-exemple-post.zip).

## Paramètres d’URL {#querystrings}

Via la méthode `GET`, on peut analyser des données transférées via des paramètres d’URL, ou _query string_.   
`GET` peut être utilisé dans le contexte de formulaires, mais aussi dans de simples URLs :


```php
// la requête est transmise à la page index.php, grâce une succession de paramètres suivis de leur valeur 
// ici, un seul paramètre, "id", qui vaut "1" 
<a href="index.php?id=1">un</a>
<a href="index.php?id=2">deux</a>
// ici, deux paramètres, "id" et "color" 
<a href="index.php?id=3&color=red">trois</a>
<?php 
    // L’ensemble de la requête d’URL sera accessible dans une variable nommé “$_GET”
    if(isset($_GET['id'])){
        $id = $_GET['id']; // pour plus de concision
        echo "<img src='$id.jpg'>";
    }
?>
```
Voir cet [exemple](exemples/get/) de manière plus détaillée, ou [téléchargez-le](php-exemple-get.zip).


## Lister le contenu d’un dossier sur le serveur {#list}

PHP permet de créer rapidement des interfaces de visualisation des images contenues dans des dossiers.
Il existe plusieurs méthodes (notamment [`scandir`](https://www.php.net/manual/fr/function.scandir.php)) pour le faire, la plus simple étant d’utiliser la fonction `glob()`.
```php
<a href="index.php?dossier=butterflies">papillons</a>
<a href="index.php?dossier=birds">oiseaux</a>
<a href="index.php?dossier=bugs">coléoptères</a>
<?php 
    if(isset($_GET['dossier'])){
        $dossier = $_GET['dossier']; 
        foreach(glob($dossier.'*.{jpg,JPG,jpeg,JPEG,png,PNG}',GLOB_BRACE) as $file){
            echo "<img src='$file.jpg'>";
        }        
    }
?>
```
Voir cet [exemple](exemples/list/) de manière plus détaillée, ou [téléchargez-le](php-exemple-list.zip).
