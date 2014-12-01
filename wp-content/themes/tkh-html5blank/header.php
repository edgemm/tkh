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
								</li>
								<li class="utility-item">
									<a class="utility-linkedin img-replace" href="https://www.linkedin.com/company/top-kohlbush-&-hoem" title="Connect with us on LinkedIn">Connect on LinkedIn</a>
								</li>
							</ul>
						</nav>
						<!-- /nav -->

						
					</div>

				</div>

				<div class="banner">

					<img class="banner-img" src="/wp-content/themes/tkh-html5blank/img/banner-temp.jpg" alt="Portland Waterfront" title="" />
					<div class="container">
						<h2 class="banner-desc">Located in the<br />beautiful city of roses</h2>
					</div>
				</div>

			</header>
			<!-- /header -->
