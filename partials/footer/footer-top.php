<!-- Footer Widgets
============================================= -->
<div class="footer-widgets-wrap clearfix">

	<div class="col_one_third">
		<div class="widget clearfix">

			<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/logo-w.png" width="250" alt="Positively Blackford Logo" class="footer-logo">'; ?>
			<!-- <img src="images/footer-widget-logo.png" alt="" class="footer-logo"> -->

			<p>We look to share <strong>Positive</strong> news about Blackford County.</p>
			<p><i class="icon-line-mail"></i>&nbsp;&nbsp;positiveblackfordnews@gmail.com</p>

			<div class="row">
				<div class="col-lg-6 clearfix bottommargin-sm">
					<a href="https://www.facebook.com/positivelyblackford/" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
						<i class="icon-facebook"></i>
						<i class="icon-facebook"></i>
					</a>
					<a href="https://www.facebook.com/positivelyblackford/"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
				</div>
			</div>

		</div>
	</div>

	<div class="col_one_third">
		<div class="widget widget_links clearfix">
			<?php

				$menu1 = wp_get_nav_menu_object( 'government' );
				echo '<h4>' . $menu1->name . '</h4>';

				$menuList1 = array(
					'container' => false,
					'theme_location' => 'footer-column-2'
				);
				wp_nav_menu( $menuList1 );

			?>
		</div>
	</div>

	<div class="col_one_third col_last">
		<div class="widget widget_links clearfix">
			<?php

				$menu2 = wp_get_nav_menu_object( 'community' );
				echo '<h4>' . $menu2->name . '</h4>';

				$menuList2 = array(
					'container' => false,
					'theme_location' => 'footer-column-3'
				);
				wp_nav_menu( $menuList2 );

			?>
		</div>
	</div>

</div><!-- .footer-widgets-wrap end -->