  <?php 
    include($_SERVER["DOCUMENT_ROOT"] . '/web/_inc/Parsedown.php');
    $Parsedown = new Parsedown();

    $title = "Projets: Hypertext Superhero";
    $section="projets";
    $subsection="htsh";
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php");
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/projets/htsh.php");
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

  <main class="pane active" id="content">
    <section >
        <div id="randomramdam" >HYPERTEXT            SUPERHERO</div>                
    </section>
        
    <div id="wrapper">
    
        <section class="section" id="introduction">
            <?= $Parsedown->text( file_get_contents('./1.introduction.md') ); ?>
        </section>
        <section class="section" id="hypertextualite">
            <?= $Parsedown->text( file_get_contents('./2.hypertextualite.md') ); ?>
        </section>
        <section class="section" id="contraintes">
            <?= $Parsedown->text( file_get_contents('./3.contraintes.md') ); ?>
        </section>
        <section class="section" id="methode">
            <?= $Parsedown->text( file_get_contents('./4.methode.md') ); ?>
        </section>
        <section class="section" id="mediums">
            <?= $Parsedown->text( file_get_contents('./5.mediums.md') ); ?>
        </section>
        <section class="section" id="refs">
            <?= $Parsedown->text( file_get_contents('./6.references.md') ); ?>
        </section>
        <section class="section" id="tools">
            <?= $Parsedown->text( file_get_contents('./7.tools.md') ); ?>
        </section>
    </div>
        <?php include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/date.php"); ?>
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

  