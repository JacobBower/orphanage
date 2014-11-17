</div> <!--WRAPPER-->
	<div class="clearfix"></div>
	<footer>
		<div class="footer-wrapper row no-pad-left no-pad-right">
			
            <section class="social-mobile">
				<div class="row">
					<ul class="social-icons">
						<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin@2.png" alt="linkedin icon" /></a></li>
						<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pintrest@2.png" alt="pinterest icon" /></a></li>
						<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/facebook@2.png" alt="facebook icon" /></a></li>
						<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/twitter@2.png" alt="twitter icon" /></a></li>
					</ul>
				</div>
			</section>
            
            <div class="footer-left column-4 no-pad-left no-pad-right">
				<ul class="social-icons">
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin.png" alt="linkedin icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pintrast.png" alt="pinterest icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="facebook icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="twitter icon" /></a></li>
				</ul>
			</div>
			<aside class="footer-right column-8">
				<nav class="footer-nav">
					<?php wp_nav_menu( array( 
						'theme_location' => 'footer-menu' ,
						'menu' => 'Footer Menu' ,
						'container'  => 'ul', 
					) ); ?>
				</nav>
				<p class="copy">200 Orphanages Worldwide &copy; 2007 - <?php print (date ('Y')); ?></p>
			</aside>
		</div>
		<div class="clearfix"></div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>