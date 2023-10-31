# Ligne de commande

Une interface en ligne de commande (ou terminal, ou console, ou CLI – _Command line interface_) est un outil qui permet de donner des instructions à un ordinateur et de dialoguer avec lui _gâce à du texte_.

- L'utilisateur tape une ligne de commande, c'est-à-dire du texte au clavier pour demander à l'ordinateur d'effectuer une opération ;

- L'ordinateur affiche du texte correspondant au résultat de l'exécution des commandes tapées ou à des questions qu'un logiciel pose à l'utilisateur.

Une interface en ligne de commandes peut servir aussi bien pour lancer l'exécution de divers logiciels au moyen d'un interpréteur de commandes, que pour les dialogues avec l'utilisateur de ces logiciels. C'est l'interaction fondamentale entre un homme et un ordinateur (ou tout autre équipement informatique)[^wp]. 

[^wp]: [Wikipédia](https://fr.wikipedia.org/wiki/Interface_en_ligne_de_commande)

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
