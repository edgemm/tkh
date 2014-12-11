<?php get_header(); ?>

	<main class="main clear" role="main">

		<?php if ( get_field( "tkh_tagline" ) ) : ?>
		<div class="tagline">
			<p class="tagline-desc container"><?php the_field( 'tkh_tagline' ); ?></p>
		</div>
		<?php endif; ?>

		<section id="content" class="container clear">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<?php
		
		// first name of team member 
		list( $team_fname ) = explode( ' ', trim( get_the_title() ) );
		
		?>

			<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'sixteen', 'columns' ) ); ?>>

				<header class="clear">
					<h1 class="entry-title team-entry-title"><?php the_title(); ?></h1>
					<div class="team-entry-position"><?php the_field( 'tkh_team_title' ); ?></div>
					<ul class="team-contact">
						<li class="team-contact-item team-contact-email">
							<a href="mailto:<?php the_field( 'tkh_team_email' ); ?>" class="team-contact-medium trig-modal modal-contact-team" data-modal="contact-team" title="Email <?php echo $team_fname; ?>">Email <?php echo $team_fname; ?></a>
						</li>
						<li class="team-contact-item team-contact-phone">
							<a class="team-contact-medium" href="tel:503.228.2612" title="Call Top, Kohlbush & Hoem">503.228.2612</a>
						</li>
						<li class="team-contact-item team-contact-linkedin">
							<a class="team-contact-medium" href="<?php the_field( 'tkh_team_linkedin' ); ?>" title="Connect with <?php echo $team_fname; ?> on LinkedIn" target="_blank">LinkedIn</a>
						</li>
					</ul>
				</header>

				<div class="team-member clear">
				<?php

				if ( has_post_thumbnail() ) :

					$attr = array(
						'class' => 'alignleft'
					);
					the_post_thumbnail( 'medium', $attr );

				endif;

				?>

				<?php the_content(); ?>

				</div>

			</article>

		<?php endwhile; ?>
		
			<?php //get_sidebar( "team" ); ?>

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