# Templates

Les *templates* contiennent la structure HTML de chaque type de page, augmentée de PHP pour afficher le contenu.

Les *templates* sont stockés dans le dossier `/site/templates/`.

Pour créer un nouveau *template* pour une page type, créer un fichier `.php` dont le nom soit équivalent à celui du fichier `.txt` dans le dossier `/content/`.

## Quelques notes sur PHP

Le langage PHP est un des plus répandus pour développer des sites web (à sa naissance, son acronyme était *Personal Home Page*).

#### Important

Le code PHP est toujours encapsulé entre les balises `<?php ` et `?>`.   
Chaque ligne doit se terminer par`;`.

```php
<?php 
    // affiche "Hello World"
    echo "Hello World"; 
?>
```
#### Les variables

Le nom des variables en PHP commence toujours par un `$`. Différents types de variables existent :

```php
$machin = "bidule"; // une chaîne de caractères (String) 
$truc = 0; // un nombre entier (Int)
$chose = 3.14; // un nombre décimal (Float)
$bazar = true; // un booléen : true/vrai ou false/faux (Bool) 
$zero = NULL; // la variable existe, mais sa valeur est nulle (NULL).
$choses = ["un", "deux", "trois"]; // une liste (Array) d’éléments – ici, de chaînes

// Ci-dessous, un objet (Object) 
// On n’en créera pas dans le contexte de Kirby, 
// mais on en affichera les propriétés et on en utilisera les méthodes
class Cat { public function miaule() { return "Maaaow"; } }
$garfield = new Cat();
echo $garfield->miaule();
```
#### Afficher du contenu

En PHP, et particulièrement dans le contexte de Kirby, l’affichage des valeurs de variables est l’opération la plus fréquente.
Il existe une notation raccourcie pour faire appel à la méthode `echo` :
```php
<?= $machin ?>
// est équivalent à :
<?php 
    echo $machin; 
?>
```

## PHP & Kirby

Dans le contexte des templates de Kirby, seules quelques bases de PHP sont nécessaires.

### Les conditions
Pour tester si une page a des enfants (des sous-pages), pour savoir si une variable a une valeur et pour faire autre chose dans cas contraire…
```php
if ($machin == "bidule") {
    echo "Ouaip";
} else {
    echo "Nope";
}
```
Peut aussi s’écrire :
```php
<?php if ($machin == "bidule") : ?>
    Ouaip
<?php else : ?>
    Nope
<?php endif ?>
```

### Les boucles
```php
foreach ($pages as $page) {
    echo "<h1>" . $page->title() . "</h1>";
} 
```
Peut aussi s’écrire :
```php
<?php foreach ($pages as $page) : ?>
    <h1><?= $page->title() ?></h1>
<?php foreach ?>
```
### Les variables prédéfinies
Dans chaque page, Kirby met à dispostion les variables `$page` et `$site` qui permettent d’accéder au contenu de la page en cours ou du site.
```html
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <meta name="keywords" content="<?= $site->keywords() ?>">
  <title>
    <?= $page->title()->html() ?> | <?= $site->title()->html() ?>
  </title>
</head>
<body>

  <header>
    <h1>
      <a href="<?= $site->url() ?>">
        <?= $site->title()->html() ?>
      </a>
    </h1>
  </header>

  <main>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </main>

</body>
</html>
```

## Les snippets

*[DRY]: Don’t repeat yourself

Les snippets sont des petits morceaux de code réutilisables.
Ils permettent de conserver un code le plus DRY possible, ce qui facilite sa maintenance.    
Ils sont stockés dans le dossier `/site/snippets/`.

L’exemple de code ci-dessus gagnera à être découpé en :

`/site/snippets/header.php`
```html
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?= $site->description() ?>">
  <meta name="keywords" content="<?= $site->keywords() ?>">
  <title>
    <?= $page->title()->html() ?> | <?= $site->title()->html() ?>
  </title>
</head>
<body>

  <header>
    <h1>
      <a href="<?= $site->url() ?>">
        <?= $site->title()->html() ?>
      </a>
    </h1>
  </header>
```

`/site/snippets/footer.php`
```html
</body>
</html>
```

`/site/templates/project.php`
```html
<?php snippet("header") ?>
  <main>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </main>
<?php snippet("footer") ?>
```