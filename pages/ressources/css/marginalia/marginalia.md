
# Notes de marge

Les notes – de bas de page, de marge ou les annotations – sont un enjeu fréquent de la composition de texte sur le web, notamment dans le cas de documents écrits ou mémoires<label for="sn-page"></label><input class="sn-toggle" type="checkbox" id="sn-page"><span class="sn-note">Cette introduction technique s’augmente d’une brève et parcellaire mise en contexte, voir ci-dessous, l’avertissement, et plus bas <a href="#contexte">le contexte</a>.</span>.

Une vaste littérature technique a été produite sur le sujet – lire notamment la [majestueuse recherche exégétique](https://www.gwern.net/Sidenotes) de Gwern – et considérer l’approche technique de [Tufte CSS](https://github.com/edwardtufte/tufte-css) ou de [sidenotes.js](https://www.gwern.net/Sidenotes#sidenotes-js). 

Les exemples  se basent largement sur l’approche développée par Tufte CSS.

### tl;dr
[Exemple simple](https://codepen.io/esadpyrenees/pen/zYNKxyG?editors=1100). [Exemples avancés](#exemples-avances).

### Avertissement

L’usage des notes (manuscrites, imprimées ou numériques) s’inscrit dans une histoire longue du texte (manuscrit, imprimé ou numérique). On trouvera [ci-dessous](#contexte) quelques références historiques, culturelles ou graphiques qui ont exploré en profondeur ces questions. Comme toute chose ayant affaire à l’érudition et aux écrits académiques, la somme d’informations s’y rapportant est immense.

## Balisage 

Le balisage html d’une note peut être réalisé de plusieurs manières. Les éléments essentiels sont **l’appel de note** et le **contenu de la note**. 

### Notes de pied/bas de page
L’appel de note peut être balisé par un `<a>` dont l’attribut `href` cible l’`id` du contenu de la note.

L’ensemble des notes peut être regroupées dans un `aside`, et dans une liste `ul`.

```html
<article>
    <p>Un appel de note <a href="#fn-01" id="fn-ref-01">1</a> dans un paragraphe.</p>
    (…)
</article>

<aside>
  <ul>
    <li id="fn-01">Le contenu de la note avec un lien retour <a href="#fn-ref-01">↩</a></li>
  </ul>
</aside>
```
NB : La notation `fn` est une abbréviation de *footnote*.

[Voir l’exemple](https://codepen.io/esadpyrenees/pen/VwPKmNG?editors=1100). Voir [un exemple plus accessible](https://codepen.io/esadpyrenees/pen/VwPmZbM), avec numérotation automatique des notes.

### Notes de marge
Les notes de marge doivent être insérées au fil du texte. 

Ce type de note nécessite des ajustements formels, notamment lors de l’affichage sur mobile. La stratégie la plus courante est de masquer le contenu de la note et de l’afficher au clic sur l’appel de note.

Deux solutions sont envisageables pour mettre en œuvre cette stratégie : soit via javascript<label for="sn-no-js"></label><input class="sn-toggle" type="checkbox" id="sn-no-js"><span class="sn-note">Essayons de faire sans…</span>, soit via l’utilisation d’une “astuce” CSS. Cette astuce repose sur l’utilisation d’une case à cocher dont l’état (cochée ou pas) peut être utilisé en CSS via la pseudo-classe `:checked`. Un `<label>` (qui contient l’appel de note) permet de cocher la case et de rendre visible l’élément situé immédiatement après dans le code (qui contient le contenu de la note).

```html
<article>
    <p>
      Un appel de note <label for="sn-page">1</label>
      <input class="sn-toggle" type="checkbox" id="sn-page">
      <span class="sn-note">Le contenu de la note.</span> 
      dans un paragraphe.
    </p>
</article>
```
```css
/* on cache la case à cocher */
.sn-toggle { display: none; }
/* quand la case est cochée, l’élément suivant (+) est affiché */
.sn-toggle:checked + .sn-note { display: block; }
```

## Mise en forme

### Numérotation automatique
Les appels de note peuvent être numérotés automatiquement grâce aux compteurs CSS et au contenu injectable dans les éléments via une pseudo-classe. Il faut alors laisser le `<label>` vide.
```html
<article>
    <p>
      <!-- le <label> est laissé vide -->
      Un appel de note <label for="sn-page"></label>
      <input class="sn-toggle" type="checkbox" id="sn-page">
      <span class="sn-note">Le contenu de la note.</span> 
      dans un paragraphe.
    </p>
</article>
```
```css
/* on initialise le compteur CSS en lui donnant un nom arbitraire */
:root { counter-reset: sn-counter; }
/* 
  Sélectionne les <label>s dont l’attribut “for” commence par “sn-” (on peut aussi utiliser une classe…).
  Chaque fois qu’un nouveau label est rencontré, le compteur CSS est incrémenté.
*/
label[for^=sn-] {
  counter-increment: sn-counter;
}
/* La valeur du compteur est injectée à l’intérieur du <label>… */
label[for^=sn-]::after {
  content: counter(sn-counter, decimal);
}
/* …et du contenu de la note */
.sn-note::before {
  content: counter(sn-counter, decimal) " – ";
}
```

### Mise en forme écran large

Si l’écran est suffisamment large, il est nécessaire de :
* contraindre la taille du conteneur (`max-width`)
* préserver un espace pour afficher les notes en marge (`padding-right`)

La note elle-même se voit affecter :
* une largeur
* une marge interne
* une propriété `float` pour la “sortir du flux”
* une marge négative qui la décale dans la marge

```css
:root {
  --p-width:650px; /* largeur max des paragraphes */
  --sn-width: 270px; /* largeur des notes */
  --sn-margin: 30px; /* marge entre notes et paragraphes*/
  counter-reset: sn-counter; /* compteur CSS pour les numéros des notes */
}
article {
  /* largeur max déterminée en additionnant largeur des paragraphes, marge et largeur des notes*/
  max-width: calc(var(--p-width) + var(--sn-width) + var(--sn-margin));
  /* préservation de l’espace espace dédié aux notes */
  padding-right: calc(var(--sn-width) + var(--sn-margin))
}
.sn-note {
  /* largeur de la note */
  width: var(--sn-width);
  /* espace de marge interne */
  padding-left: var(--sn-margin);
  /* la note “sort du flux” et vient se positionner à droite */
  float: right;
  clear: right;    
  /* marge négative qui décale la note de sa propre largeur */  
  margin-right: calc(var(--sn-width) * -1);
}
```
[Voir l’exemple en ligne](https://codepen.io/esadpyrenees/pen/zYNKxyG)

### Mise en forme mobile / petits écrans

L’utilisation des marges n’étant plus une solution acceptable quand la largeur disponible pour le texte se réduit, une des solutions les plus simples est de n’afficher les notes qu’au clic sur l’appel de note.

* Une `media-query` permet de réserver la mise en forme aux écrans étroits
* Les notes sont désormais cachées par défaut…
* et rendues visibles quand la case est cochée

```css
/* le point de rupture est ici exprimé en pixels pour plus de simplicité.
Il correspond à la somme des valeurs des propriétés --p-width, --sn-width et --sn-margin, 
soit  650px + 270px + 30px = 950px */
@media (max-width:950px){
  /* on cache la case à cocher */
  .sn-toggle { display: none; }
  /* on cache la note */
  .sn-note { display: none; }
  /* quand la case est cochée, l’élément suivant (+) est affiché */
  .sn-toggle:checked + .sn-note { 
    display: block; /* affiche la note */
    width: 100%; /* réinitialise sa largeur */
    float: left; /* supprime le float right */
    clear: both;
    margin: 1em 0; /*supprime la marge négative */
  }
}
```

[Voir l’exemple en ligne](https://codepen.io/esadpyrenees/pen/zYNKxyG)

## Exemples avancés {#exemples-avances}

On peut vouloir distinguer **plusieurs types de notes** (par exemple références iconographiques et notes textuelles). Un compteur CSS dédié peut alors être spécifié pour chaque type. L’affichage du compteur peut être _1, 2, 3_ ou _a, b, c_. [Voir l’exemple](https://codepen.io/esadpyrenees/pen/KKagwYY?editors=1100).

On peut vouloir **alterner les notes**, à gauche et à droite du texte. La logique précédemment mise en œuvre pour afficher les notes à droite du texte doit être répliquée pour la gauche. Une autre `media-query` peut être créée pour différencier la “disparition” des types de notes pour les écrans étroits. [Voir l’exemple](https://codepen.io/esadpyrenees/pen/NWdRqMK?editors=1100).

Un problème d’**accessibilité** est créé par la propriété `display: none` ; les éléments ainsi cachés deviennent difficilement accessibles, notamment aux lecteurs d’écran ou aux “reader-modes” des navigateurs. On peut alors augmenter le balisage pour inclure des parenthèses ou des crochets qui viendront délimiter le texte de la note et utiliser un `<small>` plutôt qu’un `<span>` pour englober la note elle-même. [Voir l’exemple](https://codepen.io/esadpyrenees/pen/wvgzzMq?editors=1100).

Pour pouvoir **agrandir les images** –dont la taille en marges est réduite–, on peut envisager l’adjonction d’un *plugin* javascript de type _lightbox_. [Voir l’exemple](https://codepen.io/esadpyrenees/pen/dyNpOyR) avec le plugin [GLightbox](https://github.com/biati-digital/glightbox/blob/master/README.md).

## Aller plus loin {#contexte}

Un [fil Twitter](https://twitter.com/julienbidoret/status/1376484874547310595) qui signale des références sur cette question.

La prestigieuse École nationale des chartes a publié en 2020 « [Marges et marginalia, du Moyen Âge à aujourd’hui](http://www.chartes.psl.eu/sites/default/files/atoms/files/volume_marges_2020_0.pdf) », étude approfondie des inscriptions marginales.

Le texte utilisé dans les exemples est issu du résumé de l’ouvrage d’Anthony Grafton, « Les origines tragiques de l'érudition — Une histoire de la note en bas de page » dont la traduction française est parue au Seuil en 1998 ; lire une [recension](https://parenthese.hypotheses.org/644) par Nicolas Simon. Écouter Anthony Grafton dans [La Fabrique de l’histoire](https://www.franceculture.fr/emissions/la-fabrique-de-lhistoire/histoireactualites-du-vendredi-200712), ou lors de la [conférence donnée à la Chaire du Louvre](https://www.youtube.com/watch?v=LMXLvA8k7VI) où il venait parler d’un autre de ses ouvrages, « La page de l'Antiquité à l’ère du numérique : histoire, usages, esthétiques ».

[Marc Jahjah](http://www.marcjahjah.net/), maître de conférences à l’Université de Nantes a publié de [nombreux articles et billets](http://www.marcjahjah.net/category/carnets/matginalia) liés aux *marginalia*. Lire notamment [L’évolution des marginalia de lecture du « papier à l’écran »](http://www.implications-philosophiques.org/actualite/une/levolution-des-marginalia-de-lecture-du-papier-a-lecran/#_ftn64).

Indirectement lié à la question de la condition et de l’usage des marges, l’ouvrage « [De la marge au centre – théorie féministe](https://www.cambourakis.com/tout/sorcieres/de-la-marge-au-centre-theorie-feministe/) » de bell hooks.

*Tristram Shandy* de Lawrence Sterne ou *Feu pâle* de Vladimir Nabokov sont parmi les grands livres de la littérature qui usent des notes – en marge ou en pied – un puissant ressort fictionnel et narratif. Dans « [Folies marginales et marginaux fous : Le traitement des notes de bas de page dans *House of Leaves* de Mark Z. Danielewski](http://revuepostures.com/fr/articles/guilet-11) », Anaïs Guilet analyse le cas spécifique de *House of Leaves*.

### Dans le web(design)

Déjà citée en introduction, la page [Sidenotes In Web Design](https://www.gwern.net/Sidenotes) de Gwern Branwen brosse un large panorama des possibilités liées aux notes de marge sur le web. 

Arhur Perret détaille le [processus de mise en forme](https://www.arthurperret.fr/citations-marginales.html) des notes sur son site, s’appuyant sur « La typographie moderne » de Robin Kinross et « Livre et typographie » de Jan Tschichold.

[Hypothesis](https://web.hypothes.is/) est une extension de navigateur (installable au sein d’un site) sous la forme d’une interface d’annotation visant à “ajouter une couche de conversation” et d’annotations partageables aux sites web.