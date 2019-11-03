<?php header('Access-Control-Allow-Origin: *'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/assets/img/icon.png">
	<meta content="https://static05.cminds.com/wp-content/uploads/ecommerce-blog-site-1024x770.jpg" property="og:image" />
	<meta content="https://static05.cminds.com/wp-content/uploads/ecommerce-blog-site-1024x770.jpg" property="og:image:secure_url" />
	<meta content="600" property="og:image:width" />
	<meta content="300" property="og:image:height" />
	<meta name="theme-color" content="#3150a4" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php if (is_singular('post')) {
			global $post;
			echo $post->post_title;
			echo " | " . get_bloginfo('name');
		} elseif (is_front_page()) {
			echo $blog_title = get_bloginfo('name');
			echo " " . "|" . " " . $blog_description = get_bloginfo('description');
		} else {
			wp_title('');
		} ?>

	</title>


	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">
	<style>
		#preloader {
			position: fixed;
			left: 0;
			top: 0;
			z-index: 999;
			width: 100%;
			height: 100%;
			overflow: visible;
			background: #FEFFFC url('https://blog.hateemtai.com/wp-content/uploads/2019/08/loading.gif') no-repeat center center;
		}

		#move-to-top {
			cursor: pointer;
			position: fixed;
			bottom: 20px;
			right: 20px;
			display: none;
			border: 1px solid #3150a4;
			background: #3150a4;
			padding: 2px 12px 6px;
		}

		#footer a#move-to-top {
			color: #fff !important;
		}

		#footer a#move-to-top .fa {
			font-size: 2em;
			font-weight: 800;
		}

		#footer a#move-to-top:hover {
			color: #fff !important;
		}
	</style>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139332241-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-139332241-1');
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery-3.3.1.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0&appId=2656490711030488&autoLogAppEvents=1"></script>
	<div id="preloader"></div>
	<header id="header">
		<div id="nav">
			<div id="nav-top">
				<div class="container">

					<ul class="nav-social">
						<li><a href="https://hateemtai.com/" class="logo"><img src="<?php bloginfo('template_url') ?>/assets/img/stickerLast.png" alt=""></a></li>
					</ul>
					<div class="nav-logo">
						<a href="<?php echo home_url("/"); ?>" class="logo"><img src="<?php bloginfo('template_url'); ?>/assets/img/hateemtai-logo.png" alt=""></a>
					</div>

					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<?php get_search_form(); ?>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>

				</div>
			</div>
			<div id="nav-bottom">
				<div class="container">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'container_class' => 'inner',
							'container_id' => 'drop-id',
							'menu_class' => 'nav-menu'
						)
					);
					?>
				</div>
			</div>

			<div id="nav-aside">
				<div class="container">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile',
							'container_class' => 'inner',
							'container_id' => 'drop-id',
							'menu_class' => 'nav-aside-menu'
						)
					);
					?>
					<button class="nav-close nav-aside-close"><span></span></button>
				</div>
			</div>
		</div>
		<?php wp_head(); ?>
	</header>