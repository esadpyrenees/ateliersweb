# Image Magick

ImageMagick est un ensemble d’outils (libres et open-sources) en ligne de commande dédiés à la manipulation des images. 

Imagemagick fournit un certain nombre d’outils, notamment :

* `convert` : crée/modifie une image et l’enregistre comme un nouveau fichier
* `mogrify` : fait des changements à une (ou plusieurs) image(s) « en place » (en remplaçant l’originale – à utiliser avec précaution !)
* `montage` : créateur automatique de planches-contact, qui compose des miniatures d’un certain nombre d’images (dans une grille avec un espacement variable et des options comme l’affichage du nom de fichier)
* `identify` : affiche des informations sur une image

Si la ligne de commande peut initialement paraitre un territoire hostile, son usage permet d’atteindre des fonctionnalités (notamment d’automisation et de scriptage) auxquels la majorité des logiciels dotés de GUI ne peuvent prétendre. Découvrir [quelques commandes indispensables](#cli).

*[GUI]: Graphic User Interface

### Installer ImageMagick
Sur Windows, [télécharger](https://imagemagick.org/script/download.php#windows) et exécuter le programme d’installation.   
Sur Linux (Debian / Ubuntu):
```bash
sudo apt-get install imagemagick
```
Sur MacOSX, préférer l’installation via [Brew](https://brew.sh/):
```bash
brew install imagemagick
```

## Convert


↓ Redimensionne le fichier et crée une vignette
```bash
convert original.png -resize 200x200 thumbnail.png
```

↓ Convertir le fichier dans un autre format 
```bash
convert original.png copy.jpg
```

↓ Actions graphiques sur une image
```bash
# flou
convert original.png -blur 0x2 blurred.png
# miroir
convert original.png -flip flipped.png
# rotation (60 degrés)
convert original.png -rotate 60 flipped.png
# Augmentation du contraste (tout pixel de moins de 25% de luminosité devient noir, tout pixel de plus de 75% devient blanc)
convert original.png -level 25%,75% contrasted.png
# Normalisation (modifie le contraste afin qu’existe un noir pur et un blanc pur)
convert original.png -normalize contrasted.png
```
↓ Convertit une image en niveaux de gris
```bash
convert original.png  -colorspace Gray grey.png
```
↓ Transformations de couleurs

```bash
# transforme l’image en niveaux de gris, applique un contraste “sigmoïdal” et teinte l’image en bleu
convert original.png -colorspace gray -sigmoidal-contrast 10,40% -fill "#0000FF" -tint 100 output.png
```
↓ Rendre transparent le blanc d’un fichier PNG

```bash
convert original.png -fuzz 10% -transparent white transparent.png
```

↓ Recadrer une image (fichier final de 200 × 150px, recadrés depuis 50px en haut et 100px à gauche de l’image originale)
```bash
convert original.png -crop 200x150+100+50 cropped.png
```
↓ Tramer une image (*dithering*)

```bash
# 2 couleurs (algorithme FloydSteinberg)
convert original.png -colors 2 -dither FloydSteinberg output.png
# 16 couleurs (algorithme Riemersma)
convert original.png -colors 16 -dither Riemersma output.png
# Trame de demi-teintes
convert original.png -ordered-dither h8x8o output.png
```

#### Compression
↓ Supprime les métadonnées
```bash
convert original.png -strip stripped.png
```
↓ Compresse une image en jpg    
(les ` \ ` peuvent être conservés pour une meilleure lisibilité)

```bash
convert original.png \
-strip \
-sampling-factor 4:2:0 \
-quality 85 \
-interlace line \
-colorspace RGB \
compressed.jpg 
```

#### Animation / vidéo

↓ Créer un gif animé à partir des fichiers png contenus dans le dossier folder; établit le délai entre chaque image à 20ms, boucle indéfiniment, redimensionne les fichiers source à 500 × 500 pixels.
```bash
convert -delay 20 -loop 0 -scale 500x500 folder/*.png output.gif
```
Convertit un fichier vidéo en gif
```bash
convert -quiet -delay 1 input.avi output.gif
```

#### Fichiers PDF
↓ Convertit chaque page d’un PDF en une séquence de fichiers jpg, avec une résolution de 150 dpi et une qualité JPG de 90. Les fichiers seront placés dans un dossier "export" et nommés 0001.jpg, 0002.jpg, etc.
```bash
convert original.pdf -density 150 -quality 90 export/%04d.jpg
```

↓ Extrait les pages 8 à 16 d’un PDF en une séquence de fichiers png.
```bash
convert original.pdf[8-16] export/page.png
```

↓ Concatène plusieurs fichiers PDF, les uns à la suite des autres

```bash
convert fichier_1.pdf fichier_2.pdf fichier_3.pdf output.pdf
# Cela peut aussi être fait (plus habilement) avec Ghostscript, un autre outil CLI
gs -dBATCH -dNOPAUSE -q -sDEVICE=pdfwrite -sOutputFile=output.pdf fichier_1.pdf fichier_2.pdf fichier_3.pdf
```



## Mogrify

↓ Redimensionne le fichier (écrase l’original)
```bash
mogrify -resize 200x200 original.png 
```
↓ Redimensionne tous les fichiers d’un dossier (écrase les originaux)
```bash
mogrify -resize 200x200 dossier/*.png 
```
↓ Redimensionne tous les fichiers d’un dossier à 600px de haut maximum (écrase les originaux)
```bash
mogrify -geometry x600 dossier/*.jpg
```
↓ Compresse des images en jpg (même réglage que plus haut, mais écrase les originaux)
```bash
mogrify -strip -sampling-factor 4:2:0 -quality 85 -interlace line -colorspace RGB dossier/*.jpg 
```

## Montage
↓ Crée une (ou plusieurs) planche(s) contact à partir d’un dossier d’images. Chaque image est redimensionnée à 354 × 500px, elles sont composées en 4 lignes de 10 images. 
```bash
montage -verbose -background '#000000' -fill 'gray' -geometry 354x500+10+10 -tile 10x4 images/*.png planche-contact.jpg
```

## Aller plus loin

* [Parcourir la documentation](https://www.imagemagick.org/Usage/)
* Découvrir de nombreux scripts complexes sur [*Fred's ImageMagick Scripts*](http://www.fmwconcepts.com/imagemagick/index.php)


## Ligne de commande {#cli}

Quelques notions de navigation en ligne de commande.

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

Contenu allègrement emprunté et librement adapté du [Mémo CMD](https://github.com/randomDam/memo_cmd) édité par Damien Baïs au RANDOM(lab) de l’EsadSe.