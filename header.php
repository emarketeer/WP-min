<?php if (! defined('ABSPATH') ) { require_once '403.php'; } ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php global $page, $paged; wp_title( '|', true, 'right' ); bloginfo( 'name' ); $site_description = get_bloginfo( 'description', 'display' ); if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; if ( $paged >= 2 || $page >= 2 )	echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ); ?></title>
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/style.css">
	<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/js/jquery-1.10.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/js/html5shiv.min.js"></script>
	<script src="<?php bloginfo("stylesheet_directory"); ?>/assets/js/old-browser.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body>