# Scrappy

Le scrapping consiste à effectuer des requêtes vers des services web (des sites, des API) pour en recevoir des informations et les enregistrer localement. Dans le cas d’API, c’est souvent prévu et autorisé. Dans le cas de sites web, c’est moins souvent autorisé, et donc d’autant plus utile :)

Cet exemple se propose de télécharger un ensemble d’images [légalement mises à disposition](https://www.loc.gov/free-to-use/) par la _Library of Congress_ : un [ensemble de portraits](https://www.loc.gov/free-to-use/c-m-bell-studio-collection/) par Charles Milton Bell.

Cette opération demandera d’inspecter avec soin le code HTML des pages qui contiennent les ressources que l’on veut télécharger. 

## Environnement virtuel

Python se manipule via la ligne de commande (rappel de quelques notions de [CLI – _Command Line Interface_](../../cli/)).

Sous Windows, il est recommandé d’utiliser PowerShell[^wcli] plutôt que l’interpréteur de commandes CMD. Au long de cette introduction, des détails sont donnés pour cet environnement quand il diffère de l’environnement MacOs / Linux.

[^wcli]: Ou encore mieux, WSL. [Voir ici](../cli/).

Il est souhaitable d’utiliser un _environnement virtuel_ pour installer des paquets Python dans un environnement isolé, afin de stabiliser les versions des paquets utilisées dans un projet et éviter les conflits.

On crée l’environnement virtuel "env" en ligne de commande :

```sh
cd ~/mes_sites_web # pour se positionner dans l’arborescence du site 
mkdir scrappy # créer un dossier pour l’ensemble du projet
cd scrappy # rentrer dans ce nouveau dossier
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

<details> 
<summary>⚠ Windows</summary>
<p>Il faut autoriser l’éxécution des scripts. Dans PowerShell, saisir : </p>
<pre><code class="language-sh language-bash">Set-ExecutionPolicy -ExecutionPolicy Bypass -Scope Process -Force</code>
</pre>
<p>Puis, pour activer l’environnement virtuel :</p>
<pre><code class="language-sh language-bash">./env/Scripts/activate.ps1</code>
</pre>
</details>


### Installer les bibliothèques utiles

On peut maintenant installer les bibliothèques python qui seront nécessaires, grâce à `pip`, un outil d’installation de paquets Python (notamment ceux présents sur [PyPI](https://pypi.org/)). Elles seront installées avec leurs dépendances dans l’environnement virtuel.

Les paquets ou bibliothèques Python suivantes doivent être installés : `requests` (pour faire des requêtes HTTP), `BeautifulSoup` (puissante librairie de lecture / écriture de HTML), `slugify` (ppour transformer des chaînes de caractères en “slugs”, sans accents, espaces, caractères spéciaux) et `lxml`, un simple “parser” de XML (pour analyser le HTML).

```sh
pip install requests beautifulsoup4 python-slugify lxml
```


<details> 
<summary>⚠ Windows</summary>
<p>Si la commande `pip` ne fonctionne pas, utiliser à la place `python -m pip`.</p></details>

## Structure du projet

Une fois les bibliothèques installées, on peut commencer à écrire notre script de scrapping, `scrap.py`, en le créant dans le dossier grâce à notre éditeur de texte favori.

```sh
mkdocs new mon_projet
```
Le projet se structure ainsi :

<pre markdown="0">
<span class="icon-folder-open"></span> scrappy
    <span class="icon-folder-open"></span> env
    <span class="icon-folder-open"></span> output
    <span class="icon-file-empty"></span> scrap.py
</pre>

- Le dossier `env` est celui de l’environnement virtuel ; on n’y touche pas.
- Le sous-dosssier `output` servira à stocker les résultats de notre exploration. 
- Le fichier `scrap.py` est notre script principal.

## Scraping

Pour une meilleure compréhension du processus, l’ensemble des opérations à effectuer sera découpé en plusieurs étapes. Première étape : la récolte des URLs des page de détail des images.

### URLs des images

##### scrap.py (pseudo-code) {.filename}
```python
# On effectue une requête vers "https://www.loc.gov/free-to-use/c-m-bell-studio-collection/"
# On lit le document HTML obtenu avec BeautifulSoup 
# On inspecte tous les éléments <figure> contenus dans le document pour récupérer les URLs des pages de détail de chaque image
# On stocke chaque URL dans une liste "urls"
# Pour chaque élément de la liste, on effectue une nouvelle requête
# On lit ce nouveau document avec BeautifulSoup 
# On récupère l’URL de l’image grâce à la balise <meta property="og:image">
# On stocke cette URL dans une liste "images"
# On enregistre cette liste en tant que fichier json
```
On peut l’invoquer avec :
```sh
python scrap.py
```

##### scrap.py {.filename}
```python
#!/usr/bin/env python3

# ↑ cette première ligne indique que la version de python à utiliser 
# pour ce script est celle contenue dans l’environnement virtuel

import requests
from bs4 import BeautifulSoup
import json

baseurl = "https://www.loc.gov"
loc = baseurl + "/free-to-use/c-m-bell-studio-collection/"

r = requests.get(loc)
soup = BeautifulSoup(r.text, "lxml")

urls = []
photos = soup.find_all("figure")
for p in photos:
  a = baseurl + p.find("a")["href"]
  urls.append(a)

images = []
for url in urls:
  r = requests.get(url)
  soup = BeautifulSoup(r.text, "lxml")
  metas = soup.find_all(attrs = {"property": "og:image"})
  images.append(metas[0]['content'])

with open('images.json', 'w') as f:
  json.dump(images, f)
```
À la suite de l’exécution de ce script, un fichier `images.json` contient les urls de l’ensemble des images à télécharger :

<pre markdown="0">
<span class="icon-folder-open"></span> scrappy
    <span class="icon-folder-open"></span> env
    <span class="icon-folder-open"></span> output
    <span class="icon-file-empty"></span> images.json
    <span class="icon-file-empty"></span> scrap.py
</pre>

### Téléchargement des images

Un nouveau script, `download.py`, va permettre de télécharger chacune des images dans le dossier `output`:

##### scrap.py (pseudo-code) {.filename}
```python
# On lit le fichier "images.json" qui contient les URLs des images
# On crée le dossier "output" s’il n’existe pas
# Pour chaque élément de la liste d’images, on détermine son chemin de destination 
# Si le chemin existe (l’image a déjà été téléchargée), on passe à la suivante
# Sinon, on effectue une requête vers l’URL
# Si la requête est fructueuse (status_code=200), on enregistre l’image à son emplacement de destination
```
On peut l’invoquer avec :
```sh
python download.py
```

##### download.py {.filename}
```python
#!/usr/bin/env python3

import requests
import json
import os

# load json
with open('images.json', 'r') as f:
  images = json.load(f)

# create output directory
base_dir = os.getcwd()
out_dir = os.path.join(base_dir, "output")
if not os.path.exists(out_dir):
  os.mkdir(out_dir)
print("Putting downloaded files into: " + out_dir)

# loop through images URLs list
for url in images:
  
  print(f"(Trying to download: {url}" )

  out_file = os.path.join(out_dir, os.path.basename(url))
  if os.path.isfile(out_file):
    print("Skipping, file already downloaded\n")
    continue
  
  try:
    r = requests.get(url)
  except:
    print("Request failed, skipping")
    continue

  if r.status_code == 200:
    with open(out_file, 'wb') as f:
      print(f"Writing image to: {out_file}")
      f.write(r.content)
  else:
    print("Error downloading, HTTP response code was: " + str(r.status_code))
    continue
```

Si tout s’est bien passé 🤞, les images ont été téléchargées dans le dossier `output`.

## Traitement des images

La prochaine étape se proposera d’utiliser le paquet python `face_recognition` pour détecter automatiquement les visages à l’intérieur de ces portraits afin de produire des faux John Baldessari.

![John Baldessari](john-baldessari.jpg)

En attendant, on peut [écouter Tom Waits](https://youtu.be/eU7V4GyEuXA?si=m558CoqP_HBnCMTN) raconter son histoire en six minutes.