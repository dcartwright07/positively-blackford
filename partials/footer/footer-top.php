<!-- Footer Widgets
============================================= -->
<div class="footer-widgets-wrap clearfix">

	<div class="col_one_third">
		<div class="widget clearfix">

			<?php echo '<img src="' . get_template_directory_uri() . '/assets/images/logo-w.png" width="250" alt="Positively Blackford Logo" class="footer-logo">'; ?>
			<!-- <img src="images/footer-widget-logo.png" alt="" class="footer-logo"> -->

			<p>We look to share <strong>Positive</strong> news about Blackford County.</p>

			<div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
				<address>
					<strong>Headquarters:</strong><br>
					000 Street<br>
					Hartford City, IN 00000<br>
				</address>
				<!-- <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br> -->
				<!-- <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br> -->
				<abbr title="Email Address"><strong>Email:</strong></abbr> positiveblackfordnews@gmail.com
			</div>

			<div class="row">
				<div class="col-lg-6 clearfix bottommargin-sm">
					<a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
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

		<h4>Title</h4>

		<?php

			$footercolumn2 = array(
				'container' => false,
				'theme_location' => 'footer-column-2'
			);
			wp_nav_menu( $footercolumn2 );

		?>

		</div>
	</div>

	<div class="col_one_third col_last">
		<div class="widget widget_links clearfix">

			<h4>Title</h4>

			<?php

				$footercolumn3 = array(
					'container' => false,
					'theme_location' => 'footer-column-3'
				);
				wp_nav_menu( $footercolumn3 );

			?>

		</div>
	</div>

</div><!-- .footer-widgets-wrap end -->