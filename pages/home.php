<?php
  // config
  $title = "Bienvenue !";
  $description = "Ressources, références et exemples des ateliers web de l’École supérieure d’art et de design des Pyrénées, réunies et proposées par Julien Bidoret.";
  $section="home";
  $custom_css = "/web/assets/css/home.css"; // relative or absolute file URL
  // $custom_js = "/web/assets/js/home.js"; // relative or absolute file URL

  // includes
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

?>

  <section class="pane home" id="content">
    
    
    <article class="homelinks">
      <p class="u">
        <span>/—\</span>  
        <span>干</span>
        <span>☰</span>
        <span>|_</span>
        <span>╿</span>
        <span>⋿</span>
        <span>☈</span>
        <span>§</span>
        <br>
        <span>\/\/</span>
        <span>≋</span>
        <span>⥽</span>
      </p>
      <span style="display:none">⊰☈</span>
    </article>
    <article class="visite">
      <!-- Pour la visite, c’est <a href="pages/references/visite" style="display: inline-block;text-decoration: none;padding: .15em 0 .1em .5em ;position: relative;z-index: 0;background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYWxxdWVfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDExOCAzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTE4IDM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGQ9Ik0xMTYuMSwxNC45bC0xNC0xNEMxMDEuNSwwLjMsMTAwLjgsMCwxMDAsMHYwbDAsMEgwdjM0aDEwMGwwLDB2MGMwLjgsMCwxLjUtMC4zLDIuMS0wLjlsMTQtMTQKCUMxMTcuMywxOCwxMTcuMywxNiwxMTYuMSwxNC45eiBNMTAwLDMxSDNWM2g5N2wwLDBjMCwwLDAsMCwwLDB2MGgwbDE0LDE0TDEwMCwzMXoiLz4KPC9zdmc+Cg==');background-size: auto;background-size: auto 100%; ">par ici !<span style="width: 1.15em;height: 100%;position: absolute;right: -1em;top: 0;z-index: 1;background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYWxxdWVfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDExOCAzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTE4IDM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGQ9Ik0xMTYuMSwxNC45bC0xNC0xNEMxMDEuNSwwLjMsMTAwLjgsMCwxMDAsMHYwbDAsMEgwdjM0aDEwMGwwLDB2MGMwLjgsMCwxLjUtMC4zLDIuMS0wLjlsMTQtMTQKCUMxMTcuMywxOCwxMTcuMywxNiwxMTYuMSwxNC45eiBNMTAwLDMxSDNWM2g5N2wwLDBjMCwwLDAsMCwwLDB2MGgwbDE0LDE0TDEwMCwzMXoiLz4KPC9zdmc+Cg==');background-size: auto 100%;background-position: 100% 0;"></span></a> -->
    </article>
  </section>


  <script src="/web/assets/js/home.js"></script>
  <!-- <script src="/web/assets/js/snow.js"></script> -->
  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>