<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php the_title(); ?></h1>
		<!-- <span>Our Latest News</span> -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>

</section>

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

			<?php

				if( have_posts() ) : while ( have_posts() ) : the_post();
					the_content();
				endwhile; endif;

			?>

			</div>

			<?php get_template_part( 'partials/content', 'sidebar' ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>