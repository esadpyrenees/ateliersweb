<?php
  // config
  // $title = "Bienvenue !";
  $description = "Ressources, références et exemples des ateliers web de l’École supérieure d’art et de design des Pyrénées, réunies et proposées par Julien Bidoret.";
  $section="home";
  $custom_css = "/web/assets/css/home.css"; // relative or absolute file URL
  $custom_js = "/web/assets/js/home.js"; // relative or absolute file URL

  // includes
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/header.php";
  include_once $_SERVER["DOCUMENT_ROOT"] . "/web/snippets/nav.php";

?>
  <style>
    @font-face {
      font-family: "Dina";
      src: url("/web/assets/fonts/PubliFluorNormale.woff") format("woff");
      font-weight: 800;
    }
    .nonazi { 
      font-family: "Dina";
      font-feature-settings: "dlig" 1;
      font-size: 15vmax;
      line-height: .7;
      margin: 0 !important;
      max-width: none;
      color: black;
      word-spacing: -.5ch;
      transform: translate(-40%, -55%) scale(1.2) rotate(var(--r, -12deg));
      position: fixed;
      top: 50vh;
      left: 50vw;
      width: max-content;
      pointer-events:none;
      color:tomato;
      mix-blend-mode: multiply
    }
    @media (max-width:950px) {
      .nonazi{ font-size: 28vmin; --r:-80deg}
    }
  </style>
  <section class="pane home" id="content">

    <!-- <blockquote cite="http://luckysoap.com/statements/handmadeweb.html" class="hidden"> -->
      <!-- <strong>In today’s highly commercialized web of <span>multinational corporations</span>, <span>proprietary applications</span>, <span>read-only devices</span>, <span>search algorithms</span>, <span>Content Management Systems</span>, <span>WYSIWYG editors</span>, and <span>digital publishers</span>, it becomes an <span class="rad">increasingly radical act</span> to <span>hand-code</span> and <span>self-publish</span> <span>experimental web art</span> and <span>writing projects</span>.</strong> <cite>J. R. Carpenter, <br><a href="http://luckysoap.com/statements/handmadeweb.html">A handmade web</a>.</cite>     -->
      
      <!-- <strong>In<span> </span>today’s<span> </span>highly<span> </span>commercialized<span> </span>web<span> </span>of<span> </span>multinational<span> </span>corporations,<span> </span>proprietary<span> </span>applications,<span> </span>read-only<span> </span>devices,<span> </span>search<span> </span>algorithms,<span> </span>Content<span> </span>Management<span> </span>Systems,<span> </span>WYSIWYG<span> </span>editors,<span> </span>and<span> </span>digital<span> </span>publishers,<span> </span>it<span> </span>becomes<span> </span>an<span></sp an><span<span> </span>increasingly<span> </span>radical<span> </span>act<span> </span>to<span> </span>hand-code<span> </span>and<span> </span>self-publish<span> </span>experimental<span> </span>web<span> </span>art<span> </span>and<span> </span>writing<span> </span>projects.</strong> <cite>J. R. Carpenter, <br><a href="http://luckysoap.com/statements/handmadeweb.html">A handmade web</a>.</cite>     -->

      <!-- Le<span> </span>8<span> </span>mars<span> </span>2024,<span> </span>nous<span> </span>appelons<span> </span>à<span> </span>une<span> </span>journée<span> </span>d’action<span> </span>contre<span> </span>le<span> </span>cloud<span> </span>—<span> </span>pour<span> </span>un<span> </span>cessez-le-feu<span> </span>permanent<span> </span>en<span> </span>Palestine<span> </span>et<span> </span>pour<span> </span>la<span> </span>fin<span> </span>du<span> </span>génocide<span> </span>facilité<span> </span>par<span> </span>le<span> </span>complexe<span> </span>militaro-technologique<span> </span>du<span> </span>gouvernement<span> </span>israélien. <cite><a href="https://titipi.org/8m/">8M</a></cite> -->
    <!-- </blockquote> -->

    
    <p class="nonazi">
    Le 30 juin,<br> le 7 juillet<br> On vote !
    </p>
    
    <!-- Comments are free, facts are sacred -->
    
    <!-- <article class="strike"><p style="margin:0">
      <a href="https://titipi.org/8m/" target="_blank">
      Journée d'action transnationale anti-coloniale trans★féministe contre le cloud
      </a>
    </article> -->

    <!-- 
    <article class="homelinks"></article>

    <a href="https://ecolesartdesignenlutte.fr/" id="esadsenlutte">
    <img id="esadsenlutte" src="/web/assets/img/afaaa835-cb23-4f50-adbd-d4a20baa59a4.jpeg" alt="Mobilisation nationale — lundi 13/03 — écoles art, design archi en lutte — https://ecolesartdesignenlutte.fr/">
    </a> 

    

    <article class="visite" >
      La visite du web, c’est <a href="pages/references/visite" style="display: inline-block;text-decoration: none;padding: .15em 0 .1em .5em ;position: relative;z-index: 0;background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYWxxdWVfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDExOCAzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTE4IDM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGQ9Ik0xMTYuMSwxNC45bC0xNC0xNEMxMDEuNSwwLjMsMTAwLjgsMCwxMDAsMHYwbDAsMEgwdjM0aDEwMGwwLDB2MGMwLjgsMCwxLjUtMC4zLDIuMS0wLjlsMTQtMTQKCUMxMTcuMywxOCwxMTcuMywxNiwxMTYuMSwxNC45eiBNMTAwLDMxSDNWM2g5N2wwLDBjMCwwLDAsMCwwLDB2MGgwbDE0LDE0TDEwMCwzMXoiLz4KPC9zdmc+Cg==');background-size: auto;background-size: auto 100%; ">par ici !<span style="width: 1.15em;height: 100%;position: absolute;right: -1em;top: 0;z-index: 1;background: url('data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYWxxdWVfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDExOCAzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMTE4IDM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxwYXRoIGQ9Ik0xMTYuMSwxNC45bC0xNC0xNEMxMDEuNSwwLjMsMTAwLjgsMCwxMDAsMHYwbDAsMEgwdjM0aDEwMGwwLDB2MGMwLjgsMCwxLjUtMC4zLDIuMS0wLjlsMTQtMTQKCUMxMTcuMywxOCwxMTcuMywxNiwxMTYuMSwxNC45eiBNMTAwLDMxSDNWM2g5N2wwLDBjMCwwLDAsMCwwLDB2MGgwbDE0LDE0TDEwMCwzMXoiLz4KPC9zdmc+Cg==');background-size: auto 100%;background-position: 100% 0;"></span></a>
    </article>

    -->

  </section>


  <!-- <script src="/web/assets/js/snow.js"></script> -->
  <?php
    include($_SERVER["DOCUMENT_ROOT"] . "/web/snippets/footer.php");
  ?>