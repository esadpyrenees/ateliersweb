
# Unités

## Couleurs
Les couleurs sont largement utilisées en CSS, que ce soit pour la couleur du texte, la couleur de fond, les dégradés, les ombres, les bordures, etc. Il existe plusieurs façons de définir les couleurs en CSS, chacune avec ses avantages et ses inconvénients.

### Noms de couleur

CSS fournit [145 noms de couleurs](https://html-color-codes.info/color-names/), des plus basiques (noir, blanc, orange, jaune, bleu…) aux plus spécifiques (lawngreen, orchid, crimson…). Comme l’on souhaite probablement des couleurs plus spécifiques, les noms de couleurs ne sont pas souvent utilisés.

### rgb

Les écrans d’ordinateur, les téléviseurs et les téléphones mobiles utilisent tous le modèle de couleur RVB (Rouge/Vert/bleu) pour afficher les couleurs. Chaque couleur est définie par une combinaison de rouge, vert et bleu. Il y a 256 valeurs possibles pour le rouge, le vert ou le bleu. Étant donné que les ordinateurs commencent à compter à zéro, la valeur maximale est de 255.

Étant donné qu’une couleur est le résultat d’une combinaison de rouge, de vert et de bleu, chacune de ces 3 couleurs ayant 256 valeurs possibles, il existe 256 * 256 * 256 = 16 777 216 couleurs possibles.

Le modèle RVB étant directement lié à la manière dont les couleurs sont rendues physiquement, il est devenu une unité de couleur CSS.

<p style="color: rgb(219, 78, 68);">
Par exemple, la couleur de ce paragraphe est 219 de rouge, 78 de vert et 68 de bleu
</p>

```
p { color: rgb(219, 78, 68); }
```

La couleur noire ne contient ni rouge, ni vert, ni bleu:
```
body { color: rgb(0, 0, 0); }
```

De l’autre côté du spectre, le blanc correspond à la quantité maximale de rouge, vert et bleu:
```
body { background: rgb(255, 255, 255); }
```

### rgba

L’unité de couleur `rgba`  ajoute à `rgb` une valeur alpha (comprise entre 0 et 1, en valeurs décimales), qui définit le degré de transparence de la couleur:
```
body { color: rgba(0, 0, 0, 0.8); }
```
Une couleur noire légèrement transparente.

### hsl et hsla

HSL est un autre moyen de définir une couleur, qui fonctionne de manière plus intuitive :

Au lieu d’une couleur combinant rouge, vert et bleu, on définit :

- **la teinte** : une valeur allant de 0 à 360, parcourant le cercle chromatique (rouge, jaune, vert, bleu, violet…).
- le pourcentage de **saturation**, compris entre 0% et 100%, définit la “quantité de couleur”.
- le pourcentage de **luminosité**, compris entre 0% et 100%, définit le niveau de luminosité.

<p style="color: rgb(219, 78, 68);">
La couleur de ce paragraphe est définie ainsi : <code>color: hsl (4,68%, 56%);</code>.
4 indique qu’il est rouge, 68% indique que la saturation est assez importante, 56% indique qu’il est à mi-chemin entre le noir et le blanc
</p>

`hsla` est identique à `hsl`, avec la possibilité de définir une valeur alpha:
```
body {couleur: hsla (4, 68%, 56%, 0.5);}
```

### Hexadécimal

Une autre manière de déterminer une couleur est d’utiliser la notation hexadécimale.

Si le système décimal permet d’énumérer dix valeurs (0, 1, 2, 3, 4, 5, 6, 7, 8, 9), le système hexadécimal en permet 16 (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, A, B, C, D, E, F). Les valeurs RVB du rouge précédemment utilisé peuvent alors être décrites ainsi :

- Rouge : 219 => db
- Vert : 78 => 4e
- Bleu : 68 => 44

On le note :
```
p { color: #db4e44; }
```

Les valeurs hexadécimales sont plus difficilement lisibles, mais plus facilement copiables depuis le sélecteur de couleurs du système d’exploitation, de photohop ou d’illustrator.

## Dimensions

Il existe de nombreuses propriétés CSS nécessitant des unités de dimension :

- `font-size` définit la taille du texte
- `border-width` définit la graisse des bordures d’élément
- `margin` définit l’espacement entre les éléments
- `left/right/top/bottom` permettent de positionner et de déplacer des éléments

Les unités les plus utilisées sont:

- `px` pour les pixels
- `%`, `vw` ou `vh` pour les pourcentages
- `em` ou `rem` pour le dimensionnement par rapport au corps du texte

### Pixels

Étant donné que les écrans d’ordinateur utilisent des pixels pour afficher le contenu, il s’agit de l’unité de taille la plus courante en CSS.

Elle peut être utilisée pour fixer la largeur d’un élément:
```
div { width: 400px; }
```
Ou pour définir la taille du texte:
```
p { font-size: 20px; }
```

Les pixels en CSS sont simples car ils définissent des valeurs absolues: ils ne sont pas affectés par les autres propriétés CSS héritées.
Ils sont également largement utilisés à des fins de positionnement et d’espacement.

### Les pourcentages

Les pourcentages sont des unités relatives: ils dépendent du parent et / ou de l’ancêtre de l’élément.

Par exemple, les éléments de niveau bloc tels que les paragraphes occupent naturellement toute la largeur disponible. La règle CSS suivante les redimensionnera à la moitié de la largeur disponible.
```
p { width: 50%; }
```
Les pourcentages peuvent aider à définir d’autres propriétés CSS, telles que la taille du texte:
```
strong { font-size: 150%; }
```

Les unités `vw` et `vh` permettent de signifier des dimensions en fonction de la taille de la fenêtre du navigateur (vh = *viewport height*, vw = *viewport width*). Ainsi :
```
.huge { font-size: 8vw; }
```
Donnera un corps de texte lié à la taille de la fenêtre.
<style>.huge { font-size: 8vw;  line-height:1; margin:0}</style>
<strong class="huge">PLUS GROS</strong>

### Em

`em` est une unité relative: elle dépend de la valeur de la taille de police de l’élément.

Par exemple, si le parent a une taille de police de 20px et que l’on applique `font-size: 0.8em` à un élément enfant, cet élément enfant affichera une taille de police de 16px.

L’unité `em` permet de définir les tailles de police des éléments HTML les uns par rapport aux autres.
Par exemple, les `<h1>` peuvent être deux fois plus grand que le corps de texte, les `<h2>` seulement 1,5 fois plus grand et la barre latérale légèrement plus petite :

```
body { font-size: 16px; }
h1 { font-size: 2em; } /* = 32px */
h2 { font-size: 1.5em; } /* = 24px */
aside { font-size: 0.75em; } /* = 12px */
```

Si l’on décide de modifier la taille du corps de texte, la taille relative des titres et de la barre latérale changera en conséquence, laissant la page visuellement équilibrée.

En changeant juste une valeur, toutes les autres valeurs sont modifiées:
```
body { font-size: 20px; }
h1 { font-size: 2em; } /* = 40px */
h2 { font-size: 1.5em; } /* = 30px */
aside { font-size: 0.75em; } /* = 16px */
```

### Rem

L’unité `rem` (pour *root em*) est similaire à `em`, mais au lieu de dépendre de la valeur du parent, elle repose sur la valeur de l’élément “racine”, l’élément `<html>`.
```
html { font-size: 18px; }
corps { font-size: 1rem; } /* = 18px */
h1 { font-size: 2rem; } /* = 36px */
h2 { font-size: 1.5rem; } /* = 27px */
```

La différence entre rem et em est que les valeurs de rem sont fixes alors que les valeurs em peuvent se multiplier en fonction du contexte.


[→ Styler le texte](../text/){.bigbutton}

—

<small>Contenu adapté de [Jeremy Thomas](https://marksheet.io),  sous [license CC BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/). </small>
