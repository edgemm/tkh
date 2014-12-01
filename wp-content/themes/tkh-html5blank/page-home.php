<?php // Template Name: Home ?>

<?php get_header(); ?>

	<main role="main">

		<div class="tagline">
			<p class="tagline-desc container"><strong>Serving you</strong> for almost three decades</p>
		</div>

		<section class="container clear">

			<article class="above-the-fold clear">

				<div class="ten offset-by-one columns">
					<h1 class="unbold nil-margin"><strong>Since the beginning</strong> in 1985</h1>
					<p class="grey text-bulk nil-margin">We operate on the core principles of honesty, integrity and a responsibility to serve our clients, their families and community.</p>
				</div>
				<div class="four offset-by-one columns omega">
					<a class="btn btn-blue btn-large" href="#">Learn More</a>
				</div>
				<?php the_content(); ?>

			</article>

		</section>

		<section id="" class="container clear">

			<article class="four offset-by-two columns">
				<h1 class="header-icon icon-ribbon text-center">This is Our Pledge</h1>
				<p class="blue">Lorem ipsum dolor sit amet, con-sectetur adipiscing elit. Integer blandit consectetur enim, a empor nisi...</p>
			</article>
			<article class="four columns">
				<h1 class="header-icon icon-graph text-center">How TKH can help you</h1>
				<p class="blue">Maecenas venenatis pellentesque lectus, a condimentum nisl dapibus sed. Vestibulum ac erat...</p>
			</article>
			<article class="four columns">
				<h1 class="header-icon icon-envelope text-center">Have questions?</h1>
				<p class="blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vestibulum lorem ac scelerisque lobortis...</p>
			</article>

		</section>

		<section id="services" class="row row-grey">

			<div class="container clear">

				<h2 class="services-header">Let us<br />help you</h2>

				<ul class="services-holder clear">
					<li class="services-item service-tax">
						<h3 class="service-header"><a href="javascript:void(0)">Tax Services</a></h3>
						<p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</li>
					<li class="services-item service-acct">
						<h3 class="service-header"><a href="javascript:void(0)">Accounting Services</a></h3>
						<p class="service-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
					</li>
				</ul>
				
			</div>

		</section>

		<section id="recent-posts" class="container clear">

			<article class="eight columns alpha">

				<header>

					<img class="recent-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/recent-article-thmb-01.jpg">

					<h1 class="recent-header">Here is a subheader for the headline</h1>

				</header>

				<p class="blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis purus ipsum, rhoncus eu dui at, lacinia accumsan mauris. Ut augue quam, rhoncus ut mollis nec, varius a lorem. Sed et ligula justo. Aliquam tristique metus id mi vulputate.</p>

				<p>
					<a class="btn btn-medium" href="javascript:void(0)">Read More</a>
				</p>

			</article>

			<article class="eight columns omega">

				<header>

					<img class="recent-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/recent-article-thmb-02.jpg">

					<h1 class="recent-header">Here is a subheader for the headline</h1>

				</header>
				
				<p class="blue">Suspendisse eleifend egestas tortor, non euismod dolor dictum ut. In eget tristique quam. Fusce at euismod velit, vitae aliquet felis. In ligula sem, mollis ut lectus sit amet, iaculis accumsan metus. In aliquet elit a quam feugiat, eget...</p>

				<p>
					<a class="btn btn-medium" href="javascript:void(0)">Read More</a>
				</p>

			</article>

		</section>
	</main>

<?php get_footer(); ?>
