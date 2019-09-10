<!-- ===== Recent Post ===== -->
<div class="tab-content clearfix" id="recent">
	<div id="recent-post-list-sidebar">

		<?php

			$args = array(
				'posts_per_page' => 3
			);
			$query =  new WP_Query( $args );

			if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

		?>

		<div class="spost clearfix">
			<div class="entry-image">
				<a href="<?php the_permalink(); ?>" class="nobg">
					<?php the_post_thumbnail( 'thumbnail', [ 'class' => 'rounded-circle' ] ); ?>
				</a>
			</div>
			<div class="entry-c">
				<div class="entry-title">
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
				</div>
				<ul class="entry-meta">
					<li><?php the_time( 'M j Y' ); ?></li>
				</ul>
			</div>
		</div>

		<?php endwhile; endif; ?>

	</div>
</div>
<!-- ===== End Recent Post ===== -->