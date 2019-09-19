<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">
			<div class="single-post nobottommargin">

				<!-- Entry Image
				============================================= -->
				<!-- <div class="entry-image bottommargin"> -->
					<?php // the_post_thumbnail(); ?>
				<!-- </div> -->

				<!-- Post Content
				============================================= -->
				<div class="postcontent nobottommargin clearfix">

					<!-- Single Post
					============================================= -->
					<div class="entry clearfix">

						<!-- Entry Title
						============================================= -->
						<div class="entry-title">
							<h2><?php the_title(); ?></h2>
						</div><!-- .entry-title end -->

						<!-- Entry Meta
						============================================= -->
						<ul class="entry-meta clearfix">
							<li><i class="icon-calendar3"></i> <?php the_time( 'F jS, Y' ); ?></li>
							<?php

								// Display Categories
								$category = get_the_category( $post->ID );
								echo '<li><i class="icon-folder-open"></i>';
								foreach( $category as $cat ) {
									echo '<a href="/category/' . $cat->slug . '">' . $cat->cat_name . '</a>';
									if( next( $category ) ) {
										echo ', ';
									}
								}
								echo '</li>';

							?>
							<li><a href="#comments"><i class="icon-comments"></i> <?php echo get_comments_number(); ?> Comments</a></li>
						</ul><!-- .entry-meta end -->

						<!-- Entry Content
						============================================= -->
						<div class="entry-content notopmargin">
							<p><strong>By: <?php the_field( 'author' ); ?></strong></p>

							<?php

								if( have_posts() ) : while ( have_posts() ) : the_post();
									the_content();
								endwhile; endif;

							?>

							<!-- Tag Cloud
							============================================= -->
							<!-- <div class="tagcloud clearfix bottommargin">
								<a href="#">general</a>
								<a href="#">information</a>
								<a href="#">media</a>
								<a href="#">press</a>
								<a href="#">gallery</a>
								<a href="#">illustration</a>
							</div>

							<div class="clear"></div> -->

							<!-- Post Single - Share
							============================================= -->
							<!-- <div class="si-share noborder clearfix">
								<span>Share this Post:</span>
								<div>
									<a href="#" class="social-icon si-borderless si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-pinterest">
										<i class="icon-pinterest"></i>
										<i class="icon-pinterest"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-rss">
										<i class="icon-rss"></i>
										<i class="icon-rss"></i>
									</a>
									<a href="#" class="social-icon si-borderless si-email3">
										<i class="icon-email3"></i>
										<i class="icon-email3"></i>
									</a>
								</div>
							</div> -->

						</div>
					</div><!-- .entry end -->

					<!-- ADD COMMENT SECTION HERE -->
					<?php

						if( comments_open() || get_comments_number() ) :
    					comments_template( '/partials/comments.php' );
						endif;

					?>

				</div>

				<?php get_template_part( 'partials/content', 'sidebar' ); ?>

			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>