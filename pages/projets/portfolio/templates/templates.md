# Templates

Les *templates* contiennent la structure HTML de chaque type de page, augmentée de PHP pour en afficher le contenu. Ils sont stockés dans le dossier `/site/templates/`.

Pour créer un nouveau *template* pour une page type, créer un fichier `.php` dont le nom soit équivalent à celui du fichier `.txt` dans le dossier `/content/`. Par exemple :

**content** : `/content/mes-projets/mon-super-projet/project.txt`  
**blueprint** : `/site/blueprints/project.yml`   
**template** : `/site/templates/project.php`

La relation entre les fichiers se fait grâce à leur nom (c’est aussi le cas pour les *models* et les *controllers* – qui dépassent le cadre de cette introduction).

## Quelques notes sur PHP {#php}

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

Pour aller plus loin avec PHP (pas forcément en contexte Kirby), parcourir [l’introduction à PHP](../../../ressources/php/).

## PHP & Kirby {#kirby}

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
Peut aussi s’écrire (syntaxe préférable dans les templates) :
```php
<?php if ($machin == "bidule") : ?>
    Ouaip
<?php else : ?>
    Nope
<?php endif ?>
```

### Les boucles

La fonction `foreach` permet de parcourir les éléments d’une liste (Array) ou d’un objet. Dans le cas de Kirby, pour les listes de pages, fichiers et utilisateurs, on parle de [collections](https://getkirby.com/docs/cookbook/templating/loops).

```php
foreach ($pages as $page) {
    echo "<h1>" . $page->title() . "</h1>";
} 
```

Peut aussi s’écrire (syntaxe préférable dans les templates) :

```php
<?php foreach ($pages as $page) : ?>
    <h1><?= $page->title() ?></h1>
<?php endforeach ?>
```

Au sein de la boucle (entre `foreach` et `endforeach`), chaque élément de la liste est nommé selon la valeur définie par le mot-clé `as` – ici, `$page`.

Les *collections* peuvent être [triées](https://getkirby.com/docs/cookbook/content/sorting), [filtrées](https://getkirby.com/docs/cookbook/content/filtering) ou limitées.

```php
// filtrer des projets par catégorie
$projects = $page->children()->listed()->filterBy('category', 'webdesign');

// trier les livres (enfants de la page dont l’id est "books") par auteur
$books = page("books")->children()->listed()->sortBy('author',  'asc');

// limiter les pages du même parent à 3
$frangines = $page->siblings()->listed()->limit(3);
```

Voir la documentation pour des exemples avancés de logiques de filtre : [*Filtering compendium*](https://getkirby.com/docs/cookbook/content/filtering).

## Les variables prédéfinies
Dans chaque page, Kirby met à dispostion les variables `$page` et `$site` qui permettent d’accéder au contenu de la page en cours ou du site.

##### `/site/templates/project.php` {.filename}
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

## Les snippets {#snippets}

*[DRY]: Don’t repeat yourself

Les snippets sont des petits morceaux de code réutilisables.
Ils permettent de conserver un code le plus DRY possible, ce qui facilite sa maintenance.    
Ils sont stockés dans le dossier `/site/snippets/`.

L’exemple de code ci-dessus gagnera à être découpé en :

##### `/site/snippets/header.php` {.filename}
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
  <?php // le header principal, tout comme un menu, peut être inclus dans toutes les pages ?>
  <header>
    <h1>
      <a href="<?= $site->url() ?>">
        <?= $site->title()->html() ?>
      </a>
    </h1>
  </header>
```

##### `/site/templates/project.php` {.filename}
```html
<?php snippet("header") ?>
  <main>
    <h1><?= $page->title()->html() ?></h1>
    <?= $page->text()->kirbytext() ?>
  </main>
<?php snippet("footer") ?>
```

##### `/site/snippets/footer.php`  {.filename}
```html
</body>
</html>
```

### Transmettre une variable à un snippet

Il est parfois utile de transmettre une variable à un snippet. Ci-dessous, on parcours les enfants de la page de type “project”, 
et on transmet la variable `$project` au snippet `project.php` qui peut alors utiliser et afficher les propriétés de l’enfant.

##### `/site/templates/projects.php`  {.filename}

```html
<?php snippet('header') ?>

<main>
  <h1>Projets</h1>
  <?php foreach($page->children() as $project): ?>
    <?php snippet('project', ['project' => $project]); ?>
  <?php endforeach ?>
</main>

<?php snippet('footer') ?>
```

##### `/site/snippets/project.php` {.filename}
```html
<article>
  <h1><?= $project->title()->html() ?></h1>
  <time><?= $project->date()->toDate('d/m/Y') ?></time>
  <?= $project->intro()->kirbytext() ?>
  <a href="<?= $project->url() ?>">Lire</a>
</article>
```