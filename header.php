<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<title><?php wp_title( '|', true, 'right' ); ?> <?php if( ! defined( 'WPSEO_VERSION' ) ) bloginfo( 'name' ); ?></title>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class( get_theme_mod('scaffold_sidebar') ); ?>>
	
	<!-- BEGIN #wrapper -->
	<div id="wrapper">
		
		<div id="header-wrap">
			<div id="header">
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a>
				
				<?php 
				
					wp_nav_menu( array(
						'theme_location'	=> 'main_menu',
						'container_class'	=> 'main-menu-container menu-container',
						'container_id'		=> 'main-menu-container',
						'items_wrap'      	=> '<ul id="%1$s" class="%2$s cleared">%3$s</ul>',
						'depth'           	=> 0,
						'walker'         	=> ''
					) ); 
					
					// OR
					// get_search_form(); 
					
				?>
				
				
			</div>
		</div>