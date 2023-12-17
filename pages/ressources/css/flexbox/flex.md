# Flexbox

Flexbox est un module CSS déjà largement implémenté dans les navigateurs (2016/2017). Il permet de définir une logique de mise en page flexible.

Au delà de ceux qui sont présents dans cette page, [des exemples basiques](../../../exemples/#flex) sont disponibles dans la section dédiée.


## Appliquer flexbox


Dans ce premier exemple, on peut observer ce qui se produit pour les éléments enfants (item 1, item 2 et item 3) quand leur parent (la boîte qui entoure ces trois éléments se voit appliquer le code suivant :

```css
.parent {
    display: flex;
    /* On peut attribuer une “goutière” avec la propriété gap : */
    gap: 20px 40px; /* goutière verticale de 20px, goutière horizontale de 40px */
    gap: 20px; /* goutière uniforme */
}
.enfant {
    width: 20%;
}
```

<section class="section example">
  <p><button class="btn actived toggle-flexbox">Flexbox off</button> </p>
  <article class="onoff-example flex-example">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
  </article>
  <p>La propriété <code>display</code> du parent est : <code class="status">flex</code>.</p>
</section>



## Orientation

Par défaut, les éléments enfants d’un élément flexbox vont s’organiser horizontalement : la valeur de la propriété `flex-direction` du parent est `row`.

Les valeurs possibles sont `row`, `row-reverse` (qui inverse l’ordre…), `column`, et `column-reverse`.

```css
.parent {
    display: flex;
    flex-direction: column;
}
```
    
<section class="section example" >
  <p class="buttons">
    <code>flex-direction :</code>
    <button class="btn actived toggle-direction" data-direction="column">column</button> 
    <button class="btn toggle-direction" data-direction="row">row</button> 
    <button class="btn toggle-direction" data-direction="column-reverse">column-reverse</button> 
    <button class="btn toggle-direction" data-direction="row-reverse">row-reverse</button> 
  </p>
  <article class="direction-example flex-example">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
  </article>
  <p>La propriété <code>flex-direction</code> du parent (l’axe principal) est : <code class="status">column</code>.</p>
</section>


## Alignement sur l’axe principal 

Pour décider de l’alignement des éléments enfants, on peut utiliser la propriété __`justify-content`__, qui accepte une des cinq valeurs suivantes : `flex-start`, `flex-end`, `center`, `space-between`, `space-evenly` & `space-around`.

<!-- La notion d’axe principal (et la raison de _`flex-start`_ et pas un hypothétique `flex-left`) est que le point de départ d’un texte n’est pas nécessairement la gauche. En arabe ou hébreu, le texte s’écrit de droite à gauche ; ce qui se code grace à un attribut `dir="rtl"`.  -->
Si on établit `flex-direction` à la valeur `column` ou `column-reverse`, l’axe principal devient vertical.


<section class="section"  markdown="1">
  <p class="buttons">
    <code>justify-content :</code>
    <button class="btn toggle-justify actived" data-justify="flex-start">flex-start</button> 
    <button class="btn toggle-justify" data-justify="flex-end">flex-end</button> 
    <button class="btn toggle-justify" data-justify="space-between">space-between</button> 
    <button class="btn toggle-justify" data-justify="space-around">space-around</button> 
    <button class="btn toggle-justify" data-justify="space-evenly">space-evenly</button> 
    <button class="btn toggle-justify" data-justify="center">center</button>  
  </p>
  <article class="justify-example flex-example">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
  </article>
  <p>La propriété <code>justify-content</code> du parent est : <code id="justify-status">flex-start</code>.
  <span class="explain justify-flex-start visible"> Les éléments sont groupés au début de la ligne. C’est la valeur par défaut.</span>
  <span class="explain justify-flex-end">Les éléments sont distribués au long de la ligne ; le premier en début de ligne, le dernier en fin de ligne.</span>
  <span class="explain justify-space-between">Les éléments sont distribués au long de la ligne ; le premier en début de ligne, le dernier en fin de ligne.</span>
  <span class="explain justify-space-around">Les éléments sont distribués au long de la ligne avec un même espace autour de chacun. Noter que les espaces ne sont pas visuellement équivamlents, chaque élément successif ayant le même espace sur chacun de ses côtés.</span>
  <span class="explain justify-space-evenly">Les éléments sont répartis équitablement. Tous les éléments sont séparés par le même espace </span>
  <span class="explain justify-center">Les éléments sont centrés dans la ligne.</span>
  </p>


</section>


## Alignement sur l’axe transversal

On peut utiliser la propriété `align-items` pour décider de l’alignement des éléments enfants sur l’axe transversal (perpendiculaire à l’axe principal). `align-items` accepte l’une des cinq valeurs suivantes : `flex-start`, `flex-end`, `center`, `baseline` & `stretch`

Dans cette série d’exemples, aucun des éléments enfants ne s’est vue attribué de hauteur explicite. La hauteur des parents est de 80px.



<section class="section" markdown="1">
  <p class="buttons">
    <code>align-items:</code>
    <button class="btn toggle-align actived" data-align="flex-start">flex-start</button> 
    <button class="btn toggle-align" data-align="flex-end">flex-end</button> 
    <button class="btn toggle-align" data-align="center">center</button>  
    <button class="btn toggle-align" data-align="baseline">baseline</button>  
    <button class="btn toggle-align" data-align="stretch">stretch</button>      
  </p>
  <article class="align-example flex-example">
    <div style="font-size:1em">Item 1</div>
    <div style="font-size:.75em">Item 2 (.75em)</div>
    <div style="font-size:1.6em">Item 3 (1.3em)</div>
  </article>
  <p>La propriété <code>align-items</code> du parent est : <code id="align-status">flex-start</code>.
  <span class="explain align-flex-start visible"> Les éléments sont groupés au début de la ligne. C’est la valeur par défaut.</span>
  <span class="explain align-flex-end">Les éléments sont groupés à la fin de la ligne.</span>
  <span class="explain align-center">Les éléments sont centrés dans la ligne.</span>
  <span class="explain align-baseline">L’alignement se fait sur la ligne de base la plus importante.</span>
  <span class="explain align-stretch">Les éléments sont étirés pour remplir la ligne.</span>
  </p>
</section>

## Répartir l’espace

Flex permet de proportionner les éléments dans leur parent.

```css
.parent {
    display: flex;
}
.enfant {
    flex: 1;
}
```

<section class="section example" markdown="1">

  <p class="buttons">
    <button class="btn" id="example5-add-item">Ajouter un élément</button> 
    <button class="btn" id="example5-remove-item">Supprimer un élément</button>
  </p>

  <article class="distribute-example flex-example">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
  </article>

↑ La déclaration `flex:1` a été appliquée à chacun des éléments enfant. Leurs largeurs se répartissent équitablement.

<article class="distribute-example flex-example different-flex-example">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</article>

↑ Ci-dessus, un exemple d’utilisation de `flex: 2` sur le 2e élément uniquement (`div:nth-child(2)`), en gardant `flex: 1` sur les autres.

<article class="distribute-example flex-example final-flex-example">
  <div>Item 1</div>
  <div>Item 2</div>
  <div>Item 3</div>
</article>

↑ Un autre exemple où le 2e élément (`div:nth-child(2)`) se voit appliqué la déclaration `flex: 20;`.

</section>

## Ordonner

Une des plus étonnantes propriétés de flexbox est de pouvoir déterminer l’ordre d’affichage des éléments. C’est la propriété `order` qui régit cet ordre.

La valeur par défaut de `order` est `0`. Dans l’exemple ci-dessous, on utilise `order: 1` sur le premier élément (`div:nth-child(1)`) dans l’ordre du code source.

```css
.parent > div:nth-child(1) {
  order: 1;
  background: green;
}
```
<section class="section example" >
  <article class="ordering-example flex-example">
    <div>Item 1</div>
    <div>Item 2</div>
    <div>Item 3</div>
  </article>
</section>


## Aller plus loin

De nombreuses autres possibilités et subtilités sont offertes par le module flexbox.

😍 Josh Comeau a publié [un guide interactif à Flexbox [en]](https://www.joshwcomeau.com/css/interactived-guide-to-flexbox/) qui explore et introduit avec brio les possibilités et subtilités de ce module de mise en page.

Chris Coyier, auteur du site CSS Tricks, en offre un aperçu complet ici : [A Complete Guide to Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/). Une “_cheatsheet_” visuelle est disponible sur [flexboxsheet.com](https://flexboxsheet.com/).

Mozilla Developper Network reste une référence complète : [Mises en page avancées avec les boîtes flexibles](https://developer.mozilla.org/fr/docs/Web/CSS/Disposition_des_bo%C3%AEtes_flexibles_CSS/Mises_en_page_avancees_avec_flexbox)


—

<small>Les exemples ci-dessus sont repris – traduits et mis à jour – depuis l’article [An Introduction to the CSS Flexbox Module](https://code.tutsplus.com/tutorials/an-introduction-to-the-css-flexbox-module--net-25655) paru sur tutsplus.com.</small>
