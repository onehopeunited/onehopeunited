<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<header id="branding" role="banner">
			<hgroup>
			
				<div style="float:left;margin-left:50px;margin-top:-5px;">	
			<a href="http://onehopeunited.org/donate/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/donate.png"></a>
			</div>
			
			<div style="margin-bottom:-30px;margin-top:5px;margin-left:220px;">
			<a href="http://www.facebook.com/1hopeunited" target="_blank"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/facebook.jpg"></a>&nbsp;&nbsp;&nbsp;<a href="http://new.onehopeunited.org/contact/"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/email.jpg"></a>&nbsp;&nbsp;&nbsp;<a href="https://twitter.com/1hopeunited" target="_blank"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/twitter.jpg"></a>
			
			<div style="margin-left:200px;">
			<?php get_search_form(); ?>
			</div>
		</div>
			
<div style="height:180px;">
			
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/ohu-banner-strip.png" style="position:absolute;top:70px;left:20px;"></a>
					</div>		</hgroup>

			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( $header_image ) : ?> with-image<?php endif; ?>">
				
				</div>
			<?php
				else :
			?>
				
			<?php endif; ?>

					<div style="position:absolute;top:180px;left:570px;">
			<a href="http://new.onehopeunited.org/services/early-care-and-education/" class="menu-add-on"><img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/early-childhood.jpg" style="margin-bottom:-6px;"> EARLY CHILDHOOD CENTERS</a>
			</div>

			<nav id="access" role="navigation">
			
				<h3 class="assistive-text"><?php _e( 'Main menu', 'twentyeleven' ); ?></h3>
				<?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to primary content', 'twentyeleven' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'twentyeleven' ); ?>"><?php _e( 'Skip to secondary content', 'twentyeleven' ); ?></a></div>
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav><!-- #access -->
			<img src="http://new.onehopeunited.org/wp-content/themes/ohu/images/color-bar.png" style="margin-left:0px;">
			
			
	</header><!-- #branding -->


	<div id="main">


<div id="preloaded-images">
   <img src="http://perishablepress.com/image-01.png" width="1" height="1" alt="Image 01" />
   <img src="http://perishablepress.com/image-02.png" width="1" height="1" alt="Image 02" />
   <img src="http://perishablepress.com/image-03.png" width="1" height="1" alt="Image 03" />
</div>