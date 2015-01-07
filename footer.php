</div> <!--WRAPPER-->
<footer>
	<div class="social-mobile">
		<div class="row">
			<ul class="social-icons">
				<li class="column-3"><a href="https://www.linkedin.com/company/200-orphanages-worldwide" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin@2.png" alt="linkedin icon" /></a></li>
				<li class="column-3"><a href="https://www.pinterest.com/200orphanages/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/pintrest@2.png" alt="pinterest icon" /></a></li>
				<li class="column-3"><a href="https://www.facebook.com/200Orphans" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook@2.png" alt="facebook icon" /></a></li>
				<li class="column-3"><a href="https://twitter.com/janhan/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter@2.png" alt="twitter icon" /></a></li>
			</ul>
		</div>
	</div>
	<div class="footer-wrapper row">
		<div class="social-mobile">
			<ul class="share-button-list row">
				<li class="button-footer column-4"><a href="http://www.volunteermatch.org/search/org275185.jsp" target="_blank" class="yellow">Act</a></li>
				<li class="button-footer column-4"><a href="https://www.facebook.com/200Orphans" target="_blank" class="blue">Share</a></li>
				<li class="button-footer column-4"><a href="https://secure.etransfer.com/ecomm/donation/donation1.cfm?d2org=200Orphanages&amp;d2tool=donate" target="_blank" class="red">Give</a></li>
			</ul>
		</div>
		<div class="footer-left column-4 no-pad-left no-pad-right">
			<ul class="social-icons">
				<li class="column-3"><a href="https://www.linkedin.com/company/200-orphanages-worldwide" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin@2.png" alt="linkedin icon" /></a></li>
				<li class="column-3"><a href="https://www.pinterest.com/200orphanages/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/pintrest@2.png" alt="pinterest icon" /></a></li>
				<li class="column-3"><a href="https://www.facebook.com/200Orphans" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/facebook@2.png" alt="facebook icon" /></a></li>
				<li class="column-3"><a href="https://twitter.com/janhan/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/twitter@2.png" alt="twitter icon" /></a></li>
			</ul>
		</div>
		<aside class="footer-right column-8">
			<nav class="footer-nav">
				<?php wp_nav_menu( array(
					'theme_location' => 'footer-menu' ,
					'menu' => 'Footer Menu' ,
					'container' => 'ul',
				) ); ?>
			</nav>
			<p class="copy">200 Orphanages Worldwide &copy; 2007 - <?php print (date ('Y')); ?></p>
		</aside>
	</div>
	<div class="clearfix"></div>
</footer>
<?php wp_footer(); ?>
<!-- mobile menu -->
<script type="text/javascript">
jQuery(window).load(function() { // enable function upon window load
	jQuery(".responsive-menu").click(function() { // when toggle is clicked...
		jQuery("nav").slideToggle(400); // ... open or close the navigation
	});
});
</script>
<!-- home page image slider -->
<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script>
	jQuery(document).ready(function(){
		jQuery(".owl-carousel").owlCarousel({
			loop : true,
			autoplay : true,
			autoplayTimeout : 3000,
			autoplayHoverPause : true,
			items : 1,
			itemsDesktop : false,
			itemsDesktopSmall : false,
			itemsTablet : false,
			itemsMobile : false
		});
	});
</script>
</body>
</html>
