<div class="col_full bottommargin-lg clearfix">

	<div class="fancy-title title-border">
		<h2 id="featured-videos">Featured Videos</h2>
	</div>

	<?php

		$post_count = 1;
		$num_posts = 10;
		$args = array(
			'posts_per_page' 	=> $num_posts,
			'post_type'				=> 'video'
		);
		$query =  new WP_Query( $args );

		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

			$featured = get_field( 'featured_video' );
			if( $featured == 'yes' ) :

	?>
	<div class="col_half <?php if( $post_count == 2 ) { echo 'col_last'; } ?>">
		<div class="ipost">
			<!-- <div class="entry-image">
				<a href="<?php the_permalink(); ?>" data-lightbox="image">
					<img src="https://img.youtube.com/vi/<?php the_field( 'video_id' ); ?>/maxresdefault.jpg" class="image_fade" />
				</a>
			</div> -->
			<div class="fluid-width-video-wrapper">
				<iframe data-src="https://www.youtube.com/embed/<?php the_field( 'video_id' ); ?>" src="" frameborder="0" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" id="fitvid0"></iframe>
			</div>

			<div class="entry-title">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>

			<ul class="entry-meta clearfix">
				<li><i class="icon-calendar3"></i> <?php the_time( 'M j Y' ); ?></li>
				<li><i class="icon-user"></i> <?php the_field( 'author' ); ?></li>
				<li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?></a></li>
			</ul>

			<!-- <div class="entry-content">
				<?php the_excerpt(); ?>
			</div> -->
		</div>
	</div>

	<?php

		if( $post_count == 2 ) {
			$post_count = 1;
			echo '<div class="clear"></div>';
		} else {
			$post_count++;
		}

		endif; endwhile; endif; ?>

</div>