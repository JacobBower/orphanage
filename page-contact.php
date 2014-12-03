<?php 
/*
Template Name: Contact
*/
get_header(); ?>
	
	<div class="content">
    
        <h1><?php the_title(); ?></h1>
       
            <section class="content-section column-8 no-pad-left no-pad-right">

                <?php the_content(); ?>
                    
            </section>
		
     </div><!-- CONTACT CONTENT -->

<?php get_footer(); ?>