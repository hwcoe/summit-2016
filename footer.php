			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
				<div class="social-icons cf">
					<p>
						<a href="https://www.facebook.com/gatorengineering/" class="icon-facebook" title="Find us on Facebook"></a>
						<a href="https://twitter.com/floridaengineer" class="icon-twitter" title="Follow us on Twitter"></a>
						<a href="https://www.youtube.com/user/gatorengineering" class="icon-youtube" title="Subscribe on YouTube"></a>
						<a href="https://www.linkedin.com/groups/8412066" class="icon-linkedin2" title="Connect on LinkedIn"></a>
						<a href="https://instagram.com/gatorengineering/" class="icon-instagram" title="Follow us on Instagram"></a>
						<a href="https://www.flickr.com/photos/gatorengineering/" class="icon-flickr3" title="Follow us on Flickr"></a>
					</p>
				</div>

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

					<p>
						<a href="https://eng.ufl.edu" title="Herbert Wertheim College of Engineering"><img src="<?php echo get_template_directory_uri(); ?>/library/images/hwcoe-wordmark.png" alt="Herbert Wertheim College of Engineering wordmark" class="wordmark" /></a>
						<a href="https://www.c200.org/" title="The Committee of 200: Success Shared"><img src="<?php echo get_template_directory_uri(); ?>/library/images/c200-wordmark.png" alt="Committee of 200 wordmark" class="wordmark" /></a>
					</p>
					
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
