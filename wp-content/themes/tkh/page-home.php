<?php // Template Name: Home ?>

<?php get_header(); ?>

	<main class="main clear" role="main">

		<div class="tkh-entry-header">
			<p class="tkh-entry-title container"><strong>Serving you</strong> for three decades</p>
		</div>

		<section class="container clear">

			<article class="above-the-fold clear">

				<div class="ten offset-by-one columns mc-two-thirds">
					<h1 class="unbold nil-margin"><strong>Tax and accounting services</strong></h1>
					<p class="grey text-bulk nil-margin">Our accounting, tax preparation and tax planning services are tailored to your unique needs, helping to ensure the best possible results.</p>
				</div>
				<div class="four offset-by-one columns omega mc-one-third">
					<a class="btn btn-blue btn-large" href="/services/">Learn More</a>
				</div>
				<?php the_content(); ?>

			</article>

		</section>

		<section class="container clear">

			<article class="one-third columns mc-one-third">
				<header>
					<h1 class="header-icon icon-clipboard text-center"><a href="/about-us/">Who We Are</a></h1>
				</header>
				<p class="blue text-center">Our valued clients include individuals and businesses of all types and sizes.</p>
			</article>

			<article class="one-third columns mc-one-third">
				<header>
					<h1 class="header-icon icon-magnifying-silhouette text-center"><a href="/careers/">Career Opportunities</a></h1>
				</header>
				<p class="blue text-center">A growing company seeking to add great individuals to our team of experts.</p>
			</article>

			<article class="one-third columns mc-one-third">
				<header>
					<h1 class="header-icon icon-envelope text-center"><a href="/contact/" class="trig-modal modal-newsletter-signup" data-modal="newsletter-signup">Newsletter</a></h1>
				</header>
				<p class="blue text-center">We would love to send you useful info on occasion. Sign up here.</p>
			</article>

		</section>

		<section id="services" class="row row-grey">

			<div class="container clear">

				<h2 class="services-header"><span class="first-line">Let us </span>help you</h2>

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

		<?php // display recent articles

		$args = array(
			'post_type'		=> 'post',
			'cat'			=> 1, // giving back category
			'orderby'		=> 'date',
			'order' 		=> 'DSC',
			'posts_per_page'	=> 2
		);

		$query = new WP_Query( $args );

		if ( $query->have_posts() ) :

		?>

		<section id="recent-posts" class="container clear">
			
		<?php

			while ( $query->have_posts() ) :  $query->the_post();

		?>

			<article class="eight columns alpha mc-half">

				<header>

					<?php
					
					if ( has_post_thumbnail()) :
					
						$thmb_args = array(
							'class' => 'recent-thumbnail'
						);

					?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<?php the_post_thumbnail( 'news', $thmb_args ); ?>
					</a>
					<?php
					
					endif;
					
					?>
					<h1 class="recent-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				</header>

				<p class="blue"><?php html5wp_excerpt( 'html5wp_home_post' ); ?></p>

				<p>
					<a class="btn btn-medium" href="<?php the_permalink(); ?>">Read More</a>
				</p>

			</article>
				
			<?php endwhile; ?>

		</section>
	
		<?php endif; ?>

		<div class="modal-container" data-modalID="newsletter-signup">
			<div class="modal-content modal-newsletter-signup">
				<a href="#close" title="Close" class="modal-close">X</a>
				<div class="modal-alpha">
					<p>Subscribe now to receive periodic emails regarding news, upcoming events, and advice.</p>
					<form action="http://edgemultimedia.createsend.com/t/y/s/ftjhrk/" method="post">
						<p>
						    <label for="fieldName">Name</label><br />
						    <input id="fieldName" name="cm-name" type="text" />
						</p>
						<p>
						    <label for="fieldEmail">Email</label><br />
						    <input id="fieldEmail" name="cm-ftjhrk-ftjhrk" type="email" required />
						</p>
						<p>
						    <button type="submit">Subscribe</button>
						</p>
					</form>
				</div>
				<div class="modal-omega">
					<p>Thank you for signing up!</p>
				</div>
			</div>
		</div>

	</main>

<?php get_footer(); ?>