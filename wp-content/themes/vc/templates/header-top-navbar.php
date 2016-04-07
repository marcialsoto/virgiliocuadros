<div class="all-wrapper">
<header class="banner navbar navbar-static-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php /* <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a> */ ?>
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
      
    <ul class="social">
      <li id="twitter"><i class="icon-twitter"></i> <a href="https://twitter.com/CuadrosVirgilio" target="_blank">Twitter</a></li>
      <li id="facebook"><i class="icon-facebook-sign"></i> <a href="https://www.facebook.com/pages/Centro-M%C3%A9dico-Virgilio-Cuadros/177874599032679" target="_blank">Facebook</a></li>
    </ul>
    </div>
  </div>
</header>



   

