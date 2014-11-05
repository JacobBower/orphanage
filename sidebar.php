<aside id="primary"> 
	<?php if ( is_active_sidebar( 'primary' ) ) : ?>  
		<?php dynamic_sidebar( 'primary' ); ?>
	<?php else : ?>
    
    <?php/* default sidebar when no widgets are active */?>
        <h3>Primary Sidebar</h3>
        <!-- Begin Categories -->
 		<h3><?php _e('Search'); ?></h3>
			<?php get_search_form(); /* default Wordpress search form */?>        
        
		<h3>Categories</h3>
		<ul>
			<?php wp_list_categories('title_li='); ?>
		</ul>
    	<!-- End Categories -->

        <!-- Begin Meta -->
        <h3>Meta</h3>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    	<!-- End Meta -->

	<?php endif; ?>
</aside><!-- #primary -->