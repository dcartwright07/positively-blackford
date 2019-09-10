<!-- Sidebar
============================================= -->
<div class="sidebar nobottommargin col_last clearfix">
	<div class="sidebar-widgets-wrap">

		<div class="widget clearfix">
			<div class="tabs nobottommargin clearfix" id="sidebar-tabs">

				<ul class="tab-nav clearfix">
					<!-- <li><a href="#popular">Popular</a></li> -->
					<li><a href="#recent">Recent</a></li>
				</ul>

				<div class="tab-container">

					<?php

						// get_template_part( 'partials/sidebar/sidebar', 'popular-post' );
						get_template_part( 'partials/sidebar/sidebar', 'recent-post' );

					?>

				</div>

			</div>

		</div>

		<!-- <div class="widget clearfix">

			<h4>Tag Cloud</h4>
			<div class="tagcloud">
				<a href="#">general</a>
				<a href="#">videos</a>
				<a href="#">music</a>
				<a href="#">media</a>
				<a href="#">photography</a>
				<a href="#">parallax</a>
				<a href="#">ecommerce</a>
				<a href="#">terms</a>
				<a href="#">coupons</a>
				<a href="#">modern</a>
			</div>

		</div> -->

	</div>

</div><!-- .sidebar end -->