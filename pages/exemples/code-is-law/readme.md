# Code is law

Mise en page d’un texte à la fois pour l’écran et pour l’impression.

L’impression est gérée par la librairie [Bindery.js](https://evanbrooks.info/bindery/). 

La reliure est dite “à l’orientale”, ou “à la japonaise”. Chaque feuille est imprimée sur une seule face, pliée, puis agrafée avec les autres.

## CSS
Quatre fichiers CSS permettent la mise en page du document.

- **platform.css**   
Ce fichier est spécifique aux éléments liés à l’interface : navigation principale, boutons d'impression, etc.
Il permet également de prévisualiser le livret tout en étant mis en page via le mode de prévisualisation Bindery. Pour ce faire, dans le fichier `index.html`, il faut donner au `body`  l’attribut `class="layout-mode"`.

- **codeislaw-all.css**    
Ce fichier est commun aux modes écran et impression. Il permet de déterminer les invariants entre les deux modes : fontes, corps, couleurs…

- **codeislaw-screen.css**    
Ce fichier est dédié au mode écran.

- **codeislaw-bind.css**    
Ce fichier est spécifique au mode impression. Il contient les styles spécifiques liés à la mise en forme du texte et des images, mais aussi à certains éléments générés par bindery.js: folios, titres courants… Il utilise des “propriétés personnalisées CSS” (souvent nommées “variables CSS”) déterminées par bindery.js.

## JS
Trois fichiers sont intégrés à la page html :

- **bindery.js**
La librairie créée par Evan Brooks, utilisée pour “paginer“ le flux: 
le contenu est réparti en plusieurs éléments, générant plusieurs pages. 

- **mybook.js**    
Permet d’exécuter du javascript sur le contenu avant la transformation du document par bindery.js.

- **mybind.js**    
Ce fichier sert à l’initialisation de bindery. On peut définir des règles pour générer des titres courants, des marges et des notes de bas de page en fonction du contenu de chaque page. On peut transformer créer une table des matières ou un index,  configurer les fonds perdus, les repères de coupe et l'ordre d’impression du livre.   
Il est hautement lié à la structure HTML et CSS de l’exemple :
    * Il automatise l’initialisation de Bindery si le `body` du document possède a comme `class` la valeur `layout-mode`.
    * Il permet de cliquer sur un bouton pour lancer l’impression d’un texte affiché à l’écran dans une mise en forme spécifique.
    * Il supprime alors la CSS écran (`codeislaw-screen.css`) pour appliquer la CSS print (`codeislaw-bind.css`)
    * Une fois que Bindery s’est initialisé (découpage du texte en pages, généreration des folios, titres courants, table des matières, etc.) il affiche un bouton pour lancer effectivement l’impression.