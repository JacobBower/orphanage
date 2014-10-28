<?php
/*
Template Name: Home
*/

get_header(); ?>


<div class="content">

			<section class="content-section">
				<div class="main-content-slider">
					<img src="" alt="content-slider" />
				</div>
			</section>
			<section class="content-section">
				<div class="mission-statement">
					<h2 class="section-headline">Mission Statement</h2>
					<p>For me, it started in 2007 volunteering at an orphanage in Peru. The simple act of reading stories in broken Spanish... showing little girls how to cut out paper dolls for the first time. The kids moved my heart... then changed my life. After stacking blocks to build a security wall around a school yard inspired me to do something to make a child--one that I may never meet, have a safe place to call home.</p>
					<p>Our vision became to help our partners raise funds and awareness for building projects that will better serve orphans in their care.</p>
					<p>Our goal is to one day help more than 200 Orphanages provide safe shelter...</p>
					<p>What's your something?</p>
					<p>- 200 Orphanages Worldwide</p>
				</div>
				<aside class="current-projects">
					<h2 class="section-headline">Current Projects</h2>
						<div class="section-left">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" />
							<a href="#" class="button-small">Button</a>
						</div>
						<div class="section-right">
							<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" />
							<a href="#" class="button-small">Button</a>
						</div>

				</aside> <!-- CURRENT PROJECTS -->
				<div class="clearfix"></div>
			</section>


			<section class="content-section border-top">
				<div class="blog-section">
					<h2 class="section-headline">Blog</h2>
					<section class="blog-post">
						<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" />
							<div class="blog-description">
								<h4 class="blog-post-title">Title</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<a href="#" class="button-small">Button</a>
							</div> <!-- BLOG DESCRIPTION -->
			</section>
				<div class="clearfix"></div>
					<section class="blog-post">
						<img src="<?php bloginfo('template_directory'); ?>/img/placeholder-square.jpg" alt="" />
							<div class="blog-description">
								<h4 class="blog-post-title">Title</h4>
								<p>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<a href="#" class="button-small">Button</a>
							</div> <!-- BLOG DESCRIPTION -->
					</section>
					<a href="#" class="button-large">More</a>
				</div> <!-- BLOG SECTION -->
                
				<div>
				<div class="widget-area">
					<p>Widget Area</p>
				</div>


			</section>

</div> <!-- CONTENT -->

<?php 
get_footer(); ?>