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

			<h1>Photos</h1>

			<?php
			
			$images = get_field('gallery');
			if( $images ): ?>
				<div class="all-photos-gallery">
					<?php foreach( $images as $image ): ?>
			
						<img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							
					<?php endforeach; ?>
				</div>
			<?php endif; 

			do_shortcode('[gallery ids="330,328,325,324,323,322,321,320,319,318,317,315,314,313" margin="2" scale="1.1" maxrowheight="200" rowspan="0" intime="100" outtime="100" captions="off" linked_image_size="large" orderby="menu_order" link="file" size="medium" lightbox="simplelightbox" effect="bubble" lastrowbehavior="last_row_same_height" captions_effect="slide_up" captions_intime="200" captions_outtime="200" rel="rgg" type="rgg"] ');




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
