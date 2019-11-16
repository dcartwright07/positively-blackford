<div class="entry clearfix">
	<div class="entry-image">
		<a href="<?php the_permalink(); ?>" data-lightbox="image">
			<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'image_fade' ] ); ?>
		</a>
	</div>
	<div class="entry-c">
		<div class="entry-title">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div>
		<ul class="entry-meta clearfix">
			<li><i class="icon-calendar3"></i> <?php the_time( 'M j Y' ); ?></li>
			<li><i class="icon-user"></i> <?php the_field( 'author' ); ?></li>
			<li><a href="<?php the_permalink(); ?>#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?></a></li>
		</ul>
		<div class="entry-content">
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>