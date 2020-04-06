# CSS, JS

Si la structure HTML est déterminée dans les *[templates](../templates)*, la mise en page et le comportement interactif restent guidés par CSS et Javascript.

Pour intégrer des ressources CSS et JS, Kirby met en place un mécanisme spécifique :

```php
<?php // dans /site/snippets/header.php :
<?php css("dossier/fichier.css") ?>
// et dans /site/snippets/footer.php :
<?php js("dossier/fichier.js") ?>
```

Ces instructions produiront :

```html
<link href="http://localhost/portfolio/dossier/fichier.css" rel="stylesheet">
<!-- et -->
<script src="http://localhost/portfolio/dossier/fichier.js" type="text/javascript"></script>
```

## Assets

Il est fréquent de regrouper l’ensemble des fichiers “statiques” (css, js, icônes…) dans un dossier `/assets`, à la racine du site. (*assets* ≈ ressources, actifs…)

```php
<?php css("assets/css/styles.css") ?>
```

## CSS

Kirby permet d’importer plusieurs feuilles de style en même temps: 

```php
<?php css(["assets/css/reset.css", "assets/css/styles.css"]) ?>
```

On peut également utiliser le mot clé `@auto` pour charger des fichiers spécifiques pour chaque template :

```php
<?php css(["assets/css/common.css", "@auto"]) ?>
```

Les fichiers spécifiques à chaque template doivent être stockés dans le dossier `/assets/css/templates` et nommés de la même manière que le template :

`/site/templates/project.php` → `/assets/css/templates/project.css` 

### “*Art directed pages*”
On peut parfois vouloir ajouter un style spécifique à un projet / une page du site sans vouloir modifier la CSS générale. Kirby décrit [ce scénario ici](https://getkirby.com/docs/cookbook/templating/art-directed-blog-posts).

En uploadant un ou plusieurs fichiers css (et js) depuis le panel, on peut simplement les appeler depuis le snippet `header.php` (et `footer.php` pour le javascript) :

##### `/site/snippets/header.php`  {.filename}
```php
<?php 
$css_files = $page->files()->filterBy('extension', 'css');
foreach($css_files as $custom_css):
  echo css($custom_css->url());
endforeach;
?>
```

Une solution alternative pour pouvoir cibler des éléments dans des pages spécifiques est d’ajouter des `class`, un `id` ou des attributs `data` au `body`.

##### `/site/snippets/header.php`  {.filename}
```php
<body
    data-page-id="<?= $page->slug() ?>"
    data-template="<?= $page->template() ?>"
    data-intended-template="<?= $page->intendedTemplate() ?>">
    <!-- 
      intendedTemplate() renvoit le nom du fichier txt du dossier content,
      même si aucun fichier correspondant n’existe dans le dossier `site/templates`
    -->
```

On peut alors cibler ces éléments depuis la feuille de style grâce aux [sélecteurs d’attributs](/web/pages/ressources/css/selectors/) :

```css
[data-template="project"] h1 { font-size:4em; }
[data-id="projets/mon-super-projet"] { background: tomato; }
```
