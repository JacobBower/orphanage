<?php 
/*
Template Name: Gallery
*/
get_header(); ?>
	
	<div class="content row">
    
 	   <h1><?php the_title(); ?></h1>

       <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
       
        <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
            <h3>Content Title</h3>
        	<p>
            	Pasta ipsum dolor sit amet shitty bavettine spirali agnolotti calamaretti. Perciatelli rigatoncini capellini farfalle 
                paccheri cellentani tortelloni fettuce fuckers asshat fusilli vermicelli sagne.Dick frak pasta al ceppo cavatappi fagioloni rat fart. 
            </p>
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

        <div class="clearfix"></div>
        <!--GALLERY-->
        <section class="section-content gallery-content column-8 no-pad-left no-pad-right">
            <h3>Content Title</h3>
            <p>
                Pasta ipsum dolor sit amet shitty bavettine spirali agnolotti calamaretti. Perciatelli rigatoncini capellini farfalle 
                paccheri cellentani tortelloni fettuce fuckers asshat fusilli vermicelli sagne.Dick frak pasta al ceppo cavatappi fagioloni rat fart. 
            </p>
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