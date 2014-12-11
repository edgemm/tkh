<?php // Template Name: Full-width ?>

<?php get_header(); ?>

	<main class="main clear" role="main">

		<?php if ( get_field( "tkh_tagline" ) ) : ?>
		<div class="tagline">
			<p class="tagline-desc container"><?php the_field( 'tkh_tagline' ); ?></p>
		</div>
		<?php endif; ?>

		<section id="content" class="container clear">
		
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>	

			<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'sixteen', 'columns' ) ); ?>>

				<header>
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header>

				<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

		<?php endif; ?>

		</section>

	</main>

<?php get_footer(); ?>