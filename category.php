<?php

	get_header();

	$page_object = get_queried_object();
	$catName = $page_object->cat_name;

	$page_id = get_queried_object_id();
	// $catID = $page_id->

?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php echo $catName; ?></h1>
		<span>Our Latest News</span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php echo $catName; ?></li>
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

						$args = array(
							// 'category_name' => $catName,
							'category__in' => array( $page_id ),
							'posts_per_page' => 5
						);
						$query =  new WP_Query( $args );

						if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
							get_template_part( 'partials/content', 'listings' );
						endwhile; endif;

						// get_template_part( 'partials/snippet', 'pagination' );

					?>

				</div>

			</div>

			<?php get_template_part( 'partials/content', 'sidebar' ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>