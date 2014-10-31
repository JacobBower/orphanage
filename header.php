<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<header>
			<div class="header-wrapper">
				<div class="header-left">
					<a href="<?php bloginfo('url'); ?>" ><img src="" alt="200 Orphanages Worldwide logo" class="logo" /></a>
				</div>
				<div class="header-right">
					<div class="responsive-menu-wrapper">
						<a href="#" class="responsive-menu"><img src="<?php bloginfo('template_directory'); ?>/img/menu-img.png" alt="responsive menu image" class="responsive-menu-img"/></a>
					</div>
					<div class="share-buttons">
						<ul class="share-button-list">
							<li><a href="#" >Donate</a></li>
							<li><a href="#" >Volunteer</a></li>
							<li><a href="#" >Share</a></li>
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
		
	
	<div id="wrapper">