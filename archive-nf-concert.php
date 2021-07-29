<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norm_foote_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

					// output the concerts

					$args = array(
						'post_type' 		=> 'nf-concert',
						'posts_per_page' 	=> -1,
						'order_by'			=> 'title',
						'order'				=> 'ASC'
					);
					
					$query = new WP_Query( $args );
					
					if ( $query -> have_posts() ):
						
						while ( $query -> have_posts() ) :
							$query -> the_post();

							if( function_exists('get_field')):?>
								<!-- add proper html -->
								<?php if ( get_field( 'date' ) ) : ?>
									<?php the_field('date');?>
								<?php endif; ?> 

								<?php if ( get_field( 'time' ) ) : ?>
									<?php the_field('time');?>
								<?php endif; ?> 
								
								<?php if ( get_field( 'location' ) ) : ?>
									<?php the_field('location');?>
								<?php endif; ?> 
								
								<?php 
								$link = get_field('link');
								if( $link ): ?>
									<a class="button" href="<?php echo esc_url( $link ); ?>">Buy Ticket</a>
								<?php endif; ?>
								<br>
								
							<?php
							endif;
				
						endwhile;
							wp_reset_postdata(); // Reset the post data to avoid database conflicts
					endif;



				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				// get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
