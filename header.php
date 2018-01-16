<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SpriteKit_v3
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- chuuuuuuuuuuj -->
	<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet"> <!-- FOR TEXT -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Mono" rel="stylesheet"> <!-- FOR CODE -->

	<script src="<?php echo get_template_directory_uri() . '/js/jquery-3.2.1.min.js'; ?>"></script>
	<script src="<?php echo get_template_directory_uri() . '/js/bootstrap.js'; ?>"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class();  ?>>
<a href="<?php echo get_home_url(); ?>">
	<img src="<?php echo get_template_directory_uri() . '/assets/img/spritekit7.png'; ?>" width="300" class="logo img-fluid" alt="logo"  />
</a>
	<header id="masthead" class="site-header">
		<div class="container" style="max-width:900px; padding: 0;">
		
			
		

		<nav id="site-navigation" class="main-navigation ">
			
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'nav nav-pills center-pills',
				) );
?>
		</nav><!-- #site-navigation -->
		
		</div>
	</header><!-- #masthead -->

<div class="container-fluid breadcrumb-full" style="padding-left:0; padding-right:0;"> 	
<!-- <div class="breadcrumb"><?php get_breadcrumb(); ?><a class="rss" href="<?php echo esc_url( home_url( '/?feed=rss' ) ); ?>">RSS</a></div> -->
</div>
<div class="facebook-banner"><span>Lubiąc moją stronę na Facebook'u wspierasz mnie i moje dalsze projekty, jednocześnie zamiast reklam widzisz tylko ten banner :)</span>
<div class="fb-like" data-href="https://www.facebook.com/Modrzjwzki/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
</div>




<!-- 
			<a href="<?php echo esc_url( home_url() ); ?>" style="padding-left:0;"><img src="<?php echo get_template_directory_uri().'/assets/img/logo3.png'; ?>" width="35"  alt="logo" class="logo "/><span class="blog-info"><?php echo get_bloginfo(); ?></span></a> -->
