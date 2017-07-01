<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html lang="en" xml:lang="en" xmlns= "http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen,projection" />

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo get_bloginfo('template_directory'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<?php wp_head(); ?>

</head>


<body>


<!-- Navigation -->
<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand page-scroll" href="#page-top"><?php echo get_bloginfo(); ?></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li class="hidden">
					<a href="#page-top"></a>
				</li>
				<li>
					<a class="page-scroll" href="#services">Services</a>
				</li>
				<li>
					<a class="page-scroll" href="#portfolio">Portfolio</a>
				</li>
				<li>
					<a class="page-scroll" href="#about">About</a>
				</li>
				<li>
					<a class="page-scroll" href="#team">Team</a>
				</li>
				<li>
					<a class="page-scroll" href="blog">Blog</a>
				</li>
				<li>
					<a class="page-scroll" href="#contact">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container-fluid -->
</nav>



<!-- Mobile menu -->
<div class="mobile-nav" id="nav-main-mobile">
	<div class="menu-btn-container">.
		<div class="menu-btn" id="menu-btn">
			<div></div>
			<span></span>
			<span></span>
			<span></span>
			<span id="menu-text">MENU</span>
		</div>
	</div>
</div>.


<div class="responsive-menu">
	<?php
	$mobile_nav = array(
		'theme_location'  => '',
		'menu'            => '',
		'container'       => 'div',
		'container_class' => 'menu-header',
		'container_id'    => '',
		'menu_class'      => 'menu',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		'depth'           => 0,
		'walker'          => ''
	);
	wp_nav_menu( $mobile_nav );
	?>
</div>
