# Fontes variables

Les polices variables (*variable fonts*) sont une évolution de la spécification OpenType. Elles permettent d’inclure dans un seul fichier un ensemble d’_axes de variation_ qui permettent de contrôler certaines propriétés du dessin. 

Auparavant, l'utilisation de plusieurs styles requerait le chargement de plusieurs fichiers - un pour chaque “variation” : graisse, chasse ou italique. Ces différentes variations d’un dessin de caractère peuvent désormais être contenues dans un seul fichier. Le langage CSS permet de contrôler toutes les variantes contenues dans un seul fichier de police.

Lire l’introduction de Jason Pamental (2019) : [*An Introduction to Variable Fonts*](https://24ways.org/2019/an-introduction-to-variable-fonts/) ou parcourir [variablefonts.io](https://variablefonts.io/). Découvrir et jouer avec des fontes variables sur [v-fonts.com](https://v-fonts.com/), [axis-praxis](https://www.axis-praxis.org/) ou [variable emojis](http://variableemojis.com/).

Sur [variablefonts.dev](https://variablefonts.dev/), Mandy Michael a réuni une collection d’expérimentations et d’exemples autour des fontes variables, notament sur une dimension non abordée ici, les _color fonts_.


## Où trouver des fontes variables

Les outils techniques qui ont permis de rendre variables les fontes ont largement été intégrées aux processus de design des dessinateur⋅ices de caractères (notions de _masters_, de _designspace_). Aussi, nombre de fontes sont aujourd’hui produites et diffusées sur ce mode ; voir la [liste de fonderies](../fonderies). Google liste les fontes variables et open-source qu’il met à disposition [ici](https://fonts.google.com/variablefonts).   


## Qu’y a-t-il dans une fonte variable ?

Quels sont les axes, leurs valeurs ?  [**Wakamaifondue**](https://wakamaifondue.com/) vous apportera toutes les réponses ! (en plus d’apporter une réponse au problème d’héritage…)


## Utilisation

Les fontes variables doivent être déclarées dans un fichier CSS grâce à la déclaration `@font-face` décrite dans la page [webfonts](../webfonts/).

### Intégration & usage

On peut principalement intégrer des fontes variables à une feuille de style CSS via les formats de fichier `ttf` et `woff2`. 

#### TTF :(
```css
@font-face {
    font-family: "Mutator";
    src: url("MutatorSans.ttf") format("truetype-variations");   
}
```

#### WOFF2 ;)
```css
@font-face {
    font-family: 'Commissioner';
    src: url('fonts/Commissioner.woff2') format('woff2 supports variations'),
        url('fonts/Commissioner.woff2') format('woff2-variations');
    font-weight: 100 900;
}
```

### Axes normalisés

Certains axes (`stretch`, la chasse, `weight`, la graisse ; mais aussi *slant*, *ital* et *optical-size*) sont accessibles via des déclarations dédiées :

```css
@font-face {
    font-family: 'Plex Sans';
    src: url('IBMPlexSansVar-Roman.woff2') format('woff2-variations');
    font-stretch: 85% 100%; /* les valeurs de font-stretch pour Plex Sans varient entre 85% et 100% */
    font-weight: 100 700; /* les valeurs de font-weight pour Plex Sans varient entre 100 et 700 */
    font-style: normal;
}
```
```html
<span style="font-weight:135; font-stretch:85%">135 × 85 – </span> 
<span style="font-weight:135; font-stretch:100%">135 – </span> 
<span style="font-weight:376">376 – </span> 
<span style="font-weight:648">648</span>
```

<span class="plex" style="font-weight:135; font-stretch:85%">135 × 85 – </span> 
<span class="plex" style="font-weight:135; font-stretch:100%">135 – </span> 
<span class="plex" style="font-weight:376">376 – </span> 
<span class="plex" style="font-weight:648">648</span>


### Axes personnalisés

D’autres axes peuvent être personnalisés par les dessinateurs de caractères. On peut personnaliser leur valeur grâce à la déclaration
`font-variation-settings`. NB: on peut également utiliser `font-variation-settings` pour les axes prédéfinis, en utilisant leurs “codes” : `wght`, `wdth`, `ital`, `slnt` et  `opsz`.

```css
.cheeesy {
    font-family: "Cheee Variable";
    font-variation-settings: "temp" 700, "yest" 352, "grvt" 0;
}
```


## Animation

Comme toutes les propriétés CSS exprimées numériquement, on peut animer les variations sur les axes.

```css
p { animation: mutant 5s cubic-bezier(0.25, 1, 0.5, 1) infinite alternate; }
@keyframes mutant {
    0% { font-variation-settings: "wdth" 0, "wght" 0 }
    25% { font-variation-settings: "wdth" 1000, "wght" 0 }
    50% { font-variation-settings: "wdth" 1000, "wght" 1000 }
    75% { font-variation-settings: "wdth" 0, "wght" 1000 }
    100% { font-variation-settings: "wdth" 0, "wght" 0 }
}
```
<div class="mutator" style="animation: mutant 5s cubic-bezier(0.25, 1, 0.5, 1) infinite;">
MUTANT
</div>

En décomposant un mot lettre par lettre, on peut l’animer ainsi :

```css
.char {
    /* La variable CSS --delay utilise la variable CSS --index, définie dans le HTML */
    --delay: calc((var(--index) + 1) * 400ms); 
    animation: caution 4000ms infinite both;
    animation-delay: var(--delay);
}
@keyframes caution {
    0% { font-variation-settings: 'wght' 100, 'wdth' 85; }
    60% { font-variation-settings: 'wght' 700, 'wdth' 100; }
    100% { font-variation-settings: 'wght' 100, 'wdth' 85; }
}
```
```html
<div>
    <span class="char" style="--index:0;">C</span>
    <span class="char" style="--index:1;">A</span>
    <span class="char" style="--index:2;">U</span>
    <span class="char" style="--index:3;">T</span>
    <span class="char" style="--index:4;">I</span>
    <span class="char" style="--index:5;">O</span>
    <span class="char" style="--index:6;">N</span>
</div>
```

<div class="mutator">
    <span class="char" style="--index:0;">C</span>
    <span class="char" style="--index:1;">A</span>
    <span class="char" style="--index:2;">U</span>
    <span class="char" style="--index:3;">T</span>
    <span class="char" style="--index:4;">I</span>
    <span class="char" style="--index:5;">O</span>
    <span class="char" style="--index:6;">N</span>
</div>

## Interaction

On peut également rendre la variation dépendante d’une interaction de l’utilisateur, ici la position de la souris vis à vis de la fenêtre.

```js
const yvain = document.querySelector('#yvain');
let width = window.innerWidth;
let height = window.innerHeight;

window.addEventListener('mousemove', function(e){
    const wdth = Math.floor(e.pageX * 1000 / width);
    const wght = Math.floor(e.pageY * 1000 / height);
    // variation style
    const variation = ' "wdth" ' + wdth  + ', "wght" ' + wght ;
    yvain.style.fontVariationSettings = variation;    
})
```
<div id="yvain" class="mutator">
VARIABLE
</div>

<script>
const yvain = document.querySelector('#yvain');
let width = window.innerWidth;
let height = window.innerHeight;

window.addEventListener('mousemove', function(e){
    const wdth = Math.floor(e.pageX * 1000 / width);
    const wght = Math.floor(e.pageY * 1000 / height);
    // variation style
    const variation = ' "wdth" ' + wdth  + ', "wght" ' + wght ;
    yvain.style.fontVariationSettings = variation;    
})
</script>


—

Polices utilisées sur cette page : [IBM Plex](https://www.ibm.com/plex/) de Mike Abbink, [Mutator Sans](https://github.com/LettError/mutatorSans) d’Erik van Blokland et [Yvain](http://leogaullier.fr/) de Léo Gaullier.