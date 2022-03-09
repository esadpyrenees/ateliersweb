# Web fonts

## Intégrer une *web font*

### @font-face

Les fontes doivent être intégrées depuis un appel `@font-face` dans le fichier CSS.

L’emplacement des fichiers de typo est relatif au fichier CSS.

Chaque graisse (y compris les italiques) doit faire l’objet d’une déclaration `@font-face`, mais le nom de la famille doit être le même, de manière à pouvoir supporter les variations de graisses produites par des balises HTML comme `<strong>` ou `<em>`.
```
@font-face {
    font-family: 'MyWebFont';
    font-weight: 400; /* Graisse : regular */
    src: url('fonts/webfont.woff') format('woff');
}
@font-face {
    font-family: 'MyWebFont';
    font-weight: 400; /* Graisse : regular */
    font-style: italic; /* Style : italique */
    src: url('fonts/webfont-italic.woff') format('woff');
}
@font-face {
    font-family: 'MyWebFont';
    font-weight: 700; /* Graisse : bold */
    src: url('fonts/webfont-bold.woff') format('woff');
}            
```
### Application

Pour appliquer la famille à un élément de la page, il suffit de lui attribuer la déclaration `font-family` adéquate :
```
h1 {
    font-family: 'MyWebFont';
    font-weight: bold;
}
p {
    font-family: 'MyWebFont';
}
```
### Compatibilité

Pour intégrer une police de caractères dans une page web, un seul fichier ne suffit pas pour assurer la compatibilité avec tous les navigateurs, bien qu’aujourd’hui, le support des formats woff (Web Open Font Format) et woff2 se soit généralisé sur [les navigateurs modernes](https://caniuse.com/#search=woff).

Pour une meilleure compatibilité, une syntaxe plus complète peut être saisie (et de nombreux fichiers doivent être présents):
```
@font-face {
    font-family: 'MyWebFont';
    font-weight:400; /* Graisse : regular */
    src: url('fonts/webfont.eot'); /* IE9 */
    src: url('fonts/webfont.eot?#iefix') format('embedded-opentype'), /* IE6-IE8 */
        url('fonts/webfont.woff') format('woff'), /* Navigateurs modernes */
        url('fonts/webfont.ttf')  format('truetype'), /* Safari, vieux Android, vieux iOS */
        url('fonts/webfont.svg#svgFontName') format('svg'); /* Très vieux iOS : ) */
}
@font-face {
    font-family: 'MyWebFont';
    font-weight:700; /* Graisse : bold */
    src: url('fonts/webfont-bold.eot');
    src: url('fonts/webfont-bold.eot?#iefix') format('embedded-opentype'),
        url('fonts/webfont-bold.woff') format('woff'),
        url('fonts/webfont-bold.ttf')  format('truetype'),
        url('fonts/webfont-bold.svg#svgBoldFontName') format('svg');
}            
```

### Services

Le service [webfonts](http://www.google.com/webfonts/) de Google permet d’intégrer une police fournie par google en faisant simplement un lien avec la feuille de style qui la contient. <span class="blink">On se rappellera néanmoins qu’avec Google, rien n’est _vraiment_ gratuit. Google se sert en effet des liens d’intégration des fontes comme de _trackers_ lui permettant d’accumuler des données sur les visiteurs de votre page web.</span>[^Google] Il sera préférable de télécharger les polices, de les convertir en woff/woff2 (voir ci-dessous), de les inclure dans un fichier CSS, en les hébergeant soi-même. Alternativement, le service [google-webfonts-helper](https://google-webfonts-helper.herokuapp.com/fonts) permet de télécharger facilement les fichiers. 
[^Google]:Un tribunal allemand a condamné (01/2022) l’exploitant d’un site Web pour avoir transféré l’adresse IP d’un utilisateur à Google via le service Google Fonts, sans consentement préalable, en vertu du RGPD.
*[RGPD]: Règlement général sur la protection des données

D’autres services, tels [<del>Typekit</del> Adobe fonts](http://typekit.com) ou [fonts.com](http://fonts.com) permettent également d’intégrer des fontes à une page (moyennant paiement), parfois via l’insertion d’un script javascript.

Sur la page [Réferences/fonderies](../../../references/foundries/) se trouve une liste de ces services.

### Générer / convertir des webfonts

La page [fonderies/](../../references/foundries/) liste également quelques fonderies numériques libre ou open-source ([Velvetyne](http://velvetyne.fr/), [OpenSourcePublishing](http://ospublish.constantvzw.org/foundry/)…), qui peuvent vous permettre de télécharger leurs créations sans vous fournir l’ensemble des fichiers nécessaires.

Les fichiers téléchargés (souvent des .otf) devront être convertis pour pouvoir être intégrés à vos pages.

[Transfonter](http://transfonter.org/) ou [Everythingfont](https://everythingfonts.com/) permettent de convertir vos fichiers otf ou ttf en webfonts. Font Squirrel met également à disposition un générateur de [« packs » @font-face](http://www.fontsquirrel.com/fontface/generator), qui vous permet de faire ces conversions.

[Fontrep](http://fontprep.com) est une application Mac dédiée à la transformation de fichiers ttf et otf en webfonts, qui offre de grandes facilités de *subsetting*.
