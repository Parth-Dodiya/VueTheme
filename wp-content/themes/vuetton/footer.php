<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vuetton
 */

?>	

	<footer id="footer" data-js-social-hide="" class="social-hide site-footer body-copy">
		<router-view></router-view>
	</footer><!-- #footer -->

	<template id="footer-template">
		<div class="seal-icon-wrapper">
			<img v-bind:src="footerBGImg.url">
		</div>
	    <div class="container">
	        <div class="row">
	            <div class="footer-wrapper">
	                <section id="primary-footer-menu-section" class="justify-content-center footer-navigation-section primary-footer-navigation">
	                    <nav class="primary col col-xs-12 col-md-12 col-lg-10" aria-label="Primary Footer Navigation">
	                        <ul id="primary-navigation-footer" class="menu">
	                            <li id="menu-item-91" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item menu-item-home menu-item-91 col navlink top-level-menu-item" v-for="footerMenu in footerMenus"><a href="{{ footerMenu.footer_menu_link.url }}">{{ footerMenu.footer_menu_link.title }}</a></li>
	                            <li id="menu-item-98" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-98 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/administration/">The Administration</a></li>
	                            <li id="menu-item-2215" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2215 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/administration/executive-office-of-the-president/">Executive Offices</a></li>
	                            <li id="menu-item-93" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-93 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/priorities/">Priorities</a></li>
	                            <li id="menu-item-65471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65471 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/therecord/">The Record</a></li>
	                            <li id="menu-item-2785" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2785 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/briefing-room/">Briefing Room</a></li>
	                            <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/about-the-white-house/">The White House</a></li>
	                            <li id="menu-item-65472" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-65472 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/disclosures/">Disclosures</a></li>
	                            <li id="menu-item-96" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96 col navlink top-level-menu-item"><a href="https://www.whitehouse.gov/get-involved/">Get Involved</a></li>
	                            <li id="menu-item-1801" class="site-id-2 mlp-language-nav-item menu-item menu-item-type-mlp_language menu-item-object-mlp_language menu-item-1801 col navlink top-level-menu-item"><a rel="alternate" href="https://www.whitehouse.gov/es/" lang="es-US" hreflang="es-US">Español</a></li>
	                        </ul>
	                    </nav><!-- .primary -->
	                </section><!-- #primary-footer-menu-section -->
	                <div class="footer-right">
	                    <section class="justify-content-center footer-navigation-section secondary-footer-navigation">
	                        <nav class="footer-secondary col-xs-12 col-md-12 col-lg-10" aria-label="Secondary Footer Navigation">
	                            <ul id="footer-secondary" class="menu">
	                                <li id="menu-item-54640" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54640 col small-text top-level-menu-item"><a href="https://www.whitehouse.gov/contact/">Contact Us</a></li>
	                                <li id="menu-item-54641" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54641 col small-text top-level-menu-item"><a href="https://www.whitehouse.gov/privacy/">Privacy Policy</a></li>
	                                <li id="menu-item-54642" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54642 col small-text top-level-menu-item"><a href="https://www.whitehouse.gov/copyright/">Copyright Policy</a></li>
	                                <li id="menu-item-54643" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-54643 col small-text top-level-menu-item"><a href="https://www.whitehouse.gov/accessibility/">Accessibility Statement</a></li>
	                            </ul>
	                        </nav><!-- .footer-secondary -->
	                    </section>
	                    <div class="social-and-address">
	                        <div class="footer__social">
	                            <nav class="col-xs-12" aria-label="Social Navigation">
	                                <ul id="footer-social-navigation" class="social-simple">
	                                    <li id="menu-item-87" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-87 col-auto top-level-menu-item">
	                                    	<a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/whitehouse/" class="external-link">
                                            	<span class="screen-reader-text">Instagram<span class="screen-reader-text">Opens in a new window</span></span>
                                        	</a>
                                        </li>
	                                    <li id="menu-item-88" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-88 col-auto top-level-menu-item">
	                                    	<a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com/WhiteHouse/" class="external-link">
	                                    		
	                                            <span class="screen-reader-text">Facebook<span class="screen-reader-text">Opens in a new window</span></span>
	                                        </a>
	                                    </li>
	                                    <li id="menu-item-89" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-89 col-auto top-level-menu-item">
	                                    	<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/whitehouse" class="external-link">
	                                    		<span class="screen-reader-text">Twitter<span class="screen-reader-text">Opens in a new window</span></span>
	                                    	</a>
	                                    </li>
	                                    <li id="menu-item-90" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-90 col-auto top-level-menu-item">
	                                    	<a target="_blank" rel="noopener noreferrer" href="https://www.youtube.com/user/whitehouse" class="external-link">
	                                    		<span class="screen-reader-text">YouTube<span class="screen-reader-text">Opens in a new window</span></span>
	                                    	</a></li>
	                                </ul>
	                            </nav><!-- social -->
	                        </div><!-- .footer__social -->
	                        <p class="address">
	                            <strong>The White House</strong><br>
	                            1600 Pennsylvania Ave NW<br>
	                            Washington, DC 20500
	                        </p><!-- .address -->
	                        <a class="wh-logo-link" href="<?php echo get_home_url(); ?>" rel="home">
	                            <span class="screen-reader-text">WH.gov</span>
	                            <img v-bind:src="footerLogo.url" alt="" title="">
	                        </a>
	                    </div>
	                </div><!-- .footer-right -->
	            </div><!-- .footer-wrapper -->
	        </div><!-- .row -->
	    </div><!-- .container -->











	  	
	</template>


	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php // echo esc_url( __( 'https://wordpress.org/', 'vuetton' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				// printf( esc_html__( 'Proudly powered by %s', 'vuetton' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				// printf( esc_html__( 'Theme: %1$s by %2$s.', 'vuetton' ), 'vuetton', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div> --><!-- .site-info -->
	<!-- </footer>--><!-- #colophon --> -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
