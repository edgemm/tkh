<?php // Template Name: Home ?>

<?php get_header(); ?>

	<main class="main clear" role="main">

		<div class="tagline">
			<p class="tagline-desc container"><strong>Serving you</strong> for three decades</p>
		</div>

		<section class="container clear">

			<article class="above-the-fold clear">

				<div class="ten offset-by-one columns">
					<h1 class="unbold nil-margin"><strong>Tax and accounting services</strong></h1>
					<p class="grey text-bulk nil-margin">Since 1985 we've operated on the core principles of honesty, integrity and a responsibility to serve our clients, their families and community.</p>
				</div>
				<div class="four offset-by-one columns omega">
					<a class="btn btn-blue btn-large" href="/about-us/">Learn More</a>
				</div>
				<?php the_content(); ?>

			</article>

		</section>

		<section class="container clear">

			<article class="four offset-by-two columns">
				<header>
					<h1 class="header-icon icon-graph text-center"><a href="/services/">How TKH can help you</a></h1>
				</header>
				<p class="blue">Tax and accounting services for individuals and businesses of all types and sizes.</p>
			</article>

			<article class="four columns">
				<header>
					<h1 class="header-icon icon-ribbon text-center"><a href="/about-us/testimonials/">Testimonials</a></h1>
				</header>
				<p class="blue">30 years of long-term relationships and satisfied clients.</p>
			</article>

			<article class="four columns">
				<header>
					<h1 class="header-icon icon-envelope text-center"><a href="/contact/">Have questions?</h1>
				</header>
				<p class="blue">We would love to hear from you. Get in touch with us and let us know how we can help.</p>
			</article>

		</section>

		<section id="services" class="row row-grey">

			<div class="container clear">

				<h2 class="services-header">Let us<br />help you</h2>

				<ul class="services-holder clear">

					<li class="services-item service-tax">
						<h3 class="service-header"><a href="/services/tax-services">Tax Services</a></h3>
						<p class="service-desc">Advise, develop and implement tax saving strategies.</p>
					</li>

					<li class="services-item service-acct">
						<h3 class="service-header"><a href="/services/accounting-services">Accounting Services</a></h3>
						<p class="service-desc">Maintain profitability and capitalize on new opportunities on an ongoing basis.</p>
					</li>

				</ul>
				
			</div>

		</section>

		<section id="recent-posts" class="container clear">

			<article class="eight columns alpha">

				<header>

					<a href="/news/"><img class="recent-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/recent-article-thmb-01.jpg"></a>
					<h1 class="recent-header"><a href="/news/">Here is a subheader for the headline</a></h1>

				</header>

				<p class="blue">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis purus ipsum, rhoncus eu dui at, lacinia accumsan mauris. Ut augue quam, rhoncus ut mollis nec, varius a lorem. Sed et ligula justo. Aliquam tristique metus id mi vulputate.</p>

				<p>
					<a class="btn btn-medium" href="/news/">Read More</a>
				</p>

			</article>

			<article class="eight columns omega">

				<header>

					<a href="/news/"><img class="recent-thumbnail" src="<?php echo get_template_directory_uri(); ?>/img/recent-article-thmb-02.jpg"></a>
					<h1 class="recent-header"><a href="/news/">Here is a subheader for the headline</a></h1>

				</header>
				
				<p class="blue">Suspendisse eleifend egestas tortor, non euismod dolor dictum ut. In eget tristique quam. Fusce at euismod velit, vitae aliquet felis. In ligula sem, mollis ut lectus sit amet, iaculis accumsan metus. In aliquet elit a quam feugiat, eget...</p>

				<p>
					<a class="btn btn-medium" href="/news/">Read More</a>
				</p>

			</article>

		</section>
	</main>

<?php get_footer(); ?>