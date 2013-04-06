<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/1styles.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/prettyphoto.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/style.css" />
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/zepto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/jquery.prettyphoto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/script.js"></script>
	<script>
		  (function() {
		    var cx = '002646456999169240394:iokkbvidzyg';
		    var gcse = document.createElement('script');
		    gcse.type = 'text/javascript';
		    gcse.async = true;
		    gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		        '//www.google.com/cse/cse.js?cx=' + cx;
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(gcse, s);
		  })();
	</script>
	<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_url') ?>/js/html5shiv.js"></script>
	<![endif]-->
</head>
<body>
	<a name="myAnchor" id="top"></a>
	<div class="contain">
		<div class="container">
			<header class="header">
				<div class="log-so">
					<div class="logo">
						<a href="http://www.mediateq.ir"><img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="Mediateq" title="Mediateq"/><p>Mediateq</p></a>
					</div>
					<div class="social-con">
						<div class="socialicon">
							<ul>
								<li><a href="#" class="facebook"></a></li>
								<li><a href="#" class="twitter"></a></li>
								<li><a href="#" class="googleplus"></a></li>
								<li><a href="#" class="dribbble"></a></li>							
							</ul>
						</div>
						<div class="badboy"></div>
						<div class="contact">
							<ul>
								<li>
									<span class="postzip"></span>
									<h5><a href="mailto:info@mediateq.ir" target="_blank">info<span class="at"></span>mediateq.ir</a></h5>
								</li>
								<li>
									<span class="tel"></span>
									<p class="ltr">+98(936) 814 8833</p> 
								</li>
							</ul>
							<div class="badboy"></div>
						</div>
						<div class="badboy"></div>
					</div>
					<div class="badboy"></div>
				</div>
				<div class="menu-part">
					<div class="menu">
						<nav>
							<?php
								wp_nav_menu(array(
									'theme_location'  => 'mainmenu',
									'menu'            => '', 
									'container'       => false, 
									'container_class' => '', 
									'container_id'    => '',
									'menu_class'      => '', 
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => false,
									'before'          => '<p>',
									'after'           => '</p>',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<menu>%3$s<li></li></menu>',
									'depth'           => 0,
									'walker'          => '',
								));
							?>							
						</nav>
					</div>
					<div class="searchbox">
						<gcse:searchbox-only></gcse:searchbox-only>
					</div>
					<div class="badboy"></div>	
				</div>
			</header>