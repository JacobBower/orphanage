<?php 
/*
Template Name: Projects
*/
get_header(); ?>
	
	<div class="page-content row">
    
 	   <h1><?php the_title(); ?></h1>
       
       <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
       <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
            <h3 class="content-headline">Current Projects</h3>
               
				<div class="main-content-slider column-12">
						<img src="" alt="content-slider" />
				</div>
			
       </section>
       <div class="clearfix"></div>
       <!--GALLERY-->
       
       <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
            <h3 class="content-headline">Past Projects</h3>
               				
					<div class="main-content-slider column-12">
						<img src="" alt="content-slider" />
					</div>
       </section>
       <div class="clearfix"></div>
       
       <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
       <h2>Partners</h2>
       <div class="row">
                <div class="image-row-container">
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                </div>
                <div class="image-row-container">
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                    <div class="column-3 image-container"><a href="#"><img class="placeholder" src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" /></a></div>
                </div>
            </div>
       
       </section>
       
    </div><!--GALLERY-CONTENT-->
    



<?php get_footer(); ?>