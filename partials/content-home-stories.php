<div class="col_full clearfix">

	<div class="fancy-title title-border">
		<h2>Latest Stories</h2>
	</div>

	<?php

		$post_count = 1;
		$num_posts = 6;
		$args = array(
			'posts_per_page' => $num_posts
		);
		$query =  new WP_Query( $args );

		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

			// $featured = get_field( 'featured_story' );
			// if( $featured == 'no' ) :

			if( $post_count == 1 ) {
				echo '<div class="card-deck">';
			}

	?>

	<div class="card">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image_fade card-img-top img-fluid' ] ); ?>
		</a>
		<div class="card-body">
			<h3 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<ul class="card-list">
				<li class="text-muted"><i class="icon-calendar3"></i> <?php the_time( 'M j Y' ); ?></li>
				<li class="text-muted"><i class="icon-user"></i> <?php the_field( 'author' ); ?></li>
				<li class="text-muted"><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?></a></li>
			</ul>
			<p class="card-text"><?php echo get_the_excerpt(); ?></p>
		</div>
		<div class="card-footer text-center">
			<a class="btn" href="<?php the_permalink(); ?>" role="button">Continue Reading</a>
		</div>
	</div>


	<?php

		if( $post_count == 3 ) {
			$post_count = 1;
			echo '</div>';
		} else {
			$post_count++;
		}

		// endif;
		endwhile;
		endif;

	?>

</div>