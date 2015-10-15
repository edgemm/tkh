<?php get_header(); ?>

	<main class="main clear" role="main">
		
		<section id="content">

			<header class="tkh-entry-header">
				<h1 class="tkh-entry-title container"><?php the_title(); ?></h1>
			</header>

			<div class="container clear">
	
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>
		
				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

					<span class="date"><?php the_time('F j, Y'); ?></span>
		
					<?php the_content(); // Dynamic Content ?>

					<h2 class="divider">How to Apply</h2>

					Interested applicants should reply to <a href="mailto:careers@tkhllp.com">careers@tkhllp.com</a> with:
					
					<ul>
						<li>Resume</li>
						<li>Cover letter</li>
						<li>Salary requirements</li>
					</ul>
					
					<a class="btn btn-blue btn-large" href="mailto:careers@tkhllp.com"><strong>Apply</strong></a>
		
				</article>
				<!-- /article -->
		
			<?php endwhile; ?>
		
			<?php else: ?>
		
				<!-- article -->
				<article>
		
					<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		
				</article>
				<!-- /article -->
		
			<?php endif; ?>

			</div>
			<!-- /.container -->

		</section>
		<!-- /#conent -->
	</main>

<?php get_footer(); ?>
