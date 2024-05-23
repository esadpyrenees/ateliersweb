# Travailler avec des fichiers en Python 
    
Python permet de travailler facilement avec des fichiers et des dossiers. Pour ce faire, il a besoin d’utiliser des modules, notamment `os`, `Path` et `shutil`. Ces modules doivent être importés (par convention, en haut du fichier).
```py
import os, shutil
from pathlib import Path
```

Lire et écrire des données dans des fichiers à l’aide de Python est assez simple. Pour ce faire, il faut ouvrir les fichiers dans le mode approprié – lecture : `r`, ou écriture : `w`).
```py
# Lire
with open('data.txt', 'r') as f:
    data = f.read()
# Écrire
with open('data.txt', 'w') as f :
    data = 'Quelques données à écrire dans le fichier'
    f.write(data)
```

### Créer un fichier
```py
f = open('data.txt', 'w')
f.close()
```

### Créer un dossier
```py
import os
# Crée un dossier ainsi que ses éventuels dossiers parents avec os.makedirs
os.makedirs('une/nouvelle/arborescence')
```

### Créer un fichier dans un dossier :)
```py
import os
filename = 'data.txt'
directory = 'une/nouvelle'
path = os.path.join(directory, filename)
f = open(path, 'w')
f.close()
```

### Un fichier ou un dossier existe-t-il ?

La fonction `os.path.exists()` permet de vérifier si un chemin existe. 
```py
import os
print(os.path.exists('data.txt')) # True si le fichier 'data.txt' existe
print(os.path.exists('une/nouvelle/arborescence')) # True si le dossier 'arborescence' existe
```

### Supprimer un fichier ou un dossier
```py
import os, shutil
os.remove('data.txt') # supprime le fichier 'data.txt'
os.rmdir('une/nouvelle/arborescence') # supprime le sous-dossier 'arborescence'
shutil.rmtree('une') # supprime le dossier 'une', tous ses sous-dossiers et fichiers
```

### Copier un fichier
```py
import shutil
shutil.copy('data.txt', 'data_copy.txt')
```

### Déplacer ou renommer un fichier
```py
import shutil
# Renommer data.txt en new_data.txt
shutil.move('data.txt', 'new_data.txt')

```
## Lister le contenu d’un dossier
On peut utiliser `listdir` ou, mieux, `scandir` :
```py
import os
with os.scandir('une/nouvelle/') as entries:
    for entry in entries:
        print(entry.path)
        # affiche :
        # une/nouvelle/arborescence
        # une/nouvelle/data.txt
        if(entry.is_dir()):
            print("{} est un dossier".format(entry.name))
            # arborescence est un dossier
        if(entry.is_file()):
            print("{} est un fichier".format(entry.name))
            # data.txt est un fichier
        if entry.name.endswith('.txt'):
            print("{} est un fichier texte".format(entry.name))
            # data.txt est un fichier texte
```
## Parcourir l’ensemble d’un dossier et de ses sous-dossiers
On peut utiliser `os.walk` :
```py
import os
for root, dirs, files in os.walk("un/dossier/"):
    for filename in files:
        print("{} est un fichier".format(os.path.join(root, filename)))
    for dirname in dirs:
        print("{} est un dossier".format(os.path.join(root, dirname)))
```

## Lire ligne à ligne le contenu d’un fichier texte
```py
with open('une/nouvelle/data.txt') as f:
    lines = f.readlines()
    print("Le fichier {} contient {} lignes".format( f.name, len(lines)))
    for line in lines:
        print(line.strip()) # strip() supprime les espaces en début et fin de ligne
```


## Lire ligne à ligne et colonne par colonne le contenu d’un fichier CSV
Un fichier CSV (pour _Comma Separated Values_, valeurs séparées par des virgules, ou des points-virgules) peut être créé depuis un éditeur de texte, Libre Office Calc, MS Excel ou Google Sheets.
##### designers.csv {.filename}
```txt
name;occupation;country
April Greiman;Graphic designer;USAmerican
Irma Boom;Graphic designer;Dutch
Catherine Zask;Graphic designer;French
```
```py
import csv
with open('designers.csv') as csv_file:
    csv_reader = csv.reader(csv_file, delimiter=';')
    line_count = 0
    for row in csv_reader:
        if line_count == 0:
            print(f'Column names are {", ".join(row)}')
            line_count += 1
        else:
            print(f'{row[0]} is a {row[1].lower()}. She is {row[2]}.')
            line_count += 1
    print(f'{line_count} lines have been processed.')
```