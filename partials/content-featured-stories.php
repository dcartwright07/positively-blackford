<div class="col_three_fifth bottommargin-lg">
	<div class="fslider flex-thumb-grid grid-6" data-speed="500" data-arrows="true" data-thumbs="false" data-easing="easeOutQuad">
		<div class="flexslider">
			<div class="slider-wrap">
				<?php

				$num_posts = -1;
				if( is_front_page() ) $num_posts = 6;

				$args = array(
					'posts_per_page' => $num_posts
				);
				$query =  new WP_Query( $args );

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
					$featured = get_field( 'featured_story' );
					if( $featured == 'yes' ) :

				?>
				<div class="slide" data-thumb="<?php the_post_thumbnail_url( 'thumbnail' ); ?>">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'post-thumbnail' ); ?>
						<div class="overlay">
							<div class="text-overlay">
								<div class="text-overlay-title">
									<h3><?php the_title(); ?></h3>
								</div>
								<div class="text-overlay-meta">
									<span>
										<?php

										$category = get_the_category( $post->ID );
										foreach( $category as $cat ) {
											echo $cat->cat_name;
											if( next( $category ) ) {
												echo ', ';
											}
										}

										?>
									</span>
								</div>
							</div>
						</div>
					</a>
				</div>
				<?php endif; endwhile; endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="col_two_fifth bottommargin-lg col_last">
	<?php

	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
		$featured = get_field( 'featured_story' );
		if( $featured == 'yes' ) :

	?>
	<div class="spost clearfix">
		<div class="entry-c">
			<div class="entry-title">
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
		</div>
	</div>
	<?php endif; endwhile; endif; ?>
</div>

<div class="clear"></div>