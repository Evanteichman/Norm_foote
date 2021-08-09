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
			
			// https://www.advancedcustomfields.com/resources/gallery/
			//not sure if image titles are needed, or if we want them to be clicked and then enlarged. Outputting a simple gallery for now.
			//change the size attribut in the img tag to change the size of the output images., not sure if it wil be better to have large images output and then change size on the front end using css
			$images = get_field('gallery');
			if( $images ): ?>
				<div class="all-photos-gallery">
					<?php foreach( $images as $image ): ?>
			
						<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							
					<?php endforeach; ?>
				</div>
			<?php endif; 


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
