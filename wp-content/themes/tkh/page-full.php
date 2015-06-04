<?php // Template Name: Full-width ?>

<?php get_header(); ?>

	<main class="main clear" role="main">
		
		<section id="content">

			<header class="tkh-entry-header">
				<h1 class="tkh-entry-title container"><?php the_title(); ?></h1>
			</header>

			<div class="container clear">
		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>	
	
				<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'sixteen', 'columns' ) ); ?>>
	
					<?php the_content(); ?>
	
				</article>
	
			<?php endwhile; ?>
	
			<?php endif; ?>

			</div>
			<!-- /.container -->

		</section>
		<!-- /#conent -->

	</main>

<?php get_footer(); ?>