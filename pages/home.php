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
  <style>

  .strike {
    /* font-size: clamp(1.5em, 3.25vw, 3em); */
    line-height: 1.2;
    --p-width:none;
    position: fixed;
    right:3rem;
    top: 3rem;
    background: hotpink;
    padding: 1em;
    display: flex;
    flex-direction: column;
    width:12em;
    height:12em;
    border-radius: 50%;
    align-items: center;
    justify-content:center;
    box-shadow: -8px 8px 8px purple;
  }
  .strike p {
    display: inline;
    text-align: center;
  }
  .strike a { color: white}
  .bigbuttonstrike:hover {
    background: rgb(223, 68, 219);
  }
  .strike p { margin: 0; }
  .strike p + p { text-indent: 2em; }
  #esadsenlutte {
    border:none
  }
  #esadsenlutte img   {
    position: fixed;
    height:calc(100vh - 6em);
    top:3em;
    left:50%;
    transform: translateX(-50%);
    box-shadow: -8px 8px 8px tomato;
    z-index: 9999;
  }
  </style>
  <section class="pane home" id="content">
    <article class="homelinks">

    </article>

    <a href="https://ecolesartdesignenlutte.fr/" id="esadsenlutte">
    <img id="esadsenlutte" src="/web/assets/img/afaaa835-cb23-4f50-adbd-d4a20baa59a4.jpeg" alt="Mobilisation nationale — lundi 13/03 — écoles art, design archi en lutte — https://ecolesartdesignenlutte.fr/">
    </a>

    <article class="strike"><p style="margin:0">
      <a href="pages/culturenum/8m">
      ✨
      <span style="color: white;">G</span><span style="color: white;">r</span><span style="color: white;">è</span><span style="color: white;">v</span><span style="color: rgb(53, 145, 171);">e</span> <span style="color: rgb(55, 41, 174);">I</span><span style="color: rgb(55, 41, 174);">n</span><span style="color: rgb(150, 144, 192);">t</span><span style="color: rgb(150, 144, 192);">e</span><span style="color: rgb(150, 144, 192);">r</span><span style="color: rgb(223, 68, 219);">n</span><span style="color: rgb(223, 68, 219);">a</span><span style="color: rgb(223, 68, 219);">t</span><span style="color: rgb(223, 68, 219);">i</span><span style="color: rgb(223, 68, 219);">o</span><span style="color: rgb(223, 68, 219);">n</span><span style="color: rgb(223, 68, 219);">a</span><span style="color: rgb(223, 68, 219);">l</span><span style="color: rgb(223, 68, 219);">e</span> <span style="color: white;">T</span><span style="color: white;">r</span><span style="color: white;">a</span><span style="color: white;">n</span><span style="color: white;">s</span><span style="color: rgb(53, 145, 171);">★</span><span style="color: rgb(55, 41, 174);">F</span><span style="color: rgb(150, 144, 192);">é</span><span style="color: rgb(223, 68, 219);">m</span><span style="color: rgb(223, 68, 219);">i</span><span style="color: rgb(223, 68, 219);">n</span><span style="color: rgb(223, 68, 219);">i</span><span style="color: rgb(223, 68, 219);">s</span><span style="color: rgb(223, 68, 219);">t</span><span style="color: rgb(223, 68, 219);">e</span><br ><span style="color: white;">D</span><span style="color: white;">é</span><span style="color: white;">c</span><span style="color: white;">r</span><span style="color: white;">o</span><span style="color: rgb(53, 145, 171);">i</span><span style="color: rgb(55, 41, 174);">s</span><span style="color: rgb(55, 41, 174);">s</span><span style="color: rgb(55, 41, 174);">a</span><span style="color: rgb(223, 68, 219);">n</span><span style="color: rgb(223, 68, 219);">c</span><span style="color: rgb(223, 68, 219);">e</span> <span style="color: rgb(223, 68, 219);">N</span><span style="color: rgb(223, 68, 219);">u</span><span style="color: rgb(223, 68, 219);">m</span><span style="color: rgb(223, 68, 219);">é</span><span style="color: rgb(223, 68, 219);">r</span><span style="color: rgb(223, 68, 219);">i</span><span style="color: white;">q</span><span style="color: white;">u</span><span style="color: white;">e</span>
    
      </a>
    </p>      

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