<?php

	$next = get_next_posts_link();
	$prev = get_previous_posts_link();

	echo the_posts_pagination();
	print_r( $prev );

?>

<!-- Pagination
============================================= -->
<div class="row mb-3">
	<div class="col-12">

		<?php if( get_previous_posts_link() ) : ?>
			<div class="btn btn-outline-dark float-left"><?php previous_posts_link( '&larr; Newer Posts' ); ?></div>
		<?php endif; ?>
		Test

		<?php if( get_next_posts_link() ) : ?>
			<div class="btn btn-outline-dark float-right"><?php next_posts_link( 'Older Posts &rarr;' ); ?></div>
		<?php endif; ?>

	</div>
</div>