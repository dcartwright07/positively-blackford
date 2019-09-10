<!-- Primary Navigation
============================================= -->
<nav id="primary-menu">

<?php

	$defaults = array(
		'container' => false,
		'theme_location' => 'primary-menu',
		'menu_id' => 'mainNav'
	);
	wp_nav_menu($defaults);

	get_template_part( 'partials/header/header', 'search' );

?>

</nav><!-- #primary-menu end -->