<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Oriental_Bakery
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php echo get_the_title();?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); 
if(!is_page_template('thankyou.php')){

?>


	<header id="masthead" class="site-header">
	<h1 class="main-heading">Oriental Bakery & Restaurant</h1>

<img class="logo" src="<?php bloginfo('template_url'); ?>/images/logo.png">

	
	</header><!-- #masthead -->
<?php
}