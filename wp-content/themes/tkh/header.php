<?php

require_once( locate_template( "inc/mobile_detect.php" ) );
$detect = new Mobile_Detect;

$mobile_class = ( $detect->isMobile() ) ? "isMobile" : "notMobile";

?>
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
		<!--<meta name="description" content="<?php bloginfo('description'); ?>">-->

		<?php wp_head(); ?>
		<script type="text/javascript">
		// conditionizr.com
		// configure environment tests
		conditionizr.config({
		    assets: '<?php echo get_template_directory_uri(); ?>',
		    tests: {}
		});
		</script>

		<?php if( !is_user_logged_in() ) include( "inc/gatracking.php" ); ?>

	</head>
	<body <?php body_class( $mobile_class ); ?>>

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

						<label for="nav-expand" class="nav-trigger img-replace">Menu</label>
						<input type="radio" name="nav" id="nav-expand" class="nav-toggle" />
						<label for="nav-collapse" class="nav-collapse nav-toggle img-replace"></label>
						<input type="radio" name="nav" id="nav-collapse" class="nav-toggle" />
	
	
						<nav id="nav" class="nav" role="navigation">
							<?php html5blank_nav(); ?>

							<ul class="menu-utility">
								<li class="utility-item">
									<button class="utility-search img-replace">Search</button>
									<?php get_template_part('searchform'); ?>
								</li>
								<li class="utility-item">
									<a class="utility-linkedin img-replace" href="https://www.linkedin.com/company/top-kohlbush-&-hoem" title="Connect with us on LinkedIn" target="_blank">Connect on LinkedIn</a>
								</li>
								<li class="utility-item">
									<label class="utility-nav img-replace" for="nav-collapse">Close</label>
								</li>
							</ul>
						</nav>
						<!-- /nav -->

					</div>

				</div>
				<?php
				// add selected page bg or set to default
				$field_banner_img = "tkh_banner_img";
				$field_banner_url = "tkh_banner_url";
                                
				$banner_img = get_template_directory_uri() . "/img/banner-main.jpg";
				$banner_img = ( get_field( $field_banner_img ) ) ? get_field( $field_banner_img ) : $banner_img;
				?>
				<div class="banner" style="background-image: url( '<?php echo $banner_img; ?>' );">
                                        <?php if ( get_field( $field_banner_url ) ) : ?>
					<a class="banner-link" href="<?php echo get_field( $field_banner_url ); ?>" target="_blank">
					<?php endif; // link opening ?>
                                            <?php if ( is_home() || is_front_page() ) : ?>
                                            <div class="container">
													
                                                    <h2 class="banner-desc">
														<img class="banner-badge" src="<?php echo get_template_directory_uri(); ?>/img/tkh-badge-30th-anniversary.png" alt="30 Years Serving Portland">
														Celebrating 30<br>successful years<br>serving Portland
													</h2>
                                            </div>
                                            <?php endif; // close description ?>
                                        <?php if ( get_field( $field_banner_url ) ) : ?>
                                        </a>
					<?php endif; // link closing ?>
				</div>

			</header>
			<!-- /header -->
