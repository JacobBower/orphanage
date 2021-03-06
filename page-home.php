<?php
/*
Template Name: Home
*/

get_header(); the_post(); ?>

<div class="content">

	<section class="content-section-full">
		<div class="row">

			<div id="main-content-slider" class="owl-carousel owl-theme column-12 no-pad-left no-pad-right">
				<?php if( get_field('photo_slider')) : ?>
					<?php while( the_repeater_field('photo_slider')) :
						$image = get_sub_field('slider_image');
						$caption = get_sub_field('slider_caption');
						$align = get_sub_field('caption_align');
						$slide = wp_get_attachment_image_src( $image, $caption, 'photo_slider' );
						$alt = get_post_meta( $image, '_wp_attachment_image_alt', true);
						?>
						<ul>
						<li class="item">
							<img src="<?php echo $slide[0]; ?>" alt="<?php echo $alt; ?>" />
							<h3 class="banner-caption <?php if( $align == "top left" ) { echo 'top-left'; } elseif( $align == "top right" ) { echo 'top-right'; } elseif( $align == "bottom left" ) { echo 'bottom-left'; } else { echo 'bottom-right'; }; ?>"><?php echo $caption; ?></h3>
						</li>
						</ul>
						<?php endwhile; ?>

				<?php endif; ?>
			</div>
		</div>

	</section>
	<section class="content-section-full">
		<div class="row">
			<div class="mission-statement column-6 no-pad-left no-pad-right">
				<h3 class="content-headline"><?php the_title(); ?></h3>
				<?php the_content(); ?>
			</div>

			<aside class="current-projects projects column-6 no-pad-left no-pad-right">
				<h3 class="content-headline">Current Projects</h3>
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
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('custom_size'); ?>
							<p><?php the_title(); ?></p>
						</a>
					</div>

					<?php endwhile; ?>

			</aside> <!-- CURRENT PROJECTS -->
		</div><!--row-->
	</section>

	<section class="content-section-full blog-post-section border-top">
		<div class="row">
			<div class="blog-section column-8 no-pad-left">
				<h3 class="content-headline">Recent Posts</h3>

					<?php $the_query = new WP_Query('showposts=3');
					while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
						<div class="blog-description column-12 no-pad-left">
							<h4 class="blog-post-title"><?php the_title(); ?></h4>
							<p><?php echo excerpt(55); ?></p>
							<a href="<?php the_permalink() ?>" class="button-small">More</a>
						</div>
					<?php endwhile; ?>

				<div class="clearfix"></div>

				<a href="#" class="button-large">More</a>
			</div> <!-- BLOG SECTION -->
			<div class=" sidebar column-4 no-pad-right">
				<?php get_sidebar('primary'); ?>
			</div>
		</div><!--row-->
	</section>

</div> <!-- CONTENT -->

<?php get_footer(); ?>
