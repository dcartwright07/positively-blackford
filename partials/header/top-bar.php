<!-- Top Bar
============================================= -->
<div id="top-bar">

	<div class="col_half nobottommargin top-left-links">

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

	<div id="mobile-top-bar" class="col_half fright col_last nobottommargin top-right-links">

		<!-- Top Right Links
		============================================= -->
		<div class="top-links">
			<?php

				$topRightMenuArgs = array(
					'container' 		 => false,
					'theme_location' => 'whatsup-menu',
					'items_wrap'     => '<ul id="%1$s" class="%2$s"><li class="no-hover">More from Blackford County:</li>%3$s</ul>',
				);
				wp_nav_menu( $topRightMenuArgs );

			?>
		</div>

		<!-- Top Social
		============================================= -->
		<!-- <div id="top-social">
			<ul>
				<li><a href="https://www.facebook.com/positivelyblackford/" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
				<li><a href="/calendar" class="si-pinterest"><span class="ts-icon"><i class="icon-calendar"></i></span><span class="ts-text">Calendar</span></a></li>
				<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
				<li><a href="mailto:positiveblackfordnews@gmail.com" class="si-email3"><span class="ts-icon"><i class="icon-email3"></i></span><span class="ts-text">positiveblackfordnews@gmail.com</span></a></li>
			</ul>
		</div> -->

	</div>

</div><!-- #top-bar end -->