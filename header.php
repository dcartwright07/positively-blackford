<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149399896-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-149399896-1');
	</script>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="Dominic Cartwright, Kevin McGregor" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ) ?></title>

	<?php wp_head(); ?>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="full-header">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<?php get_template_part( 'partials/header/header', 'logo' ); ?>
					<?php get_template_part( 'partials/header/header', 'menu' ); ?>

				</div>
			</div>
		</header><!-- #header end -->