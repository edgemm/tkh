<?php get_header(); ?>

	<main class="main clear" role="main">
		
		<section id="content">

			<header class="tkh-entry-header">
				<h1 class="tkh-entry-title container"><?php _e( 'Career Opportunities', 'html5blank' ); ?></h1>
			</header>

			<div class="container clear">

			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
					<h1 class="hentry-title hentry-news-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h1>
					<!-- /post title -->
				
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<!-- /post details -->
			
				</article>
				<!-- /article -->
			
			<?php endwhile; ?>
			
			<?php else: ?>
			
				<!-- article -->
				<article>
					<h1><?php _e( 'No current positions', 'html5blank' ); ?></h1>
					<p><?php _e( 'We are sorry, but at this time we currently do not have any positions open. If you would like to leave us your resume, you can send it to <a href="mailto:careers@tkhllp.com"><strong>careers@tkhllp.com</strong></a>. We will contact you should a position become available.', 'html5blank' ); ?></p>
				</article>
				<!-- /article -->
			
			<?php endif; ?>

			<?php get_template_part('pagination'); ?>
			
			</div>
			<!-- /.container -->

		</section>
		<!-- /#conent -->
	</main>

<?php get_footer(); ?>
