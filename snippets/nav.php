<?php $subsection = isset($subsection) ? $subsection : ""; ?>
<nav class="pane active" id="mainnav">
  <ul>
    <li class="<?php echo $section == 'ressources' ? 'opened' : '' ?>"><a href="/web/pages/ressources/">Ressources</a></li>
    <li class="<?php echo $section == 'exemples' ? 'opened' : '' ?>"><a href="/web/pages/exemples/">Exemples</a></li>
    <li class="<?php echo $section == 'outils' ? 'opened' : '' ?>"><a href="/web/pages/outils/">Outils</a></li>
    <li class="<?php echo $section == 'projets' ? 'opened' : '' ?>"><a href="/web/pages/projets/">Projets</a></li>
    <li class="<?php echo $section == 'culturenum' ? 'opened' : '' ?>"><a href="/web/pages/culturenum/">Cultures numériques</a></li> 
    <li class="<?php echo $section == 'lectures' ? 'opened' : '' ?>"><a href="/web/pages/lectures/">Lectures</a></li>
    <li class="<?php echo $section == 'gopro' ? 'opened' : '' ?>"><a href="/web/pages/gopro/">Go pro</a></li>
    <li class="<?php echo $section == 'faq' ? 'opened' : '' ?>"><a href="/web/pages/faq/">FAQ</a></li>
    <li class="<?php echo $section == 'archives' ? 'opened' : '' ?>"><a href="/web/archives/">Archives</a></li>
  </ul>
  <span class="<?php echo $section == 'about' ? 'opened' : '' ?>">
      <a href="/web/pages/about">À propos</a>
  </span>
</nav>



<!-- <nav class="pane subnav <?php echo $section == 'archives' ? 'active' : '' ?>"  id="archives">archives</nav> -->
