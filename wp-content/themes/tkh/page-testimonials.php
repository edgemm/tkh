<?php // Template Name: Testimonials ?>

<?php get_header(); ?>

	<main class="main clear" role="main">
		
		<section id="content">

			<header class="tkh-entry-header">
				<h1 class="tkh-entry-title container"><?php the_title(); ?></h1>
			</header>

			<div class="container clear">
		
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>	
	
				<article id="post-<?php the_ID(); ?>" <?php post_class( array( 'sixteen', 'columns' ) ); ?>>
	
					<?php the_content(); ?><?php
	
					$args = array(
						'post_type'		=> 'testimonial',
						'orderby'		=> 'date',
						'order' 		=> 'ASC',
						'posts_per_page'	=> -1
					);
	
					$the_query = new WP_Query( $args );
	
					if ($the_query->have_posts()) :
					
					?>
					
					<ul class="testimonials">
	
					<?php
	
						while ( $the_query->have_posts() ) :
						
							$the_query->the_post();
	
					?>	
						<li class="testimonial">
							<blockquote class="testimonial-quote"><?php echo get_the_content(); ?></blockquote>
							<div class="testimonial-author"><?php the_title(); ?></div>						
						</li>
					<?php
	
						endwhile;
	
					?>
					</ul>
					<?php
	
					endif;
	
					wp_reset_query();
	
					?>
	
				</article>
	
			<?php endwhile; ?>
	
			<?php endif; ?>

			</div>
			<!-- /.container -->

		</section>
		<!-- /#conent -->

	</main>

<?php get_footer(); ?>