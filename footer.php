
</div> <!--WRAPPER-->
	
	<footer>
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
    
		<div class="footer-wrapper row">
			
            <section class="social-mobile">
                <ul class="share-button-list row">
						<li class="button-footer column-4"><a href="#" class="yellow">Act</a></li>
						<li class="button-footer column-4"><a href="#" class="blue">Share</a></li>
						<li class="button-footer column-4"><a href="#" class="red">Give</a></li>
					</ul>
            </section>
			
            
            <div class="footer-left column-4 no-pad-left no-pad-right">
				<ul class="social-icons">
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin@2.png" alt="linkedin icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/pintrest@2.png" alt="pinterest icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/facebook@2.png" alt="facebook icon" /></a></li>
					<li class="column-3"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/twitter@2.png" alt="twitter icon" /></a></li>
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

<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
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