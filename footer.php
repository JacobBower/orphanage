</div> <!--WRAPPER-->
	<div class="clearfix"></div>
	<footer>
		<div class="footer-wrapper row no-pad-left no-pad-right">
			<div class="footer-left column-4 no-pad-left no-pad-right">

				<ul class="social-icons">
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin-128.png" alt="linkedin icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pinterest-128.png" alt="pinterest icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/facebook-128.png" alt="facebook icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/twitter-128.png" alt="twitter icon" /></a></li>
				</ul>
					<ul class="share-button-list row">
						<li class="button-footer column-4 no-pad-left"><a href="#" >Donate</a></li>
						<li class="button-footer column-4 center"><a href="#" >Volunteer</a></li>
						<li class="button-footer column-4 no-pad-right"><a href="#" >Share</a></li>
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
				<p class="copy">All content &copy; 2014 200 Orphanages Worldwide</p>
			</aside>
		</div>
		<div class="clearfix"></div>
	</footer>
<?php wp_footer(); ?>
</body>
</html>