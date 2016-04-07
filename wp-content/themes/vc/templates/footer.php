<footer class="content-info" role="contentinfo">
  <div class="container">
  <div class="row-fluid">
  <div class="span12">
  <div class="span6">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br />
    Central Tele&oacute;nica: (1) 422 4046 \ Av. Arequipa 4130 Of. 303 (Tercer Piso) Miraflores
    </p>
    </div>
    
    <div class="span6" style="text-align:right">
    <i class="icon-eye-open"></i> Visitas: <span class="statcounter"><img src="http://c.statcounter.com/t.php?sc_project=8873416&amp;resolution=1440&amp;h=900&amp;camefrom=http%3A//www.virgiliocuadros.com/wp-admin/options-general.php%3Fpage%3DStatCounter-Wordpress-Plugin.php&amp;u=http%3A//www.virgiliocuadros.com/&amp;t=Centro%20M%C3%A9dico%20Virgilio%20Cuadros&amp;java=1&amp;security=fde16b1d&amp;sc_random=0.18630580161698163&amp;sc_snum=1&amp;p=0" alt="StatCounter - Free Web Tracker and Counter" border="0"></span>
\ <i class="icon-envelope-alt"></i> <a href="http://www.virgiliocuadros.com/webmail" target="_blank">Correo</a>
    </div>
   </div>
  </div>
  </div> 
</footer>

<?php
if ( is_page( 'Bienvenidos' )  ) {
	
$args = array(
	'post_type'=> 'banners',
	'posicion'    => 'popup',
	'posts_per_page' => 1
);

// The Query
query_posts( $args );
 
// The Loop
while ( have_posts() ) : the_post();
	echo '<div id="myModal" class="modal show fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
  echo '<div class="modal-header">';
    echo '<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>';
		echo '<h3 id="myModalLabel">';
			the_title();
		echo '</h3>';
	echo '</div>';
		echo '<div class="modal-body">';
			the_content();
		echo '</div>';
	echo '<div class="modal-footer">';
    	echo '<a data-dismiss="modal" href="#" class="btn">Cerrar</a>';
	echo '</div>'; 
echo '</div>';

endwhile;

// Reset Query
wp_reset_query();
}
?>

</div>

<?php wp_footer(); ?>
