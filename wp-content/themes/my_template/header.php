<!DOCTYPE html>
<html>
	<head <?php language_attributes(); ?>>

		<meta charset="<?php bloginfo('charset'); ?>">

		<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

		<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
		<header>
			<div class="header-logo">
				<div class="wrap">
					<img src="<?php bloginfo('template_url'); ?>/images/header/header-agefa-pme-logo.png" />
				</div>
			</div>

			<div class="header-menu">
				<div class="wrap">
					<nav>
						<?php wp_nav_menu( array('menu' => 'Header Menu')); ?>
					</nav>
				</div>
			</div>
		</header>