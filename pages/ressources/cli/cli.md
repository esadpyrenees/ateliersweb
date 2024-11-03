# Ligne de commande

Une interface en ligne de commande (ou CLI – _Command line interface_) est un outil qui permet de donner des instructions à un ordinateur et de dialoguer avec lui _gâce à du texte_[^vocab].

- L’utilisateur tape une ligne de commande : du texte au clavier pour demander à l’ordinateur d’effectuer une opération ;

- L’ordinateur affiche du texte correspondant au résultat de l’exécution des commandes tapées ou à des questions qu’un logiciel pose à l’utilisateur.

Si la plupart des outils numériques utilisent des interfaces graphiques (GUI – Graphic User Interface) plutôt que des CLIs, de nombreux programmes et utilitaires du système d’exploitation n’ont pas d’interface graphique et sont destinés à être utilisés par le biais de CLIs.

La connaissance de ces interfaces est également utile pour écrire des scripts et automatiser des tâches, pour installer des utilitaires ou des bibliothèques, ou pour lancer l’exécution de scripts.

[^vocab]: On peut distinguer les termes de _terminal_ (parfois dénommé _console_) qui désigne l’interface qui nous permet de saisir les commandes, du _shell_, la couche logicielle sous-jacente à laquelle on envoie les commandes.


## Environnements

### Windows 
Dans Windows, l’environnement historique est l’_invite de commandes_ CMD, vestige de MS-DOS (système d’exploitation dévelopé par Microsoft avant Windows). Cette invite de commande est aujourd’hui largement dépassée, et suplantée par des outils plus performants :

- Windows Powershell est le successeur de CMD, mais reste fondamentalement différent des interfaces Unix auxquelles est dédiée cette documentation – même si de nombreuses commandes simples sont similaires.
- Cygwin simule un environnement Unix sous Windows, et rend possible l’exécution d’un `shell`, mais est également dépassé par de nouvelles solutions.
- [Git Bash](https://gitforwindows.org/) est normalement dévolu à l’utilisation de _git_, un outil de gestion de version, mais installe également des utilitaires de ligne de commande courants.
- Enfin, la meilleure solution reste d’installer Linux :), ou au moins [**WSL2**](https://learn.microsoft.com/fr-fr/windows/wsl/install) (_Windows Subsystem for Linux_) qui permet d’installer une version de Linux sous Windows sans devoir passer par une machine virtuelle ou un _double boot_.

### MacOS

Sous Linux ou MacOS, deux familles de systèmes d’exploitation basés sur Unix, une interface en ligne de commande est naturellement accessible et permet d’accéder au _shell_ (sous MacOS, c’est _zsh_ par défaut, sous Linux, le plus souvent _bash_).

## Commandes utiles

Ci-dessous, quelques notions de ligne de commande, allègrement empruntées et librement adaptées du [Mémo CMD](https://github.com/randomDam/memo_cmd) édité par Damien Baïs au RANDOM(lab) de l’EsadSe.

### Naviguer dans les dossiers
```bash
# Afficher le dossier courant
pwd
# Se déplacer dans le dossier de l’utilisateur
cd ~ 
# Se déplacer dans le dossier "folder"
cd folder
# Se déplacer dans le dossier parent
cd ..
# Lister les fichiers du dossier courant
ls 
# Lister les fichiers du sous-dossier "subfolder"
ls subfolder
# Lister les fichiers du sous-dossier (avec les fichiers cachés)
ls -a subfolder
# Lister les fichiers du sous-dossier (afficher les permissions et la taille)
ls -l subfolder
```

### Actions sur les fichiers et dossiers
 
```bash
# Renommer un fichier 
mv old_filename.txt new_filename.txt
# Même commande pour déplacer un fichier 
mv old_filename.txt folder/new_filename.txt
# Copier un fichier
cp source_file.txt copied_file.txt
# Copier un dossier
cp -R source_folder copied_folder
# Créer un fichier "new_file.txt" (ou mettre à jour sa date de modification s’il existe)
touch new_file.txt
# Créer un dossier 
mkdir folder
# Créer un dossier avec son arborescence si nécessaire 
mkdir -p folder/children_folder
# Supprimer un fichier
rm file.txt
# Supprimer un fichier protégé en écriture
rm -f file.txt
# Supprimer un répertoire
rm folder
# Supprimer un répertoire (même s’il a des enfants)
rm -R folder
```

### Commandes diverses

Elles n’ont leur place nulle part ailleurs…

#### `ssh`
Pour se connecter à un serveur / une machine distante
```bash
ssh ssh_login@ssh_host.fr
# Pour utiliser un port de connexion spécifique (option -p)
ssh ssh_login@ssh_host.fr -p 3522
```

#### `ffmpeg`
Créer un gif à partir d’une vidéo avec `ffmpeg`.
```bash
# place a tête de lecture à 180 secondes, crée un gif des 3 secondes suivantes, à 10 frames par seconde
ffmpeg -ss 180 -t 3 -i video.mp4 -vf "fps=10,scale=320:-1:flags=lanczos,split[s0][s1];[s0]palettegen[p];[s1][p]paletteuse" -loop 0 video.gif
```
[Explorer les possibilités de `ffmpeg`](https://ffmpeg.lav.io/) visuellement (outil incroyable).


#### `rsync`
Synchroniser un dossier local avec un dossier distant avec `rsync`.

```bash
# synchronise un dossier distant avec un dossier local (téléverse)
rsync -avz --progress /path/to/local_directory/ ssh_login@ssh_host.fr:path/to/directory/ 
# synchronise un dossier local avec un dossier distant (télécharge) 
rsync -avz --progress ssh_login@ssh_host.fr:path/to/directory/ /path/to/local_directory/
# Pour supprimer les fichiers locaux qui n’existent pas/plus sur le serveur distant
rsync -avz --progress --delete ssh_login@ssh_host.fr:path/to/directory/ /path/to/local_directory/
# Pour exclure certains fichiers
rsync -avz --progress –exclude= *.txt ssh_login@ssh_host.fr:path/to/directory/ /path/to/local_directory/
# Pour utiliser un port de connexion spécifique (option -e)
rsync -avz --progress -e "ssh -p 3522" ssh_login@ssh_host.fr:path/to/directory/ /path/to/local_directory/

```
Les options signalent:
- `-a` utilise le mode “archive” qui préserve les permissions, les dates d’origine, etc.
- `-v` affiche les fichiers en cours de traitement
- `-z` compresse les fichiers pour le transfert
- `--progress` affiche la progression du transfert dans la console

#### Trucs super utiles 🙄
```bash
# dans tous les fichiers html, cherche ".png" et remplace ".png" par ".webp"
# source et commntaires : https://stackoverflow.com/questions/11392478/how-to-replace-a-string-in-multiple-files-in-linux-command-line
grep -rli '.png' *.html | xargs -i@ sed -i 's/.png/.webp/g' @
```
