<?php get_header(); ?>

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">

		<?php get_template_part( 'partials/content', 'breaking-news' ); ?>

		<div class="container clearfix">
			<div class="col_full nobottommargin">
				<?php get_template_part( 'partials/content', 'featured-stories' ); ?>
			</div>
		</div>
	</div>

	<div class="content-wrap grey-background">
		<div class="container clearfix">
			<div class="col_full nobottommargin">
				<?php get_template_part( 'partials/content', 'home-stories' ); ?>
			</div>
		</div>
	</div>

	<div id="featured-videos" class="content-wrap">
		<div class="container clearfix">
			<div class="col_full nobottommargin">
				<?php get_template_part( 'partials/content', 'featured-videos' ); ?>

			</div>
		</div>

	</div>
</section>

<?php get_footer(); ?>