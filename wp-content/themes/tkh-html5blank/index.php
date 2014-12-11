<?php get_header(); ?>

	<main class="main clear" role="main">

		<?php if ( get_field( "tkh_tagline" ) ) : ?>
		<div class="tagline">
			<p class="tagline-desc container"><?php the_field( 'tkh_tagline' ); ?></p>
		</div>
		<?php endif; ?>

		<section id="content" class="container clear">

			<article <?php post_class( array( 'sixteen', 'columns' ) ); ?>>

				<header>
					<h1 class="entry-title"><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>
				</header>

				<?php get_template_part('loop'); ?>
	
				<?php get_template_part('pagination'); ?>

			</article>

		</section>

	</main>

<?php get_footer(); ?>
