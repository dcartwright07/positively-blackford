<div class="col_full bottommargin-lg clearfix">

	<?php

		$post_count = 0;

		if( have_posts() ) : while( have_posts() ) : the_post();

	?>

		<div class="col_one_third <?php if( $post_count % 3 ) { echo 'col_last'; } ?>">
			<div class="ipost clearfix">
				<div class="entry-image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image_fade' ] ); ?>
					</a>
				</div>
				<div class="entry-title">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				<ul class="entry-meta clearfix">
					<li><i class="icon-calendar3"></i> <?php the_time( 'jS F Y' ); ?></li>
					<li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?></a></li>
				</ul>
				<div class="entry-content">
					<?php the_content( $more_link_text = null, $strip_teaser = true ); ?>
				</div>
			</div>
		</div>

	<?php

		$post_count++;

		endwhile;
		endif;

	?>

	<div class="clear"></div>

</div>