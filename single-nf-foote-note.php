<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package norm_foote_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>

			
				<?php if ( function_exists ( 'get_field' ) ) : ?>

					<h1><?php the_title(); ?></h1> 
					
					<article>		
					<?php if ( has_post_thumbnail() ) :
						the_post_thumbnail('single-foote-note-image');	
					endif; ?>
							
					<?php if ( get_field( 'text' ) ) : ?>
						<p><?php the_field('text'); ?></p>	
					<?php endif; ?>
							
				<?php endif; ?>
								
			</article> <?php

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'nf_theme' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'nf_theme' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
