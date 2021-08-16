<?php
/**
 * The template for displaying the front page
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

get_header(); ?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			the_content();

			$args = array(
				'post_type' 		=> 'nf-foote-note',
				'posts_per_page' 	=> -1,
				'tax_query' 		=> array(
					array(
						'taxonomy' => 'nf-foote-note-category',
						'field'    => 'slug',
						'terms'    => 'hero-slider'
					)
				)
			);
			
			$query = new WP_Query( $args );
			
			if ($query->have_posts()) : ?>
				<section class="home-slider">
					
					<div class="swiper-container">
						<div class="swiper-wrapper">

							<?php 

							while ($query->have_posts()) : 
									$query->the_post();

									if( function_exists('get_field')):?>

										<div class="swiper-slide">
											<div class="swiper-info">
												<h3> <?php the_title(); ?></h3>
												<p class="slide-text"><?php the_excerpt(); ?></p>
												<a class="read-more" href="<?php the_permalink(); ?>">Read More</a>	
											</div>
										</div>

									<?php endif; ?> 
							<?php endwhile; ?>
						</div>		
					</div>
					<div class="swiper-button swiper-button-prev"></div>
					<div class="swiper-button swiper-button-next"></div>
				</section>
			
			<?php wp_reset_postdata(); endif;

			//social menu
			require get_template_directory() . '/template-parts/content-social-nav.php';

			
			// output the music payers
			$args = array(
				'post_type' 		=> 'nf-music-player',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			
			$query = new WP_Query( $args );
			
			if ( $query -> have_posts() ):
				?>

				<section class="music-player-section">

					<div class="music-player-container">
						
						<?php
						while ( $query -> have_posts() ) :
							$query -> the_post();

							if( function_exists('get_field')):?>

								<div class="single-player">
									<!-- do I need to wrap the title in a conditonal -->
									<?php if ( get_field( 'music_player' ) ) : ?>
										<?php the_field('music_player');?>
									<?php endif; ?> 

								</div>
								
						<?php
						endif;

					endwhile;
						wp_reset_postdata(); // Reset the post data to avoid database conflicts
						?>

						</div>
				</section>
			<?php endif;

			// output the bio
			$args = array(
				'post_type' 		=> 'nf-bio',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ):
				?>
				<section class="bio-section">

					<h2>About Norman</h2>
						
					<div class="bio-container">

					<?php
					while ( $query -> have_posts() ) :
						$query -> the_post();

						if( function_exists('get_field')):?>

							<?php 
							$image = get_field('bio_image');
							if( !empty( $image ) ): ?>
								<img class="img" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; 

							 if ( get_field( 'bio_text' ) ) : ?>
								<div class="text"><?php the_field('bio_text');?></div>
							<?php endif; ?>

							<?php if ( get_field( 'quote' ) ) : ?>
								<p class="quote"><?php the_field('quote');?></p>
							<?php endif; ?> 
							
						<?php endif; ?>
			
					<?php endwhile;
						wp_reset_postdata(); // Reset the post data to avoid database conflicts
					?>

					</div>

				</section>
			<?php	
			endif;

			// output the foote notes
			$args = array(
				'post_type' 		=> 'nf-foote-note',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ):
				?>

				<h2>Foote Notes</h2>
					
				<div class="foote-note-container">
					<?php
					while ( $query -> have_posts() ) :
						$query -> the_post();

						if( function_exists('get_field')):?>

						<!-- do I need to wrap the title in a conditonal -->

						<div class="foote-note">

							<?php if ( get_the_title() ) : ?>
								<h3><?php the_title(); ?></h3>
							<?php endif; ?> 
							
							<?php if ( get_field( 'foote_note_text' ) ) : ?>
								<?php the_field( 'foote_note_text' ); ?>
							<?php endif; ?> 

							<?php endif; ?>

						</div>
						
					<?php
						endwhile;
						wp_reset_postdata(); // Reset the post data to avoid database conflicts
					?>

				</div>
			<?php	
			endif;

			// output the youtube videos
			$args = array(
				'post_type' 		=> 'nf-youtube-video',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ):
				?>	
					<div class="youtube-container">

					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

					<div class="video-container">
						<div class="youtube-video">
							<?php if ( get_field( 'video' ) ) : ?>
								<?php the_field('video');?>
							<?php endif; ?> 
						</div>
					</div>
						
					<?php endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
					?>
					</div>
			<?php		
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer();
