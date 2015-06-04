<?php get_header(); ?>

	<main class="main" role="main">

		<?php if ( get_field( "tkh_tagline" ) ) : ?>
		<div class="tagline">
			<p class="tagline-desc container"><?php the_field( 'tkh_tagline' ); ?></p>
		</div>
		<?php endif; ?>

		<section id="content" class="container clear">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>	

			<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'eleven', 'columns' ) ); ?>>

				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>
		
			<?php get_sidebar( "team" ); ?>

		<?php endif; ?>

		</section>

			<div class="modal-container" data-modalID="contact-team">
				<div class="modal-content modal-contact-team">
					<a href="#close" title="Close" class="modal-close">X</a>
					<div class="modal-alpha">
						<?php echo do_shortcode( '[contact-form-7 id="50" title="Contact Team member"]' ); ?>
					</div>
					<div class="modal-omega">
						<?php
						if( get_field( 'tkh_team_contact_thanks' ) ) :
							echo get_field( 'tkh_team_contact_thanks' );
						else :
							echo 'Thank you for contacting us! Our staff will be in touch with you as soon as possible.';
						endif;
						?>
					</div>
				</div>
			</div>

	</main>

<?php get_footer(); ?>