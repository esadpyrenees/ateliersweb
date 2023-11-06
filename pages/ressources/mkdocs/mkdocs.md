# MkDocs

MkDocs est un générateur de site statique rapide et simple à utiliser. Initialement destiné à la création de _documentation_ (au sens informatique du terme), il peut être augmenté et détourné pour de nombreux usages. Les fichiers sources sont écrits en Markdown et le site est configuré à l'aide d'un seul fichier de configuration YAML.

☞ Un générateur de sites statiques convertit un ensemble de fichiers source (ici des documents markdown) en un ensemble de pages HTML, avec leurs ressources associées, qui devient ainsi aisément hébergeable dans de nombreux contextes (de Github Pages à Neocities).

MkDocs est particulièrement adapté à la publication d’un ensemble réduit de pages, sans arborescence complexe ni références croisées (_tags_). De nombreux projets connexes (thèmes, plugins, extensions) peuvent néanmoins l’augmenter pour le transformer en mini-framework ; voir notamment le très puissant et complet (mais rigide graphiquement) thème [Material for MkDocs](https://github.com/squidfunk/mkdocs-material/) ou [MkDocs Macros](https://mkdocs-macros-plugin.readthedocs.io/) qui permet d’utiliser des variables ou des modules Python au sein même du contenu.


## Documentation

Si la documentation ci-dessous introduit les grands principes de MkDocs, la [documentation officielle](https://www.mkdocs.org/user-guide/) est indispensable.
    

## Environnement virtuel

MkDocs se manipule via la ligne de commande (rappel de quelques notions de [CLI – _Command Line Interface_](../../cli/)).

Sous Windows, il est recommandé d’utiliser PowerShell plutôt que l’interpréteur de commandes CMD. Au long de cette introduction, des détails sont donnés pour cet environnement quand il diffère de l’environnement MacOs / Linux.

Il est souhaitable d’utiliser un _environnement virtuel_ pour installer des paquets Python dans un environnement isolé, afin de stabiliser les versions des paquets utilisées dans un projet et éviter les conflits.

On crée l’environnement virtuel "env" en ligne de commande :

```sh
cd ~/mes_sites_web # pour se positionner dans l’arborescence du site 
mkdir projet_mkdocs # créer un dossier pour l’ensemble du projet
cd projet_mkdocs # rentrer dans ce nouveau dossier
python -m venv env # créer l’environnement dans ce dossier
```

Cela va créer dans votre projet (ou ailleurs, selon l’endroit où on lance la commande) un dossier `env` qui contiendra une copie de l’exécutable Python et les paquets qui seront installés dans le projet.

Une fois l’environnement virtuel créé, il faut _l’activer_ :

```sh
source env/bin/activate
# Ou bien
. env/bin/activate
# NB: pour le désactiver, on pourra faire :
# deactivate
```
<details markdown="1"> 
<summary>⚠ Windows</summary>

Il faut autoriser l’éxécution des scripts. Dans PowerShell, saisir : 
```sh
Set-ExecutionPolicy -ExecutionPolicy Bypass -Scope Process -Force
```
Puis, pour activer l’environnement virtuel :
```sh
./env/Scripts/activate.ps1
```

</details>


### Installer MkDocs

On peut maintenant installer MkDocs, grâce à `pip`, un outil d’installation de paquets Python (notamment ceux présents sur [PyPI](https://pypi.org/)). Cela installera MkDocs et ses dépendances dans l’environnement virtuel.

```sh
pip install mkdocs
```
On peut installer des [plugins](https://github.com/mkdocs/catalog) MkDocs de la même manière. Ici, on installe un plugin qui enveloppe les `<img>` dans des `<figure>` :

```sh
pip install mkdocs-img2fig-plugin 
```

<details markdown="1"> 
<summary>⚠ Windows</summary>
Si les commandes `pip` ou `mkdocs` ne fonctionnent pas, utiliser à la place `python -m pip` et `python -m mkdocs`.
</details>

## Structure du projet

Une fois MkDocs installé, on peut lancer la commande suivante : 

```sh
mkdocs new mon_projet
```
Le projet MkDocs se structure ainsi par défaut :

<pre markdown="0">
<span class="icon-folder-open"></span> env
<span class="icon-folder-open"></span> mon_projet
    <span class="icon-folder-open"></span> site
    <span class="icon-folder-open"></span> docs
        <span class="icon-file-empty"></span> index.md
    <span class="icon-file-empty"></span> mkdocs.yml
</pre>

- Le dossier `env` est celui de l’environnement virtuel ; on n’y touche pas.
- Le sous-dosssier `site` sera généré par MkDocs et contiendra les pages HTML finales. 
- Le sous-dosssier `docs` (dont on peut modifier le nom grâce au fichier de configuration) contiendra les fichiers markdown, les « pages » du site. 
- Le fichier `mkdocs.yml` est le fichier de configuration.

Dans le cas exposé ici, il sera structuré différemment, afin de contenir notre thème (la logique d’affichage du site : les _templates_, les fichiers CSS et JS) et le dossier des contenus (anciennement `docs`, renommé en `content`).

<pre markdown="0">
<span class="icon-folder-open"></span> env
<span class="icon-folder-open"></span> mon_projet
    <span class="icon-folder-open"></span> site
    <span class="icon-folder-open"></span> content
        <span class="icon-file-empty"></span> index.md
    <span class="icon-folder-open"></span> theme
        <span class="icon-folder-open"></span> css
        <span class="icon-folder-open"></span> js
        <span class="icon-file-empty"></span> main.html
    <span class="icon-file-empty"></span> mkdocs.yml
</pre>

## Configuration

Le fichier `mkdocs.yml` contient quelques informations essentielles, relatives au site, à sa navigation et à sa personnalisation :

```yml
site_name: Mon site
site_url: https://mondomaine.com/monsite/
site_description: La description textuelle du site
site_author: Votre nom 
# Nouveau nom pour le dossier des fichiers source:
docs_dir: content
# On peut déterminer arbitrairement les pages visibles dans la navigation:
# nav:
#   - index.md
#   - about.md
# Dans notre cas, les templates s’en chargeront automatiquement.
# MkDocs propose plusieurs thèmes par défaut, mais on peut en installer d’autres
# ou même déterminer un thème personnalisé :
theme:
  name: null
  custom_dir: 'theme'
# Deux plugins sont activés : la recherche, et img2fig 
plugins: 
    - search
    - img2fig
```

## Commandes

MkDocs dispose de plusieurs commandes fort utiles, notamment `mkdocs build`, qui génère le site statique ; `mkdocs gh-deploy`, spécifique à l’hébergement sur Github Pages (voir plus bas) ; et `mkdocs serve` qui génère le site statique et le « sert » (= le rend accessible dans un navigateur à l’adresse http://127.0.0.1:8000/monsite/) :

```sh
mkdocs serve
# INFO    -  Building documentation...
# INFO    -  Cleaning site directory
# INFO    -  Documentation built in 0.03 seconds
# INFO    -  [00:18:47] Watching paths for changes: 'content', 'mkdocs.yml'
# INFO    -  [00:18:47] Serving on http://127.0.0.1:8000/testmkdocs/
```

## Contenu

Le contenu est édité au format markdown, de simples fichiers texte avec un balisage léger pour déterminer des titres, des listes, des italiques, des citations, des liens, etc. [Voir ici](https://esadpyrenees.github.io/PageTypeToPrint/markdown/) pour un bref rappel de la syntaxe markdown.

Pour créer des liens hypertextes, la syntaxe habituelle est utilisée, en pointant vers le fichier markdown de destination ; par ex. :
```markdown
Un [lien](index.md) vers la page d’accueil.
```

Une extension intéressante du format markdown, utilisée par MkDocs mais aussi par de nombreux autres outils, est l’usage de méta donées (souvent appelées _front-matter_ dans le cas de markdown). Ces méta-données peuvent être saisies ainsi :

```markdown
---
title: Mon document
authors:
    - Kenneth Goldsmith
    - Samuel Beckett
template: special.html
date: 2023-10-31
---
```
Les valeurs des « clés » (title, authors, date…) peuvent être utilisées dans les gabarits.

☞ La clé _template_ permet au contenu d’être rendu par un gabarit différent du gabarit par défaut (`main.html`).




## Démo

Éditorialement, ce projet de démo se propose de rassembler un ensemble de documents (± pirates) provenants d’UbuWeb et Remue.net autour de la figure de Samuel Beckett.

Structurellement, il contiendra une page d’accueil, une page « à propos », ainsi que plusieurs dossiers de pages : 
<pre markdown="0">
<span class="icon-folder-open"></span> content
    <span class="icon-file-empty"></span> index.md
    <span class="icon-file-empty"></span> about.md
    <span class="icon-folder-open"></span> films
        <span class="icon-file-empty"></span> film_a.md
        <span class="icon-file-empty"></span> film_b.md
        <span class="icon-file-empty"></span> etc.
    <span class="icon-folder-open"></span> textes
        <span class="icon-file-empty"></span> texte_a.md
        <span class="icon-file-empty"></span> texte_b.md
        <span class="icon-file-empty"></span> etc.
    <span class="icon-folder-open"></span> sons
        <span class="icon-file-empty"></span> etc.
</pre>



Le thème sera constitué des fichiers et dossiers suivants : 

<pre markdown="0">
<span class="icon-folder-open"></span> theme
    <span class="icon-folder-open"></span> css
        <span class="icon-file-empty"></span> style.css
    <span class="icon-folder-open"></span> img
        <span class="icon-file-empty"></span> favicon.ico
    <span class="icon-folder-open"></span> js    
        <span class="icon-file-empty"></span> script.js
    <span class="icon-file-empty"></span> 404.html
    <span class="icon-file-empty"></span> main.html
    <span class="icon-file-empty"></span> search.html
    <span class="icon-file-empty"></span> _nav.html
    <span class="icon-file-empty"></span> _footer.html
    <span class="icon-file-empty"></span> _searchbox.html    
</pre>

`main.html` est le gabarit principal, indispensable au fonctionnement d’MkDocs. `404.html` est dédié à l’affichage des erreurs, `search.html` est dédié à l’affichage des résultats de recherche. Les fichiers `_nav.html`, `_footer.html` et `_searchbox.html` seront inclus dans `main.html`.

## Templates

Les gabarits, ou _templates_, des thèmes MkDocs sont écrit dans un langage nommé [_jinja_](https://palletsprojects.com/p/jinja/), qui permet de mélanger du code HTML et des composants logiques, notamment des boucles, des conditions et des inclusions :

```django
{% for item in nav %}
    <a href="{{ item.url }}">
        {{ item.title }}
        {% if item.is_pdf %} (pdf) {% endif %}
    </a>
{% endfor %}

{% include "footer.html" %}
```

Une des logiques essentielles de _jinja_ est le principe d’_extension_ ; par exemple, avec un template `base.html` :

##### base.html {.filename}
```django
<html>
<head>…</head>
<body>
    {% block titre %}
        Titre
    {% endblock %}
</body>
```
On peut en dériver (en produire une extension) `search.html` qui ne modifiera que le `{% block titre %}` :
##### search.html {.filename}
```django
{% extends "base.html" %}

{% block titre %}
    Recherche
{% endblock %}
```

## _Hack_

MkDocs ne sait pas par défaut générer de page d’index pour les sous-dossiers. On va donc utiliser un script Python \o/ pour les générer à sa place. Dans chaque dossier (`films`, `textes`, `sons`), ce script créera un fichier `index.md` pour lister les contenus du dossier. Il s’agit donc ici d’un _hack_ du fonctionnement « normal » de MkDocs, favorisé par les possibilités de Python.

Deux paquets Python doivent être installés: `yamldown` et `markdown`.

```sh
pip install yamldown markdown
```
Un fichier `make_indexes.py` peut alors être créé. Les méthodes qu’il contient sont simples (revoir la [documentation de base](../), et notamment les parties liées aux [chaînes](../strings/) et aux [fichiers](../files/)). 

##### make_indexes.py (pseudo-code) {.filename}
```python
# On lit le fichier config.yml de MkDocs pour connaître:
  # – la valeur de "docs_dir"
  # – la valeur de l’entrée personnalisée "sections"

# Pour chaque sous-dosssier dans "docs_dir":  
  # On parcourt les enfants du sous-dossier (about.md, index.md, films, textes, sons…)
    # Pour chaque enfant:
      # Si c’est un dossier et qu’il est listé dans "sections":    
        # On crée un morceau de markdown avec le titre de la section
        # On parcourt le contenu (les fichiers à l’intérieur du sous-dossier)
          # Si ça finit en ".md" et que ce n’est pas un fichier "index.md"
            # On détermine le titre du contenu
            # On l’ajoute au morceau de markdown sous la forme d’un [lien](url)
        # Enfin, on écrit le morceau de markdown dans un fichier "index.md" 
```

On peut l’invoquer avec :
```sh
python make_indexes.py
```
## Scraping

Python est un langage tout particulièrement adapté aux logiques de `scraping` (l’aspiration de contenus en ligne). Ici, cet usage sera appliqué à la page « films » consacrée à Samuel Beckett sur UbuWeb.

De nouveaux paquets Python doivent être installés : `requests` (pour faire des requêtes HTTP), `BeautifulSoup` (puissante librairie de lecture / écriture de HTML), `slugify` (ppour transformer des chaînes de caractères en “slugs”, sans accents, espaces, caractères spéciaux), et `markdownify` (pour transformer du HTML en markdown).

```sh
pip install requests beautifulsoup4 python-slugify markdownify  
```

##### films.py (pseudo-code) {.filename}
```python
# On effectue une requête vers "https://ubu.com/film/beckett.html"
# On lit le document HTML obtenu avec BeautifulSoup 

# On récupère tous les liens à l’intérieur du 2e élément <td class="default"> :)
# On parcourt chaque lien pour récupérer son contenu
# Si la page produit une erreur 404, on continue à la page suivante
# Sinon, on esaie de lire le contenu de la page
# On lit son <title>
# On nettoie un peu les titres (pour enlever les termes spécifiques à UbuWeb)
# On lit la description (dans le <div id="ubudesc">)
# On lit l’éventuel lien vers une vidéo (dans le <a id="moviename">)
# Si on a trouvé une description…
    # On crée une entête yaml pour le fichier markdown
    # On ajoute un titre (<h1>) au contenu du fichier markdown 
    # + La vidéo éventuelle
    # + Le contenu textuel
    # + Un lien vers la source
    # On détermine le nom du fichier (01-nom-du-film.md)
    # On écrit le fichier dans le dossier "content/films"    
```
On peut l’invoquer avec :
```sh
python films.py
```

Le thème, le contenu de démo et les scripts `make_indexes.py` et `films.py` sont téléchargeables ici :

[Télécharger (zip)](https://github.com/jbidoret/ratermieux/archive/refs/heads/main.zip) {.bigbutton}
[Démo en ligne](https://jbidoret.github.io/ratermieux/) {.bigbutton}

## Publier

MkDocs génère un site statique dans le dossier `site`. Pour qu’il soit pleinement fonctionnel en ligne, il est important de configurer son URL finale dans le fichier de configuration ; par exemple, pour l’héberger gratuitement sur Neocities, on modifie le fichier `config.yml` ainsi :

##### config.yml {.filename}
```yml
site_url: https://ratermieux.neocities.org/
```
Puis on invoque la commande :
```sh
mkdocs build
```
On peut alors uploader le contenu du dossier `site` via l’interface web de Neocities.

### GitHub Pages
Une alternative est d’utiliser `git`, le service d’hébergement GitHub et ses Pages. Il faut créer un compte sur [Github](https://github.com/signup), ou [vous identifier](https://github.com/login) si vous en avez déjà un ; créer un [nouveau dépôt](https://github.com/new) vide ; puis, dans votre dossier de travail :
```sh
# initialise un nouveau dépôt git local
git init
# ignore l’environnement virtuel
echo /env > .gitignore
# ajoute tous les fichiers
git add .gitignore
git add *
git commit -am "Commit initial"
# Crée une branche principale "main"
git branch -M main
# Détermine l’URL du dépôt distant ⚠
git remote add origin git@github.com:<votre_compte>/<votre_dépôt>.git
# Envoie les modifications sur le dépôt distant
git push -u origin main
```
Enfin, utiliser la commande `gh-deploy` pour publier et transférer votre site en ligne:
```sh
mkdocs gh-deploy
```

Chaque modification ultérieure du site pourra alors être publiée grâce à :
```sh
# ajoute tous les fichiers modifiés
git add *
git commit -am "Information textuelle sur la modification effectuée"
# Envoie les modifications sur le dépôt distant
git push -u origin main
# Publie et transfère le site en ligne:
mkdocs gh-deploy
```

<details markdown="1">
<summary>⚠ Une clé SSH est nécessaire pour pouvoir vous connecter à GitHub.</summary>

Lire [la documentation](https://docs.github.com/fr/authentication/connecting-to-github-with-ssh/about-ssh) ici.

Dans un terminal, saisissez les commandes ci-dessous, en remplaçant l’e-mail utilisé dans l’exemple par votre adresse e-mail GitHub.

```sh
cd ~/.ssh
ssh-keygen -t ed25519 -C "your_email@example.com"
```
Par défaut, les clés sont générées dans un dossier `.ssh` dans le dossier de l’utilisateur. Par exemple, la commande ci-dessus créera la clé privée sous le nom de `/home/julienbidoret/.ssh/id_ed25519` et la clé publique sous celui de `/home/julienbidoret/.ssh/id_ed25519.pub`

Puis, pour afficher le contenu de la clé publique :
```sh
cat ~/.ssh/id_ed25519.pub
# Copiez la totalité du texte affiché
```

Dans le coin supérieur droit de la page GitHub, cliquez sur votre photo de profil, puis sur Paramètres.

Dans la section « Accès » de la barre latérale, cliquez sur _Clés SSH et GPG_.

Cliquez sur _Nouvelle clé SSH_ ou _Ajouter une clé SSH_.

Dans le champ « Titre », déterminez un nom pour la nouvelle clé (lié à l’ordinateur utilisé). 

Sélectionnez le type de clé : _authentification_.

Dans le champ « Clé », collez votre clé publique.

Cliquez sur _Ajouter une clé SSH_.

Si vous y êtes invité, confirmez l’accès à votre compte dans GitHub.

</details>