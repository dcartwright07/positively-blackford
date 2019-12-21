<div class="col_full bottommargin-lg clearfix">

	<div class="fancy-title title-border">
		<h3>Featured Video</h3>
	</div>

	<?php

		$post_count = 1;
		$num_posts = -1;
		// if( is_front_page() ) $num_posts = 6;

		$args = array(
			'posts_per_page' => $num_posts
		);
		$query =  new WP_Query( $args );

		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

			$featured = get_field( 'featured_video' );
			if( $featured == 'yes' ) :

	?>

	<div class="fluid-width-video-wrapper" style="padding-top: 56.2%;">
		<iframe src="<?php the_field( 'embed_code' ) . '/' . the_field( 'embed_code' ); ?>" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid0"></iframe>
	</div>

	<div class="entry-title">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</div>

	<ul class="entry-meta clearfix">
		<li><i class="icon-calendar3"></i> <?php the_time( 'M j Y' ); ?></li>
		<li><i class="icon-user"></i> <?php the_field( 'author' ); ?></li>
		<li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?></a></li>
	</ul>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>

	<?php endif; endwhile; endif; ?>

</div>