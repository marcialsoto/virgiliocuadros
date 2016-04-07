<?php if (is_page( array( 'Bienvenidos', 'Contacto', 'Horario de Atención' ) ) ) {?>
      <?php get_template_part('templates/featured'); ?>
<?php } elseif (is_page( 'Nosotros' )) {?> 
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-nosotros.jpg" />
    </li>
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-nosotros-2.jpg" />
    </li>
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-nosotros-3.jpg" />
    </li>
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-nosotros-4.jpg" />
    </li>
  </ul>
</div>
<?php } elseif (is_page( 'Servicios' )) {?> 
<div class="flexslider">
  <ul class="slides">
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-nosotros-4.jpg" />
    </li>
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-servicios-2.jpg" />
    </li>
    <li>
      <img src="<?php bloginfo('template_url')?>/assets/img/virgilio-cuadros-servicios-3.jpg" />
    </li>
  </ul>
</div>
<?php } else{ ?>

<?php } ?>

<div class="page-header">
  <h1>
    <?php echo roots_title(); ?>
  </h1>
</div>