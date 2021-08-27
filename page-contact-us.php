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
			the_post(); ?>

			<h1>Get in Touch!</h1>

			<section class="people-links live-contact-links">
			<?php
			// output the contact info
				$args = array(
					'post_type' 		=> 'nf-contact',
					'posts_per_page' 	=> -1,
					'order_by'			=> 'title',
					'order'				=> 'ASC',
					'tax_query' 		=> array(
						array(
							'taxonomy' => 'nf-contact-category',
							'field'    => 'slug',
							'terms'    => 'live-and-online-contact'
						)
					)
				);
				
				$query = new WP_Query( $args );
				
				if ( $query -> have_posts() ):
					?>
						<h2>Live and Online Bookings</h2>
						<?php
							while ( $query -> have_posts() ) :
								$query -> the_post();

								if( function_exists('get_field')):?>
									<div class="person">
										<?php if ( get_field( 'contact_name' ) ) : ?>
											<h3><?php the_field('contact_name');?></h3>
										<?php endif; ?> 

										<?php if ( get_field( 'contact_email' ) ) : ?>
											<a href = "mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email');?></a>
										<?php endif; ?> 

										<?php if ( get_field( 'contact_phone_number' ) ) : ?>
											<p><?php the_field('contact_phone_number');?></p>
										<?php endif; ?> 

									</div>	
								<?php endif;
			
							endwhile;
						wp_reset_postdata(); // Reset the post data to avoid database conflicts
				endif; ?>
				</section>

				
			<section class="people-links voice-over-links">
			<?php
			// output the contact info
				$args = array(
					'post_type' 		=> 'nf-contact',
					'posts_per_page' 	=> -1,
					'order_by'			=> 'title',
					'order'				=> 'ASC',
					'tax_query' 		=> array(
						array(
							'taxonomy' => 'nf-contact-category',
							'field'    => 'slug',
							'terms'    => 'voice-over-contact'
						)
					)
				);
				
				$query = new WP_Query( $args );
				
				if ( $query -> have_posts() ):
					?>
						<h2>Voice Over Bookings</h2>
						<?php
							while ( $query -> have_posts() ) :
								$query -> the_post();

								if( function_exists('get_field')):?>
									<div class="person">
										<?php if ( get_field( 'contact_name' ) ) : ?>
											<h3><?php the_field('contact_name');?></h3>
										<?php endif; ?> 

										<?php if ( get_field( 'contact_email' ) ) : ?>
											<a href = "mailto:<?php the_field('contact_email');?>"><?php the_field('contact_email');?></a>
										<?php endif; ?> 

										<?php if ( get_field( 'contact_phone_number' ) ) : ?>
											<p><?php the_field('contact_phone_number');?></p>
										<?php endif; ?> 

									</div>	
								<?php endif;
			
							endwhile;
						wp_reset_postdata(); // Reset the post data to avoid database conflicts
				endif; ?>
				</section>

			<?php
			endwhile; // End of the loop.
			?>
			

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
