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

					?>

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

					<?php

						endwhile;
						// wp_pagenavi( array( 'query' => $arr_posts, ) );
						endif;

					?>

					<!-- Pagination
					============================================= -->
					<!-- <div class="row mb-3">
						<div class="col-12">
							<a href="#" class="btn btn-outline-secondary float-left">&larr; Older</a>
							<a href="#" class="btn btn-outline-dark float-right">Newer &rarr;</a>
						</div>
					</div> -->

				</div>

			</div>

			<?php get_template_part( 'partials/content', 'sidebar' ); ?>

		</div>
	</div>
</section>

<?php get_footer(); ?>