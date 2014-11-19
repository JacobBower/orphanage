<?php 
/*
Template Name: Contact
*/
get_header(); ?>
	
	<div class="content">
    
        <h1><?php the_title(); ?></h1>
        <div class="row">

        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
        <section class="content-section column-8 no-pad-left no-pad-right">

        <?php the_content(); ?>
                
        </section>
		
        </div>
     </div><!-- CONTACT CONTENT -->

<?php get_footer(); ?>