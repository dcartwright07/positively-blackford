<h4>Archives by Month:</h4>
<ul class="iconlist">
	<?php

		$args = array(
			'type'		=> 'monthly',
			'before'	=> '<li class="icon-calendar3"> '
		);
		wp_get_archives( $args );

	?>
</ul>