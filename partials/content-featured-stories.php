<div class="col_full bottommargin-lg">
	<div class="fslider flex-thumb-grid grid-6" data-speed="500" data-arrows="true" data-thumbs="false" data-easing="easeOutQuad">
		<div class="flexslider">
			<div class="slider-wrap">
				<?php

				$num_posts = -1;
				if( is_front_page() ) $num_posts = 6;

				$args = array(
					'posts_per_page' => $num_posts,
					'post_type'	=> array('post', 'video')
				);
				$query =  new WP_Query( $args );

				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

					$featuredStory = get_field( 'featured_story' );
					$featuredVideo = get_field( 'featured_video' );
					if( $featuredStory == 'yes' || $featuredVideo == 'yes' ) :
						if(get_post_type() == 'video') {
							$imageThumbnail = 'https://img.youtube.com/vi/' . get_field( 'video_id' ) . '/maxresdefault.jpg';
						} else {
							$imageThumbnail = get_the_post_thumbnail_url($post->ID, 'post-thumbnail');
						}

				?>
				<div class="slide" data-thumb="<?php the_post_thumbnail_url( 'thumbnail' ); ?>">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $imageThumbnail; ?>">
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


<div class="clear"></div>