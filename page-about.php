<?php 
/*
Template Name: About
*/
get_header(); ?>
	
	<div class="content">
    
        <h2><?php the_title(); ?></h2>
        <div class="row">
       
        <section class="content-section border-bottom column-8 no-pad-left no-pad-right">
                <h3>Our Mission Statement</h3>
                	<p>
                    	Pasta ipsum dolor sit amet shitty bavettine spirali agnolotti calamaretti. Perciatelli rigatoncini capellini farfalle 
                        paccheri cellentani tortelloni fettuce fuckers asshat fusilli vermicelli sagne 'ncannulate fucker trenette campanelle. 
                        Dick frak scialatelli cellentani lanterne. Lasagnotte mezzani pasta pasta al ceppo cavatappi fagioloni rat fart. 
                    	Fettucelle booyah bitches farfalline bavettine penne rigate bitches fiori lagane trennette mafalde. Gnocchi trofie campanelle gnocchi 
                        vermicelli capunti orzo lagane gomito sacchettoni torchio. Quadrefiore frak chifferi linguettine lumaconi.
                    </p>
        </section>
        <div class="sidebar column-4 no-pad-right">
            <?php get_sidebar('secondary'); ?>
        </div>
		<section class="content-section border-bottom column-8 no-pad-left">
      		<h3>Our Leadership</h3>
            	<section class="section-description row">
            		<!-- <div class="placeholder"><a href="#"></a></div> -->
                    <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt=""  class="column-4 no-pad-left no-pad-right"/>
                        <div class="leadership-description column-8">
                        <h4>Title</h4>
                    	<p>Bavettine penne rigate bitches fiori lagane trennette mafalde. Gnocchi 
                        trofie campanelle gnocchi vermicelli capunti orzo.<br />
                        <a href="" class="button">Button</a>
                        </p>
                        </div>
                </section><!--ABOUT-LEADERSHIP-POST-->
                <section class="leadership-post row">
            		<!-- <div class="placeholder"><a href="#"></a></div> -->
                    <img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt=""  class="column-4 no-pad-left no-pad-right"/>
                        <div class="section-description column-8">
                        <h4>Title</h4>
                    	<p>Bavettine penne rigate bitches fiori lagane trennette mafalde. Gnocchi 
                        trofie campanelle gnocchi vermicelli capunti orzo.<br />
                        <a href="" class="button">Button</a>
                        <br />
                        <a href="" class="button">More</a>
                        </p>
                        </div>
                </section><!--ABOUT-LEADERSHIP-POST-->
                	
    	</section><!--ABOUT-LEADERSHIP-->
		
        <section class="section-content column-8 no-pad-left">
        	<h3 class="pad-bottom">Our Partners</h3>
            	<div class="partners row">
                    <h4>Title</h4>
                    	<div class="partner-logo column-4">Logo</div>
                        <div class="partner-description column-8 no-pad-right">
                        <p>Gnocchi trofie campanelle gnocchi 
                        vermicelli capunti orzo lagane.<br />
                        <a href="" class="button">Button</a>
                        </p>
                        </div>
                </div><!--PARTNERS-->
                <br />
            	<div class="partners row">
                	<h4>Title</h4>
                    	<div class="partner-logo column-4">Logo</div>
                        <div class="partner-description column-8 no-pad-right">
                        <p>Gnocchi trofie campanelle gnocchi 
                        vermicelli capunti orzo lagane.<br />
                        <a href="" class="button">Button</a>
                        </p>
                        </div>
                </div><!--PARTNERS-->
        
        </section><!--ABOUT-PARTNERS-->
        </div>
     </div><!-- ABOUT-CONTENT -->

<?php get_footer(); ?>