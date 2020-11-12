> On ne peut pas *ne pas* communiquer    
— Paul Watzlawick

La prise en compte conjointe des notions de macro et micro-typographie est essentielle pour atteindre la qualité typographique appelée de ses vœux par Maximilien Vox : « En typographie, il n'y a qu'un seul degré de bien : la perfection ». Max reconnaissait néanmoins que « La typographie est simple, aussi simple que de jouer du violon. »
<br><br>


##### Mise à jour en cours {.blink}

# Macrotypographie


> La macrotypographie désigne l’agencement de l’espace typographique et la mise en page : le format de l’imprimé, la taille et la disposition des colonnes de texte et des illustrations, la hiérarchisation des titres et des légendes.  
— Le détail en typographie, Jost Hochuli, Éditions B42


## Sélection

Une bonne composition typographique requiert un bon choix typographique.
Il faut considérer :
* le ton (la justesse du choix par rapport au contenu mis en forme)
* la lisibilité (corps de texte ou titrage, légendes)
* la qualité technique (complétude du jeu de caractères, spacing, hinting, fonctionnalités opentype)
* les variations disponibles (présence d’italiques, de vriations de graisse, de largeurs)

La page de références dédiées aux [fonderies numériques](../../../references/typo/) contient de très nombreux liens vers des fournisseurs de polices de caractères de qualité (on n’y trouvera donc pas de lien vers dafont.com, bien qu’une fonte issue de ce site puisse parfaitement répondre aux enjeux évoqués ci-dessus).

L’appairage (mise en combinaison de deux ou plusieurs fontes dans un même document) recquiert un soin particulier. De nombreuses ressources existent en ligne pour trouver de l’inspiration : [fontpair.co](https://fontpair.co/), [fontsinuse.com](https://fontsinuse.com/), etc.

## Unités

Pour déterminer la taille (le corps) du texte dans le contexte d’une page web, il est préférable d’utiliser des unités relatives (`em`, `rem` voire `%`) que des unités absolues (`cm`, `pt`, ou même `px`). Cela permet de composer le texte en gardant à l’esprit les *relations* qu’entretiennent les éléments entre eux et facilite la réalisation d’un document à la [typographie *responsive*](../../rwd/#typography). 

#### em
L’unité `em` est relative au corps de texte de l’élément parent.

```
div         { font-size: 16px; }
div h1      { font-size: 2em; }   /* = 32px */ 
div p       { font-size: .75em; } /* = 12px */ 
div p small { font-size: .75em; } /* = 9px */ 
```

#### rem
L’unité `rem` est relative au corps de texte de l’élément HTML.

```
html        { font-size: 16px; }
div h1      { font-size: 2rem; }   /* = 32px */ 
div p       { font-size: .75rem; } /* = 12px */ 
div p small { font-size: .75rem; } /* = 9px <= différent */ 
```

#### vw / vh
Pour les gros corps de texte, on peut envisager d’utiliser les unités `vw` et `vh`, liées à la taille de l’écran (plus précisément au *viewport*, zone visible du navigateur) en les couplant à la fonction `calc` de CSS, qui permet de multiplier/aditionner/diviser/soustraire des valeurs établies en différentes unités.

Approche simplifiée :

```
h1 { font-size: calc(4vw + 1rem); }
```

Approche complète (complexe) :


```
/* applicable en dessous de 320px */
h1 { font-size: 1.25rem; } /* = 20px */
p { font-size: .9375rem; } /* = 15px */

/* applicable entre 320px et 960px */
@media screen and (min-width: 320px) {
    h1 { font-size: calc( 1.25rem + 3.125vw - 10px ); }
    p { font-size: calc( .9375rem + 0.46875vw - 1.5px ); }
}
/* applicable au dessus de 960px */
@media (min-width: 960px) {
    h1 { font-size: calc( 1.25rem + 20px ); }
    p { font-size: calc( .9375rem + 3px ); }
}
```
<small>Exemple issu de l’article [The math of CSS Locks](https://fvsch.com/css-locks) de Florens Verschelde.</small>

<style>
    .relative{ background:#eee; padding: 1em}
    .relative h1 { font-size: 1.25rem; margin:0; padding:0}
    .relative p { font-size: .9375rem; margin: 0}
@media screen and (min-width: 320px) {
    .relative h1 {
        font-size: calc( 1.25rem + 3.125vw - 10px );
    }
    .relative p {
        font-size: calc( .9375rem + 0.46875vw - 1.5px );
    }
}
@media (min-width: 960px) {
    .relative h1 {
        font-size: calc( 1.25rem + 20px );
    }
    .relative p {
        font-size: calc( .9375rem + 3px );
    }
}
</style>
<div class="relative" resizable>
<h1>Redimensionner…</h1>
<p>…le navigateur pour voir le titre évoluer de 20px à 40px et le texte de 15 à 18px selon la largeur du <i>viewport</i>. Ou <a href="https://fvsch.com/articles/css-locks/demo3.html">accéder à l’exemple en ligne</a>.</p>
</div>

## Rythme, échelle et hiérarchie

La taille et la définition des écrans ayant considérablement augmenté depuis ces dernières années (tout comme la qualité des moteurs de rendu typographique des appareils), l’usage de corps de texte importants est à favoriser. 

Pour le texte long, un corps minimal de 16px (voire [beaucoup plus](https://fvsch.com/body-copy-sizes)) est ~~souhaitable~~ nécessaire.

On peut envisager de réduire ce corps de base pour le mobile, généralement tenu plus près de l’oeil du lecteur, afin d’augmenter le nombre de mots par ligne.

Une échelle tpographique, permettant de conserver un rapport harmonieux entre les différents corps peut être mise en place :

```
body  { font-size: 16px; }
h1    { font-size: 2.25rem; }  /* 16px × 2.25 = 36px */ 
h2    { font-size: 1.5rem; }   /* 16px × 1.5 = 24px */ 
h3    { font-size: 1.125rem; } /* 16px × 1.125 = 18px */ 
small { font-size: .875rem; }  /* 16px × 0.875 = 14px */ 
```

Plusieurs outils en ligne permettent de générer des échelles typographiques basées sur les rapports de proportion classiques : [type-scale.com](https://type-scale.com/) ou [Type Scale Generator](https://baseline.is/tools/type-scale-generator/).


## Espace et contraste

L’espace blanc ou l’espace négatif (en typo comme en photo) est une composante majeure de la macro-typographie. C’est la spatialisation des éléments dans une page qui détermine les dynamiques de lectures et la manière qu’aura le lecteur de lire, naviguer et parcourir le texte.

## Contraste et couleur

Le contraste est lié à la mise en page et à l’espace négatif circulant entre les éléments, mais également à la couleur du texte *versus* celle de son arrière-plan.

On peut chercher à diminuer le contraste pour diminuer la fatigue de l’œil du lecteur (à l’écran, le blanc est *très* lumineux), en veillant néanmoins à conserver un contraste suffisant. Les règles d’accessibilité du contenu textuel (édictées par les *Web Content Accessibility Guidelines* / WCAG) proposent de ne pas descendre [en dessous de certaines valeurs](https://developer.mozilla.org/fr/docs/Web/Accessibility/Understanding_WCAG/Perceivable/Contraste_de_la_couleur). Le sélecteur de couleur de Firefox donne une “note” au contraste produit par la combinaison de la couleur du texte et de son arrière-plan.

Toute information apportée par la couleur doit également prendre en compte les problématiques liées au daltonisme et aux différents types de dyschromatopsie (anomalies de la vision affectant la perception des couleurs, qui touchent beaucoup de monde – ~8% de la pop. masculine française, notamment). Voir [Sim Daltonism](https://michelf.ca/projects/sim-daltonism/).

## Détails dans la composition

Défendre la veuve et l’orphelin, éviter les veuves et les orphelines. (Utile en cas de mise en page en colonnes uniquement)

```
p {
    orphans: 2;
    widows: 2;
}
```



# Microtypographie

##### Mise à jour en cours {.blink}

[Espaces unicode et navigateurs web](https://fvsch.com/espaces-unicode/)

Un [préprocesseur HTML pour la typographie](https://typeset.lllllllllllllllll.com/)