<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="content">

			<section class="content-section">
				<div class="row">
					<div class="main-content-slider column-12">
						<img src="" alt="content-slider" />
					</div>
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
						<div class="section-left column-6 no-pad-left no-pad-right">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt=""/>
							<a href="#" class="button-small">Button</a>
						</div>
						<div class="section-right column-6 no-pad-left no-pad-right">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt=""/>
							<a href="#" class="button-small">Button</a>
						</div>
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