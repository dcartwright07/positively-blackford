<!-- Top Bar
============================================= -->
<div id="top-bar">

	<div class="col_half nobottommargin">

		<!-- Top Links
		============================================= -->
		<div class="top-links">
			<?php

				$topMenuArgs = array(
					'container' => false,
					'theme_location' => 'footer-menu-bottom'
				);
				wp_nav_menu( $topMenuArgs );

			?>
		</div><!-- .top-links end -->

	</div>

	<div class="col_half fright col_last nobottommargin">

		<!-- Top Social
		============================================= -->
		<div id="top-social">
			<ul>
				<li><a href="https://www.facebook.com/positivelyblackford/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
				<li><a href="/calendar" class="si-pinterest"><span class="ts-icon"><i class="icon-calendar"></i></span><span class="ts-text">Calendar</span></a></li>
				<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
				<li><a href="mailto:positiveblackfordnews@gmail.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">positiveblackfordnews@gmail.com</span></a></li>
			</ul>
		</div><!-- #top-social end -->

	</div>

</div><!-- #top-bar end -->