<?php // Template Name: News ?>

<?php get_header(); ?>

	<main class="main clear" role="main">
		
		<section id="content">

			<header class="tkh-entry-header">
				<h1 class="tkh-entry-title container"><?php the_title(); ?></h1>
			</header>

			<div class="container clear">

				<div class="feed-container eleven columns">
				<?php
	
				$args = array(
					'post_type'		=> 'post',
					'cat'			=> 1, // news category
					'orderby'		=> 'date',
					'order' 		=> 'DSC',
					'posts_per_page'	=> 10
				);
	
				$query = new WP_Query( $args );
		
				if ( $query->have_posts() ): while ( $query->have_posts() ) :  $query->the_post(); ?>
				
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				
						<h1 class="hentry-title hentry-news-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h1>
						<!-- /post title -->
				
						<span class="date"><?php the_time('F j, Y'); ?></span>
						<!-- /post details -->
				
						<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>
				
						<?php edit_post_link(); ?>
				
					</article>
					<!-- /article -->
				
				<?php endwhile; ?>
				
				<?php else: ?>
				
					<!-- article -->
					<article class="eleven columns">
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>
					<!-- /article -->
				
				<?php endif; ?>
				<?php get_template_part('pagination'); ?>

				</div>
	
				<?php get_sidebar(); ?>

			</div>
			<!-- /.container -->

		</section>
		<!-- /#conent -->

	</main>

<?php get_footer(); ?>