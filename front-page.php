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

			
			$args = array(
				'post_type' 		=> 'nf-hero-slider',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			
			$query = new WP_Query( $args );
			
			if ( $query  -> have_posts() ) {
				?>

					<h1>Hero Slider Stuff</h1>
					
					<?php
				while( $query  -> have_posts() ) {
					$query  -> the_post();
					if( function_exists('get_field')):?>

					<!-- needs to be wrapped in proper html -->
					<!-- planing to turn this all into a slider, just trying to output everything right now -->
						<?php the_post_thumbnail();?>
						<?php the_field('text');
						$link = get_field('link');
						if( $link ): 
							$link_url = $link['url'];
							$link_title = 'Learn More';
							$link_target = $link['target'] ? $link['target'] : '_self';
							?>
							<a class="button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>
	
					<?php 
					endif;
					
			
				} // endwhile
				wp_reset_postdata(); // Reset the post data to avoid database conflicts
			} // endif
	
			// output the testimonials
			$args = array(
				'post_type' 		=> 'nf-testimonial',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ){
				?>

					<h1>Testimonaial Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) {
					$query -> the_post();

					

					if( function_exists('get_field')):?>

						<?php the_field('text');?>
						<?php the_field('author');?>
						
						<?php
						endif;
						
				
					} // endwhile
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
				} // endif



			// output the foote notes
			$args = array(
				'post_type' 		=> 'nf-foote-note',
				'posts_per_page' 	=> -1,
				'order_by'			=> 'title',
				'order'				=> 'ASC'
			);
			 
			$query = new WP_Query( $args );
			 
			if ( $query -> have_posts() ){
				?>

					<h1>Foote Notes Stuff</h1>
					
					<?php
				while ( $query -> have_posts() ) {
					$query -> the_post();

					

					if( function_exists('get_field')):?>
						<?php the_title(); ?>
						<?php the_field('text');?>
						
						
						<?php
						endif;
						
				
					} // endwhile
					wp_reset_postdata(); // Reset the post data to avoid database conflicts
				} // endif
					
				//custom post type for youtube videos using the the ACF oembed?? might be a better way to control and output things
			  
			
			


			get_template_part( 'template-parts/content', 'page' );

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
