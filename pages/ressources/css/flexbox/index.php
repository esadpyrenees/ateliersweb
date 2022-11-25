  <?php
    $title = "ÉSAD Pyrénées — Ateliers web — Flexbox";
    $section="ressources";
    $subsection="css";
    $subsubsection="flexbox";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/ressources/css.php");
  ?>

  <style type="text/css">

/* Example 1 */

#example-1 .simple-example {
  width: 100%;
  background-color: #ddd;
  padding: 10px;

  display: flex;
}

#example-1 .simple-example > div {
  margin-right: 5px;
  margin-bottom: 5px;
  width: 20%;
  padding: 10px;
  background-color: #000;
  color:white;
}


/* Example 2 */

#example-2 .orientation-example {
  background-color: #ddd;
  padding: 10px;
  display: flex;
  flex-direction: column;

}

#example-2 .orientation-example > div {
  margin-bottom: 5px;
  padding: 10px;
  background-color: #000;
  color:white;
}

/* Example 3 */

#example-3 .alignment-example {
  background-color: #ddd;
  padding: 10px;
  display: flex;
}

#example-3 .alignment-example > div {
  margin: 0 5px 0px 0;
  padding: 2px 10px;
  background-color: #000;
  color:white;
}

#example-3 .alignment-start { justify-content: flex-start; }
#example-3 .alignment-end { justify-content: flex-end; }
#example-3 .alignment-between { justify-content: space-between; }
#example-3 .alignment-around { justify-content: space-around; }
#example-3 .alignment-center { justify-content:center ; }




/* Example 4 */

#example-4 .alignment-example {
  background-color: #ddd;
  padding: 10px;
  height: 80px;
  display: flex;
}

#example-4 .alignment-example > div {
  margin: 0 5px 0px 0;
  padding: 2px 10px;
  background-color: #000;
  color:white;
}


#example-4 .alignment-start { align-items: flex-start; }
#example-4 .alignment-end { align-items: flex-end; }
#example-4 .alignment-center { align-items: center; }
#example-4 .alignment-baseline { align-items: baseline; }
#example-4 .alignment-stretch { align-items: stretch; }



/* Example 5 */

#example-5 .distribute-example,
#example-5 .different-flex-example,
#example-5 .final-flex-example {
  background-color: #ddd;
  padding: 10px;
  display: flex;
}

#example-5 .distribute-example > div,
#example-5 .different-flex-example > div,
#example-5 .final-flex-example > div {
  margin-right: 5px;
  margin-bottom: 5px;
  height: 50px;
  padding: 10px;
  background-color: #000;
  color:white;

  flex: 1;

}

#example-5 .different-flex-example > div:nth-child(2) { flex: 2; }
#example-5 .final-flex-example > div:nth-child(2) { flex: 20; }


/* Example 6 */

#example-6 .ordering-example {
  background-color: #ddd;
  padding: 10px;

  display: flex;
}

#example-6 .ordering-example > div {
  margin-right: 5px;
  width: 20%;
  padding: 10px;
  background-color: #000;
  color:white;
}

#example-6 .ordering-example > div:nth-child(1) {
  order: 1;
  background: green
}

  </style>



  <main class="pane active" id="content">
    <h1>Flexbox</h1>
    <p>
        Flexbox est un module CSS déjà largement implémenté dans les navigateurs (2016/2017). Il permet de définir une logique de mise en page flexible.
    </p>
    <p>
        Au delà de ceux qui sont présents dans cette page, <a href="../../../exemples/#flex">des exemples basiques </a> sont disponibles dans la section dédéiée.
    </p>
    <p>
      😍 Josh Comeau a publié <a href="https://www.joshwcomeau.com/css/interactive-guide-to-flexbox/">un guide interactif à Flexbox [en]</a> qui explore et introduit avec brio les possibilités et subtilités de ce module de mise en page.
    </p>



        <section class="section example" id="example-1">


            <h2 class="section-subtitle">Appliquer flexbox</h2>
            <p>
                Dans ce premier exemple, on peut observer ce qui se produit pour les éléments enfants (item 1, item 2 et item 3) quand leur parent (la boîte qui entoure ces trois éléments se voit appliquer le code suivant :
            </p>
            <pre class="langage-css"><code>.parent {
    display: flex;
}
.enfant {
    width: 20%;
}</code></pre>


          <button class="btn" id="example1-toggle-flexbox">Flexbox on / off</button>
        <p>La propriété <code>display</code> du parent est : <code id="example1-status"></code> </p>
          <article class="simple-example">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>

        </section> <!-- #example-1 -->

        <section class="section example" id="example-2">


            <h2 class="section-subtitle">Orientation</h2>
            <p>
                Par défaut, les éléments enfants d’un élément flexbox vont s’organiser horizontalement : la valeur de la propriété <code>flex-direction</code> du parent est <code>row</code>.
            </p>
            <p>
                  Les valeurs possibles sont  <code>row</code>, <code>row-reverse</code> (qui inverse l’ordre…), <code>column</code>, et <code>column-reverse</code>.
            </p>

            <pre class="langage-css"><code>.parent {
    display: flex;
    flex-direction: column;
}</code></pre>

            <article class="orientation-example">
                <div>Item 1</div>
                <div>Item 2</div>
                <div>Item 3</div>
            </article>



        </section> <!-- #example-2 -->


        <section class="section example" id="example-3">


            <h2 class="section-subtitle">Alignement sur l’axe principal</h2>
            <p>
                Pour décider de l’alignement des éléments enfants, on peut utiliser la propriété <code>justify-content</code>, qui accepte une des cinq valeurs suivantes : <code> flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>space-between</code>  &amp; <code>space-around</code>.
            </p>
            <p>
                La notion d’axe principal (et la raison de <i><code>flex-start</code></i> et pas un hypothétique <code>flex-left</code>) est que le point de départ d’un texte n’est pas nécessairement la gauche. En arabe ou hébreu, le texte s’écrit de droite à gauche ; ce qui se code grace à un attribut <code>dir="rtl"</code>.
                Si on établit <code>flex-direction</code> à la valeur <code>column</code> ou <code>column-reverse</code>, l’axe principal devient vertical.
            </p>


          <h4>justify-content: flex-start</h4>
          <article class="alignment-example alignment-start">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>
          <p>
              Les éléments sont groupés au début de la ligne. C’est la valeur par défaut.
          </p>

          <h4>justify-content: flex-end</h4>
          <article class="alignment-example alignment-end">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>
          <p>
              Les éléments sont groupés à la fin de la ligne.
          </p>

          <h4>justify-content: space-between</h4>
          <article class="alignment-example alignment-between">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>
          <p>
              Les éléments sont distribués au long de la ligne ; le premier en début de ligne, le dernier en fin de ligne.
          </p>

          <h4>justify-content: space-around</h4>
          <article class="alignment-example alignment-around">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>
          <p>
              Les éléments sont distribués au long de la ligne avec un même espace autour de chacun. Noter que les espaces ne sont pas visuellement équivamlents, chaque élément successif ayant le même espace sur chacun de ses côtés.
          </p>

          <h4>justify-content: center</h4>
          <article class="alignment-example alignment-center">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>
          <p>
              Les éléments sont centrés dans la ligne.
          </p>



        </section> <!-- #example-3 -->






        <section class="section example" id="example-4">


            <h2 class="section-subtitle">Alignement sur l’axe transversal</h2>

            <p>
                On peut utiliser la propriété <code>align-items</code> pour décider de l’alignement des éléments enfants sur l’axe transversal (perpendiculaire à l’axe principal). <code>align-items</code> accepte l’une des cinq valeurs suivantes : <code>flex-start</code>, <code>flex-end</code>, <code>center</code>, <code>baseline</code>  &amp; <code>stretch</code>
            </p>
            <p>
                Dans cette série d’exemples, aucun des éléments enfants ne s’est vue attribué de hauteur explicite. La hauteur des parents est de 80px.
            </p>

          <h4>align-items: start</h4>
          <article class="alignment-example alignment-start">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>

          <h4>align-items: end</h4>
          <article class="alignment-example alignment-end">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>

          <h4>align-items: center</h4>
          <article class="alignment-example alignment-center">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>

          <h4>align-items: baseline</h4>
          <article class="alignment-example alignment-baseline">
            <div style="font-size:1em">Item 1</div>
            <div style="font-size:.75em">Item 2 (.75em) </div>
            <div style="font-size:1.6em">Item 3 (1.3em)</div>
          </article>
          <p>L’alignement se fait sur la ligne de base la plus importante.</p>

          <h4>align-items: stretch</h4>
          <article class="alignment-example alignment-stretch">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>



        </section> <!-- #example-4 -->


        <section class="section example" id="example-5">


            <h2 class="section-subtitle">Répartir l’espace</h2>

            <p>
            Flex permet de proportionner les éléments dans leur parent.
            </p>

            <pre class="langage-css"><code>.parent {
    display: flex;
}
.enfant {
    flex: 1;
}</code></pre>
            <p>
                <button class="btn" id="example5-add-item">Ajouter un élément</button>
                <button class="btn" id="example5-remove-item">Supprimer un élément</button>
            </p>

          <article class="distribute-example">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>

          <p>
            La déclaration <code>flex:1</code> a été appliquée à chacun des éléments enfant. Leur largeur n’est pas explicitement spécifiée (ils ne sont pas non plus en <code>display:inline-block</code> ni en <code>float:left</code>).
        </p>

          <p>Ci-dessous, un exemple d’utilisation de <code>flex: 2</code> sur le 2e élément uniquement (<code>div:nth-child(2)</code>), en gardant <code>flex: 1</code> sur les autres.</p>

          <article class="different-flex-example">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>


          <p>Un autre exemple où le 2e élément (<code>div:nth-child(2)</code>) se voit appliqué la déclaration <code>flex: 20;</code>.</p>

          <article class="final-flex-example">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>


        </section> <!-- #example-5 -->




        <section class="section example" id="example-6">


            <h2 class="section-subtitle">Ordonner</h2>


            <p>
                Une des plus étonnantes propriétés de flexbox est de pouvoir déterminer l’ordre d’affichage des éléments. C’est la propriété <code>order</code> qui régit cet ordre.
            </p>
            <p>
                La valeur par défaut de <code>order</code> est <code>0</code>. Dans l’exemple ci-dessous, on utilise <code>order: 1</code> sur le premier élément (<code>div:nth-child(1)</code>) dans l’ordre du code source.
            </p>
            <pre class="langage-css"><code>.parent > div:nth-child(1) {
  order: 1;
  background: green;
}
            </code></pre>

          <article class="ordering-example">
            <div>Item 1</div>
            <div>Item 2</div>
            <div>Item 3</div>
          </article>



        </section> <!-- #example-6 -->


        <section class="section">

            <h2 class="section-subtitle">Aller plus loin</h2>
            <p>
                De nombreuses autres possibilités et subtilités sont offertes par le module flexbox.
            </p>
            <p>
                Chris Coyier, auteur du site CSS Tricks, en offre un aperçu complet ici :
                <a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/">A Complete Guide to Flexbox</a>. Une “<i>cheatsheet</i> visuelle est disponible sur <a href="https://flexboxsheet.com/">flexboxsheet.com</a>.
            </p>
            <p>
                Mozilla Developper Network reste une référence complète : <a href="https://developer.mozilla.org/fr/docs/Web/CSS/Disposition_des_bo%C3%AEtes_flexibles_CSS/Mises_en_page_avancees_avec_flexbox">Mises en page avancées avec les boîtes flexibles</a>
            </p>
        </section>

        <section>
            <p>
                —
            </p>
            <p>
              <small>Les exemples ci-dessus sont repris – traduits et mis à jour – depuis l’article <a href="https://code.tutsplus.com/tutorials/an-introduction-to-the-css-flexbox-module--net-25655">An Introduction to the CSS Flexbox Module</a> paru sur tutsplus.com.</small>
            </p>
        </section>

      <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
    </main>

  <script type="text/javascript">

        /* Example 1 */

        var example1 = function () {
          var toggleButton = document.querySelector('#example1-toggle-flexbox');
          example1Config = {};
          example1Config.flexbox = document.querySelector('#example-1 .simple-example');
          example1Config.updateStatus = document.querySelector('#example1-status');
          example1Config.originalBoxValue = example1GetDisplayProp();
          toggleButton.addEventListener('click', example1Toggle, false);
          example1UpdateStatus();
        };

        var example1GetDisplayProp = function () {
          var style = window.getComputedStyle(example1Config.flexbox);
          return style.display;
        };

        var example1SetDisplayProp = function (style) {
          example1Config.flexbox.style.display = style;
        };

        var example1UpdateStatus = function () {
          example1Config.updateStatus.innerHTML = example1GetDisplayProp();
        };

        var example1Toggle = function () {
          if ( example1GetDisplayProp().match('flex') ) {
            example1SetDisplayProp('block');
          } else {
            example1SetDisplayProp(example1Config.originalBoxValue);
          }
          example1UpdateStatus();
        };








        /* Example 5 */
        var example5 = function () {
          var addItem = document.querySelector('#example5-add-item');
          var removeItem = document.querySelector('#example5-remove-item');
          example5Config = {};
          example5Config.flexbox = document.querySelector('#example-5 .distribute-example');
          example5Config.flexbox2 = document.querySelector('#example-5 .different-flex-example');

        example5Config.flexboxes = [];
        example5Config.flexboxes[0] = example5Config.flexbox = document.querySelector('#example-5 .distribute-example');
        example5Config.flexboxes[1] = document.querySelector('#example-5 .different-flex-example');
        example5Config.flexboxes[2] = document.querySelector('#example-5 .final-flex-example');
          example5Config.itemCount = example5Config.flexbox.childElementCount;
          addItem.addEventListener('click', example5AddItem, false);
          removeItem.addEventListener('click', example5RemoveItem, false);
        };

        var example5AddItem = function () {
          ++example5Config.itemCount;
          for (var i=0, length = example5Config.flexboxes.length; i<length; i++) {
            var newItem = document.createElement("div");
            newItem.innerHTML = 'Item ' + example5Config.itemCount;
            example5Config.flexboxes[i].appendChild(newItem);
          }
        };

        var example5RemoveItem = function () {
          if ( example5Config.itemCount !== 1 ) {
            --example5Config.itemCount;
            for (var i=0, length = example5Config.flexboxes.length; i<length; i++) {
              var toRemove = example5Config.flexboxes[i].children[ example5Config.itemCount ];
              example5Config.flexboxes[i].removeChild(toRemove);
            }
          }
        };


        var autorun = function() {

          example1();
          example5();

        };

        if (document.addEventListener) document.addEventListener("DOMContentLoaded", autorun, false);
        else if (document.attachEvent) document.attachEvent("onreadystatechange", autorun);
        else window.onload = autorun;

        </script>

  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>
