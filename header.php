<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
		<script type="text/javascript" charset="utf-8">
		$(window).load(function() { // enable function upon window load
			$(".responsive-menu").click(function() { // when toggle is clicked...
				$(".header-nav").toggle(); // ... open or close the navigation
			});
		});

        jQuery().ready(function($) {
    	h = $("header").outerHeight();
    	$('.content').css('padding-top', h)
	    });
		</script>
		<?php $host = $_SERVER['SERVER_NAME']; if ($host == 'localhost') : ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<?php else: ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<?php endif; ?>

		<script src="less.js" type="text/javascript"></script>
		<?php wp_head(); ?>
	</head>
		<body <?php body_class(); ?>>
			<header class="header">
				<div class="header-wrapper row">
					<div class="header-left column-4 no-pad-left">
						<a href="<?php bloginfo('url'); ?>" ><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="200 Orphanages Worldwide logo" class="logo" /></a>
					</div>
					<div class="responsive-menu-wrapper ">
						<a href="#" class="responsive-menu"><img src="<?php bloginfo('template_directory'); ?>/img/menu-img.png" alt="responsive menu image" class="responsive-menu-img"/></a>
					</div>

					<div class="header-right column-8 no-pad-right">
						<div class="share-buttons column-12">
							<ul class="share-button-list">
								<li class="column-3 yellow"><a href="#" >Act</a></li>
								<li class="column-3 blue"><a href="#" >Share</a></li>
								<li class="column-3 red"><a href="#" >Give</a></li>
							</ul>
						</div>
						<div class="header-nav-wrapper">
							<nav class="header-nav">
								<?php wp_nav_menu( array(
									'theme_location' => 'header-menu' ,
									'menu' => 'Header Menu' ,
									'container'  => 'ul',
								) ); ?>
							</nav>
						</div>
					</div>
				</div><!-- .header-wrapper -->
				<div class="clearfix"></div>
			</header>
		<div class="wrapper">
