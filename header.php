<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>CCW (Creative City Worship) Website</title>
	<!-- <title><?php wp_title( '|', true, 'right' ); ?></title> -->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
	<!-- <meta name="author" content="" />
	<meta name="keywords" content="" />	 -->
	<!-- <link rel="icon" type="image/png" href="assets/images/favicon-32x32.png"> -->
	<!-- Custom css -->
	<!-- <link type="text/css" rel="stylesheet" href="assets/css/styles.css"/> -->
	<?php wp_head(); ?>
</head>

<body>

	<div class="container">

		<div class="header__wrapper">
			<div class="header main">
				<div class="header__left">
					<a href="<?php echo site_url(); ?>"><img class="logo__header" src="<?php bloginfo('template_url'); ?>/assets/images/logo.png"></img></a>
				</div>
				<div class="header__right">					
					<nav>
						<ul class="menu__sosmed--ul">
							<li class=""><a href="<?php echo get_option('shortname_fblink');?>" target="_blank" class=""><img src="<?php bloginfo('template_url'); ?>/assets/images/fb.png" alt=""></a></li>
							<li class=""><a href="<?php echo get_option('shortname_twitlink');?>" target="_blank" class=""><img src="<?php bloginfo('template_url'); ?>/assets/images/twit.png" alt=""></a></li>
							<li class=""><a href="<?php echo get_option('shortname_pathlink');?>" target="_blank" class=""><img src="<?php bloginfo('template_url'); ?>/assets/images/path.png" alt=""></a></li>
							<li class=""><a href="<?php echo get_option('shortname_instagramlink');?>" target="_blank" class=""><img src="<?php bloginfo('template_url'); ?>/assets/images/instagram.png" alt=""></a></li>
							<li class=""><div class="responsive__wrapper"></div></li>
						</ul>						
					</nav>	
					<nav>
						<!-- <ul class="menubar--ul">
							<li class=""><a href="#" class="">Creative City Worship</a></li>
							<li class=""><a href="#" class="">Media</a></li>
							<li class=""><a href="#" class="">Ministry</a></li>
							<li class=""><a href="contact.php" class="">Contact</a></li>
						</ul> -->
						<?php wp_nav_menu( array('menu' => 'New Menu' )); ?>
					</nav>
				</div>
				<!-- <div class="responsive__wrapper">
					<p class="ag">MENU</p>
				</div> -->
			</div>			
		</div>