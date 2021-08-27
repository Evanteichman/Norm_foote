<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package norm_foote_theme
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();?>
			<h1> <?php the_title();	?> </h1>
			
			<?php
				// output the concerts
				$args = array(
					'post_type' 		=> 'nf-concert',
					'posts_per_page' 	=> -1,
					'meta_key' 			=> 'concert_date',
					'orderby' 			=> 'meta_value_num',
					'order' 			=> 'ASC'
				);
					
				$query = new WP_Query( $args );
					
				if ( $query -> have_posts() ):
						
					while ( $query -> have_posts() ) :
						$query -> the_post();

						if( function_exists('get_field')):?>
							<div class="concert-row">
								
								<section class="concert-info"> 
									<?php if ( get_field( 'concert_date' ) ) : ?>
										<p class="concert-date"><?php the_field('concert_date');?></p>
									<?php endif; ?> 

									<?php if ( get_field( 'concert_time' ) ) : ?>
										<p class="concert-time"><?php the_field('concert_time');?></p>
									<?php endif; ?> 
									
									<?php if ( get_field( 'concert_location' ) ) : ?>
										<p class="concert-location"><?php the_field('concert_location');?></p>
									<?php endif; ?> 
								</section>
								
								<?php 
								$link = get_field('concert_link');
								if( $link ): ?>
									<a class="button" href="<?php echo esc_url( $link ); ?>">Buy Ticket</a>
								<?php endif; ?>
								
							</div>
							<?php endif; ?>
							
						<?php endwhile; ?>
						<?php wp_reset_postdata();  // Reset the post data to avoid database conflicts ?>
					<?php endif; ?>
					<?php

					the_posts_navigation();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
