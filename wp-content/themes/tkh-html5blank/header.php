<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script type="text/javascript">
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
		    assets: '<?php echo get_template_directory_uri(); ?>',
		    tests: {}
		});
		</script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<header class="header clear" role="banner">
				
				<div id="masthead" class="clear">
					
					<div class="container">

						<div class="logo">
							<a href="<?php echo home_url(); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Top Kohlbush & Hoem Logo" class="logo-img">
							</a>
						</div>
						<!-- /logo -->
	
						<nav class="nav" role="navigation">
							<?php html5blank_nav(); ?>

							<ul class="menu-utility">
								<li class="utility-item">
									<button class="utility-search img-replace">Search</button>
									<?php get_template_part('searchform'); ?>
								</li>
								<li class="utility-item">
									<a class="utility-linkedin img-replace" href="https://www.linkedin.com/company/top-kohlbush-&-hoem" title="Connect with us on LinkedIn" target="_blank">Connect on LinkedIn</a>
								</li>
							</ul>
						</nav>
						<!-- /nav -->

					</div>

				</div>

				<div class="banner">

					<?php
					// add selected page bg or set to default
					$field_banner_img = "tkh_banner_img";
					$field_banner_desc = "tkh_banner_desc";
					$banner_img = "/wp-content/themes/tkh-html5blank/img/banner-main.jpg";
					$banner_img = ( get_field( $field_banner_img ) ) ? get_field( $field_banner_img ) : $banner_img;
					?>
					<img class="banner-img" src="<?php echo $banner_img; ?>" alt="" title="" />
					<?php if ( is_home() || is_front_page() ) : ?>
					<div class="container">
						<h2 class="banner-desc">Located in the<br />beautiful city of roses</h2>
					</div>
					<?php endif; ?>
				</div>

			</header>
			<!-- /header -->
