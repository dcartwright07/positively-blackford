<?php
	/*
	Template Name: Archives
	*/

	get_header();
?>

<!-- Page Title
============================================= -->
<section id="page-title">

	<div class="container clearfix">
		<h1><?php the_title(); ?></h1>
		<span>Search Our Archives</span>
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="/">Home</a></li>
			<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
		</ol>
	</div>

</section><!-- #page-title end -->

<!-- Content
============================================= -->
<section id="content">
	<div class="content-wrap">
		<div class="container clearfix">

			<?php the_post(); ?>

			<?php get_search_form(); ?>

			<h2>Archives by Month:</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>

			<h2>Archives by Category:</h2>
			<ul>
				<?php wp_list_categories(); ?>
			</ul>

		</div>
	</div>
</section>

<?php get_footer(); ?>