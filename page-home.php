<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="content">

			<section class="content-section-full">
				<div class="row">

					<div id="main-content-slider" class="owl-carousel owl-theme column-12 no-pad-left no-pad-right">
						<?php if( get_field('photo_slider')) : ?>
							<ul>
							<?php while( the_repeater_field('photo_slider')) : 
								$image = get_sub_field('slider_image');
								$slide = wp_get_attachment_image_src( $image, 'photo_slider' );
								$alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
								?>
								<div class="item"><img src="<?php echo $slide[0]; ?>" alt="<?php echo $alt; ?>" /></div>
							</ul>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>

			</section>
			<section class="content-section-full">
				<div class="row">
					<div class="mission-statement column-6 no-pad-left no-pad-right">
						<h2 class="section-headline">Mission Statement</h2>
						<p>For me, it started in 2007 volunteering at an orphanage in Peru. The simple act of reading stories in broken Spanish... showing little girls how to cut out paper dolls for the first time. The kids moved my heart... then changed my life. After stacking blocks to build a security wall around a school yard inspired me to do something to make a child--one that I may never meet, have a safe place to call home.<br /><br />
						Our vision became to help our partners raise funds and awareness for building projects that will better serve orphans in their care.<br /><br />
						Our goal is to one day help more than 200 Orphanages provide safe shelter...<br /><br />
						What's your something?<br /><br />
						- 200 Orphanages Worldwide</p>
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
								<p><?php the_title(); ?></p>
							</div>

				          <?php endwhile; ?>

					</aside> <!-- CURRENT PROJECTS -->
				</div><!--row-->
					<!-- <div class="clearfix"></div> -->
			</section>


			<section class="content-section-full border-top">
				<div class="row">
					<div class="blog-section column-8 no-pad-left">
						<h2 class="section-headline">Recent Posts</h2>

						<ul>
							<?php $the_query = new WP_Query('showposts=3');
							while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
								<li>
									<div class="blog-description column-12 no-pad-left">
										<h4 class="blog-post-title"><?php the_title(); ?></h4>
										<p><?php echo excerpt(55); ?></p>
										<a href="<?php the_permalink() ?>" class="button-small">More</a>
									</div>
								</li>
							<?php endwhile; ?>
						</ul>

						<div class="clearfix"></div>

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
