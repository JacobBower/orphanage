<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="content">

			<section class="content-section">
				<div class="row">

					<div id="main-content-slider" class="owl-carousel owl-theme column-12">
						<div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/banner-1.jpg" alt="banner"></div>
						<div class="item"><img src="<?php bloginfo('template_directory'); ?>/img/banner-2.jpg" alt="banner"></div>
					</div>


					<!-- <div class="main-content-slider column-12">
						<img src="" alt="content-slider" />
					</div> -->
				</div>
			</section>
			<section class="content-section">
				<div class="row">
					<div class="mission-statement column-6 no-pad-left no-pad-right">
						<h2 class="section-headline">Mission Statement</h2>
						<p>For me, it started in 2007 volunteering at an orphanage in Peru. The simple act of reading stories in broken Spanish... showing little girls how to cut out paper dolls for the first time. The kids moved my heart... then changed my life. After stacking blocks to build a security wall around a school yard inspired me to do something to make a child--one that I may never meet, have a safe place to call home.</p>
						<p>Our vision became to help our partners raise funds and awareness for building projects that will better serve orphans in their care.</p>
						<p>Our goal is to one day help more than 200 Orphanages provide safe shelter...</p>
						<p>What's your something?</p>
						<p>- 200 Orphanages Worldwide</p>
					</div>

					<aside class="current-projects column-6 no-pad-left no-pad-right">
						<h2 class="section-headline">Current Projects</h2>
						

						<?php
				          	$args = array(
					            'post_type' => 'project',
					            'posts_per_page' => 2,
					            'orderby' => 'date',
					            'order' => 'DESC',
					            'tax_query' => array(
									array(
						                'taxonomy' => 'project_categories',
						                'field' => 'slug',
						                'terms' => array('current'),
						                'include_children' => false
									)
					            )
							);
				          $loop = new WP_Query( $args );
				          $i = 0;
				          while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
				          
							<div class="section-<?php if($i == 1) { echo 'left'; } else { echo 'right'; }; ?> column-6 no-pad-left no-pad-right">
								<?php the_post_thumbnail('custom_size'); ?>
								<a href="<?php the_permalink(); ?>" class="button-small">Button</a>
							</div>

				          <?php endwhile; ?>

					</aside> <!-- CURRENT PROJECTS -->
				</div><!--row-->
					<!-- <div class="clearfix"></div> -->
			</section>


			<section class="content-section border-top">
				<div class="row">
					<div class="blog-section column-8 no-pad-left">
						<h2 class="section-headline">Blog</h2>
						<section class="blog-post row">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt=""  class="column-4"/>
							<div class="blog-description column-8">
								<h4 class="blog-post-title">Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<a href="#" class="button-small">Button</a>
							</div> <!-- BLOG DESCRIPTION -->
						</section>
						<section class="blog-post row">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" class="column-4"/>
							<div class="blog-description column-8">
								<h4 class="blog-post-title">Title</h4>
								<p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<a href="#" class="button-small">Button</a>
							</div> <!-- BLOG DESCRIPTION -->
						</section>
						<a href="#" class="button-large">More</a>
					</div> <!-- BLOG SECTION -->
					<div class=" sidebar column-4 no-pad-right">
						<?php get_sidebar('primary'); ?>
					</div>
				</div><!--row-->

			</section>
			

</div> <!-- CONTENT -->

<?php 
get_footer(); ?>