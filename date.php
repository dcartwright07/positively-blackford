<?php

get_header();

// Get month the user chooses
$year = get_query_var( 'year' );
$monthnum = get_query_var( 'monthnum' );
$month = $GLOBALS['wp_locale']->get_month($monthnum);

?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php echo $month . ' ' . $year; ?></h1>
		<span>Our Archives</span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $month . ' ' . $year; ?></li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<!-- Post Content
			============================================= -->
			<div class="postcontent nobottommargin clearfix">

				<!-- Posts
				============================================= -->
				<div id="posts" class="small-thumbs">

					<?php

					// Display all post related to the month chosen
					$args = array(
						'year'					=> $year,
						'monthnum'			=> $monthnum,
						'order'					=> 'DESC',
						'orderby'				=> 'date',
						// 'post_per_page'	=> 10,
					);
					$query =  new WP_Query( $args );

					if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
						get_template_part( 'partials/content', 'listings' );
					endwhile; endif;

					// get_template_part( 'partials/snippet', 'pagination' );

					?>

				</div>
				<!-- End Posts -->

			</div>
			<!-- End Post Content -->


			<?php

			// Display in a sidebar more option to filter by other months
			get_template_part( 'partials/sidebar/sidebar', 'archives-month' );

			?>

		</div>
	</div>
</section>

<?php get_footer(); ?>