<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
<!--[if lte IE 8]>
<script src="<?php bloginfo('template_directory'); ?>js/html5shiv.min.js" type="text/javascript"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>

<div id="site_container">

<header id="header" role="banner">

<div class="wrapper">

	<div class="logo">

	</div>

	<nav id="menu" role="navigation">
		<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
	</nav>

</div>

</header>
