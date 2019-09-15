<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1>Search Results</h1>
		<!-- <span>Our Latest News</span> -->
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page">Search Results</li>
		</ol>
	</div>

</section><!-- #page-title end -->

<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<?php

			get_search_form();

			$searchTerm = get_search_query();
			$args = array(
				'searchTerm' =>$searchTerm
			);

			// The Query
			$query = new WP_Query( $args );
			if( $query->have_posts() ) {
				_e( '<h2 style="font-weight:bold; color:#000">Search Results for: "' . get_query_var( 'searchTerm' ) . '"</h2>"' );
				while( $query->have_posts() ) {
					$query->the_post();
					?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
					<?php
				}
			} else {
			?>
			<h2 style='font-weight:bold;color:#000'>Nothing Found</h2>
			<div class="alert alert-info">
				<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
			</div>
			<?php } ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>