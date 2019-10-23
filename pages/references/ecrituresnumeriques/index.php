  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "ÉSAD·Pyrénées — Ateliers web — Références";
    $section="references";
    $subsection="ecrituresnumeriques";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
  ?> 

  <style type="text/css">
      #wrapper img{
        max-width: 100%;
      }
      #wrapper span[title]:after {
        content: attr(title);
        display: block;
        font-size: .85em; 
        color: rgba(0,0,0,.7);
        margin-bottom: 1em;
      }
  </style>

<!--   <nav class="pane active">
      <ul>
        <li><a href="/web/pages/projets/htsh/#introduction">Introduction</a></li>
        <li><a href="/web/pages/projets/htsh/#hypertextualite">Hypertextualité</a></li>
        <li><a href="/web/pages/projets/htsh/#contraintes">Contraintes</a></li>
        <li><a href="/web/pages/projets/htsh/#methode">Méthode</a></li>
        <li><a href="/web/pages/projets/htsh/#mediums">Mediums</a></li>
        <li><a href="/web/pages/projets/htsh/#references">Références</a></li>
      </ul>
  </nav> -->

  <main class="pane active" id="content">
        
    <div id="wrapper">
    
        <section class="section" id="introduction">
            <?= $Parsedown->text( file_get_contents('./1.introduction.md') ); ?>
        </section>
        
    </div>
    </main>

    <script type="text/javascript">
        
        document.querySelectorAll('img').forEach(elem => {
            const span = document.createElement('span');
            elem.parentElement.insertBefore(span, elem);
            span.appendChild(elem);
            const title = elem.getAttribute('title');
            if (title) {
                span.setAttribute('title', "— " + title);
            }
        })

    </script>

  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?> 

  