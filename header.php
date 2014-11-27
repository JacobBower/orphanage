<!DOCTYPE html>
<html>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />

		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.2.1.1.js"></script>
		<script type="text/javascript" charset="utf-8">
		$(window).load(function() { // enable function upon window load

			$(".responsive-menu").click(function() { // when toggle is clicked...
				$("nav").toggleClass("hidden"); // ... open or close the navigation
			});

		});
		</script>
		<?php $host = $_SERVER['SERVER_NAME']; if ($host == 'localhost') : ?>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
		<?php else: ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
		<?php endif; ?>

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/owl.theme.default.css">

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
							<nav class="header-nav hidden">
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
