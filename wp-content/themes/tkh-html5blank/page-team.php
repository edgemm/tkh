<?php // Template Name: Team ?>

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
				
				<?php

				$args = array(
					'post_type'		=> 'team',
					'orderby'		=> 'meta_value_num',
					'meta_key'		=> 'tkh_team_sort_order',
					'order' 		=> 'ASC',
					'posts_per_page'	=> -1
				);

				$the_query = new WP_Query( $args );

				if ($the_query->have_posts()) :
				
				?>
				
				<ul class="team">

				<?php

					while ( $the_query->have_posts() ) :
					
						$the_query->the_post();

				?>	
					<li class="team-member one-third columns">
						<div class="team-container">
						<?php

						if ( has_post_thumbnail() ) :

						?>
							<a href="<?php the_permalink(); ?>">
						<?php

							the_post_thumbnail( 'full', array( 'class' => 'team-photo' ) );
							
						?>
							</a>
						<?php

						endif;

						?>
							<!--<img class="team-photo" src="/wp-content/themes/tkh-html5blank/img/team-linda-top.jpg" alt="<?php the_title(); ?>" title="<?php the_title(); ?>: <?php the_field( 'tkh_team_title' ); ?>">-->
							<a class="team-name" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
						</div>
						<div class="team-position"><?php the_field( 'tkh_team_title' ); ?></div>
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

		</section>

	</main>

<?php get_footer(); ?>