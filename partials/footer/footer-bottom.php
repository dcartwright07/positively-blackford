<!-- Copyrights
============================================= -->
<div id="copyrights">

	<div class="container clearfix">

		<div class="col_full nobottommargin center">
			<div class="copyrights-menu copyright-links clearfix">
			<?php

				$footerDefaults = array(
					'container' => false,
					'theme_location' => 'footer-menu-bottom',
					'items_wrap' => '',
					'before' => '',
					'after' => ' / '
				);
				wp_nav_menu( $footerDefaults );

			?>
			</div>
			Copyrights &copy; 2019 All Rights Reserved by Blackford Initiative.<br>
			Developed by: <a href="http://dominiccartwright.com" target="_blank">Dominic Cartwright</a> &amp; <a href="http://kwmcgrego.com" target="_blank">Kevin McGregor</a>
		</div>

	</div>

</div>