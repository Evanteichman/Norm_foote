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

get_header();

//social menu
require get_template_directory() . '/template-parts/content-social-nav.php';
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			
			$args = array(
				'post_type' 		=> 'nf-hero-slider',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			
			$query = new WP_Query( $args );
			
			if ( $query  -> have_posts() ) :
				?>

					<h1>Hero Slider Stuff</h1>
					
					<?php
				while( $query  -> have_posts() ) :
					$query  -> the_post();
					if( function_exists('get_field')):?>

						
						<!-- ask about this do I need to wrap the pozt thumbnail in a conditional statement -->
						<?php if ( get_the_post_thumbnail() ) : ?>
							<?php the_post_thumbnail();?>
						<?php endif; ?> 

						<?php
						the_excerpt();
						?>
						<a href="<?php the_field('hero_link'); ?>">Hero link</a>
						
	
					<?php 
					endif;
	
				endwhile;
				wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif;
	
			// output the testimonials
			$args = array(
				'post_type' 		=> 'nf-testimonial',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ):
				?>

					<h1>Testimonial Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

						<?php if ( get_field( 'testimonial_text' ) ) : ?>
							<?php the_field('testimonial_text');?>
						<?php endif; ?> 

						<?php if ( get_field( 'testimonial_author' ) ) : ?>
							<?php the_field('testimonial_author');?>
						<?php endif; ?> 

					<?php
					endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
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

					<h1>Foote Notes Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

					<!-- do I need to wrap the title in a conditonal -->
					<?php if ( get_the_title() ) : ?>
						<?php the_title(); ?>
					<?php endif; ?> 

					
					<?php if ( get_field( 'foote_note_text' ) ) : ?>
						<?php the_field('foote_note_text');?>
					<?php endif; ?> 
			
					<?php
					endif;
	
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
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

					<h1>Youtube Video Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

						<!-- do I need to wrap the title in a conditonal -->
						<?php if ( get_the_title() ) : ?>
							<?php the_title(); ?>
						<?php endif; ?> 
						
						<?php if ( get_field( 'video' ) ) : ?>
							<?php the_field('video');?>
						<?php endif; ?> 

					<?php
					endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif;


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

					<h1>Bio Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

						<?php if ( get_field( 'bio_name' ) ) : ?>
							<?php the_field('bio_name');?>
						<?php endif; ?> 

						<?php if ( get_field( 'bio_text' ) ) : ?>
							<?php the_field('bio_text');?>
						<?php endif; ?> 
						
						<?php 
						$image = get_field('bio_image');
						if( !empty( $image ) ): ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; 
					endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif;

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

					<h1>Music Player Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) :
					$query -> the_post();

					if( function_exists('get_field')):?>

						<!-- do I need to wrap the title in a conditonal -->
						<?php if ( get_the_title() ) : ?>
							<?php the_title(); ?>
						<?php endif; ?> 

						<?php if ( get_field( 'music_player' ) ) : ?>
							<?php the_field('music_player');?>
						<?php endif; ?> 
						
					<?php
					endif;
		
				endwhile;
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
			endif;

			// get_template_part( 'template-parts/content', 'page' );

			// // If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
